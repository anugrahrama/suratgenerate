<!doctype html>
<html lang="en">

<head>
  <title>{{ $nama_surat }}</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <table width="100%" border="0" style="margin-top: 0px;">
    <tr>
      <td> 
        <!-- <img src="{{asset('file-template/download.jpg')}}" width="690" height="130" alt="logo"> -->
      </td>
      <td colspan="2">
        <p align="center" style="margin: 0px;"><font size="30"> Relawan Pemadam 22</font><br>
        <font size="15">Jl. Adisucipto KM 15.4 Kubu-Raya - Kalbar</font><br>
        <font size="20">085654642474</font>
      </p>
        

      </td>
    </tr>
    <hr style="border: 1px solid black;">
  </table>
  <table width="100%" border="0">
    <tr width="100%">
      <td width="50%">
        <table>
          <tr>
            <td>Nomor</td>
            <td>:</td>
            <td>{{ $komponen->nosurat }}</td>
          </tr>
          <tr>
            <td>Lampiran</td>
            <td>:</td>
            <td>{{ $komponen->lampiran }}</td>
          </tr>
          <tr>
            <td>Perihal</td>
            <td>:</td>
            <td>{{ $komponen->perihal }}</td>
          </tr>
        </table>
      </td>
      <td></td>
      <td width="30%" valign="top" align="center">{{ $komponen->tanggal_pembuatan }}</td>
    </tr>
    <tr>
      <td colspan="3"><br>
        <br>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        Kepada <br>
        Yth :  {{ $komponen->nama_penerima }} <br>
        Ditempat
      </td>
    </tr>
    <tr>
      <td colspan="3"><br>
        <br>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        Dengan Hormat, <br>
        <br>
        Teriring Salam Dan Doa, Semoga Kita Selalu Diberikan kesehatan dan dilindungi Tuhan Yang Maha Esa sehingga dapat menjalankan aktivitas kita sehari-hari <br>
        <br>
        Sehubungan Dengan {{ $komponen->event }} , Kami Relawan Pemadam 22 (Redam 22) Akan Mengadakan {{$komponen->kegiatan}}.
        Adapun Pelaksanaan {{$komponen->kegiatan}} dilakukan Pada : <br>
        <br>
        <table width="100%">
          <tr>
            <td width="10%"></td>
            <td colspan="2">
              <table width="100%">
                <tr>
                  <td width="20%">Hari/ Tanggal</td>
                  <td width="5%">:</td>
                  <td>{{$komponen->hari_tanggal_pelaksanaan}}</td>
                </tr>
                <tr>
                  <td>Waktu</td>
                  <td>:</td>
                  <td>{{$komponen->jam_pelaksanaan}}</td>
                </tr>
                <tr>
                  <td>Tempat</td>
                  <td>:</td>
                  <td>{{$komponen->tempat_pelaksanaan}}</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <br>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        Demikian Surat Ini Kami Sampaikan ,Kami Harapkan Partisipasi Dari Rekan-Rekan Sekalian Untuk Menanggapi Surat ini,atas Partisipasinya kami ucapkan terima kasih <br>
        <br>
      </td>
    </tr>
    <tr>
      <td colspan="2"></td>

      <td align="center">
        <b>{{$komponen->jabatan_pembuat}} </b>
        <br>
        <br>
        <br>
        <br>
        <u><b>{{$komponen->nama_pembuat}}</b> <u>
      </td>
    </tr>
  </table>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>