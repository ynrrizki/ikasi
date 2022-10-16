@extends('layouts.admin')

@section('content')
    @push('addon-css')
        <!-- Custom styles for this page -->
        <link href="{{ asset('themes/sb-admin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    @endpush
    <!-- Page Heading -->
    @include('components.heading')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Thumbnail</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Thubmnail</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->title }}</td>
                                <td>{!! $article->content !!}</td>
                                <td><img src="{{ Storage::url($article->thumbnail) }}" width="350"
                                        class="rounded img-fluid">
                                </td>
                                {{-- <td><img src="{{ $article->thumbnail }}" width="200"></td> --}}
                                <td>Sepak Bola</td>
                                <td>{{ $article->created_at }}</td>
                                <td>
                                    <div class="col-1">
                                        <a href="#" class="btn btn-primary mb-3"><i class="fas fa-eye"></i></a>

                                        <a href="#" class="btn btn-warning mb-3"><i class="fas fa-pen"></i></a>

                                        <button href="#" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>
                                <a href="#" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                <button href="#" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('addon-js')
        <!-- Page level plugins -->
        <script src="{{ asset('themes/sb-admin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('themes/sb-admin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('themes/sb-admin2/js/demo/datatables-demo.js') }}"></script>
    @endpush
@endsection
