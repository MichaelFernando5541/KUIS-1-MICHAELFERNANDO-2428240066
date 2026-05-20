<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="card border-0 shadow-lg rounded-4">

                    <!-- Header -->
                    <div class="card-header bg-warning text-dark p-4 rounded-top-4">

                        <h3 class="fw-bold mb-1">
                            Edit Data Fakultas
                        </h3>

                        <p class="mb-0">
                            Ubah informasi fakultas dengan mudah
                        </p>

                    </div>

                    <!-- Body -->
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

                        <form action="/fakultas/{{ $fakultas->id }}" method="POST">

                            @csrf
                            @method("PUT")

                            <!-- Nama Fakultas -->
                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Nama Fakultas
                                </label>

                                <input
                                    name="nama_fakultas"
                                    type="text"
                                    placeholder="Masukkan nama fakultas"
                                    class="form-control form-control-lg rounded-3"
                                    value="{{ $fakultas->nama_fakultas }}"
                                >

                            </div>

                            <!-- Nama Dekan -->
                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Nama Dekan
                                </label>

                                <input
                                    name="nama_dekan"
                                    type="text"
                                    placeholder="Masukkan nama dekan"
                                    class="form-control form-control-lg rounded-3"
                                    value="{{ $fakultas->nama_dekan }}"
                                >

                            </div>

                            <!-- Button -->
                            <div class="d-flex justify-content-between">

                                <a href="/fakultas"
                                    class="btn btn-outline-secondary px-4 rounded-3">
                                    Kembali
                                </a>

                                <button
                                    type="submit"
                                    class="btn btn-warning px-4 rounded-3 fw-semibold shadow-sm"
                                >
                                    Update Data
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>