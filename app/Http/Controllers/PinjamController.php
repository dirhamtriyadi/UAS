<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjam;
use App\Models\Anggota;
use App\Models\Buku;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam = Pinjam::all();
        return view('pinjam.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = Anggota::all();
        $buku = Buku::all();

        return view('pinjam.create', compact('anggota', 'buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required',
            'no_buku' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        Pinjam::create($request->all());

        return redirect()->route('pinjam.index')
            ->with('success', 'Peminjaman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_pinjam)
    {
        $anggota = Anggota::all();
        $buku = Buku::all();
        $pinjam = Pinjam::find($no_pinjam);

        return view('pinjam.edit', compact('pinjam', 'anggota', 'buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_pinjam)
    {
        $request->validate([
            'id_anggota' => 'required',
            'no_buku' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $pinjam = Pinjam::find($no_pinjam);
        $pinjam->id_anggota = $request->get('id_anggota');
        $pinjam->no_buku = $request->get('no_buku');
        $pinjam->tgl_pinjam = $request->get('tgl_pinjam');
        $pinjam->tgl_kembali = $request->get('tgl_kembali');
        $pinjam->save();

        return redirect()->route('pinjam.index')->with('success', 'Peminjaman berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_pinjam)
    {
        $pinjam = Pinjam::find($no_pinjam);
        $pinjam->delete();

        return redirect()->route('pinjam.index')->with('success', 'Peminjaman berhasil dihapus');
    }
}
