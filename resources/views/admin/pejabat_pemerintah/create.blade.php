@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Pejabat Pemerintah
        @endslot
        @slot('li_1')
            Tambah Pejabat Pemerintah
        @endslot
        @slot('li_2')
            Form Tambah Baru
        @endslot
    @endcomponent

    <x-alert />

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <form action="{{route('app.admin.pejabat_pemerintah.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="input-block row">
                                <label class="col-lg-5 col-form-label">NIP<span class="text-danger">*</span></label>
                                <div class="col-lg-7">
                                    <input type="text" name="nip" maxlength="255" minlength="5"
                                        class="form-control @error('nip') is-invalid @enderror"
                                        value="{{ old('nip') }}">
                                    <div class="invalid-feedback">
                                        @error('nip')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="input-block row">
                                <label class="col-lg-5 col-form-label">Nama Lengkap<span class="text-danger">*</span></label>
                                <div class="col-lg-7">
                                    <input type="text" name="nama" maxlength="255" minlength="3"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ old('nama') }}">
                                    <div class="invalid-feedback">
                                        @error('nama')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="input-block row">
                                <label class="col-lg-5 col-form-label">Jabatan<span class="text-danger">*</span></label>
                                <div class="col-lg-7">
                                    <input type="text" name="jabatan" maxlength="255" minlength="5"
                                        class="form-control @error('jabatan') is-invalid @enderror"
                                        value="{{ old('jabatan') }}">
                                    <div class="invalid-feedback">
                                        @error('jabatan')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <span class="text-muted float-start">
                            <strong class="text-danger">*</strong> Harus diisi
                        </span>
                        <a class="btn btn-secondary" href="{{route('app.admin.pejabat_pemerintah.index')}}">Kembali</a>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
