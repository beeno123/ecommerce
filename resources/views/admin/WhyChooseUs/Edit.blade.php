@extends('admin.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Title</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Change Title</h4>

                </div>
                <div class="card-body">

                    <form action="{{ route('admin.update.whyChooseUs', $Editdata->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Icon</label>
                            <button name="icon" class="btn btn-primary" role="iconpicker"
                                data-icon="{{ $Editdata->icon }}"></button>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $Editdata->title }}">
                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea name="short_description" class="form-control" id="" cols="30" rows="20">{{ $Editdata->short_desc }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="" class="form-control" required>
                                <option value="" class="form-control" disabled selected>Select Status</option>
                                <option @selected($Editdata->status === 1) value="1" class="form-control">Yes</option>
                                <option @selected($Editdata->status === 0) value="0" class="form-control">No</option>
                            </select>
                        </div>

                        <div class="form-group">

                            <input type="submit" class="btn btn-info" value="Update">
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
