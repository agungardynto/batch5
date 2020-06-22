<?php

namespace App\Http\Controllers;

use App\Bagian;
use Illuminate\Http\Request;
use App\Http\Requests\BagianRequest;

class BagianController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('12062020.dashboard', [
            'title' => 'Dashboard Bagian',
            'data' => Bagian::all(),
            'total' => Bagian::all()->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Bagian::class);
        return view('12062020.create', [
            'title' => 'Tambah Bagian'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BagianRequest $request)
    {
        Bagian::create($request->all());
        return redirect()->route('bagian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function show(Bagian $bagian)
    {
        return view('12062020.show', [
            'title' => 'Bagian',
            'data' => $bagian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function edit(Bagian $bagian)
    {
        return view('12062020.edit', [
            'title' => 'Perbarui Bagian',
            'data' => $bagian
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bagian $bagian)
    {
        $bagian->update($request->all());
        return redirect()->route('bagian.show', $bagian->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bagian $bagian)
    {
        $this->authorize('delete', $bagian);
        $bagian->delete();
        return redirect()->route('bagian.index');
    }
}
