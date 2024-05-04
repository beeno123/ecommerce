@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Why Choose Us</h1>
            </div>
            <div class="card card-primary">


                <div class="card">

                    <div class="card-body p-0">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <div id="accordion">
                                        <div class="accordion">
                                            <div class="accordion-header collapsed bg-primary text-white" role="button"
                                                data-toggle="collapse" data-target="#panel-body-1" aria-expanded="false">
                                                <h4>Why Choose Us Section Title</h4>
                                            </div>
                                            <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion"
                                                style="">
                                                <form action="{{ route('admin.update.title') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Top Title</label>
                                                        <input type="text" name="why_choose_top_title"
                                                            class="form-control"
                                                            value="{{ @$titles['why_choose_top_title'] }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Main Title</label>
                                                        <input type="text" name="why_choose_main_title"
                                                            class="form-control"
                                                            value="{{ @$titles['why_choose_main_title'] }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Sub Title</label>
                                                        <input type="text" name="why_choose_sub_title"
                                                            class="form-control"
                                                            value="{{ @$titles['why_choose_sub_title'] }}">
                                                    </div>
                                                    <input type="submit" class="btn btn-info" value="save">
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h4>All Items</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.create.whyChooseUs.title') }}" class="btn btn-primary">
                            Create New
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
                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>action</th>
                                    </tr>
                                    @foreach ($whyChooseUs as $whyChoose)
                                        <tr>
                                            <td>{{ $whyChoose->id }}</td>
                                            <td><i class="{{ $whyChoose->icon }}" style="font-size: 50px"></i></td>
                                            <td>{{ $whyChoose->title }}</td>

                                            <td>
                                                <span> <a href="{{ route('admin.edit.whyChooseUs', $whyChoose->id) }}"
                                                        class="btn btn-info">Edit</a><br> <a
                                                        href="{{ route('admin.del.whyChooseUs', $whyChoose->id) }}"
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
