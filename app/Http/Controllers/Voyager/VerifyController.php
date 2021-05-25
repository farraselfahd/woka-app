<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Models\Post;

class VerifyController extends VoyagerBaseController
{

    public function verify()
    {
        //Get service by id and toggle the status from verified to pending and vice versa
        $post = Post::where('id', \request("id"))->first();
        $post->status = $post->status == "pending" ? "verified" : "pending";
        $post->save();
        // return redirect(route('voyager.services.index'));
    }
}
