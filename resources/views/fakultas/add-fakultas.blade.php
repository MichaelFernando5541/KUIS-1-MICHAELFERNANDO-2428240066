<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-7 col-lg-6">

                <div class="card border-0 shadow-lg rounded-4">

                    <div class="card-header bg-dark text-white p-4 rounded-top-4">
                        <h3 class="mb-1 fw-bold">
                            Tambah Fakultas
                        </h3>

                        <p class="mb-0 text-light">
                            Form input data fakultas universitas
                        </p>
                    </div>

                    <div class="card-body p-4">
                          @if ($errors->any())
                              <div class="alert alert-danger">
                                <ul>
                                    @foreach ( $errors->all() as $error)
                                       <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>      
                          
                          @endif 

                        <form action="/fakultas" method="POST">
                            @csrf

                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Nama Fakultas
                                </label>

                                <input
                                    name="nama_fakultas"
                                    type="text"
                                    placeholder="Contoh : Fakultas Teknik"
                                    class="form-control form-control-lg rounded-3"
                                >

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Nama Dekan
                                </label>

                                <input
                                    name="nama_dekan"
                                    type="text"
                                    placeholder="Contoh : Dr. Budi Santoso"
                                    class="form-control form-control-lg rounded-3"
                                >

                            </div>

                            <div class="d-flex justify-content-between">

                                <a href="/fakultas" class="btn btn-outline-secondary px-4 rounded-3">
                                    Kembali
                                </a>

                                <button
                                    type="submit"
                                    class="btn btn-dark px-4 rounded-3 fw-semibold"
                                >
                                    Simpan Data
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>