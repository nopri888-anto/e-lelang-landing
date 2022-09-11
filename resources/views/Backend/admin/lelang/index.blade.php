@extends('layouts.backend')

@section('content')

    <div class="page-wrapper">
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
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
                  <h5 class="card-title"><a href="{{route('backend.add.lelang')}}" class="btn btn-info">Tambah</a></h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Lelang</th>
                          <th>Satuan Kerja</th>
                          <th>Periode</th>
                          <th>Nilai</th>
                          <th>#</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $value)    
                        <tr>
                          <td>{{$key+1}}</td>
                          <td><a href="#">
                            {{$value->kodelelang}}<br>
                            {{$value->namalelang}}
                            </a>
                          </td>
                          <td>
                            {{$value->satuankerja}}
                            <br>
                            {{$value->lokasilelang}} , {{$value->kab}}, {{$value->province->namaprovinsi}}
                          </td>
                          <td>
                            {{$value->tanggalmulailelang}} s/d {{$value->tanggalselesailelang}}
                          </td>
                          <td>
                            <p>Nilai Pagu :@currency( $value->nilaipagu )</p>
                            <p>Nilai HPS :  @currency($value->nilaihps)</p>
                          </td>
                          <td>
                            <a href="#" class="btn btn-sm btn-info">Detail</a>
                          </td>
                        </tr>
                        @endforeach
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      

@endsection