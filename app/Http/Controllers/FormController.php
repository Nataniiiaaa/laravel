<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = form::all();
        //return $data;
        return view('formlist', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formnew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'gender' => 'required',
        ]);

        form::create($validated);
        return redirect('/form')->with('success', 'Data User Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(form $form)
    {
        $data = array(
            'title' => 'Edit Data',
            'form' => $form,
        );
        return view('formedit',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, form $form)
    {
        // $form->nama=$request->nama;
        // $form->alamat=$request->alamat;
        // $form->telepon=$request->telepon;
        // $form->gender=$request->gender;
        // $form->save();
        // return redirect('form');

        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'gender' => 'required',
        ]);

        form::Where('id', $form->id)
        ->update($validated);


    return redirect('/form')->with('success', 'Data User Berhasil Diedit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(form $form)
    {
        $form->delete();
        return redirect('form');

    }
}
