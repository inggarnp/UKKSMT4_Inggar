@extends('layout.app_dashboard')
@section('content')
<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

    <!-- Start Container Fluid -->
    <div class="container">

        <div class="row">
            <div class="col-xl-12"> <!-- Ubah dari col-xl-9 menjadi col-xl-12 -->
                <div class="card p-4"> <!-- Tambahkan padding -->
                    <div class="card-body">
                        <h5 class="card-title mb-3 anchor" id="browser-defaults">
                            Browser Default <a class="anchor-link" href="#default">#</a>
                        </h5>
                        <form method="POST" action="{{ route('employee.store') }}" class="row g-4">
                            @csrf

                            <input type="hidden" name="status" value="active">
                            <input type="hidden" name="role" value="user">

                            <div class="col-md-4">
                                <label for="no_pegawai" class="form-label">No Pegawai</label>
                                <input type="text" id="no_pegawai" name="no_pegawai" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label for="hire" class="form-label">Hire Date</label>
                                <input type="date" id="hire" class="form-control" placeholder="Basic datepicker" name="hire_date">
                            </div>

                            <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label for="Username" class="form-label">Username</label>
                                <input type="text" id="Username" name="username" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label for="pob" class="form-label">Place and Date of Birth</label>
                                <div class="input-group">
                                    <input type="text" id="pob" name="pob" class="form-control" placeholder="Place">
                                    <input type="date" name="dob" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control" required placeholder="Masukkan Password">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required placeholder="Konfirmasi Password">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="d-flex align-items-center gap-3 ps-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" id="L" value="laki-laki">
                                        <label class="form-check-label" for="L">Laki - Laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" id="P" value="perempuan">
                                        <label class="form-check-label" for="P">Perempuan</label>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="col-md-3">
                                <label for="saldo" class="form-label">Saldo</label>
                                <input type="text" id="saldo" name="saldo" class="form-control">
                            </div>-->

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100" style="background-color: #ff6c2c; border: none; border-radius: 10px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- End Container Fluid -->

    <!-- ========== Footer Start ========== -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Larkon. Crafted by
                    <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon>
                    <a href="https://1.envato.market/techzaa" class="fw-bold footer-text" target="_blank">Techzaa</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== Footer End ========== -->

</div>
<!-- ==================================================== -->
<!-- End Page Content -->
<!-- ==================================================== -->
@endsection