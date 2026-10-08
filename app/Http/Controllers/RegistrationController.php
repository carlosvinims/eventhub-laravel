<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 
use App\Models\Registration; 
use App\Services\RegistrationsService; 
use Illuminate\Http\RedirectResponse; 
use Illuminate\View\View; 

class RegistrationController extends Controller
{
    public function index(): View
    {
        $registrations = Auth()->user()->registrations()->with(['event.category'])->latest()->get();

        return view('registrations.index', compact('registrations'));
    }

    public function store(Event $event, RegistrationsService $service): RedirectResponse
    {
        try {
            $service->register(auth()->user(), $event);
        }
     catch (\DomainException $exception) {
        
    return back()->with('error', $exception->getMessage());
    }
     return redirect()->route('events.show', $event)->with('success', 'Incriçãorealizada com sucesso.');
    }

    public function destroy(Registration $registration, RegistrationsService $service): RedirectResponse
    {
        try {
            $service->cancel(auth()->user(), $registration);
        } catch (\DomainException $exception) {
            
            return back()->with('error', $exception->getMessage());
        }
        
        return redirect()->route('registrations.index')->with('success', 'Incrição cancelada com sucesso');
    }
}