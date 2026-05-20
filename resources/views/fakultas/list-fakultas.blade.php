<x-layout>

    <div class="container mt-5">

        <div class="card shadow-sm border-0">
            
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0">List Fakultas</h3>

                <a href="/fakultas/create" class="btn btn-light btn-sm">
                    + Tambah Fakultas
                </a>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-striped table-hover align-middle">
                        
                        <thead class="table-dark">
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama Fakultas</th>
                                <th>Nama Dekan</th>
                                <th width="25%">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($fakultas as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        <strong>{{ $item->nama_fakultas }}</strong>
                                    </td>

                                    <td>{{ $item->nama_dekan }}</td>

                                    <td>

                                        <a href="/fakultas/{{ $item->id }}"
                                            class="btn btn-info btn-sm">
                                            Detail
                                        </a>

                                        <a href="/fakultas/{{ $item->id }}/edit"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="/fakultas/{{ $item->id }}"
                                            method="POST"
                                            class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>

                                        </form>

                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">
                                        Data fakultas belum tersedia
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</x-layout>