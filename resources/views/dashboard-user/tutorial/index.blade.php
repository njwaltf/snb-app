@extends('layouts.dashboard.app')
@section('container')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2>Tutorial menggunakan fitur laporan</h2>
        </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold mb-4">Cara membuat laporan</h5>
                    </div>
                    <div class="card-body p-4">
                        <p>Klik tombol <strong>buat laporan</strong> pada bagian atas website</p>
                        <p>Anda akan langsung diarahkan untuk mengisi form laporan. Isilah form laporan dengan baik dan benar sesuai dengan fakta agar laporan kamu akan segera diterima.</p>
                        <img src="{{ asset('assets/images/buat.png') }}" alt="" class="img-fluid text-center" width="200" height="200">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold mb-4">Bagaimana cara mengubah laporan yang sudah terkirim?</h5>
                    </div>
                    <div class="card-body p-4">
                        <p>Kamu dapat mengubahnya pada halaman laporan dan mengklik tombol edit pada laporan yang akan kamu ubah</p>
                        <img src="{{ asset('assets/images/edit.png') }}" alt="" class="img-fluid text-center" width="100" height="100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold mb-4">Bagaimana cara membatalkan laporan?</h5>
                    </div>
                    <div class="card-body p-4">
                        <p>Kamu dapat membatalkan laporan kamu pada halaman laporan dan mengklik tombol Batalkan pada laporan yang ingin kamu batalin.</p>
                        <img src="{{ asset('assets/images/hapus.png') }}" alt="" class="img-fluid text-center" width="100" height="100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold mb-4">Berapa lama laporan saya akan diproses?</h5>
                    </div>
                    <div class="card-body p-4">
                        <p>Laporan kamu akan diproses dalam 3 hari kerja. Jika ada status terbaru dari laporan kamu nantinya kamu akan diberikan notifikasi. Kamu dapat melihat notifikasi pada navigasi</p>
                        <img src="{{ asset('assets/images/notif.png') }}" alt="" class="img-fluid text-center" width="200" height="200">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
