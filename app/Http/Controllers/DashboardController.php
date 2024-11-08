<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return redirect()->route($this->getRoleDashboard());
    }

    public function finance()
    {
        return view('dashboard.finance');
    }

    public function sales()
    {
        return view('dashboard.sales');
    }

    public function marketing()
    {
        return view('dashboard.marketing');
    }

    public function maintenance()
    {
        return view('dashboard.maintenance');
    }

    public function headFinance()
    {
        return view('dashboard.head-finance');
    }

    public function headSales()
    {
        return view('dashboard.head-sales');
    }

    public function headMarketing()
    {
        return view('dashboard.head-marketing');
    }

    public function headMaintenance()
    {
        return view('dashboard.head-maintenance');
    }

    public function ceo()
    {
        return view('dashboard.ceo');
    }

    // Helperfunctie om het juiste dashboard te kiezen op basis van de rol
    public function getRoleDashboard()
    {
        // Haal de ingelogde gebruiker op
        $user = Auth::user();

        // Controleer of de gebruiker een rol heeft
        if ($user && $user->role) {
            $role = $user->role->name; // Haal de naam van de rol op
        } else {
            // Als de gebruiker geen rol heeft, stuur ze naar een default dashboard
            return 'dashboard';
        }

        // Afhankelijk van de rol, stuur de gebruiker naar het juiste dashboard
        switch ($role) {
            case 'Finance':
                return 'dashboard.finance';
            case 'Sales':
                return 'dashboard.sales';
            case 'Marketing':
                return 'dashboard.marketing';
            case 'Maintenance':
                return 'dashboard.maintenance';
            case 'Hoofd Finance':
                return 'dashboard.head-finance';
            case 'Hoofd Sales':
                return 'dashboard.head-sales';
            case 'Hoofd Marketing':
                return 'dashboard.head-marketing';
            case 'Hoofd Maintenance':
                return 'dashboard.head-maintenance';
            case 'CEO':
                return 'dashboard.ceo';
            default:
                return 'dashboard'; // fallback naar een standaard dashboard
        }
    }
}
