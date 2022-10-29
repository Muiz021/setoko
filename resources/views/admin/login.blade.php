<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teman Masjid | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>


    <div class="container">
        <section id="login">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-3">
                    <img src="{{ asset('assets/image/bglogin.png') }}" alt="" width="100%">
                </div>
                <div class="col-lg-6 col-md-12 mb-3">
                    <form action="{{ '/dashboard-admin' }}" method="POST">
                        @csrf
                        <div class="card">
                            @if (session('status'))
                                <div class="alert alert-danger">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <div class="mb-1">
                                <p class="title">Login Admin</p>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input name="username" type="text" class="form-control" id="username"
                                    placeholder="Masukkan Username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="password"
                                    placeholder="Masukkan Password" required>
                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn px-4">Login <i
                                        class="bi bi-box-arrow-in-right"></i></button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
