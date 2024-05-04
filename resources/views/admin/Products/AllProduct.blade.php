@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Category</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>All Products</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.create.product') }}" class="btn btn-primary">
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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Offer Price</th>
                                        <th>Show At Home</th>
                                        <th>Status</th>
                                        <th>action</th>
                                    </tr>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>

                                            <td><img src="{{ $product->thum_image }}" alt="" width="80px"
                                                    height="80px"></td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->offer_price }}</td>

                                            @if ($product->show_at_home == 1)
                                                <td>
                                                    <div class="badge badge-success">Yes</div>
                                                </td>
                                            @endif
                                            @if ($product->show_at_home == 0)
                                                <td>
                                                    <div class="badge badge-success">No</div>
                                                </td>
                                            @endif
                                            <td>
                                                @if ($product->status == 1)
                                                    <div class="badge badge-success">Active</div>
                                                @endif
                                                @if ($product->status == 0)
                                                    <div class="badge badge-success">Inactive</div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="card-body">
                                                    <div class="btn-group dropup">
                                                        <button type="button" class="btn btn-dark dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="{{ route('product.gallery.index', $product->id) }}">Product
                                                                Gallery</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('product.size.index', $product->id) }}">Product
                                                                Size</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group dropright">
                                                        <a href="{{ route('admin.edit.product', $product->id) }}"
                                                            class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    </div>
                                                    <div class="btn-group dropright">
                                                        <a href="{{ route('admin.delete.product', $product->id) }}"
                                                            id="delete" class="btn btn-warning"><i
                                                                class="fas fa-trash"></i></a>
                                                    </div>

                                                </div>
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
