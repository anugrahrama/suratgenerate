@extends('layouts.app')
@section('title', 'Edit Nye Rusak')
@section('content')
<div class="container">
    @foreach($data as $val)
    <form action="{{route('update',$val->id)}}" method="POST" role="form">
        @csrf
        <div class="form-group">
            <div class="row">
            <input type="hidden" name="id" value="{{ $val->id }}">
                <div class="col-4">
                    <label for="">No Surat</label>
                    <input type="text" class="form-control" name="nosurat" required placeholder="No/19/Lpkk/Redam22" value={{ $val->nosurat }}>
                </div>
                <div class="col-8">
                    <label for="">Lampiran</label>
                    <input type="text" class="form-control" name="lampiran" required placeholder="--" value={{ $val->lampiran }}>
                    <small class="text-muted">Jika Tidak Ada Lampiran Dikosongkan</small>
                </div>
                <div class="col-4">
                    <label for="">Perihal</label>
                    <input type="text" class="form-control" name="perihal" required placeholder="Ulang Tahun Relawan Pemadam22" value="{{ $val->perihal }}">
                </div>
                <div class="col-8">
                    <label for="">Tempat Tanggal Pembuatan Surat</label>
                    <input type="text" class="form-control" name="tanggal_pembuatan" required placeholder="Pontianak, 18 Maret 2020" value="{{ $val->tanggal_pembuatan }}">
                </div>
                <div class="col-7">
                    <label for="">Nama Penerima</label>
                    <input type="text" class="form-control" name="nama_penerima" required placeholder="Pemadam Kebakaran Panca Bhakti" value="{{ $val->nama_penerima }}">
                </div>
                <div class="col-5">
                    <label for="">Event</label>
                    <input type="text" class="form-control" name="event" required placeholder="Ultah Redam 22/ Memeriahkan Hari Raya Kemerdekaan" value="{{ $val->event }}">
                </div>
                <div class="col-4">
                    <label for="">kegiatan</label>
                    <input type="text" class="form-control" name="kegiatan" required placeholder="Donor Darah" value="{{ $val->kegiatan }}">
                </div>
                <div class="col-4">
                    <label for="">Tempat Hari Tanggal Pelaksanaan</label>
                    <input type="text" class="form-control" name="hari_tanggal_pelaksanaan" required placeholder="Kubu Raya,20 Aprill 2020" value="{{ $val->hari_tanggal_pelaksanaan }}">
                </div>
                <div class="col-4">
                    <label for="">Waktu Pelaksanaan</label>
                    <input type="text" class="form-control" name="jam_pelaksanaan" required placeholder="09.00 Wib - Selesai" value="{{$val->jam_pelaksanaan }}">
                </div>
                <div class="col-12">
                    <label for="">Tempat Pelaksanaan</label>
                    <textarea type="text" class="form-control" name="tempat_pelaksanaan" cols="30" rows="5" required placeholder="Jln Adisucipto Km 15.4 Gg seruat sambas">{{ $val->tempat_pelaksanaan }}</textarea>
                </div>
                <div class="col-6">
                    <label for="">Jabatan Penanggung Jawab Surat</label>
                    <input type="text" class="form-control" name="jabatan_pembuat" required placeholder="Koordinator Lapangan" value="{{ $val->jabatan_pembuat }}">
                </div>
                <div class="col-6">
                    <label for="">Nama Penanggung Jawab Surat</label>
                    <input type="text" class="form-control" name="nama_pembuat" required placeholder="Anugrah Ramadhan" value="{{ $val->nama_pembuat }}">
                </div>

            </div>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endforeach
</div>

@endsection