@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Add Department</h2>
    <form method="POST" action="{{ route('departments.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Create</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
