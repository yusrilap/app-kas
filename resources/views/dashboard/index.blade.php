@extends('layouts.main', ['title' => 'Dashboard', 'page_heading' => 'Dashboard'])

@section('content')
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('students.index') }}">
                        <div class="card card-stat">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Pelajar</h6>
                                        <h6 class="font-extrabold {{ $studentCount <= 0 ? 'text-danger' : '' }} mb-0">
                                            {{ $studentCount }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('school-classes.index') }}">
                        <div class="card card-stat">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Kelas</h6>
                                        <h6 class="font-extrabold {{ $schoolClassCount <= 0 ? 'text-danger' : '' }} mb-0">
                                            {{ $schoolClassCount }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('school-majors.index') }}">
                        <div class="card card-stat">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldWork"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Jurusan</h6>
                                        <h6 class="font-extrabold {{ $schoolMajorCount <= 0 ? 'text-danger' : '' }} mb-0">
                                            {{ $schoolMajorCount }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('cash-transactions.index') }}">
                        <div class="card card-stat">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldTicket"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Kas Bulan Ini</h6>
                                        <h6 class="font-extrabold mb-0">{{ $amountThisMonth }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('modal')
    @include('dashboard.modal.show')
@endpush

@push('js')
    @include('dashboard.script')
@endpush
