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
            <h4>Add Article</h4>
        </div>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="col-10">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input class="form-control" type="file" name="thumbnail">
                    </div>
                    <div class="form-group">
                        <label for="article_category">Article Category</label>
                        <select class="form-control" aria-label="Default select example" name="article_category_id">
                            <option selected>Select Article Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="editor"></textarea>
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
