@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Category</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>All Categories</h4>
                    <div class="card-header-action">
                        <a href="{{ route('add.category') }}" class="btn btn-primary">
                            Create New Category
                        </a>
                    </div>
                </div>

                <div class="card">

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Show At Home</th>
                                        <th>Status</th>


                                        <th>action</th>
                                    </tr>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>

                                            <td>{{ $category->name }}</td>

                                            @if ($category->ShowAtHome == 1)
                                                <td>
                                                    <div class="badge badge-success">Yes</div>
                                                </td>
                                            @endif
                                            @if ($category->ShowAtHome == 0)
                                                <td>
                                                    <div class="badge badge-success">No</div>
                                                </td>
                                            @endif

                                            @if ($category->status == 1)
                                                <td>
                                                    <div class="badge badge-success">Active</div>
                                                </td>
                                            @endif
                                            @if ($category->status == 0)
                                                <td>
                                                    <div class="badge badge-success">Inactive</div>
                                                </td>
                                            @endif
                                            <td>
                                                <span> <a href="{{ route('edit.category', $category->id) }}"
                                                        class="btn btn-info">Edit</a><br> <a
                                                        href="{{ route('dell.category', $category->id) }}"
                                                        class="btn btn-warning" id="delete">Del</a></span>

                                            </td>


                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>


                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span
                                                class="sr-only">(current)</span></a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>
@endsection
