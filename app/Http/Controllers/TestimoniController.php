<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestimoniRequest;
use App\Models\Testimoni;
use Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonies = Testimoni::latest()->get();
        return view('admin.testimoni.index', compact('testimonies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimoniRequest $request)
    {
        $data = $request->validated();

         if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('testimonies', 'public');
        }

        Testimoni::create($data);

        return redirect()->route('testimoni.index')->with('success', 'Testimoni created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimoni = Testimoni::find($id);
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimoniRequest $request, string $id)
    {
        $testimoni = Testimoni::find($id);
        $data = $request->validated();

            if ($request->hasFile('image')) {
                if ($testimoni->image) {
                    Storage::disk('public')->delete($testimoni->image);
                }
                $data['image'] = $request->file('image')->store('testimonies', 'public');
            }

            $testimoni->update($data);

            return redirect()->route('testimoni.index')->with('success', 'Testimoni updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimoni = Testimoni::find($id);
        if ($testimoni->image) {
            Storage::disk('public')->delete($testimoni->image);
        }

        $testimoni->delete();

        return redirect()->route('testimoni.index')->with('success', 'Testimoni deleted successfully.');
    }
}
