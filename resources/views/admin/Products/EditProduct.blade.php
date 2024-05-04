@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Product</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Edit Product</h4>

                </div>
                <div class="card-body">

                    <form action="{{ route('admin.update.product', $product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose Image</label>
                            <input type="file" name="thum_image" id="image-upload">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select2" name="category_id">
                                <option selected disabled>Select Category</option>
                                @foreach ($categories as $category)
                                    <option @selected($product->category_id === $category->id) value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                @endforeach


                            </select>
                        </div>


                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label>Offer Price</label>
                            <input type="text" class="form-control" name="offer_price"
                                value="{{ $product->offer_price }}">
                        </div>
                        <div class="form-group">
                            <label>Short Discription</label>
                            <textarea name="short_desc" id="" cols="30" rows="10" class="form-control summernote">
                                {{ $product->short_desc }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Long Discription</label>
                            <textarea name="long_desc" id="" cols="30" rows="10" class="form-control summernote">
                                {{ $product->long_desc }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Sku</label>
                            <input type="text" class="form-control" name="sku" value="{{ $product->sku }}">
                        </div>
                        <div class="form-group">
                            <label>Seo Title</label>
                            <input type="text" class="form-control" name="seo_title" value="{{ $product->seo_title }}">
                        </div>
                        <div class="form-group">
                            <label>Seo Discription</label>
                            <textarea name="seo_desc" id="" cols="30" rows="10" class="form-control summernote">
                                {{ $product->seo_desc }}
                            </textarea>
                        </div>


                        <div class="form-group">
                            <label>SHow At Home</label>
                            <select id="" class="form-control" required name="show_at_home">
                                <option value="" class="form-control" disabled selected>Select Yes/No</option>
                                <option @selected($product->show_at_home == 1) value="1" class="form-control">Yes</option>
                                <option @selected($product->show_at_home == 0) value="0" class="form-control">No</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="" class="form-control" required>
                                <option value="" class="form-control" disabled selected>Select Status</option>
                                <option value="1" class="form-control">active</option>
                                <option value="0" class="form-control">Inactive</option>
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
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#image-preview').css({
                'background-image': 'url({{ asset(auth()->user()->avatar) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
