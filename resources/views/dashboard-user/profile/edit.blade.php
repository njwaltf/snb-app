@extends('layouts.dashboard.app')
@section('container')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user-profile-update') }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    <div class="col-lg-4">
                        <img src="@if ($u->prof_pic > 0) {{ asset('storage/' . $u->prof_pic) }}
                        @else {{ asset('assets/images/profile/no-pp.png') }} @endif"
                            width="250" height="250" class="rounded-circle" id="preview-selected-image">
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <label for="full_name" class="form-label">Nama Lengkap</label>
                            <input type="text"
                                class="form-control @error('full_name')
                                is-invalid
                            @enderror"
                                id="full_name" name="full_name" value="{{ old('full_name', $u->full_name) }}">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email"
                                class="form-control @error('email')
                            is-invalid
                        @enderror"
                                id="email" name="email" value="{{ old('email', $u->email) }}">
                        </div>
                        <div class="mb-4">
                            <label for="grade" class="form-label">Kelas</label>
                            <select
                                class="form-select @error('grade')
                            is-invalid
                        @enderror"
                                aria-label="Default select example" id="grade" name="grade">
                                <option @if (!$u->grade) selected @endif value="{{ '100' }}">Belum
                                    diatur</option>
                                <option value="{{ '1' }}" @if ($u->grade === '1') selected @endif>X
                                </option>
                                <option value="{{ '2' }}" @if ($u->grade === '2') selected @endif>XI
                                </option>
                                <option value="{{ '3' }}" @if ($u->grade === '3') selected @endif>
                                    XII
                                </option>
                            </select>
                        </div>
                        {{-- btn-submit --}}
                        <button type="submit" class="btn btn-primary m-1">Simpan Profile</button>
                        <a href="/dashboard/profile" class="btn btn-outline-danger m-1">Batal</a>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text"
                                class="form-control @error('username')
                            is-invalid
                        @enderror"
                                id="username" name="username" value="{{ old('username', $u->username) }}">
                        </div>
                        <div class="mb-4">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="text"
                                class="form-control @error('nisn')
                            is-invalid
                        @enderror"
                                id="nisn" name="nisn" value="{{ old('nisn', $u->nisn) }}">
                        </div>
                        <div class="mb-4">
                            <label for="prof_pic" class="form-label">Upload Profile</label>
                            <input type="file" class="form-control" id="prof_pic" name="prof_pic"
                                value="{{ $u->prof_pic }}" onchange="previewImage(event);">
                        </div>
                        <input type="hidden" name="id" value="{{ $u->id }}">
                    </div>
                </div>
            </form>
        </div>
    </div>
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
