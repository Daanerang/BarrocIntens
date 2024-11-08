<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    private function getRoleDashboard()
    {
        // Haal de naam van de rol van de ingelogde gebruiker op
        $role = Auth::user()->role->name; // Veronderstelt dat je relatie met role goed is ingesteld

        // Afhankelijk van de rol, stuur de gebruiker naar het juiste dashboard
        switch ($role) {
            case 'Finance':
                return 'dashboard.finance';  // Richt naar de finance dashboard route
            case 'Sales':
                return 'dashboard.sales';    // Richt naar de sales dashboard route
            case 'Inkoop':
                return 'dashboard.inkoop';   // Richt naar de inkoop dashboard route
            case 'Maintenance':
                return 'dashboard.maintenance'; // Richt naar de maintenance dashboard route
            case 'Hoofd Finance':
                return 'dashboard.hoofd-finance'; // Richt naar de hoofd finance dashboard route
            case 'Hoofd Sales':
                return 'dashboard.hoofd-sales';   // Richt naar de hoofd sales dashboard route
            case 'Hoofd Inkoop':
                return 'dashboard.hoofd-inkoop';  // Richt naar de hoofd inkoop dashboard route
            case 'Hoofd Maintenance':
                return 'dashboard.hoofd-maintenance'; // Richt naar de hoofd maintenance dashboard route
            case 'CEO':
                return 'dashboard.ceo'; // Richt naar de CEO dashboard route
            default:
                return 'dashboard'; // Als er geen rol wordt gevonden, ga naar een default dashboard
        }
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route($this->getRoleDashboard());
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
