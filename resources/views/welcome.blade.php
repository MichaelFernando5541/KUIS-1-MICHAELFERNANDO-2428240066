<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center align-items-center min-vh-75">

            <div class="col-lg-8">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                    <!-- Header -->
                    <div class="bg-primary text-white text-center p-5">

                        <h1 class="display-5 fw-bold mb-3">
                            Sistem Tambah Fakultas
                        </h1>

                        <p class="lead mb-0">
                            Kelola data fakultas universitas dengan mudah & modern
                        </p>

                    </div>

                    <!-- Body -->
                    <div class="card-body p-5 bg-body-tertiary">

                        <div class="row g-4">

                            <!-- Card 1 -->
                            <div class="col-md-4">

                                <div class="card h-100 border-0 shadow rounded-4 text-center p-4 hover-card">

                                    <div class="mb-3">
                                        <i class="bi bi-building fs-1 text-primary"></i>
                                    </div>

                                    <h5 class="fw-bold">
                                        Data Fakultas
                                    </h5>

                                    <p class="text-muted small">
                                        Menyimpan informasi fakultas secara terstruktur.
                                    </p>

                                </div>

                            </div>

                            <!-- Card 2 -->
                            <div class="col-md-4">

                                <div class="card h-100 border-0 shadow rounded-4 text-center p-4 hover-card">

                                    <div class="mb-3">
                                        <i class="bi bi-person-badge fs-1 text-success"></i>
                                    </div>

                                    <h5 class="fw-bold">
                                        Data Dekan
                                    </h5>

                                    <p class="text-muted small">
                                        Mengelola nama dekan setiap fakultas dengan cepat.
                                    </p>

                                </div>

                            </div>

                            <!-- Card 3 -->
                            <div class="col-md-4">

                                <div class="card h-100 border-0 shadow rounded-4 text-center p-4 hover-card">

                                    <div class="mb-3">
                                        <i class="bi bi-shield-check fs-1 text-danger"></i>
                                    </div>

                                    <h5 class="fw-bold">
                                        Sistem Modern
                                    </h5>

                                    <p class="text-muted small">
                                        Dibangun menggunakan Laravel & Bootstrap 5 modern.
                                    </p>

                                </div>

                            </div>

                        </div>

                        <!-- Button -->
                        <div class="text-center mt-5">

                            <a href="/fakultas/create"
                                class="btn btn-primary btn-lg rounded-pill px-5 shadow">
                                + Tambah Fakultas
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Custom Style -->
    <style>

        .hover-card{
            transition: all 0.3s ease;
            transform-style: preserve-3d;
        }

        .hover-card:hover{
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 20px 35px rgba(0,0,0,0.2);
        }

        .min-vh-75{
            min-height: 75vh;
        }

    </style>

</x-layout>