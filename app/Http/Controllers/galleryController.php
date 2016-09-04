<?php

namespace App\Http\Controllers;

use App\Http\Requests\imageRequest;
use Illuminate\Http\Request;
use App\Image;
use App\Http\Requests;

class galleryController extends Controller
{
    public function index()
    {

        return view('index');

    }
    public function create()
    {

        return view('create');
    }

    /**
     * @param galleryRequest $request
     */
    public function post(imageRequest $request)
    {

        $image = Image::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        $imageName = $image->id . ".".$request->file('image')->getClientOriginalExtension();
        $image->update([
            'path'=>$imageName,
        ]);

        $request->file('image')->move(base_path().'/public/img/'.$imageName);
        return view('index');
    }
}


