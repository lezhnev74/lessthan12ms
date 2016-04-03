<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{

    /**
     * Show form for uploading image
     */
    public function index() {
        return view('image.index');
    }


    /**
     * Handle file uploading from user
     * Resize image and store it locally
     *
     * @param Request $request
     */
    public function upload(Request $request) {



    }

}
