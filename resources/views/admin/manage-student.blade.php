<div class="app-wrapper">
    @extends('layouts.main')
    @section('content')
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title"><span class="nav-icon"><i class="fa fa-folder"></i></span> Manage Student
                </h1>
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
                                                    <th class="cell">ID Number</th>
                                                    <th class="cell">Full Name</th>
                                                    <th class="cell">Class</th>
                                                    <th class="cell">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($student as $row)
                                                    <tr>
                                                        <td>{{ $row->idNumber }}</td>
                                                        <td>{{ $row->name }}</td>
                                                        <td>{{ $row->classCode }}</td>
                                                        <td> <a class="btn-edit" href="#"
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <i class="fa fa-edit" style="font-size: 50px;"></i>
                    <h3>Are you sure you want to edit this Student</h3>
                    <div class="modal-body">

                        <form id="update-form" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" id="stud-id" name="id">
                                <label for="setting-input-2" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" value="" required
                                    name="name">
                            </div>
                            <div class="mb-3">
                                <label for="setting-input-3" class="form-label">ID Number</label>
                                <input type="number" class="form-control" id="idNumber" value="" name="idNumber">
                            </div>

                            <div class="mb-3">
                                <label for="setting-input-3" class="form-label">Class</label>
                                <input type="text" class="form-control" id="classCode" value="" required
                                    name="classCode">
                            </div>
                            <div class="modal-footer d-flex justify-content-end">

                                <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-success btn-update" id="submit-button">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- edit fetched data start --}}
    <script>
        $(document).ready(function() {
            $('.btn-edit').click(function() {
                var id = $(this).data('id');
                var idClass = $(this).closest('tr').find('td:eq(0)').text();

                var name = $(this).closest('tr').find('td:eq(1)').text();
                var classCode = $(this).closest('tr').find('td:eq(2)').text();

                $('#stud-id').val(id);
                $('#idNumber').val(idClass);
                $('#name').val(name);
                $('#classCode').val(classCode);


                $('#editModal').show();
            });

            // Close the modal when the "Close" button is clicked
            $('#editModal .btn-secondary').click(function() {
                $('#editModal').hide();
            });
        });

        $('#update-form').submit(function(event) {
            event.preventDefault();
            var id = $('#stud-id').val();
            var name = $('#name').val();
            var idClass = $('#idNumber').val();
            var classCode = $('#classCode').val();

            $.ajax({
                type: 'PUT',
                url: '/admin/edit/student/' + id,
                data: {
                    id: id,
                    name: name,
                    idNumber: idClass,
                    classCode: classCode,
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
                url: '/admin/delete/student/' + id, // Replace with the actual URL for deleting data
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
@endsection
