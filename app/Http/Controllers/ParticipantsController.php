<?php

namespace App\Http\Controllers;

use App\peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //query builder
        $peserta = DB::table('peserta')->get();
        // $peserta = \App\peserta::all();
        return view('/admin/peserta/index', ['peserta' => $peserta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.peserta.add_peserta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        peserta::create([
            'penyelengara'=>$request->penyelengara,
            'tema'=>$request->tema,
            'nama_peserta'=>$request->nama,
            'no_hp'=>$request->hp,
            'email'=>$request->email,
            'asal_provinsi'=>$request->asal
            
        ]);

        // peserta::create($request->all());
        return redirect('/peserta?m=5');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(peserta $peserta)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(peserta $peserta)
    {
        return view('/admin/peserta/edit_peserta', ['peserta' => $peserta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peserta $peserta)
    {
        // $pesertaUpdate = $peserta::find($peserta->id_peserta);
        $peserta = $peserta::find($peserta->id_peserta);
        $peserta->penyelengara = $request->penyelengara;
        $peserta->tema = $request->tema;
        $peserta->nama_peserta = $request->nama;
        $peserta->no_hp = $request->hp;
        $peserta->email = $request->email;
        $peserta->asal_provinsi = $request->asal;
        
        $peserta->save();

        return redirect('/peserta?m=5');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(peserta $peserta)
    {

        
        peserta::find($peserta->id_peserta)->delete();

        return redirect('/peserta?m=5');
    }
}
