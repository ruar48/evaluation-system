@extends('layouts.main')
@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-book"></i></span> Manage
                    Evaluation</h1>
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
                                                    <th class="cell">Instructor Name</th>
                                                    <th class="cell">Class</th>
                                                    <th class="cell">Semester</th>
                                                    <th class="cell">Question Category</th>
                                                    <th class="cell">Question</th>
                                                    <th class="cell">Score</th>
                                                    <th class="cell">Timestamp</th>
                                                    <th class="cell">Student</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell">Jane Doe</td>
                                                    <td class="cell">BSIT-A</td>
                                                    <td class="cell">2nd</td>
                                                    <td class="cell">Category 1</td>
                                                    <td class="cell">Question 1</td>
                                                    <td class="cell">45</td>
                                                    <td class="cell">05-21-2021</td>
                                                    <td class="cell">John Doe</td>
                                                </tr>
                                                <tr>
                                                    <td class="cell">Jane Doe</td>
                                                    <td class="cell">BSIT-A</td>
                                                    <td class="cell">2nd</td>
                                                    <td class="cell">Category 1</td>
                                                    <td class="cell">Question 1</td>
                                                    <td class="cell">45</td>
                                                    <td class="cell">05-21-2021</td>
                                                    <td class="cell">John Doe</td>
                                                </tr>
                                                <tr>
                                                    <td class="cell">Jane Doe</td>
                                                    <td class="cell">BSIT-A</td>
                                                    <td class="cell">2nd</td>
                                                    <td class="cell">Category 1</td>
                                                    <td class="cell">Question 1</td>
                                                    <td class="cell">45</td>
                                                    <td class="cell">05-21-2021</td>
                                                    <td class="cell">John Doe</td>
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
