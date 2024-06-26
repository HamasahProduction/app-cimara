@extends('layout.mainSurat')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Surat Keterangan Ahli Waris
        @endslot
        @slot('li_1')
            Keterangan Ahli Waris
        @endslot
        @slot('li_2')
            Form Tambah Baru
        @endslot
    @endcomponent

    <x-alert />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="{{ route('app.admin.surat-keterangan-ahli-waris.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="input-block row">
                                <div class="col-lg-12">
                                    <small class="text-muted"> <strong>FORM PENDUDUK TERDAFTAR:</strong></small>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Nama Pewaris<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" name="nama_pewaris" maxlength="255" minlength="5"
                                        class="form-control @error('nama_pewaris') is-invalid @enderror"
                                        value="{{ old('nama_pewaris') }}">
                                    <div class="invalid-feedback">
                                        @error('nama_pewaris')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Alamat Pewaris<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" name="alamat_pewaris" maxlength="255" minlength="5"
                                        class="form-control @error('alamat_pewaris') is-invalid @enderror"
                                        value="{{ old('alamat_pewaris') }}">
                                    <div class="invalid-feedback">
                                        @error('alamat_pewaris')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Penerima Ahli Waris <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <select name="nik_ahli_waris[]" id="nik_ahli_waris" multiple="multiple"
                                        class="select2 form-control @error('nik_ahli_waris') is-invalid @enderror"
                                        value="{{ old('nik_ahli_waris') }}">
                                        @foreach ($penduduks as $penduduk)
                                        <option value="{{ $penduduk->nik }}">NIK : {{ $penduduk->nik }} | {{ $penduduk->nama_lengkap }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        @error('nik_ahli_waris')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Tanggal Surat<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="date" name="tgl_surat" maxlength="255" minlength="5"
                                        class="form-control @error('tgl_surat') is-invalid @enderror"
                                        value="{{ old('tgl_surat') }}">
                                    <div class="invalid-feedback">
                                        @error('tgl_surat')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Ketua RT<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" name="nama_ketua_rt" maxlength="255" minlength="3"
                                        class="form-control @error('nama_ketua_rt') is-invalid @enderror"
                                        value="{{ old('nama_ketua_rt') }}">
                                    <div class="invalid-feedback">
                                        @error('nama_ketua_rt')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Ketua RW<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" name="nama_ketua_rw" maxlength="255" minlength="3"
                                        class="form-control @error('nama_ketua_rw') is-invalid @enderror"
                                        value="{{ old('nama_ketua_rw') }}">
                                    <div class="invalid-feedback">
                                        @error('nama_ketua_rw')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <span class="text-muted float-start">
                                <strong class="text-danger">*</strong> Harus diisi
                            </span>
                            <a href="{{ route('app.admin.surat-keterangan-ahli-waris.index') }}" class="btn btn-secondary me-2">Kembali</a>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
       $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endpush
