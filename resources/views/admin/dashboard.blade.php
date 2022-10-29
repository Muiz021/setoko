@extends('layout.layoutAdmin')

@section('title', 'Dashboard - Admin')

@section('content')
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



                    </div>
                </div>
            </div>

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
</div>
@endsection
