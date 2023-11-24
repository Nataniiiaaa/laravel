<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

class FormApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return form::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = new form();
        $form->fill($request->all())->save();
        return $form;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return form::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $form = form::find($id);
        $form->fill($request->all())->save();
        return $form;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $form = form::find($id);
        $form->delete();
    }
}
