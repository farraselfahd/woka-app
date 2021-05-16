<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\Worker;
use App\Models\User;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $workers = Worker::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gabung.index', ['header' => 'Informasi Pribadi']);
    }

    public function createKeahlian()
    {
        return view('gabung.craftsmanship', ['header' => 'Informasi Keahlian']);
    }

    public function createKeamanan()
    {
        return view('gabung.security', ['header' => 'Keamanan Akun']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'no_identitas' => 'required',
                'jenisIdentitas' => 'required',
                'fname' => 'required|string',
                'alamat' => 'required|string',
                'no_hp' => 'required',
                'jenis_kelamin' => 'required',
                'description' => 'required|string',
                'profilePicture' => 'required|string'
            ],
            [
                'no_identitas.required' => 'No Identitas harus diisi',
                'jenisIdentitas.required' => 'Jenis Identitas harus diisi',
                'fname.required' => 'Nama harus diisi',
                'alamat.required' => 'Alamat harus diisi',
                'no_hp.required' => 'No HP harus diisi',
                'jenis_kelamin.required' => 'Pilih jenis kelamin',
                'description.required' => 'Deskripsi harus diisi',
                'profilePicture.required' => 'Upload foto profil'
            ]
        );

        $worker = Worker::create([
            'user_id' => Auth::user()->id,
            'no_identitas' => $request->no_identitas,
            'jenisIdentitas' => $request->jenisIdentitas,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'description' => $request->description,
            'no_hp' => $request->no_hp,
            'profilePicture' => $request->profilePicture,
            'sec_question' => 'PENDING',
            'sec_answer' => 'PENDING',
            'keahlian' => 'PENDING'
        ]);

        User::where('id', Auth::user()->id)->update(['type' => 'worker', 'worker_id' => $worker->id]);

        return redirect('gabung/craftsmanship');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeKeahlian(Request $request)
    {
        $request->validate(
            [
                'keahlian' => 'required'
            ],
            [
                'keahlian.required' => 'Keahlian harus diisi'
            ]
        );

        Worker::where('user_id', Auth::user()->id)->update(['keahlian' => $request->keahlian]);

        return redirect('gabung/security');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeKeamanan(Request $request)
    {
        $request->validate(
            [
                'sec_question' => 'required',
                'sec_answer' => 'required'
            ],
            [
                'sec_question.required' => 'Pertanyaan keamanan harus diisi',
                'sec_answer.required' => 'Jawaban keamanan harus diisi'
            ]
        );

        Worker::where('user_id', Auth::user()->id)->update(['sec_question' => $request->sec_question, 'sec_answer' => $request->sec_answer]);

        return redirect('gabung/done');
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
