@extends('layouts.frontend')

@section('content')

  <main id="main" class="mt-5">
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact ">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Login Sistem E-Lelang</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-2">
          </div>

          <div class="col-lg-8">
            <form action="" method="post" class="php-email-form dark">
              <div class="row gy-4">
                <div class="col-lg-2">
                </div>
                <div class="col-md-8">
                  <input type="text" name="name" class="form-control" placeholder="Username" required>
                </div>
                <div class="col-lg-2">
                </div>
                <div class="col-lg-2">
                </div>
                <div class="col-md-8">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="col-lg-2">
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit">Masuk</button>
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