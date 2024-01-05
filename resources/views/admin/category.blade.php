@extends('layouts.main')
@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-table"></i></span>
                    Manage Category</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-body">
                                <h1 class="app-page-title text">Add Category</h1>
                                @if (session()->has('alert-success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('alert-success') }}
                                    </div>
                                @endif
                                <form class="settings-form" method="POST" action="{{ route('admin.categoryname') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" id="setting-input-2" value=""
                                            required name="category_name">
                                    </div>
                                    <button type="submit" class="btn app-btn-primary">Save</button>
                                </form>
                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-body">
                                <h1 class="app-page-title">Category List</h1>
                                <form class="settings-form">
                                    <div class="mb-3">
                                        <table id="myTable" class="table app-table-hover mb-0 text-left">
                                            <thead>
                                                <tr>
                                                    <th class="cell">Category Name</th>
                                                    <th class="cell">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($category as $row)
                                                    <tr>
                                                        <td class="cell"><i class="fa fa-table"></i>
                                                            {{ $row->category_name }}</td>
                                                        <td><a class="btn-edit" href="#"
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
                    <h3>Are you sure want to delete this Category</h3>
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
                        <form class="settings-form" method="POST" id="update-form">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" id="category_id">
                                <label for="setting-input-2" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="category_name" value="" required
                                    name="category_name">
                            </div>
                            <button type="submit" class="btn app-btn-primary">Save</button>
                        </form>

                    </div>
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
                url: '/admin/delete/category/' + id, // Replace with the actual URL for deleting data
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
                    console.log(data);
                }
            });
        });
    </script>
    {{-- delete form script end --}}


    <script>
        $(document).ready(function() {
            $('.btn-edit').click(function() {
                var id = $(this).data('id');
                var category = $(this).closest('tr').find('td:eq(0)').text().trim();

                $('#category_id').val(id);
                $('#category_name').val(category);
                console.log(category)


                $('#editModal').show();
            });

            // Close the modal when the "Close" button is clicked
            $('#editModal .btn-secondary').click(function() {
                $('#editModal').hide();
            });
        });

        $('#update-form').submit(function(event) {
            event.preventDefault();
            var id = $('#category_id').val();
            var category_name = $('#category_name').val();


            $.ajax({
                type: 'PUT',
                url: '/admin/edit/category/' + id,
                data: {
                    id: id,
                    category_name: category_name,
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
