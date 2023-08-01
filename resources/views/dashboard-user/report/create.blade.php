@extends('layouts.dashboard.app')
@section('container')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2><a href="/dashboard/reports"><i class="ti ti-arrow-left"></i></a> Buat Laporan</h2>
        </div>
    </div>
    <form action="/dashboard/reports" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="status" value="{{ 'Dalam Proses' }}">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informasi Utama</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="title" class="form-label">Judul Laporan</label>
                                    <p>Buatlah judul laporan sesuai dengan deskripsi laporan anda.</p>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" name="title" value="{{ old('title') }}">
                                    @error('title')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="bully_desc" class="form-label">Deskripsi Laporan</label>
                                    <p>Ceritakan serta deskripsikan bagaimana kejadian tersebut dengan bahasa yang sopan
                                        serta
                                        jelas.</p>
                                    <input id="bully_desc" type="hidden" name="bully_desc" value="{{ old('bully_desc') }}">
                                    <trix-editor input="bully_desc"></trix-editor>
                                    @error('bully_desc')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="title" class="form-label">Jenis Bully</label>
                                    <p>Pilih satu jenis bully sesuai dengan kejadian yang sebenarnya. <a
                                            href="https://www.sudahdong.com/tentang-bullying/" target="_blank">Info
                                            Selengkapnya</a></p>
                                    <select class="form-select @error('bully_type_id') is-invalid @enderror"
                                        aria-label="Default select example" id="bully_type_id" name="bully_type_id">
                                        @foreach ($bully_types as $bully_type)
                                            <option value="{{ $bully_type->id }}">{{ $bully_type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('bully_type_id')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="title" class="form-label">Tipe Laporan</label>
                                    <p>Anda dapat membuat laporan secara anonim dan publik. <a href="#"
                                            target="_blank">Info
                                            Selengkapnya</a></p>
                                    <select class="form-select @error('isAnonym') is-invalid @enderror"
                                        aria-label="Default select example" id="isAnonym" name="isAnonym">
                                        <option value="{{ 0 }}">Publik</option>
                                        <option value="{{ 1 }}">Anonim</option>
                                    </select>
                                    @error('isAnonym')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- tersangka dan korban --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informasi Tersangka & Korban</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="suspect_total" class="form-label">Jumlah Tersangka</label>
                                    <p>Berapa jumlah tersangka pelaku bullying.</p>
                                    <input type="number" class="form-control @error('suspect_total') is-invalid @enderror"
                                        id="suspect_total" name="suspect_total" value="{{ old('suspect_total') }}">
                                    @error('suspect_total')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="mb-4">
                                    <label for="suspect_name" class="form-label">Nama Tersangka</label>
                                    <p>Sebutkan nama lengkap tersangka pelaku bullying.</p>
                                    <input type="text" class="form-control @error('suspect_name') is-invalid @enderror"
                                        id="suspect_name" name="suspect_name" value="{{ old('suspect_name') }}">
                                    @error('suspect_name')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="victim_total" class="form-label">Jumlah Korban</label>
                                    <p>Berapa jumlah korban pelaku bullying.</p>
                                    <input type="number" class="form-control @error('victim_total') is-invalid @enderror"
                                        id="victim_total" name="victim_total" value="{{ old('victim_total') }}">
                                    @error('victim_total')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="mb-4">
                                    <label for="victim_name" class="form-label">Nama Korban</label>
                                    <p>Sebutkan nama lengkap korban bullying.</p>
                                    <input type="text" class="form-control @error('victim_name') is-invalid @enderror"
                                        id="victim_name" name="victim_name" value="{{ old('victim_name') }}">
                                    @error('victim_name')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- latar tempat dan waktu --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informasi Tempat & Waktu Kejadian</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="date" class="form-label">Waktu Kejadian</label>
                                    <p>Kapan terakhir atau pertama kali kejadian terjadi.</p>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                                        id="date" name="date" value="{{ old('date') }}">
                                    @error('date')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="mb-4">
                                    <label for="place" class="form-label">Tempat Kejadian</label>
                                    <p>Dimana tempat kejadin bullying berlangsung <strong>( note : jika terjadi secara
                                            online
                                            maka
                                            sebutkan platformnya).</strong></p>
                                    <input type="text" class="form-control @error('place') is-invalid @enderror"
                                        id="place" name="place" value="{{ old('place') }}">
                                    @error('place')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="incident_total" class="form-label">Total Kejadian</label>
                                    <p>Berapa kali kejadian bullying tersebut terjadi.</p>
                                    <input type="number"
                                        class="form-control @error('incident_total') is-invalid @enderror"
                                        id="incident_total" name="incident_total" value="{{ old('incident_total') }}">
                                    @error('incident_total')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="mb-4">
                                    <label for="evidence_img" class="form-label">Upload Bukti Bullying</label>
                                    <p>Upload gambar sebagai dari laporan bullying kamu jika kamu punya <strong>( note :
                                            Tidak
                                            wajib).</strong></p>
                                    <input type="file"
                                        class="form-control @error('evidence_img') is-invalid @enderror"
                                        id="evidence_img" name="evidence_img" value="{{ old('evidence_img') }}"
                                        onchange="previewImage(event);">
                                    <img id="preview-selected-image" class="img-fluid m-2" width="400"
                                        height="250">
                                    @error('evidence_img')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <button type="submit" class="btn btn-primary" style="margin-right: 15px">Kirim Laporan <i
                        class="ti ti-send"></i></button>
                <a href="/dashboard/reports" class="btn btn-outline-warning">Batal</a>
            </div>
        </div>
    </form>
    <script>
        const previewImage = (event) => {
            /**
             * Get the selected files.
             */
            const imageFiles = event.target.files;
            /**
             * Count the number of files selected.
             */
            const imageFilesLength = imageFiles.length;
            /**
             * If at least one image is selected, then proceed to display the preview.
             */
            if (imageFilesLength > 0) {
                /**
                 * Get the image path.
                 */
                const imageSrc = URL.createObjectURL(imageFiles[0]);
                /**
                 * Select the image preview element.
                 */
                const imagePreviewElement = document.querySelector("#preview-selected-image");
                /**
                 * Assign the path to the image preview element.
                 */
                imagePreviewElement.src = imageSrc;
                /**
                 * Show the element by changing the display value to "block".
                 */
                imagePreviewElement.style.display = "block";
            }
        };
    </script>
@endsection
