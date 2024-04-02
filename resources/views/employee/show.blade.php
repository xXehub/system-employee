@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Employee</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <h5>{{ $employee->firstname }}</h5>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <h5>{{ $employee->lastname }}</h5>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="age" class="form-label">Age</label>
                        <h5>{{ $employee->age }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <h5>{{ $employee->email }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Position</label>
                        <h5>{{ $employee->position->name }}</h5>
                    </div>
                    {{-- <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Curriculum Vitae (CV)</label>
                        @if ($employee->original_filename)
                            <h5>{{ $employee->original_filename }}</h5>
                            <a href="{{ route('employees.downloadFile', ['employeeId' => $employee->id]) }}" class="btn btn-primary btn-sm mt-2">
                                <i class="bi bi-download me-1"></i> Download CV
                            </a>
                        @else
                            <h5>Tidak ada</h5>
                        @endif
                    </div> --}}
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
