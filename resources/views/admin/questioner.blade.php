@extends('layouts.main')
@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-folder"></i></span> Manage
                    Questionnaire</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-body">
                                <h1 class="app-page-title">Questionnaire Form</h1>
                                @if (session()->has('alert-success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('alert-success') }}
                                    </div>
                                @endif
                                <form class="settings-form" method="POST" action="{{ route('admin.AddQuestioner') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Category</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="category" name="category">
                                                <option selected disabled>&larr; Select Category &rarr;</option>
                                                @foreach ($categories as $row)
                                                    <option value="{{ $row->id }}">{{ $row->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Question Name</label>
                                        <input type="test" class="form-control" id="questioner" value="" required
                                            name="questioners">
                                    </div>
                                    <button type="submit" class="btn app-btn-primary">Save</button>
                                </form>
                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-body">
                                <form class="settings-form">
                                    <div class="mb-3">
                                        <fieldset class="border border-info p-2 w-100">
                                            <legend class="w-auto">Rating Legend</legend>
                                            <p>5 = Strongly Agree, 4 = Agree, 3 = Uncertain, 2 = Disagree, 1 = Strongly
                                                Disagree</p>
                                        </fieldset><br>
                                        @foreach ($categories as $row)
                                            <label for="setting-input-2"
                                                class="form-label bg-info">{{ $row->category_name }}</label>
                                            <table class="table app-table-hover mb-0 text-left">
                                                <thead>

                                                    <tr>
                                                        <th class="cell">Question</th>
                                                        <th class="cell">5</th>
                                                        <th class="cell">4</th>
                                                        <th class="cell">3</th>
                                                        <th class="cell">2</th>
                                                        <th class="cell">1</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    @foreach ($row->questioners as $rowques)
                                                        <tr>
                                                            <td class="cell">{{ $rowques->questioners }}</td>
                                                            <td>
                                                                <input type="radio" name="{{ $rowques->id }}"
                                                                    id="answer" value="yes" required>
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="{{ $rowques->id }}"
                                                                    id="answer" value="yes" required>
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="{{ $rowques->id }}"
                                                                    id="answer" value="yes" required>
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="{{ $rowques->id }}"
                                                                    id="answer" value="yes" required>
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="{{ $rowques->id }}"
                                                                    id="answer" value="yes" required>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endforeach
                                    </div><br>

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
