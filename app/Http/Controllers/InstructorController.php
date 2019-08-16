<?php

namespace App\Http\Controllers;

use App\instruktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instruktur = DB::table('instruktur')
        ->get();

        return view('/admin/instruktur/index',['instruktur' => $instruktur]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instruktur.add_instruktur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekstensi_diperbolehkan	= array('png','jpg');
        $file = $request->file('file');
        $nama = $file->getClientOriginalName();
        $ekstensi = $file->getClientOriginalExtension();
        $ukuran = $file->getSize();
        $file_tmp = $file->getRealPath();

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){			
                move_uploaded_file($file_tmp, 'ckeditor/kcfinder/upload/images/'.$nama);

                instruktur::create([
                    'id_instruktur'=>Uuid::uuid4()->toString(),
                    'no' => '20' ,
                    'nama'=> $request->nama,
                    'foto'=> $nama,
                    'deskripsi'=> $request->deskripsi,
                    'kategori'=>$request->kategori
                    
                ]);
                return redirect('/instruktur?m=4');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function show(instruktur $instruktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function edit(instruktur $instruktur)
    {
        return view('/admin/instruktur/edit_instruktur', ['instruktur' => $instruktur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, instruktur $instruktur)
    {
        $instruktur = $instruktur::find($instruktur->id_instruktur);
      
        
        $peserta->save();

        return redirect('/instruktur?m=4');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function destroy(instruktur $instruktur)
    {
        instruktur::find($instruktur->id_instruktur)->delete();

        return redirect('/instruktur');
    }
}
