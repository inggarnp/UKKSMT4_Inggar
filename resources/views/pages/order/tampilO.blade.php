@extends('layout.app_dashboard')
@section('content')
<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->

<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

    <!-- Start Container Fluid -->
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">
                                Data Employe
                            </h4>

                            <a href="{{ route('product_management.product.tambahP')}}" class="btn btn-sm btn-soft-primary">
                                <i class="bx bx-plus me-1"></i>Create Order
                            </a>
                        </div>
                    </div>
                    <!-- end card body -->
                    <div class="table-responsive table-centered">
                        <table class="table mb-0">
                            <thead class="bg-light bg-opacity-50">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Name Toko</th>
                                </tr>
                            </thead>
                            <!-- end thead-->
                            <tbody>

                                @forelse ($products as $i => $item)
                                <tr>
                                    <td>{{$i +1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>Rp {{ number_format($item->price, 0, ',', '.' )}}</td>
                                    <td>
                                        <div class="btn-group mb-2 ">
                                            <form action="{{ route('order.process') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                <input type="hidden" name="paid" value="{{ $item->price }}">
                                                <button role="button" class="btn btn-success" type="submit">Order Makanan</button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">Tidak ada data karyawan.</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <!-- end tbody -->
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- table responsive -->

                    <div class="card-footer border-top">
                        <div class="row g-3">
                            <div class="col-sm">
                                <div class="text-muted">
                                    Showing
                                    <span class="fw-semibold">5</span>
                                    of
                                    <span class="fw-semibold">90,521</span>
                                    orders
                                </div>
                            </div>

                            <div class="col-sm-auto">
                                <ul class="pagination m-0">
                                    <li class="page-item">
                                        <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
    </div>

    <!-- ========== Footer Start ========== -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                        href="https://1.envato.market/techzaa" class="fw-bold footer-text" target="_blank">Techzaa</a>
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