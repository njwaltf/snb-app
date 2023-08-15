@extends('layouts.main')
@section('container')
    <!-- Header-->
    <header class="bg-dark py-5" id="header">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Say No to Bullying!</h1>
                        {{-- <h1 class="display-5 fw-bolder text-white mb-2">Hai {{ auth()->user()->username }}</h1> --}}
                        <p class="lead text-white-50 mb-4">Ciptakan lingkungan sekolah yang sehat serta ramah anak. Jangan
                            takut untuk melaporkan kasus bully kami siap menampung laporan anda</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/register">Buat Laporan</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#features">Pelajari Lebih</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person-lock"></i>
                    </div>
                    <h2 class="h4 fw-bolder">Kerahasiaan</h2>
                    <p>Kamu dapat membuat laporan sebagai anonim (tanpa identitas) sehingga anda tak perlu khawatir akan identitas saat melapor disini.</p>
                    <a class="text-decoration-none" href="#!">
                        Lihat detail
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person-heart"></i>
                    </div>
                    <h2 class="h4 fw-bolder">Keamanan</h2>
                    <p>Kami menyediakan dan menjaga keamanan data serta identitas anda tidak perlu khawatir akan kebocoran data dan kerahasiaan.</p>
                    <a class="text-decoration-none" href="#!">
                        Lihat detail
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-stopwatch"></i>
                    </div>
                    <h2 class="h4 fw-bolder">Kecepatan</h2>
                    <p>Kami menyediakan layanan laporan yang cepat dan mudah digunakan.Laporan kamu akan kami proses secepat mungkin maksimal 3 hari kerja.</p>
                    <a class="text-decoration-none" href="#!">
                        Lihat detail
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section-->
    <section class="py-5 border-bottom" id="testimoni">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Apa Kata Mereka?</h2>
                <p class="lead mb-0">Lihat testimoni dari beberapa orang</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <!-- Testimonial 1-->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-1">Terima kasih berkat adanya website ini aku jadi lebih happy disekolah para pembully sudah diproses sekolah
                                    </p>
                                    <div class="small text-muted">Anonim</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2-->
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-1">Aku pernah di-bully hingga tas ku dibongkar oleh teman sekelas ku, sehingga aku tidak tahan dan memutuskan untuk pindah sekolah. Tapi aku takut mau lapor guru, semenjak ada aplikasi ini aku jadi bisa melaporkan tindakan bully tanpa khawatir deh</p>
                                    <div class="small text-muted">Fadilah</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
