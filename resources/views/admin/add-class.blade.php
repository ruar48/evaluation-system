@extends('layouts.main')
@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-school"></i></span> Add Class
                </h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            @if (session()->has('alert-success'))
                                <div class="alert alert-success">
                                    {{ session()->get('alert-success') }}
                                </div>
                            @endif
                            <div class="app-card-body">
                                <form class="settings-form" method="POST" action="{{ route('admin.AddClasses') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Class Code</label>
                                        <input type="text" class="form-control" id="setting-input-2" value=""
                                            required name="classCode">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Instructor Name</label>
                                        <input type="test" class="form-control" id="setting-input-3" value=""
                                            required name="instructorName">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Class</label>
                                        <input type="text" class="form-control" id="setting-input-3" value=""
                                            required name="Class">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="setting-input-2" value=""
                                            required name="Subject">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Schedule</label>
                                        <input type="text" class="form-control" id="setting-input-2" value=""
                                            required name="schedule">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">No. of Students</label>
                                        <input type="number" class="form-control" id="setting-input-2" value=""
                                            required name="no_student">
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
