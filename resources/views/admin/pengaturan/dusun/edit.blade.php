@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Data Dusun
        @endslot
        @slot('li_1')
            Dusun
        @endslot
        @slot('li_2')
            Form Edit
        @endslot
    @endcomponent

    <x-alert />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="{{ route('app.admin.pengaturan.dusun.update',[$dusun->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Nama Dusun<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" name="nama_dusun" maxlength="255" minlength="5"
                                        class="form-control @error('nama_dusun') is-invalid @enderror"
                                        value="{{ old('nama_dusun', $dusun->nama_dusun) }}">
                                    <div class="invalid-feedback">
                                        @error('nama_dusun')
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
                        <a class="btn btn-secondary" href="{{ route('app.admin.pengaturan.dusun.dusun') }}">Kembali</a>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            $('.select2').select2();
        });
    </script>
@endpush
