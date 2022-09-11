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
                    <div class="col-md-12">
                        <form class="form-horizontal" method="POST" action="{{route('backend.store.lelang')}}">
                          @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label
                                      for="username"
                                      class="col-sm-2 text-end control-label col-form-label"
                                      >Kode Lelang</label
                                    >
                                    <div class="col-sm-3">
                                      <input type="text" value="{{$kode}}" class="form-control" id="kodelelang" name="kodelelang" readonly/>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label
                                      for="username"
                                      class="col-sm-2 text-end control-label col-form-label"
                                      >Nama Lelang</label
                                    >
                                    <div class="col-sm-4">
                                      <input type="text" value="{{old('namalelang')}}" class="form-control" id="namalelang" name="namalelang" placeholder="Nama Lelang" required/>
                                    </div>
                                  </div>
                              <div class="form-group row">
                                <label
                                  for="email1"
                                  class="col-sm-2 text-end control-label col-form-label"
                                  >Satuan Kerja</label
                                >
                                <div class="col-sm-3">
                                    <input type="text" value="{{old('satuankerja')}}" class="form-control" id="satuankerja" name="satuankerja" placeholder="Satuan Kerja" required/>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="password"
                                  class="col-sm-2 text-end control-label col-form-label"
                                  >Lokasi</label
                                >
                                <div class="col-sm-3">
                                    <input type="text" value="{{old('lokasilelang')}}" class="form-control" id="lokasilelang" name="lokasilelang" placeholder="Lokasi Lelang" required/>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="password"
                                  class="col-sm-2 text-end control-label col-form-label"
                                  >Kab / Kota</label
                                >
                                <div class="col-sm-3">
                                    <input type="text" value="{{old('kab')}}" class="form-control" id="kab" name="kab" placeholder="Kab / Kota" required/>
                                </div>
                                <label
                                  for="email1"
                                  class="col-sm-1 text-end control-label col-form-label"
                                  >Provinsi</label>
                                  <div class="col-sm-3">
                                    <select class="select2 form-select shadow-none" name="idprovinsi" style="width: 100%; height: 36px">
                                        <option>-- Pilih --</option>
                                        @foreach($provinsi as $key => $prov)
                                        <option value="{{$prov->id}}">{{$prov->namaprovinsi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="form-group row">
                                    <label
                                      for="username"
                                      class="col-sm-2 text-end control-label col-form-label"
                                      >Nilai PAGU</label
                                    >
                                    <div class="col-sm-3">
                                      <input type="text" value="{{old('nilaipagu')}}" class="form-control" id="nilaipagu" name="nilaipagu" placeholder="Nilai Pagu" required/>
                                    </div>
                                    <label
                                      for="username"
                                      class="col-sm-1 text-end control-label col-form-label"
                                      >Nilai HPS</label>
                                      <div class="col-sm-3">
                                        <input type="text" value="{{old('nilaihps')}}" class="form-control" id="nilaihps" name="nilaihps" placeholder="Nilai HPS" required/>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                    <label
                                      for="username"
                                      class="col-sm-2 text-end control-label col-form-label"
                                      >Jenis Kontrak</label
                                    >
                                    <div class="col-sm-3">
                                      <input type="text" value="{{old('jeniskontrak')}}" class="form-control" id="jeniskontrak" name="jeniskontrak" placeholder="Jenis Kontrak" required/>
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="username"
                                  class="col-sm-2 text-end control-label col-form-label"
                                  >Tanggal Mulai Lelang <small class="text-muted">dd/mm/yyyy</small></label
                                >
                                <div class="col-sm-3">
                                  <input type="text" value="{{old('tanggalmulailelang')}}" class="form-control" id="tanggalmulailelang" name="tanggalmulailelang" placeholder="dd/mm/yy" required/>
                                </div>
                                <label
                                  for="username"
                                  class="col-sm-2 text-end control-label col-form-label"
                                  >Tanggal Selesai Lelang <small class="text-muted">dd/mm/yyyy</small></label
                                >
                                <div class="col-sm-3">
                                  <input type="text" value="{{old('tanggalselesailelang')}}" class="form-control" id="tanggalselesailelang" name="tanggalselesailelang" placeholder="dd/mm/yy" required/>
                                </div>
                              </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                  <a href="{{route('backend.admin.lelang')}}" class="btn btn-primary">
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