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
          
            <form action="{{route('frontend.update',$data->id)}}" method="POST" >
              @csrf
              @method('PUT')
              <div class="row gy-4">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <input type="text" name="namaperusahaan" class="form-control" readonly value="{{$data->namavendor}}">
                </div>
                <div class="col-lg-2">
                </div>


                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <textarea type="text" name="alamat" class="form-control" placeholder="Alamat" required>{{ old('alamat') }}</textarea>
                </div>
                <div class="col-lg-2">
                </div>

                <div class="col-lg-2">
                </div>
                <div class="col-lg-4">
                    <input type="text" name="kab" value="{{ old('kab') }}" class="form-control" placeholder="Kab / Kota" required>
                </div>
                <div class="col-lg-4">
                    <select type="text" name="provinsi" value="{{ old('provinsi') }}" class="form-control" required>
                    <option>-- Pilih --</option>
                    @foreach($provinsi as $key => $prov)
                    <option value="{{$prov->id}}">{{$prov->namaprovinsi}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col-lg-2">
                </div>

                <div class="col-lg-2">
                </div>
                <div class="col-lg-3">
                    <input type="text" name="kodepos" value="{{ old('kodepos') }}" class="form-control" placeholder="Kodepos" required>
                </div>
                <div class="col-lg-5">
                    <input type="text" name="notelp" value="{{ old('notelp') }}" class="form-control" placeholder="No telepon" required>
                </div>
                <div class="col-lg-2">
                </div>

                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="col-lg-2">
                </div>

                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <input type="text" name="npwp" value="{{ old('npwp') }}" maxlength="16" class="form-control" placeholder="NPWP" required>
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