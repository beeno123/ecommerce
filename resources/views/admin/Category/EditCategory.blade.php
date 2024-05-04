@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create Category</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>New Category</h4>

                </div>
                <div class="card-body">

                    <form action="{{ route('update.category', $category->id) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select id="" class="form-control" required name="ShowAtHome">
                                <option value="" class="form-control" disabled selected>Select Yes/No</option>
                                <option @selected($category->ShowAtHome === 1) value="1" class="form-control">Yes</option>
                                <option @selected($category->ShowAtHome === 0) value="0" class="form-control">No</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="" class="form-control" required>
                                <option value="" class="form-control" disabled selected>Select Status</option>
                                <option @selected($category->status === 1) value="1" class="form-control">active</option>
                                <option @selected($category->status === 0) value="0" class="form-control">Inactive
                                </option>
                            </select>
                        </div>

                        <div class="form-group">

                            <input type="submit" class="btn btn-info">
                        </div>
                    </form>
                </div>

            </div>

        </section>
    </div>
@endsection
