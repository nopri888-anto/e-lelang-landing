@extends('layouts.frontend')

@section('content')

  <main id="main" class="mt-5">
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact ">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Daftar Sistem E-Lelang</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-2">
          </div>

          <div class="col-lg-8">
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
          
            <form action="{{route('frontend.upload.dokumen.user')}}" method="POST" enctype="multipart/form-data" >
              @csrf
              <div class="row gy-4">
                
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <input type="text" name="namaperusahaan" class="form-control" readonly value="{{$data->namavendor}}">
                    <input type="hidden" class="form-control" name="idvendor" id="idvendor" value="{{$data->id}}">
                </div>
                <div class="col-lg-2">
                </div>


                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <label style="font-weight: bold;">NPWP </label><span style="color: red;">*</span>
                    <input type="file" name="npwp" class="form-control" required>
                    
                </div>
                <div class="col-lg-2">
                </div>

                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                  <label style="font-weight: bold;">Akta Usaha</label><span style="color: red;">*</span>
                    <input type="file" name="aktausaha" class="form-control" required>
                </div>
                <div class="col-lg-2">
                </div>

                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                  <label style="font-weight: bold;">Dokumen Induk Usaha</label><span style="color: red;">*</span>
                    <input type="file" name="dokumenindukusaha" class="form-control" required>
                </div>
                <div class="col-lg-2">
                </div>

                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                  <label style="font-weight: bold;">Surat Pernyataan</label><span style="color: red;">*</span>
                    <input type="file" name="suratpernyataan" class="form-control"  required>
                </div>
                <div class="col-lg-2">
                </div>

                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                  <label style="font-weight: bold;">Surat Pendaftaran</label><span style="color: red;">*</span>
                    <input type="file" name="suratpendaftaran" class="form-control" required>
                </div>
                <div class="col-lg-2">
                </div>


                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                  <label style="font-weight: bold;">Foto Workshop</label><span style="color: red;">*</span>
                    <input type="file" name="fotoworkshop" class="form-control" required>
                </div>
                <div class="col-lg-2">
                </div>
               

                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-submit">Daftar</button>
                </div>

              </div>
            </form>

          </div>

          <div class="col-lg-2">
        </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection