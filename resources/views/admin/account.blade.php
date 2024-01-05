@extends('layouts.main')
@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-folder"></i></span> Manage
                    Account</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <form class="settings-form">
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Old Password</label>
                                        <input type="password" class="form-control" id="setting-input-3" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="setting-input-3" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="setting-input-3" value="">
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
