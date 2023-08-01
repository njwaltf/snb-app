@include('layouts.partials.header-login')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('assets/images/logos/dark-logo.svg') }}" width="180"
                                        alt="">
                                </a>
                                <p class="text-center">Buat Admin</p>
                                <form action="{{ route('admin-register') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Nama Lengkap</label>
                                        <input type="text"
                                            class="form-control @error('name')
                                        is-invalid
                                        @enderror"
                                            id="exampleInputtext1" aria-describedby="textHelp" name="name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <p class="invalid">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Buat Username</label>
                                        <input type="text"
                                            class="form-control @error('username')
                                        is-invalid
                                        @enderror"
                                            id="exampleInputtext1" aria-describedby="textHelp" name="username"
                                            value="{{ old('username') }}">
                                        @error('username')
                                            <p class="invalid">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                                        <input type="email"
                                            class="form-control  @error('email')
                                        is-invalid
                                        @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <p class="invalid">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control @error('password')
                                        is-invalid
                                        @enderror"
                                            id="exampleInputPassword1" name="password" value="{{ old('password') }}">
                                        @error('password')
                                            <p class="invalid">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="prof_pic" value="{{ 'profile/no-pp.png' }}">
                                    <input type="hidden" name="role" value="{{ 1 }}">
                                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit"
                                        name="submit">Daftar</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Sudah punya akun?</p>
                                        <a class="text-primary fw-bold ms-2" href="{{ route('admin-login') }}">Sign
                                            In</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.footer-login')
