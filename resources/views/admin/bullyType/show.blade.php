@extends('layouts.admin.app')
@section('container')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2><a href="/dashboard/admin/bully-types"><i class="ti ti-arrow-left"></i></a> Detail Laporan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-3">{{ $bullyType->name }}</h5>
                </div>
                <div class="card-body p-3">
                    {!! $bullyType->desc !!}
                    <div class="row my-3">
                        <div class="col-lg-3">
                            <p>Status</p>
                        </div>
                        <div class="col-lg-3">
                            @if ($bullyType->status === 0)
                                {{-- hide --}}
                                <span class="badge bg-danger rounded-3 fw-semibold">Hide <i class="ti ti-eye-off"></i></span>
                            @else
                                {{-- show --}}
                                <span class="badge bg-primary rounded-3 fw-semibold">Show <i
                                    class="ti ti-eye"></i></span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($bullyType->image)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-3">Gambar Ilustrasi</h5>
                    </div>
                    <div class="card-body p-3">
                        <img src="{{ asset('storage/' . $bullyType->image) }}" width="500" height="300"
                            class="m-2">
                    </div>
                </div>
            </div>
        @endif
    </div>
    {{-- <div class="row">
        <div class="col-lg-6">

        </div>
    </div> --}}
@endsection
