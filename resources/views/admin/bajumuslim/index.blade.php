@extends('layout.layoutAdmin')

@section('content')

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->

                @include('layout.menuAdminLayout')
                <!-- / Menu -->

                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->

                    @include('layout.navAdminLayout')

                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->

                        <div class="container-xxl flex-grow-1 container-p-y">

                            <div class="row">

                                <div class="col-md-12 grid-margin stretch-card">

                                    <div class="card shadow mb-4">
                                        <div class="card-body">
                                            <div class="container">
                                                <br>
                                                <!-- Modal Tambah Data -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    Tambah Data
                                                </button>

                                                <!-- Modal -->
                                                @include('admin.bajumuslim.formCreateBaju')
                                                <!-- /Modal -->

                                                <br><br>
                                                <div class="table table-responsive">
                                                    <table class="table table-hover">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Produk</th>
                                                                <th>Harga</th>
                                                                <th>Gambar</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($bajuMuslim as $item)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $item->nama }}</td>
                                                                    <td>{{ $item->harga }}</td>
                                                                    <td><img src="{{ $item->file != null ? '/storage/file/' . $item->file : '/img/not_found.jpg' }}"
                                                                            width="60px" height="60px"
                                                                            class="rounded-circle" draggable="false">
                                                                    <td>
                                                                        <a href="" type="button"
                                                                            class="btn btn-primary me-2"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#get-{{ $item->id }}">
                                                                            <i class="bi bi-pencil-square"></i> Edit</a>

                                                                        <a href="/menu-baju-muslim/{{ $item->id }}"
                                                                            type="submit" class="btn btn-danger"
                                                                            onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                                            <i class="bi bi-trash3-fill"></i>Delete
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </div><!-- /.card-shadow -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        </div>
        <!-- / Layout wrapper -->
        @foreach ($bajuMuslim as $data)
            <tr>
                <td>
                    @include('admin.bajumuslim.formEditBaju')
                </td>
            </tr>
        @endforeach
        </tbody>
    </body>
@endsection
