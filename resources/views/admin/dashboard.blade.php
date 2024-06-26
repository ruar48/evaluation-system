@extends('layouts.main')
@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-home"></i></span> Dashboard</h1>


                <div class="row g-4 mb-4">
                    <div class="col-6 col-lg-4">
                        <div class="app-card app-card-stat shadow-sm h-100"><br>
                            <span class="nav-icon"><i class="fa fa-users fa-5x text-success"></i></span>
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Students</h4>
                                <div class="stats-figure">{{ $studentCount }}</div>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div><!--//col-->
                    <div class="col-6 col-lg-4">
                        <div class="app-card app-card-stat shadow-sm h-100"><br>
                            <span class="nav-icon"><i class="fa fa-user fa-5x text-info"></i></span>
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Faculty</h4>
                                <div class="stats-figure">{{ $instructor }}</div>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div><!--//col-->
                    <div class="col-6 col-lg-4">
                        <div class="app-card app-card-stat shadow-sm h-100"><br>
                            <span class="nav-icon"><i class="fa fa-book fa-5x text-warning"></i></span>
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Questionnaire</h4>
                                <div class="stats-figure">{{ $question }}</div>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div><!--//col-->
                </div><!--//row-->
            </div><!--//container-fluid-->
        </div><!--//app-content-->

    </div><!--//app-wrapper-->
@endsection
