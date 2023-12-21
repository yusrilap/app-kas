@extends('layouts.main', ['title' => 'Pelajar', 'page_heading' => 'Data Pelajar'])

@section('content')
    <section class="row">
        @include('utilities.alert-flash-message')
        <div class="col card px-3 py-3">
            <div class="d-flex justify-content-end pb-3">
                <div class="btn-group d-gap gap-2">
                    <a href="{{ route('students.export') }}" class="btn btn-success">
                        <i class="bi bi-file-earmark-excel-fill"></i>
                        Export Excel
                    </a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                        <i class="bi bi-plus-circle"></i> Tambah Data
                    </button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-sm w-100" id="datatable">
                    <thead>
                        <tr>
                            <th scope=" col">#</th>
                            <th scope="col">NIS/NISN/NIM</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">TA</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@push('modal')
    @include('students.modal.create')
    @include('students.modal.edit')
@endpush

@push('js')
    @include('students.script')
@endpush
