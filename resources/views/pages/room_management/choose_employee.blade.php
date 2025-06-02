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
                            Pilih Pegawai <a class="anchor-link" href="#default">#</a>
                        </h5>
                        <form method="POST" action="{{ route('room_management.room.employeeToRoom') }}" class="row g-4">
                            @csrf
                            <input type="hidden" name="ruangan_id" value="{{request()->ruangan_id}}">
                            <div class="col-md-4">
                                <label for="choices-multiple-groups" class="form-label text-muted">Pilih Pegawai</label>
                                <select class="form-control" id="choices-multiple-groups" name="employee_id" data-choices data-choices-multiple-groups="true" multiple>
                                    <option value="">Silangkan Pilih Pegawai</option>
                                    @foreach(
                                    $employees as $employee
                                    )
                                    <option value="{{$employee->reference->id}}">{{$employee->name?? 'Nama Tidak Ditemukan'}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Submit form</button>
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