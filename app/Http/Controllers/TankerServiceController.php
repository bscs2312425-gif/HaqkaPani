<?php

namespace App\Http\Controllers;

use App\Models\TankerService;
use Illuminate\Http\Request;

class TankerServiceController extends Controller
{
    /**
     * Display all services for frontend
     */
    public function index()
    {
        $services = TankerService::where('available', true)->get();
        return view('pages.tankers', compact('services'));
    }

    /**
     * Display all services for admin panel
     */
    public function adminIndex()
    {
        $services = TankerService::all();
        return view('admin.tanker-services.index', compact('services'));
    }

    /**
     * Show form to create new service
     */
    public function create()
    {
        return view('admin.tanker-services.create');
    }

    /**
     * Store new service in database
     */
    public function store(Request $request)
    {
        $request->validate([
            'provider_name' => 'required|string|max:255',
            'tanker_size' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'areas' => 'required|string',
            'delivery_time' => 'required|string|max:100',
            'description' => 'nullable|string',
            'rating' => 'nullable|numeric|min:0|max:5'
        ]);

        TankerService::create($request->all());

        return redirect()->route('admin.tanker-services.index')
            ->with('success', 'Tanker service added successfully!');
    }

    /**
     * Show form to edit service
     */
    public function edit($id)
    {
        $service = TankerService::findOrFail($id);
        return view('admin.tanker-services.edit', compact('service'));
    }

    /**
     * Update service in database
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'provider_name' => 'required|string|max:255',
            'tanker_size' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'areas' => 'required|string',
            'delivery_time' => 'required|string|max:100',
            'description' => 'nullable|string',
            'rating' => 'nullable|numeric|min:0|max:5',
            'available' => 'boolean'
        ]);

        $service = TankerService::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('admin.tanker-services.index')
            ->with('success', 'Tanker service updated successfully!');
    }

    /**
     * Delete service from database
     */
    public function destroy($id)
    {
        $service = TankerService::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.tanker-services.index')
            ->with('success', 'Tanker service deleted successfully!');
    }
}