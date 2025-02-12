@extends('layoutsmasyarakat.app')
@section('contentmasyarakat')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Aplikasi Pengaduan Online</h1>
                <h5>Suara Anda, Perubahan Kami,
                    Laporkan Sekarang, Wujudkan Perubahan!.</h5>
                <div class="video_service_btn">
                    <a href="/register" class="boxed-btn3"><i class="fa fa-sign-in"> Registrasi</i></a>
                    <a href="/loginmasyarakat" class="boxed-btn3"> <i class="fa fa-sign-in"></i>
                        Login Masyarakat</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="/assetsuser/img/foto pengadu 1.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

</section><!-- End Hero -->

<main id="main">
    <section id="pengaduan" class="register">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 pt-4 pt-lg-0">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Form Pengaduan</h4>
                </div>
                <section class="inner-page">
                    <div class="container table-responsive">
                        <hr>
                        <p>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form form-group">
                                    <label for="textJudulPengaduan">Judul Pengaduan</label>
                                    <input type="text" class="form form-control" id="textJudulPengaduan">
                                </div>
                                <div class="form form-group mt-3">
                                    <label for="textIsiPengaduan">Isi Pengaduan</label>
                                    <textarea name="textIsiPengaduan" class="form form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form form-group mt-3">
                                    <label for="filePengaduan">Lampiran Foto Pengaduan</label> <br>
                                    <input type="file" name="filePengaduan" id="filePengaduan" class="form form-control" accept="image">
                                </div>
                                <div class="form form-group mt-3">
                                    <a href="/pengaduanku" class="btn btn-primary btn-md"> Simpan</a>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </section>
            </div>
        </div>
      </div>
    </section>
</main>


        </div>
      </div>
    <hr>
    </section>
        </div>
        </div>
    </div>
    </section><!-- End Contact Section -->
@endsection
