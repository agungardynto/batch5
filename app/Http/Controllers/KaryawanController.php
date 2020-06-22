<?php

namespace App\Http\Controllers;

use App\Bagian;
use App\Karyawan;
use App\Telepon;
use App\Hobi;
use Illuminate\Http\Request;
use App\Http\Requests\KaryawanRequest;

class KaryawanController extends Controller
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
        return view('karyawan.dashboard', [
            'title' => 'Dashboard Karyawan',
            'data' => Karyawan::all(),
            'total' => Karyawan::all()->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create', [
            'title' => 'Tambah Karyawan',
            'data' => Bagian::all(),
            'hobi' => Hobi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'bagian' => 'required',
            'alamat' => ''
        ]);
        $karyawan = Karyawan::create($validator);
        $telepon = new Telepon;
        $telepon->nomor = $request->input('nomor_hp');
        $karyawan->telepon()->save($telepon);
        $karyawan->hobi()->attach($request->hobi);
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', [
            'title' => 'Detail Karyawan',
            'data' => $karyawan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', [
            'title' => 'Edit Karyawan',
            'data' => $karyawan,
            'bagian' => Bagian::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $validator = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'bagian' => 'required',
            'alamat' => ''
        ]);
        $karyawan->update($validator);
        // $telepon = $karyawan->telepon;
        // $telepon->nomor = $request->input('nomor_hp');
        // $karyawan->telepon()->save($telepon);
        $karyawan->telepon->update(['nomor' => $request->input('nomor_hp')]);
        return redirect()->route('karyawan.show', $karyawan->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        $karyawan->telepon()->delete();
        return redirect()->route('karyawan.index');
    }
}
