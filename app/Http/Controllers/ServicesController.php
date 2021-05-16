<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\Worker;
use App\Models\User;
use App\Models\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new.overview');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function createPricing()
    {
        return view('new.pricing');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function createDesc()
    {
        return view('new.description');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function createGallery()
    {
        return view('new.gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'kategori' => 'required'
            ],
            [
                'nama.required' => 'Judul jasa harus diisi',
                'kategori.required' => 'Kategori harus diisi'
            ]
        );

        Service::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'workers_id' => Auth::user()->worker_id,
            'harga_pil_1' => 1,
            'nama_pil1' => 'PENDING',
            'pic_1' => 'PENDING',
            'vid_4' => 'PENDING',
            'ket_pil1' => 'PENDING',
            'description' => 'PENDING',
            'requirements' => 'PENDING'
        ]);
        
        return redirect('new/pricing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePricing(Request $request)
    {
        $request->validate(
            [
                'harga_pil_1' => 'required',
                'nama_pil1' => 'required',
                'ket_pil1' => 'required'
            ],
            [
                'nama_pil1.required' => 'Harga harus diisi',
                'harga_pil_1.required' => 'Harga harus diisi',
                'ket_pil1.required' => 'Harga harus diisi'
            ]
        );

        Service::where('workers_id', Auth::user()->worker_id)->update([
            'nama_pil1' => $request->nama_pil1,
            'nama_pil2' => $request->nama_pil2,
            'nama_pil3' => $request->nama_pil3,
            'harga_pil_1' => $request->harga_pil_1, 
            'harga_pil_2' => $request->harga_pil_2, 
            'harga_pil_3' => $request->harga_pil_3,
            'ket_pil1' => $request->ket_pil1,
            'ket_pil2' => $request->ket_pil2,
            'ket_pil3' => $request->ket_pil3
        ]);
        
        return redirect('new/description');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDesc(Request $request)
    {
        $request->validate(
            [
                'description' => 'required',
                'requirements' => 'required'
            ],
            [
                'description.required' => 'Deskripsi tidak boleh kosong',
                'requirements.required' => 'Persyaratan tidak boleh kosong'
            ]
        );

        Service::where('workers_id', Auth::user()->worker_id)->update(['description' => $request->description, 'requirements' => $request->requirements]);
        
        return redirect('new/gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeGallery(Request $request)
    {
        $request->validate(
            [
                'pic_1' => 'required',
                'vid_4' => 'required'
            ],
            [
                'pic_1.required' => 'Judul jasa harus diisi',
                'vid_4.required' => 'Kategori harus diisi'
            ]
        );

        Service::where('workers_id', Auth::user()->worker_id)->update([
            'pic_1' => $request->pic_1, 
            'pic_2' => $request->pic_2, 
            'pic_3' => $request->pic_3, 
            'vid_4' => $request->vid_4
        ]);
        
        return redirect('new/done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
