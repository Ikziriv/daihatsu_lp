@extends('front_master')

@section('content')
<div class="col-md-12 col-lg-12 col-12" style="padding: 0px;">
   <div class="col-12">
      <div class="panel-body">
          <div class="clearfix">
              <div class="col-lg-6 float-left">
                  <i class="ion-ios-telephone-outline p-3" style="font-size: 120px;"></i>
              </div>
              <div class="col-lg-6 float-right text-right">
                  <p class="ml-1 p-4">
                       <h1>HUBUNGI KAMI</h1><br>
                       0812-xxx-xxx-xx
                  </p>
              </div>
          </div><br>
          <div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-body mb-4 box-shadow">
                  <form action="{{route('post-contact')}}" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Nomer HP</label>
                          <input type="text" class="form-control" name="hp" id="hp" placeholder="Handphone">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Pertanyaan</label>
                      <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-success">Kirim</button>
                  </form>
                </div>
                
              </div>
            </div>
            <div class="col-md-3" style="background-color: rgb(100, 15, 108);padding: 0px;color:#fff;">
              <img style="width:700px;height: 100%;" src="https://rajufebrian.files.wordpress.com/2013/06/19-06-daihatsu-karawaci-01.jpg">
            </div>
            <div class="col-md-9">
              <div class="card">
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
              </div>
            </div>
            <div class="col-md-3"><br>
              <h2>Astrido <br> Daihatsu Serpong</h2>
              <address>
                <strong>Jl. Raya Serpong</strong><br>
                Pakulonan<br>
                Serpong Utara<br>
                Kota Tangerang Selatan<br>
                Banten<br>
                15325<br>
                <abbr title="Phone">P:</abbr> 0812-8994-3586
              </address>
            </div>
          </div><br>
      </div>
  </div>
</div>
@endsection