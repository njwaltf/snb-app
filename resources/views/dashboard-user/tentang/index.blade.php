@extends('layouts.dashboard.app')
@section('container')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2>Cari tau tentang bully</h2>
        </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold mb-4">Apa itu Bully?</h5>
                    </div>
                    <div class="card-body p-4">
                        <p>Bullying (dikenal sebagai “penindasan/risak” dalam bahasa Indonesia) merupakan segala bentuk penindasan atau kekerasan yang dilakukan dengan sengaja oleh satu atau sekelompok orang yang lebih kuat atau berkuasa terhadap orang lain, bertujuan untuk menyakiti dan dilakukan secara terus menerus.</p>
                        <img src="{{ asset('assets/images/tentang.png') }}" alt="" class="img-fluid text-center" width="200" height="200">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold mb-4">Bullying berbentuk apa saja?</h5>
                    </div>
                    <div class="card-body p-4">
                        <p>Bullying terbagi menjadi 4 bentuk, Bullying Verbal, Bullying Fisik, Bullying Relasional, dan Cyber Bullying.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 my-3 mx-4" style="m">
            <h2>Macam Bentuk Bullying</h2>
        </div>
        @foreach ($types as $type)
            <div class="col-lg-6 d-flex align-items-stretch p-3">
                <div class="card w-100">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold mb-4">{{ $type->name }}</h5>
                    </div>
                    <div class="card-body p-4">
                        <p>{!! $type->desc !!}</p>
                        <img src="{{ asset('storage/'.$type->image) }}" alt="" class="img-fluid text-center" width="200" height="200">
                    </div>
                </div>
            </div>
        @endforeach  
    </div>
@endsection
