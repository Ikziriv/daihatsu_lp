@extends('front_master')

@section('content')
<div class="col-md-12 col-lg-12 col-12" style="padding: 0px;">
   <div class="col-12">
      <div class="panel-body">
          <div class="row clearfix">
              <div class="col-lg-3 float-left">
                  <p class="ml-1">
                       <h1>SIMULASI <br> KREDIT</h1>
                  </p>
                  <i class="ion-ios-calculator-outline p-3" style="font-size: 80px;"></i>
              </div>
              <div class="col-md-6"><br>
                <legend>Form Kalkulasi Perhitungan</legend>
                <form action="{{route('post-contact')}}" method="POST">
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="">Tipe</label>
                      <input type="text" class="form-control" name="tipe" id="tipe" placeholder="Tipe">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="">Kalkulasi</label>
                        <input type="text" class="form-control" name="kalkulasi" id="kalkulasi" placeholder="Kalkulasi">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">Tenor</label>
                      <input type="text" class="form-control" name="tenor" id="tenor" placeholder="Tenor">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">Asuransi Prima Vehicle</label>
                        <input type="text" class="form-control" name="tenor" id="tenor" placeholder="Tenor">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Asuransi Prima Credit Life</label>
                        <input type="text" class="form-control" name="tenor" id="tenor" placeholder="Tenor">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-block btn-success">Hitung</button>
                </form>
              </div>
              <div class="col-lg-3 float-right text-right p-5">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa veritatis excepturi distinctio tempore incidunt quas non quaerat harum alias eum dolore doloremque, sequi eveniet porro, ratione, perspiciatis quos. Qui, excepturi.
                  </div>
                </div>
              </div>
          </div><br>
      </div>
  </div>
</div>
@endsection