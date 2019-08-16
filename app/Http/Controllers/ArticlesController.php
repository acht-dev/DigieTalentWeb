<?php

namespace App\Http\Controllers;

use App\artikel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //query builder
        $artikel = DB::table('artikel')
            ->join('user', 'user.username', '=', 'artikel.author')
            ->get();
        //Eloquent
        // $artikel = \App\artikel::with('User')->get();
        
        
        return view('/admin/artikel/index', ['artikel' => $artikel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikel.add_artikel');
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

                artikel::create([
                    'id_artikel'=>Uuid::uuid4()->toString(),
                    'label'=> $request->label,
                    'judul'=> $request->judul,
                    'isi'=> $request->isi,
                    'author'=> 'admin',
                    'thumbnail'=>$nama
                    
                ]);

            }
        }

        return redirect('/artikel?m=2');
        

        // peserta::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(artikel $artikel)
    {
        return view('/admin/artikel/edit_artikel', ['artikel' => $artikel]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artikel $artikel)
    {
        $artikel = $artikel::find($artikel->id_artikel);
        $artikel->label = $request->label;
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;

        $artikel->save();

        return redirect('/artikel?m=2');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(artikel $artikel)
    {
        artikel::find($artikel->id_artikel)->delete();

        return redirect('/artikel?m=2');
    }
}
