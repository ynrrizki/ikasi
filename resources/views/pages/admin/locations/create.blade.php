@extends('layouts.admin')
@section('content')
    @push('addon-css')
        <style>
            .ck-editor__editable_inline {
                min-height: 300px;
            }
        </style>
    @endpush
    <div class="card shadow">
        <div class="card-header">
            <h4>Add Events</h4>
        </div>
        <form action="{{ route('locations.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="col-10">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" name="address">
                    </div>
                    <div class="form-group">
                        <label for="map">Embed Map</label>
                        <input type="text" class="form-control" name="map">
                    </div>
                </div>
            </div>
            <div class="card-footer d-sm-flex align-items-center justify-content-end mb-4">
                <button type="submit" class="btn btn-primary">Add Article</button>
            </div>
        </form>
    </div>
    @push('addon-js')
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush
@endsection
