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
          <!-- Column -->
          <div class="col-md-12 col-lg-12 col-xlg-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title"></h5>

                  <div class="row">
                    <div class="col-md-6">
                        <form class="form-horizontal" method="POST" action="{{route('backend.admin.email')}}">
                          @csrf
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
                                    name="username"
                                    value="{{$data->namavendor}}"
                                    readonly
                                  />
                                  <input
                                    type="hidden"
                                    class="form-control"
                                    name="idvendor"
                                    value="{{$data->id}}"
                                    readonly
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
                                    name="email"
                                    value="{{$data->email}}"
                                  />
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="username"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Username</label
                                >
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="username" name="username" required/>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="password"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Password</label
                                >
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="password" name="password" required/>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="email1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Status</label
                                >
                                <div class="col-sm-9">
                                    <select class="select2 form-select shadow-none" name="status" style="width: 100%; height: 36px">
                                        <option >--Pilih--</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Pending</option>
                                    </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="email1"
                                  class="col-sm-3 text-end control-label col-form-label"
                                  >Note</label
                                >
                                <div class="col-sm-9">
                                    <textarea name="remark" class="form-control"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                  <a href="{{route('backend.admin.vendor')}}" class="btn btn-primary">
                                    Kembali
                                  </a>
                                  <button type="submit"  class="btn btn-info">
                                    Kirim Email
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