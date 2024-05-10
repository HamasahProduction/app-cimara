@extends('layout.mainSurat')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Surat Keterangan Kematian Lama
        @endslot
        @slot('li_1')
            Keterangan Kematian Lama
        @endslot
        @slot('li_2')
            Form Edit
        @endslot
    @endcomponent

    <x-alert />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="{{ route('app.admin.surat-keterangan-kematian-lama.update', $sk_kematian->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="input-block row">
                                <div class="col-lg-12">
                                    <small class="text-muted"> <strong>FORM PENDUDUK TERDAFTAR:</strong></small>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">NIK Penduduk <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <select name="nik" id="nik"
                                        class="select2 province form-control @error('nik') is-invalid @enderror"
                                        value="{{ old('nik') }}">
                                        <option selected disabled>--Pilih NIK Penduduk--</option>
                                        @foreach ($penduduks as $penduduk)
                                        <option value="{{ $penduduk->nik }}" {{ $penduduk->nik ==$sk_kematian->nik?'selected':'' }}>NIK : {{ $penduduk->nik }} | {{ $penduduk->nama_lengkap }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        @error('nik')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Hari Meninggal<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" name="hari_meninggal" maxlength="255" minlength="4"
                                        class="form-control @error('hari_meninggal') is-invalid @enderror"
                                        value="{{ old('hari_meninggal', $sk_kematian->hari_meninggal) }}">
                                    <div class="invalid-feedback">
                                        @error('hari_meninggal')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Lokasi Meninggal<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" name="lokasi_meninggal" maxlength="255" minlength="5"
                                        class="form-control @error('lokasi_meninggal') is-invalid @enderror"
                                        value="{{ old('lokasi_meninggal', $sk_kematian->lokasi_meninggal) }}">
                                    <div class="invalid-feedback">
                                        @error('lokasi_meninggal')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Penyebab Meninggal<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" name="penyebab_meninggal" maxlength="255" minlength="5"
                                        class="form-control @error('penyebab_meninggal') is-invalid @enderror"
                                        value="{{ old('penyebab_meninggal', $sk_kematian->penyebab_meninggal) }}">
                                    <div class="invalid-feedback">
                                        @error('penyebab_meninggal')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Tanggal Meninggal<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="date" name="tgl_meninggal" maxlength="255" minlength="5"
                                        class="form-control @error('tgl_meninggal') is-invalid @enderror"
                                        value="{{ old('tgl_meninggal', $sk_kematian->tgl_meninggal) }}">
                                    <div class="invalid-feedback">
                                        @error('tgl_meninggal')
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
                                        value="{{ old('tgl_surat', $sk_kematian->tgl_surat) }}">
                                    <div class="invalid-feedback">
                                        @error('tgl_surat')
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
                            <a href="{{ route('app.admin.surat-keterangan-kematian-lama.index') }}" class="btn btn-secondary me-2">Kembali</a>
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
