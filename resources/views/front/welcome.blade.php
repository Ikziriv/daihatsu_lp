@extends('front_master')

@section('content')
<div class="col-md-6 col-lg-6 col-12" style="background-color: #d22023;padding: 0px;color:#fff;">
   <div class="col-12">
      <div class="panel-body">
          <div class="clearfix">
              <div class="col-lg-6 float-left">
                  <i class="ion-ios-paperplane-outline p-3" style="font-size: 120px;"></i>
              </div>
              <div class="col-lg-6 float-right text-right">
                  <p class="ml-1">
                       <h1>PROMO DAIHATSU </h1>
                       <h4><b>TERMURAH <br>FEBRUARI 2018</b></h4>
                       <h6>Nikmati kenyamanan Daihatsu Kamu <br> hanya di <b class="text-warning"><i>Daihatsu ASTRIDO SERPONG</i></b></h6>
                  </p>
              </div>
          </div><br>
          <div class="row justify-content-center">
              <table class="table" style="border: none;">
                <tbody>
                  <tr>
                    <td scope="col"><b>NEW AYLA D Plus 1.0cc</b></td>
                    <td scope="col">PROMO DP 15 juta</td>
                  </tr>
                  <tr>
                    <td scope="col"><b>SIGRA D 1.0cc</b></td>
                    <td scope="col">PROMO DP 16 juta</td>
                  </tr>
                  <tr>
                    <td scope="col"><b>GRAN MAX PICK UP 1.3 std/3way</b></td>
                    <td scope="col">PROMO DP 11 juta</td>
                  </tr>
                  <tr>
                    <td scope="col"><b>MINIBUS 1.3 D</b></td>
                    <td scope="col">PROMO DP 14,5 juta</td>
                  </tr>
                  <tr>
                    <td scope="col"><b>LUXIO D 1.5cc</b></td>
                    <td scope="col">PROMO DP 15 juta</td>
                  </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('promo')}}" class="btn btn-outline-light">Promo Lainnya</a></td>
                        <td>Note<br>"<i>SYARAT DAN KETENTUAN BERLAKU</i>"</td>
                    </tr>
                </tfoot>
              </table>
          </div>
      </div><hr>
  </div>
</div>
<div class="col-md-3 col-lg-3 col-12" style="background-color: rgb(100, 15, 108);padding: 0px;color:#fff;">
   <img style="width:700px;height: 100%;" src="https://rajufebrian.files.wordpress.com/2013/06/19-06-daihatsu-karawaci-01.jpg">
</div>
<div class="col-md-3 col-lg-3 col-12" style="background-color: rgb(253, 187, 28);padding: 0px;color:#3a3a3a;">
  <div class="card-body">
      <legend class="text-light">SYARAT KREDIT<br> PROSES CEPAT HANYA 3 HARI</legend>
      <ul class="list-unstyled">
        <li>DATA PERORANGAN
          <ul>
            <li>KTP Suami & Istri</li>
            <li>NPWP</li>
            <li>PBB Rumah / AJB/ Sertifikat</li>
            <li>Kartu Keluarga</li>
            <li>Cover Depan & Mutasi Rekening 3 bulan Terakhir</li>
            <li>Slip Gaji Terbaru</li>
            <li>SKU/Bon-Bon Usaha (jika usaha*)</li>
          </ul>
        </li>
        <li class="text-light">Pembelian CASH Perorangan: KTP SAJA</li>
        <li>DATA PERUSAHAAN
          <ul>
            <li>Akte Pendirian dan Akte Perubahan (jika ada*)</li>
            <li>KTP Direktur, Direksi, Komisaris (yg tertera dalam Akte Pendirian)</li>
            <li>NPWP, SIUP, TDP, DOMISILI</li>
            <li>SK. MENKEH</li>
            <li>Rekening Koran 3 bulan Terakhir</li>
          </ul>
        </li>
        <li class="text-light">Pembeli CASH Perusahaan: <br>NPWP, TDP, SIUP, DOMISILI</li>
      </ul>
  </div>
</div>
@endsection