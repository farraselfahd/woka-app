<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Worker;
use App\Models\Order;

class PagesController extends Controller
{
    public function profil() {
        $profil = Worker::findOrFail(1);
        $profil = Worker::where('user_id', Auth::user()->id)->firstOrFail();
        
        return view('profil.index',compact('profil'));
    }

    public function profilWorker() {
        // $profil = Worker::findOrFail(1);
        // $profil = Worker::where('id', $id)->firstOrFail();
        
        // return view('profil.worker',compact('profil'));
        return view('profil.worker');
    }

    public function pesanan() {
        
        // $pesanan = Orders::findOrFail(1);
        // $pesanan = Orders::where('customer_id', Auth::user()->id)->firstOrFail();
        
        return view('pesanan');
    }
}
