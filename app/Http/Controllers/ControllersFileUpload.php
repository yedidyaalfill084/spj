<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ControllersFileUpload extends Controller
{

    public function index()
    {
    }

    public function create(){
        return View('ex.form');

    }

    public function store(Request $request){
        $file = $request->file('file');
        $path = $file->store('public');

        return redirect('/posts/'.$file->hashName())->with('success', 'File uploaded successfully.');
    }

    public function show($filename){
        return View('ex.tampil',['filename'=>$filename]);
    }
}
