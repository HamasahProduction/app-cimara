@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Data Pendidikan
        @endslot
        @slot('li_1')
            Pendidikan
        @endslot
        @slot('li_2')
            Form Edit
        @endslot
    @endcomponent

    <x-alert />

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="{{ route('app.admin.pengaturan.pendidikan.update',[$pendidikan->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="input-block row">
                                <label class="col-lg-3 col-form-label">Nama Pendidikan<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" name="keterangan" maxlength="255" minlength="3"
                                        class="form-control @error('keterangan') is-invalid @enderror"
                                        value="{{ old('keterangan', $pendidikan->keterangan) }}">
                                    <div class="invalid-feedback">
                                        @error('keterangan')
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
                        <a class="btn btn-secondary" href="{{ route('app.admin.pengaturan.pendidikan.index') }}">Kembali</a>
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
