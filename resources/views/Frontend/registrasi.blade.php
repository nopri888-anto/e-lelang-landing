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
          
            <form action="{{route('frontend.store.user')}}" method="POST" >
              @csrf
              <div class="row gy-4">
                <div class="col-lg-2">
                </div>
                <div class="col-md-8">
                  <input type="text" name="namaperusahaan" class="form-control" placeholder="Nama Perusahaan" required>
                </div>
                <div class="col-lg-2">
                </div>
                <div class="col-lg-2">
                </div>
                <div class="col-md-8">
                    <input type="text" name="nik" class="form-control" placeholder="Nomor NIK KTP" maxlength="16" required>
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