@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Surat Keluar
        @endslot
        @slot('li_1')
            Surat Keluar
        @endslot
        @slot('li_2')
            Daftar
        @endslot
        @slot('action_button')
            <a href="{{ route('app.admin.surat-keluar.create') }}" class="btn btn-primary btn-md">
                <i class="fa fa-plus"></i> Buat Surat
            </a>
        @endslot
    @endcomponent

    <x-alert />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="get">
                        <div class="row filter-row">
                            <div class="col-md-2">
                                <div class="input-block form-focus select-focus focused">
                                    <input type="date" class="form-control" name="startdate" value="{{ $startdate }}"
                                        id="start-date">
                                    <label class="focus-label">Tanggal Awal </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-block form-focus select-focus focused">
                                    <input type="date" class="form-control" name="enddate" value="{{ $enddate }}"
                                        id="end-date">
                                    <label class="focus-label">Tanggal Akhir </label>
                                </div>
                            </div>

                            <div class="col-md-8 col-12">
                                <div class="col-md-8 float-start">
                                    <button type="submit"
                                        onclick="javascript: form.action='{{ route('app.admin.surat-keluar.index') }}';"
                                        class="btn btn-primary w-20 btn-sm ">Filter Data
                                    </button>
                                    <button type="submit" target="_blank"
                                        onclick="javascript: form.action='{{ route('app.admin.surat-keluar.export') }}';"
                                        class="btn btn-success w-20 btn-sm">Download Data</button>

                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="tab-content">
                        <div class="tab-pane show active">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table no-footer mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>Tgl Pengiriman</th>
                                            <th>Tanggal Surat</th>
                                            <th>Nama Instansi</th>
                                            <th>Nomor Surat</th>
                                            <th>Perihal</th>
                                            <th>Isi Surat</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($surats as $suratKeluar)
                                            <tr>
                                                <td>{{ Carbon\Carbon::parse($suratKeluar->tgl_surat_masuk)->isoFormat('D MMMM Y') }}
                                                <td>{{ Carbon\Carbon::parse($suratKeluar->tgl_surat)->isoFormat('D MMMM Y') }}
                                                <td>{{ $suratKeluar->nama_instansi_dituju }}</td>
                                                <td>{{ $suratKeluar->nomor_surat }}</td>
                                                <td>{{ $suratKeluar->perihal }}</td>
                                                <td>{!! wordwrap($suratKeluar->deskripsi_surat, 20, "<br>\n") !!}</td>
                                                <td>
                                                    @if (!empty($suratKeluar->file))
                                                    <a href="#" class="btn btn-outline-warning btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#show_file_{{ $suratKeluar->id }}">
                                                        Lihat File
                                                    </a>
                                                    @include('admin.surat_keluar.modal.show_file')
                                                @else
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#upload_file_{{ $suratKeluar->id }}">
                                                        Upload File
                                                    </a>
                                                    @include('admin.surat_keluar.modal.upload_file')
                                                @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('app.admin.surat-keluar.edit', [$suratKeluar->id]) }}"
                                                        class="btn btn-sm btn-warning">
                                                        Edit
                                                    </a>
                                                    <button type="button"
                                                        data-action="{{ route('app.admin.surat-keluar.remove', $suratKeluar->id) }}"
                                                        class="btn btn-danger btn-sm btn-delete btn-sm">
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('.datatable').dataTable({
                destroy: true,
                order: [
                    [0, 'desc']
                ],
            });
        });
        $(document).ready(function() {
            $('body').on('click', '.btn-delete', function() {
                var action = $(this).data('action');
                var id = $(this).data('id');
                swal.fire({
                    title: "Apakah Anda Yakin?",
                    text: "Anda yakin menghapus data ini?",
                    icon: "info",
                    showCancelButton: true,
                    confirmButtonText: "Hapus!",
                    cancelButtonText: "Batal!",
                    // reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: action,
                            type: 'DELETE',
                            cache: false,
                            dataType: 'json',
                            data: {
                                id: id,
                                _token: "{{ csrf_token() }}",
                            },
                            success: function(response) {
                                Swal.fire({
                                    type: 'success',
                                    icon: 'success',
                                    title: `${response.message}`,
                                    showConfirmButton: true,
                                    timer: 6000
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
