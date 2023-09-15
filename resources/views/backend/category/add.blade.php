@extends('backend.app')
@section('title', 'Tạo Danh Mục')

@section('content')
    <div class="content-wrapper">
        @include('backend.partials.content-header', [
            'name' => 'Danh Mục ',
            'key' => 'Tạo Mới',
            'route' => 'list.categories',
            'routeAdd' => 'categories.create'
        ])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <form action="{{ route('categories.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="category_name">Tên danh mục</label>
                                <input type="text" name="name" class="form-control" id="category_name">
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Chọn danh mục cha</label>
                                <select name="parent_id" class="form-control" id="parent_id">
                                    <option value="0">Chọn danh mục cha</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category_slug">Slug</label>
                                <input type="text" name="slug" class="form-control" id="category_slug">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->
@endsection

