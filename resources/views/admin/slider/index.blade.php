@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Slider</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>All Slider</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.create.slider') }}" class="btn btn-primary">
                            Create New Slider
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
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Sub_title</th>
                                        <th>Description</th>
                                        <th>Button_link</th>
                                        <th>status</th>
                                        <th>action</th>
                                    </tr>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{ $slider->id }}</td>
                                            <td><img src="{{ $slider->avatar }}" alt="" width="100px"
                                                    height="100px"></td>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->sub_title }}</td>
                                            <td>{{ $slider->short_description }}</td>
                                            <td>{{ $slider->button_link }}</td>
                                            @if ($slider->status == 1)
                                                <td>
                                                    <div class="badge badge-success">Active</div>
                                                </td>
                                            @endif
                                            @if ($slider->status == 0)
                                                <td>
                                                    <div class="badge badge-success">Inactive</div>
                                                </td>
                                            @endif
                                            <td>
                                                <span> <a href="" class="btn btn-info">Edit</a><br> <a href=""
                                                        class="btn btn-warning">Del</a></span>

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
