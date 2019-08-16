<?php

namespace App\Http\Controllers;
use App\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.index');
    }
    public function home()
    {
        $artikel = DB::table('artikel')
        ->join('user', 'user.username', '=', 'artikel.author')
        ->limit(3)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('home.index', ['artikel' => $artikel]);
    }
    public function about()
    {
        return view('home.about');
    }
    public function pelaksanaan()
    {
        return view('home.pelaksana');
    }
    public function jadwal()
    {
        return view('home.jadwal');
    }
    public function news(artikel $artikel)
    {
        return view('home.news', ['$artikel' => $artikel]);
    }
    public function newss()
    {
         $artikel = DB::table('artikel')
        ->join('user', 'user.username', '=', 'artikel.author')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('home.news', ['artikel' => $artikel]);
    }
    public function speakers()
    {
         $instruktur = DB::table('instruktur')
        ->where('kategori', 'pengajar')
        ->get();

        $asistant = DB::table('instruktur')
        ->where('kategori', 'pengajar pendamping')
        ->get();

        $sek = DB::table('instruktur')
        ->where('kategori', 'sekretariat')
        ->get();
        return view('home.speakers', ['instruktur' => $instruktur,'asistant'=> $asistant,'sek' => $sek]);
    }
    public function daftarpeserta()
    {
        $peserta = DB::table('peserta')
        ->paginate(28);
        return view('home.daftarpeserta',['peserta' => $peserta]);
    }
    public function hakewa()
    {
       
        return view('home.hakewa');
    }
    public function tata()
    {
       
        return view('home.tata');
    }
    public function silabus()
    {
       
        return view('home.silabus');
    }
    public function contact()
    {
       
        return view('home.contact');
    }
    public function galery()
    {
        return view('home.galery');
    }
}
