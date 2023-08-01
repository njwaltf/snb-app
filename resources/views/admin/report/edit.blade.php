@extends('layouts.admin.app')
@section('container')
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2><a href="/dashboard/admin/reports"><i class="ti ti-arrow-left"></i></a> Detail Laporan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-3">{{ $report->title }}</h5>
                </div>
                <div class="card-body p-3">
                    {!! $report->bully_desc !!}
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-1">Informasi Lanjutan</h5>
                </div>
                <div class="card-body p-3">
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Tempat Kejadian <i class="ti ti-map-pins"></i></strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $report->place }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Waktu Kejadian <i class="ti ti-calendar-stats"></i></strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $report->date }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Status</strong>
                        </div>
                        <div class="col-lg-6">
                            @if ($report->status == 'Dalam Proses')
                                <span class="badge bg-warning rounded-3 fw-semibold mx-1">{{ $report->status }}</span>
                            @elseif($report->status == 'Telah Diterima')
                                <span class="badge bg-success rounded-3 fw-semibold mx-1">{{ $report->status }}</span>
                            @elseif($report->status == 'Ditolak')
                                <span class="badge bg-danger rounded-3 fw-semibold mx-1">{{ $report->status }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Dibuat pada</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $report->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Dilaporkan oleh</strong>
                        </div>
                        <div class="col-lg-6">
                            @if ($report->isAnonym == 0)
                                <p><strong>{{ $report->user->full_name }}</strong></p>
                            @else
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-dark rounded-3 fw-semibold">Anonim <i
                                            class="ti ti-spy"></i></span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-3">Detail Tersangka dan Korban</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle table-hover" wid>
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="mb-0" style="font-weight: 900;">Nama Korban</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="mb-0" style="font-weight: 900;">Nama Tersangka</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $report->victim_name }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $report->suspect_name }}</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-3">Status Laporan</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <label for="title" class="form-label">Proses Status Laporan</label>
                        <p>Anda dapat menolak atau menerima laporan dari pengguna</p>
                        <form action="/dashboard/admin/reports/{{ $report->id }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <select class="form-select @error('status') is-invalid @enderror"
                                aria-label="Default select example" id="status" name="status">
                                <option value="{{ 'Dalam Proses' }}" @if ($report->status === 'Dalam Proses') selected @endif>
                                    Dalam
                                    Proses
                                </option>
                                <option value="{{ 'Telah Diterima' }}" @if ($report->status === 'Telah Diterima') selected @endif>
                                    Terima
                                    Laporan
                                </option>
                                <option value="{{ 'Ditolak' }}" @if ($report->status === 'Ditolak') selected @endif>
                                    Tolak
                                    Laporan
                                </option>
                            </select>
                            <button type="submit" class="btn btn-primary my-4" style="margin-right: 15px;">Perbarui
                                Status Laporan
                                <i class="ti ti-checkup-list"></i></button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        @if ($report->evidence_img)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-3">Gambar Bukti</h5>
                    </div>
                    <div class="card-body p-3">
                        <img src="{{ asset('storage/' . $report->evidence_img) }}" width="500" height="300"
                            class="m-2">
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
