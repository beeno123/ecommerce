@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Product Images</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>All Images</h4>

                </div>

                <div class="card">

                    <div class="card-body p-0">
                        <div class="col-md-8">
                            <form action="{{ route('product.gallery.store', $id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <input type="submit" value="Save" class="btn btn-primary">

                            </form>
                        </div>

                    </div>
                </div>
            </div>


        </section>
    </div>
@endsection
