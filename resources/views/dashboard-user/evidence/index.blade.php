@extends('layouts.dashboard.app')
@section('container')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <p class="h3">Lihat bukti terakhir anda</p>
        </div>
        <div class="row">
            @foreach ($evidences as $evidence)
                <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="/dashboard/reports/{{ $evidence->id }}"><img src="{{ asset('storage/'. $evidence->evidence_img) }}"
                                class="card-img-top rounded-0" alt="..."></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-4">{{ $evidence->title }}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
