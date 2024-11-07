@extends('layouts.base')

@section('greeting')
    Contact
@endsection

@section('content')

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<form method="POST" action="" class="bg-gray-100 p-6 rounded-md shadow-md max-w-md mx-auto">
    @csrf
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Neem contact op of vraag een offerte aan</h2>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
        <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none" required>
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none" required>
    </div>

    <div class="mb-4">
        <label for="phone" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
        <input type="tel" id="phone" name="phone" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none">
    </div>

    <div class="mb-4">
        <label for="message" class="block text-sm font-medium text-gray-700">Bericht</label>
        <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none" placeholder="Beschrijf uw wensen..." required></textarea>
    </div>

    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none w-full">
        Offerte aanvragen
    </button>
</form>

@endsection
