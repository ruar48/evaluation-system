@extends('layouts.main')
@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-folder"></i></span>
                    Manage Class</h1>
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
                                                    <th class="cell">Class Code</th>
                                                    <th class="cell">Instructor Name</th>
                                                    <th class="cell">Class</th>
                                                    <th class="cell">Subject</th>
                                                    <th class="cell">Schedule</th>
                                                    <th class="cell">No. of Students</th>
                                                    <th class="cell">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($class as $row)
                                                    <tr>
                                                        <td class="cell">{{ $row->classCode }}</td>
                                                        <td class="cell">{{ $row->instructorName }}</td>
                                                        <td class="cell">{{ $row->Class }}</td>
                                                        <td class="cell">{{ $row->Subject }}</td>
                                                        <td class="cell">{{ $row->schedule }}</td>
                                                        <td class="cell">{{ $row->no_student }}</td>
                                                        <td>
                                                            <a class="btn-edit" href="#"
                                                                data-id="{{ $row->id }}"><i
                                                                    class="fa fa-pen text-success"></i>
                                                            </a>
                                                            <a class=" btn-delete" href="#"
                                                                data-id="{{ $row->id }}"><i
                                                                    class="fa fa-trash text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
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
    {{-- delete modal --}}
    <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="text-center"><br>
                    <h3>Are you sure want to delete this Student</h3>
                </div>
                <div class="modal-body text-center ">
                    <i class="fa fa-trash text-danger" style="height: 50px; width:50px;"></i>
                    <form id="delete-form" method="POST" action=" route('admin.delete', ['id' => $row->id]) }}">
                        <div class="form-group">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" class="form-control" id="delete-id" name="id">

                        </div>
                        <div class="modal-footer d-flex justify-content-end">
                            <a href="#" class="btn btn-secondary mr-2" data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- delete modal --}}

    {{-- edit-modal --}}
    <div id="editModal" class="modal animated rubberBand edit-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Class Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="update-form" method="POST">
                        @csrf
                        <input type="hidden" id="id">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="classCode" class="form-label">Class Code</label>
                                <input type="text" class="form-control" id="classCode" value="" required
                                    name="classCode">
                            </div>
                            <div class="col-md-6">
                                <label for="instructor" class="form-label">Instructor Name</label>
                                <input type="text" class="form-control" id="instructor" value="" required
                                    name="instructorName">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="className" class="form-label">Class</label>
                                <input type="text" class="form-control" id="className" value="" required
                                    name="Class">
                            </div>
                            <div class="col-md-6">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" value="" required
                                    name="Subject">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="schedule" class="form-label">Schedule</label>
                                <input type="text" class="form-control" id="schedule" value="" required
                                    name="schedule">
                            </div>
                            <div class="col-md-6">
                                <label for="noStudents" class="form-label">No. of Students</label>
                                <input type="number" class="form-control" id="noStudents" value="" required
                                    name="no_student">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- edit fetched data start --}}

    {{-- delete fetched data start --}}

    <script>
        $(document).ready(function() {
            $('.btn-delete').click(function() {
                var id = $(this).data('id');

                $('#delete-id').val(id);
                $('#delete').show();
            });

            // Close the modal when the "Close" button is clicked
            $('#delete .btn-secondary').click(function() {
                $('#delete').hide();
            });

        });

        $('#delete-form').submit(function(event) {
            event.preventDefault();
            var id = $('#delete-id').val();

            $.ajax({
                type: 'DELETE', // Use DELETE to match your route definition
                url: '/admin/delete/class/' + id, // Replace with the actual URL for deleting data
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(data) {
                    // Handle success, e.g., close the modal, show a success message, or update the table.
                    $('#delete').hide();
                    alert(data.message);
                    location.reload(); // Refresh the page or update the table as needed.
                },
                error: function(data) {
                    // Handle errors, e.g., display an error message.
                    console.log(data);
                }
            });
        });
    </script>
    {{-- delete form script end --}}

    {{-- edit fetched data start --}}
    <script>
        $(document).ready(function() {
            $('.btn-edit').click(function() {
                var id = $(this).data('id');
                var classCode = $(this).closest('tr').find('td:eq(0)').text();

                var instructor = $(this).closest('tr').find('td:eq(1)').text();
                var className = $(this).closest('tr').find('td:eq(2)').text();
                var subject = $(this).closest('tr').find('td:eq(3)').text();
                var schedule = $(this).closest('tr').find('td:eq(4)').text();
                var noStudents = $(this).closest('tr').find('td:eq(5)').text();

                $('#id').val(id);
                $('#classCode').val(classCode);
                $('#instructor').val(instructor);
                $('#className').val(className);
                $('#subject').val(subject);
                $('#schedule').val(schedule);
                $('#noStudents').val(noStudents);


                $('#editModal').show();
            });

            // Close the modal when the "Close" button is clicked
            $('#editModal .btn-secondary').click(function() {
                $('#editModal').hide();
            });
        });

        $('#update-form').submit(function(event) {
            event.preventDefault();
            var id = $('#id').val();
            var classCode = $('#classCode').val();
            var instructor = $('#instructor').val();
            var className = $('#className').val();
            var subject = $('#subject').val();
            var schedule = $('#schedule').val();
            var noStudents = $('#noStudents').val();

            $.ajax({
                type: 'PUT',
                url: '/admin/edit/class/' + id,
                data: {
                    id: id,
                    classCode: classCode,
                    instructor: instructor,
                    className: className,
                    subject: subject,
                    schedule: schedule,
                    noStudents: noStudents,
                    _token: '{{ csrf_token() }}',
                    _method: 'PUT',
                },
                success: function(data) {
                    $('#editModal').hide();
                    alert(data.message);
                    location.reload();
                },
                error: function(data) {
                    console.log(data);
                }
            });

        });
    </script>
@endsection
