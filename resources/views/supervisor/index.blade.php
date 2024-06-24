@extends('layouts.sidebar')
@section('title', 'Supervisors')
@section('content')
    <div class="container mt-5 main">
        <div class="d-flex justify-content-center align-items-center mb-4">
            <h1 class="supervisor-title">المشرفين</h1>
        </div>

        <div class="row">
            @foreach ($supervisors as $supervisor)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $supervisor->name }}</h5>
                            <p class="card-text"><strong>رقم الهاتف:</strong> {{ $supervisor->phone_number }}</p>
                            <p class="card-text"><strong>العنوان:</strong> {{ $supervisor->address }}</p>
                            <p class="card-text"><strong>العمر:</strong> {{ $supervisor->age }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Floating Button for adding new supervisor -->
    <button class="btn btn-add-supervisor" data-bs-toggle="modal" data-bs-target="#addSupervisorModal">
        <i class="bi bi-plus"></i>
    </button>

    <!-- Modal لإضافة مشرف جديد -->
    <div class="modal fade" id="addSupervisorModal" tabindex="-1" aria-labelledby="addSupervisorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSupervisorModalLabel">إضافة مشرف جديد</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('supervisors.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">الاسم الكامل</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">رقم الهاتف</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">العنوان</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">العمر</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <button type="submit" class="btn btn-primary">إضافة</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

    
   

