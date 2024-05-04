@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create New Data</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Crate why choose us</h4>

                </div>
                <div class="card-body">

                    <form action="{{ route('admin.store.whyChooseUs.title') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Icon</label>
                            <button name="icon" class="btn btn-primary" role="iconpicker"></button>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title">
                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea name="short_description" class="form-control" id="" cols="30" rows="20"
                                placeholder="Enter Here...."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="" class="form-control" required>
                                <option value="" class="form-control" disabled selected>Select Status</option>
                                <option value="1" class="form-control">Yes</option>
                                <option value="0" class="form-control">No</option>
                            </select>
                        </div>

                        <div class="form-group">

                            <input type="submit" class="btn btn-info" value="Create">
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
