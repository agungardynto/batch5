<?php

namespace App\Http\Controllers;

use App\Withimage;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Facades\Storage;

class WithimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('09062020.index', ['data' => Withimage::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('09062020.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $allRequest = $request->all();
        $allRequest['foto'] = $request->file('foto')->store('assets/foto-warga', 'public');
        Withimage::create($allRequest);
        return redirect()->route('withimage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Withimage  $withimage
     * @return \Illuminate\Http\Response
     */
    public function show(Withimage $withimage)
    {
        return view('09062020.show', ['data' => $withimage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Withimage  $withimage
     * @return \Illuminate\Http\Response
     */
    public function edit(Withimage $withimage)
    {
        return view('09062020.edit', ['data' => $withimage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Withimage  $withimage
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Withimage $withimage)
    {
        $dataId = $withimage->find($withimage->id);
        $data = $request->all();
        if ($request->foto) {
            Storage::delete('public/'. $dataId->foto);
            $data['foto'] = $request->file('foto')->store('assets/foto-warga', 'public');
        }
        $dataId->update($data);
        return redirect()->route('withimage.show', $dataId->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Withimage  $withimage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withimage $withimage)
    {
        Storage::delete('public/'. $withimage->foto);
        $withimage->delete();
        return redirect()->route('withimage.index');
    }
}
