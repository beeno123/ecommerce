@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Product Size</h1>
            </div>
            <div class="row">
                <div class="card card-primary col-md-6">
                    <div class="card-header">
                        <h4>All size</h4>

                    </div>

                    <div class="card">

                        <div class="card-body p-0">
                            <div class="col-md-12">
                                <form action="{{ route('admin.product-size.store', $product->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Product Size</label>
                                        <select name="size" id="" class="form-control">

                                            <option value="" disabled>Select Size</option>
                                            <option value="large">Large</option>
                                            <option value="medium">Medium</option>
                                            <option value="small">small</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="text" name="price" class="form-control">

                                    </div>

                                    <input type="submit" value="Save" class="btn btn-primary">

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card card-primary col-md-6">
                    <div class="card-header">
                        <h4>All Option</h4>

                    </div>

                    <div class="card">

                        <div class="card-body p-0">
                            <div class="col-md-12">
                                <form action="{{ route('admin.product-option.store', $product->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Product Option</label>
                                        <input type="text" name="option" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="text" name="price" class="form-control">

                                    </div>

                                    <input type="submit" value="Save" class="btn btn-primary">

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>
@endsection
