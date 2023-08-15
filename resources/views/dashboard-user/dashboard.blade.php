@extends('layouts.dashboard.app')
@section('container')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2>Selamat Datang {{ auth()->user()->full_name }}!</h2>
        </div>
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Laporan Terakhir Anda</h5>
                        <div class="table-responsive">
                            {{-- gabisa bjir :v --}}
                            {{-- <form action="/dashboard/reports" method="get" class="d-inline">
                                @csrf
                                <div class="row my-3">
                                    <div class="col-lg-3">
                                        <label for="" class="form-label">Filter Status</label>
                                        <select name="status" class="form-select">
                                            <option value="">Semua</option>
                                            <option value="Dalam Proses">Dalam Proses</option>
                                            <option value="Telah Diterima">Telah Diterima</option>
                                            <option value="Ditolak">Ditolak</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3" style="padding-top: 31px">
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    </div>
                                </div>
                            </form> --}}
                            <table class="table text-nowrap mb-0 align-middle table-hover display">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">No</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Judul</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Korban</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Jenis</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Status</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tipe</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($reports as $report)
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $report->title }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1">{{ $report->victim_name }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">{{ $report->bully_type->name }}</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    @if ($report->status == 'Dalam Proses')
                                                        <span
                                                            class="badge bg-warning rounded-3 fw-semibold">{{ $report->status }}</span>
                                                    @elseif($report->status == 'Telah Diterima')
                                                        <span
                                                            class="badge bg-success rounded-3 fw-semibold">{{ $report->status }}</span>
                                                    @elseif($report->status == 'Ditolak')
                                                        <span
                                                            class="badge bg-danger rounded-3 fw-semibold">{{ $report->status }}</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="border-bottom-0">
                                                @if ($report->isAnonym == 0)
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="badge bg-secondary rounded-3 fw-semibold">Publik <i
                                                                class="ti ti-eye-check"></i></span>
                                                    </div>
                                                @else
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="badge bg-dark rounded-3 fw-semibold">Anonim <i
                                                                class="ti ti-spy"></i></span>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>
                                                Tidak ada laporan
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="h3">Lihat bukti terakhir anda</p>
            @foreach ($evidences as $evidence)
                <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="/dashboard/reports/{{ $evidence->id }}"><img src="{{ asset('storage/'. $evidence->evidence_img) }}"
                                class="card-img-top rounded-0" alt="..."></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-4">{{ $evidence->title }}</h6>
                        {{-- <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold fs-4 mb-0">{{ $evidence-> }}</h6>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
