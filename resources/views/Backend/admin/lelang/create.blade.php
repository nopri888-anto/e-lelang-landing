@extends('layouts.backend')

@section('content')

    <div class="page-wrapper">
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Validasi</h4>
            <div class="ms-auto text-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                   Vendor
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          
          <!-- Column -->
          <div class="col-md-12 col-lg-12 col-xlg-12">
            <div class="card">
                @if (count($errors)>0)
          <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif


        @if(\Session::has('success'))
        <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
        </div>
        @endif
                <div class="card-body">
                  <h5 class="card-title"></h5>

                  <div class="row">
                    <div class="col-md-6">
                        <form class="form-horizontal" method="POST" action="">
                          @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label
                                      for="username"
                                      class="col-sm-3 text-end control-label col-form-label"
                                      >Kode Lelang</label
                                    >
                                    <div class="col-sm-9">
                                      <input type="text" value="{{$kode}}" class="form-control" id="kodelelang" name="kodelelang" readonly/>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label
                                      for="username"
                                      class="col-sm-3 text-end control-label col-form-label"
                                      >Nama Lelang</label
                                    >
                                    <div class="col-sm-9">
                                      <input type="text" value="{{old('namalelang')}}" class="form-control" id="namalelang" name="namalelang" placeholder="Nama Lelang" required/>
                                    </div>
                                  </div>
                              <div class="form-group row">
                                <label
                                  for="email1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Satuan Kerja</label
                                >
                                <div class="col-sm-9">
                                    <input type="text" value="{{old('satuankerja')}}" class="form-control" id="satuankerja" name="satuankerja" placeholder="Satuan Kerja" required/>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="password"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Lokasi</label
                                >
                                <div class="col-sm-9">
                                    <input type="text" value="{{old('lokasilelang')}}" class="form-control" id="lokasilelang" name="lokasilelang" placeholder="Lokasi Lelang" required/>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="password"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Kab / Kota</label
                                >
                                <div class="col-sm-9">
                                    <input type="text" value="{{old('kab')}}" class="form-control" id="kab" name="kab" placeholder="Kab / Kota" required/>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="email1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Provinsi</label
                                >
                                <div class="col-sm-9">
                                    <select class="select2 form-select shadow-none" name="isprovinsi" style="width: 100%; height: 36px">
                                        <option>-- Pilih --</option>
                                        @foreach($provinsi as $key => $prov)
                                        <option value="{{$prov->id}}">{{$prov->namaprovinsi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label
                                      for="username"
                                      class="col-sm-3 text-end control-label col-form-label"
                                      >Nilai PAGU</label
                                    >
                                    <div class="col-sm-9">
                                      <input type="text" value="{{old('nilaipagu')}}" class="form-control" id="nilaipagu" name="nilaipagu" placeholder="Nilai Pagu" required/>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label
                                      for="username"
                                      class="col-sm-3 text-end control-label col-form-label"
                                      >Nilai HPS</label
                                    >
                                    <div class="col-sm-9">
                                      <input type="text" value="{{old('nilaihps')}}" class="form-control" id="nilaihps" name="nilaihps" placeholder="Nilai HPS" required/>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label
                                      for="username"
                                      class="col-sm-3 text-end control-label col-form-label"
                                      >Jenis Kontrak</label
                                    >
                                    <div class="col-sm-9">
                                      <input type="text" value="{{old('jeniskontrak')}}" class="form-control" id="jeniskontrak" name="jeniskontrak" placeholder="Jenis Kontrak" required/>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                  <a href="{{route('backend.admin.user')}}" class="btn btn-primary">
                                    Kembali
                                  </a>
                                  <button type="submit"  class="btn btn-info">
                                    Simpan
                                  </button>
                                </div>
                              </div>
                          </form>
                    </div>
                  </div>

                </div>
              </div>
          </div>
        </div>
      </div>
      

@endsection