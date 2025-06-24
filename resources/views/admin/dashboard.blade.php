@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Admin Dashboard</h2>

    <div class="row">
        <div class="col-md-3">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Employees</h5>
                    <p class="card-text fs-3">{{ $totalEmployees }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Active Employees</h5>
                    <p class="card-text fs-3">{{ $activeEmployees }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Inactive Employees</h5>
                    <p class="card-text fs-3">{{ $inactiveEmployees }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Departments</h5>
                    <p class="card-text fs-3">{{ $totalDepartments }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
