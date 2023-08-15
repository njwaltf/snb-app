@extends('layouts.admin.app')
@section('container')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2><a href="/dashboard/admin/bully-types"><i class="ti ti-arrow-left"></i></a> Buat Laporan</h2>
        </div>
    </div>
    <form action="/dashboard/admin/bully-types/{{ $bullyType->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
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
                                    <label for="name" class="form-label">Nama Jenis Bully</label>
                                    <p>Buatlah sebutan nama dari jenis bully yang baru</p>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name',$bullyType->name) }}">
                                    @error('name')
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
                                    <label for="desc" class="form-label">Deskripsi dari Jenis Bully</label>
                                    <p>Buatlah penjelasan singkat mengenai jenis bully tersebut</p>
                                    <input id="desc" type="hidden" name="desc" value="{{ old('desc',$bullyType->desc) }}">
                                    <trix-editor input="desc"></trix-editor>
                                    @error('desc')
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
                                    <label for="title" class="form-label">Status</label>
                                    <p>Anda dapat menyembunyikan dan mendisplay jenis bully tertentu.</p>
                                    <select class="form-select @error('status') is-invalid @enderror"
                                        aria-label="Default select example" id="status" name="status">
                                        <option value="{{ 0 }}" @if ($bullyType->status === 0) selected @endif>Hide</option>
                                        <option value="{{ 1 }}" @if ($bullyType->status === 1) selected @endif>Show</option>
                                    </select>
                                    @error('status')
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
                        <h5 class="card-title">Upload Gambar</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-4">
                                    <label for="image" class="form-label">Upload Gambar Jenis Bully</label>
                                    <p>Upload gambar untuk setiap jenis bully agar pengguna dapat lebih tertarik. <strong>( note :
                                            wajib).</strong></p>
                                    <input type="file"
                                        class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="image" value="{{ old('image') }}"
                                        onchange="previewImage(event);">
                                        @if ($bullyType->image > 0)
                                        <img id="preview-selected-image" class="img-fluid m-2" width="400"
                                            height="250" src="{{ asset('storage/' . $bullyType->image) }}">
                                    @else
                                        <img id="preview-selected-image" class="img-fluid m-2" width="400"
                                            height="250">
                                    @endif
                                    @error('image')
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
                <button type="submit" class="btn btn-primary" style="margin-right: 15px">Edit Jenis <i
                        class="ti ti-edit"></i></button>
                <a href="/dashboard/admin/bully-types" class="btn btn-outline-warning">Batal</a>
            </div>
        </div>
    </form>
    {{-- @dd(url()->full()) --}}
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
