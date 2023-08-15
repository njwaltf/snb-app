@extends('layouts.admin.app')
@section('container')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            @foreach ($admins as $admin)
                <h2>Kelola Jenis Bully</h2>
            @endforeach
        </div>
        @if (session()->has('successDelete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {!! session('successDelete') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('successEdit'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {!! session('successEdit') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! session('success') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Tipe Bully</h5>
                        <div class="table-responsive">
                            {{-- <form action="/dashboard/admin/reports" method="get" class="d-inline">
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
                                    <div class="col-lg-3">
                                        <select name="isAnonym" class="form-select" style="margin-top: 30px">
                                            <option value="">Semua</option>
                                            <option value="{{ 0 }}">Publik</option>
                                            <option value="{{ 1 }}">Anonim</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3" style="padding-top: 31px">
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    </div>
                                </div>
                            </form> --}}
                            <table class="table text-nowrap mb-0 align-middle table-hover display" id="myTable">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">No</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nama</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Status</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Aksi</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($bullyTypes as $bullyType)
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $bullyType->name }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                @if ($bullyType->status === 0)
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="badge bg-danger rounded-3 fw-semibold">Hide <i class="ti ti-eye-off"></i></span>
                                                    </div>
                                                @endif
                                                @if ($bullyType->status === 1)
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge bg-primary rounded-3 fw-semibold">Show <i
                                                            class="ti ti-eye"></i></span>
                                                </div>   
                                                @endif
                                            </td>
                                            <td class="border-bottom-0">
                                                <a href="/dashboard/admin/bully-types/{{ $bullyType->id }}"
                                                    class="btn btn-info m-1">Detail <i class="ti ti-arrow-right"></i></a>
                                                <form action="/dashboard/admin/bully-types/{{ $bullyType->id }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger m-1" type="submit"
                                                        onclick="return confirm('Apakah kamu yakin ingin menghapus jenis ini?')">Hapus
                                                        <i class="ti ti-circle-x"></i></button>
                                                </form>
                                                <a href="/dashboard/admin/bully-types/{{ $bullyType->id }}/edit"
                                                    class="btn btn-warning m-1">Ubah <i class="ti ti-edit"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>
                                                Belum ada laporan
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
    </div>
@endsection
