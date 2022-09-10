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
                <div class="card-body">
                  <h5 class="card-title"></h5>

                  <div class="row">
                    <div class="col-md-6">
                        <form class="form-horizontal">
                            <div class="card-body">
                              <div class="form-group row">
                                <label
                                  for="fname"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Nama Vendor</label
                                >
                                <div class="col-sm-9">
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="fname"
                                    value="{{$data->namavendor}}"
                                    readonly
                                  />
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="cono1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Alamat</label
                                >
                                <div class="col-sm-9">
                                  <textarea class="form-control" readonly>{{$data->alamatvendor}}, {{$data->province->namaprovinsi}},{{$data->kodepos}}
                                  </textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="lname"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >No Telepon</label
                                >
                                <div class="col-sm-9">
                                  <input readonly
                                    type="text"
                                    class="form-control"
                                    id="lname"
                                    value="{{$data->nomortelepon}}"
                                  />
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="email1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Email</label
                                >
                                <div class="col-sm-9">
                                  <input readonly
                                    type="text"
                                    class="form-control"
                                    id="email1"
                                    value="{{$data->email}}"
                                  />
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="cono1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >NIK No</label
                                >
                                <div class="col-sm-9">
                                  <input readonly
                                    type="text"
                                    class="form-control"
                                    id="cono1"
                                    value="{{$data->nik}}"
                                  />
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="cono1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >NPWP No</label
                                >
                                <div class="col-sm-9">
                                  <input readonly
                                    type="text"
                                    class="form-control"
                                    id="cono1"
                                    value="{{$data->npwp}}"
                                  />
                                </div>
                              </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                  <a href="{{route('backend.admin.vendor')}}" class="btn btn-primary">
                                    Kembali
                                  </a>
                                  <a href="{{route('backend.admin.vendor.konfimasi',$data->id)}}" class="btn btn-info">
                                    Confirm
                                  </a>
                                </div>
                              </div>
                          </form>
                    </div>
                    <div class="col-md-6">
                        <form class="form-horizontal">
                            <div class="card-body">
                              <div class="form-group row">
                                <label
                                  for="fname"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >NPWP</label
                                >
                                <div class="col-sm-9">
                                  <a href="{{route('download.npwp',$data->dokumen->npwp)}}" class="btn btn-success text-white">Download</a>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="lname"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Akta Usaha</label
                                >
                                <div class="col-sm-9">
                                    <a href="{{route('download.akta',$data->dokumen->aktausaha)}}" class="btn btn-success text-white">Download</a>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="email1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Dokumen Induk Usaha</label
                                >
                                <div class="col-sm-9">
                                    <a href="{{route('download.induk',$data->dokumen->dokumenindukusaha)}}" class="btn btn-success text-white">Download</a>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="cono1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Surat Pernyataan</label
                                >
                                <div class="col-sm-9">
                                    <a href="{{route('download.pernyataan',$data->dokumen->suratpernyataan)}}" class="btn btn-success text-white">Download</a>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="cono1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Surat Pendaftaran</label
                                >
                                <div class="col-sm-9">
                                    <a href="{{route('download.pendaftaran',$data->dokumen->suratpendaftaran)}}" class="btn btn-success text-white">Download</a>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="cono1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Workshop</label
                                >
                                <div class="col-sm-9">
                                    <a href="{{route('download.wokrshop',$data->dokumen->workshop)}}" class="btn btn-success text-white">Download</a>
                                </div>
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