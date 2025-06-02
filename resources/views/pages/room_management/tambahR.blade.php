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
                        <form method="POST" action="{{ route('room_management.room.store') }}" class="row g-4">
                            @csrf

                            <div class="col-md-4">
                                <label for="nis" class="form-label">Nomer Ruangan</label>
                                <input type="text" id="nis" name="no" class="form-control" placeholder="Nomer Ruangan">
                            </div>

                            <div class="col-md-4">
                                <label for="nisn" class="form-label">Nama Ruangan</label>
                                <input type="text" id="nisn" name="name" class="form-control" placeholder="Nama Ruangan">
                            </div>

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