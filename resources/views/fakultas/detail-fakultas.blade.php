<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                    <!-- Header -->
                    <div class="bg-primary text-white p-4">

                        <h2 class="fw-bold mb-1">
                            Detail Fakultas
                        </h2>

                        <p class="mb-0">
                            Informasi lengkap data fakultas
                        </p>

                    </div>

                    <!-- Body -->
                    <div class="card-body p-4">

                        <table class="table table-borderless align-middle">

                            <tbody>

                                <tr>
                                    <th width="35%" class="text-secondary">
                                        Nama Fakultas
                                    </th>

                                    <td width="5%">:</td>

                                    <td>
                                        <span class="fw-semibold">
                                            {{ $fakultas->nama_fakultas }}
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="text-secondary">
                                        Nama Dekan
                                    </th>

                                    <td>:</td>

                                    <td>
                                        <span class="fw-semibold">
                                            {{ $fakultas->nama_dekan }}
                                        </span>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                        <div class="mt-4 d-flex justify-content-end">

                            <a href="/fakultas"
                                class="btn btn-primary rounded-3 px-4">
                                Kembali
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>