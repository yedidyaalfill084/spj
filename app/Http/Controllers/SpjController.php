<?php

namespace App\Http\Controllers;

use App\Models\Spj;
use App\Models\Namaspj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SpjController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spjs = Spj::all();
        return view('spj/index', compact('spjs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $namaspjs = Namaspj::all();
        return view('spj/create', compact('namaspjs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaspj_id' => 'required',
            'dokumen' => 'required',
        ], [
            'namaspj_id.required' => 'Siliahkan Dipilih Nama SPJ!',
            'dokumen.required' => 'Dokumen Tidak Boleh Kosong'
        ]);


        $fileNama=time().'.'.$request->dokumen->extension();
        $request->file('dokumen')->store('public',$fileNama);

        $spj = new Spj;
        $spj->namaspj_id = $request->namaspj_id;
        $spj->dokumen = $fileNama;
        
        $spj->save();

        return redirect('spj')->with('status', 'SPJ Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show($data)
    {
        //$data = Storage::allFiles('public');
        // $data = Storage::url($spj);
        // dd($data);
        // return view('spj/show', compact('data'));
        return view('spj/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spj $spj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spj $spj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spj $spj)
    {
        //
    }
}
