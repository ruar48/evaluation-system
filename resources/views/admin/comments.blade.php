@extends('layouts.main')
@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-comments"></i></span> Manage
                    Comments</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-12">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-body">
                                <form class="settings-form">
                                    <div class="mb-3">
                                        <table id="myTable" class="table app-table-hover mb-0 text-left">
                                            <thead>
                                                <tr>
                                                    <th class="cell">Comments</th>
                                                    <th class="cell">Faculty</th>
                                                    <th class="cell">Student</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell">Good</td>
                                                    <td class="cell">John Doe</td>
                                                    <td class="cell">Juan Dela Cruz</td>
                                                </tr>
                                                <tr>
                                                    <td class="cell">Good</td>
                                                    <td class="cell">John Doe</td>
                                                    <td class="cell">Juan Dela Cruz</td>
                                                </tr>
                                                <tr>
                                                    <td class="cell">Good</td>
                                                    <td class="cell">John Doe</td>
                                                    <td class="cell">Juan Dela Cruz</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
