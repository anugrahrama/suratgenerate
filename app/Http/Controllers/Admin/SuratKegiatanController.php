<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SuratUndangan;
use Illuminate\Http\Request;

class SuratKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratUndangan::all();
        return view('admin.suratundangan.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.suratundangan.create');
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nosurat' => 'required',
            'perihal' => 'required',
            'tanggal_pembuatan' => 'required',
            'nama_penerima' => 'required',
            'event' => 'required',
            'kegiatan' => 'required',
            'hari_tanggal_pelaksanaan' => 'required',
            'jam_pelaksanaan' => 'required',
            'tempat_pelaksanaan' => 'required',
            'jabatan_pembuat' => 'required',
            'nama_pembuat' => 'required',
        ]);

        $data = [
            'nosurat' => $request->nosurat,
            'lampiran' => '-',
            'perihal' => $request->perihal,
            'tanggal_pembuatan' => $request->tanggal_pembuatan,
            'nama_penerima' => $request->nama_penerima,
            'event' => $request->event,
            'kegiatan' => $request->kegiatan,
            'hari_tanggal_pelaksanaan' => $request->hari_tanggal_pelaksanaan,
            'jam_pelaksanaan' => $request->jam_pelaksanaan,
            'tempat_pelaksanaan' => $request->tempat_pelaksanaan,
            'jabatan_pembuat' => $request->jabatan_pembuat,
            'nama_pembuat' => $request->nama_pembuat,
        ];

        if($request->lampiran != null){
            $data["lampiran"] = $request->lampiran;   
        }

        SuratUndangan::create($data);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuratUndangan  $suratUndangan
     * @return \Illuminate\Http\Response
     */
    public function show(SuratUndangan $suratUndangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuratUndangan  $suratUndangan
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratUndangan $suratUndangan,$id)
    {
        $data = SuratUndangan::findOrFail($id)->get();

        return view('admin.suratundangan.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuratUndangan  $suratUndangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratUndangan $suratUndangan,$id)
    {
        $this->validate($request,[
            'nosurat' => 'required',
            'perihal' => 'required',
            'tanggal_pembuatan' => 'required',
            'nama_penerima' => 'required',
            'event' => 'required',
            'kegiatan' => 'required',
            'hari_tanggal_pelaksanaan' => 'required',
            'jam_pelaksanaan' => 'required',
            'tempat_pelaksanaan' => 'required',
            'jabatan_pembuat' => 'required',
            'nama_pembuat' => 'required',
        ]);

        $data = [
            'nosurat' => $request->nosurat,
            'lampiran' => '-',
            'perihal' => $request->perihal,
            'tanggal_pembuatan' => $request->tanggal_pembuatan,
            'nama_penerima' => $request->nama_penerima,
            'event' => $request->event,
            'kegiatan' => $request->kegiatan,
            'hari_tanggal_pelaksanaan' => $request->hari_tanggal_pelaksanaan,
            'jam_pelaksanaan' => $request->jam_pelaksanaan,
            'tempat_pelaksanaan' => $request->tempat_pelaksanaan,
            'jabatan_pembuat' => $request->jabatan_pembuat,
            'nama_pembuat' => $request->nama_pembuat,
        ];

        if($request->lampiran != null){
            $data["lampiran"] = $request->lampiran;
        }

        SuratUndangan::findOrFail($id)->update($data);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuratUndangan  $suratUndangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratUndangan $suratUndangan,$id)
    {
        $data = SuratUndangan::find($id);

        $data->delete();
        
        return redirect()->back();
    }
}
