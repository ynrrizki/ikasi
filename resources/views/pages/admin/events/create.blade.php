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
            <h4>Add Event</h4>
        </div>
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="col-10">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" autofocus>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <img class="img-preview img-fluid rounded mb-3 col-sm-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddonImage">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('thumbnail') is-invalid @enderror"
                                    id="inputGroupFileImage" aria-describedby="inputGroupFileAddonImage" name="thumbnail"
                                    onchange="previewImage()">
                                <label class="custom-file-label" for="inputGroupFileImage">Choose file</label>
                            </div>
                            @error('thumbnail')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article_category">Article Category</label>
                        <select class="form-control" aria-label="Default select example" name="article_category_id">
                            <option selected>Select Article Category</option>
                            <option value="1">Sepak Bola</option>
                            <option value="2">Basket</option>
                        </select>
                        @error('article_category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="editor"></textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer d-sm-flex align-items-center justify-content-end mb-4">
                <button type="submit" class="btn btn-primary">Add Event</button>
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

        <script>
            function previewImage() {
                const image = document.querySelector('#inputGroupFileImage');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                for (let i = 0; i < image.files.length; i++) {
                    console.log(image.files[i]);
                }
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script>
    @endpush
@endsection
