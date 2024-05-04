@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create Slider</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>New Slider</h4>

                </div>
                <div class="card-body">

                    <form action="{{ route('admin.store.slider') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload">
                        </div>
                        <div class="form-group">
                            <label>Offer</label>
                            <input type="text" class="form-control" name="offer" placeholder="Enter Offer">
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label>Sub_Title</label>
                            <input type="text" class="form-control" name="sub_title" placeholder="Enter Sub_Title">
                        </div>
                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea name="short_description" class="form-control" id="" cols="30" rows="20"
                                placeholder="Enter Here...."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Button Link</label>
                            <input type="text" class="form-control" name="button_link" placeholder="Enter Button link">
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
