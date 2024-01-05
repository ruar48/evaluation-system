@extends('layouts.main')
@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-user"></i></span> Add Student
                </h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                @if (session()->has('alert-success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('alert-success') }}
                                    </div>
                                @endif
                                <form class="settings-form" action="{{ route('admin.AddStudent') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="setting-input-2" value=""
                                            required name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">ID Number</label>
                                        <input type="number" class="form-control" id="setting-input-3" value=""
                                            name="idNumber">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="setting-input-3" value=""
                                            name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Class</label>
                                        <input type="text" class="form-control" id="setting-input-2" value=""
                                            required name="classCode">
                                    </div>
                                    <button type="submit" class="btn app-btn-primary">Save</button>
                                </form>
                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->

                <hr class="my-4">
            </div><!--//container-fluid-->
        </div><!--//app-content-->

    </div><!--//app-wrapper-->
@endsection
