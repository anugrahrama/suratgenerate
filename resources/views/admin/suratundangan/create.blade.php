@extends('layouts.app')
@section('title', 'Buat Surat Kegiatan')
@section('content')
<div class="container">
    <form action="{{route('store')}}" method="POST" role="form">
        @csrf
        <div class="form-group">
            <div class="row">
                <input type="hidden" name="id">
                <div class="col-4">
                    <label for="">No Surat</label>
                    <input type="text" class="form-control" name="nosurat" required placeholder="No/19/Lpkk/Redam22">
                </div>
                <div class="col-8">
                    <label for="">Lampiran</label>
                    <input type="text" class="form-control" name="lampiran" placeholder="--">
                    <small class="text-muted">Jika Tidak Ada Lampiran Dikosongkan</small>
                </div>
                <div class="col-4">
                    <label for="">Perihal</label>
                    <input type="text" class="form-control" name="perihal" required placeholder="Ulang Tahun Relawan Pemadam22">
                </div>
                <div class="col-8">
                    <label for="">Tempat Tanggal Pembuatan Surat</label>
                    <input type="text" class="form-control" name="tanggal_pembuatan" required placeholder="Pontianak, 18 Maret 2020">
                </div>
                <div class="col-7">
                    <label for="">Nama Penerima</label>
                    <input type="text" class="form-control" name="nama_penerima" required placeholder="Pemadam Kebakaran Panca Bhakti">
                </div>
                <div class="col-5">
                    <label for="">Event</label>
                    <input type="text" class="form-control" name="event" required placeholder="Ultah Redam 22/ Memeriahkan Hari Raya Kemerdekaan">
                </div>
                <div class="col-4">
                    <label for="">kegiatan</label>
                    <input type="text" class="form-control" name="kegiatan" required placeholder="Donor Darah">
                </div>
                <div class="col-4">
                    <label for="">Tempat Hari Tanggal Pelaksanaan</label>
                    <input type="text" class="form-control" name="hari_tanggal_pelaksanaan" required placeholder="Kubu Raya,20 Aprill 2020">
                </div>
                <div class="col-4">
                    <label for="">Waktu Pelaksanaan</label>
                    <input type="text" class="form-control" name="jam_pelaksanaan" required placeholder="09.00 Wib - Selesai">
                </div>
                <div class="col-12">
                    <label for="">Tempat Pelaksanaan</label>
                    <textarea type="text" class="form-control" name="tempat_pelaksanaan" cols="30" rows="10" required placeholder="Jln Adisucipto Km 15.4 Gg seruat sambas"></textarea>
                </div>
                <div class="col-6">
                    <label for="">Jabatan Penanggung Jawab Surat</label>
                    <input type="text" class="form-control" name="jabatan_pembuat" required placeholder="Koordinator Lapangan">
                </div>
                <div class="col-6">
                    <label for="">Nama Penanggung Jawab Surat</label>
                    <input type="text" class="form-control" name="nama_pembuat" required placeholder="Anugrah Ramadhan">
                </div>

            </div>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection