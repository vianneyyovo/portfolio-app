<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images/services', 'public');

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }


    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view('services.show', compact('service'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $service->image_path);
            $imagePath = $request->file('image')->store('images/services', 'public');
            $service->image_path = $imagePath;
        }

        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'image_path' => $service->image_path,
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Service $service)
    {
        Storage::delete('public/' . $service->image_path);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
