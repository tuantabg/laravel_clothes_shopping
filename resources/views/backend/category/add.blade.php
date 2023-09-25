@extends('backend.app')
@section('title', 'Tạo Danh Mục')
@section('stylesheet')
    <style type="text/css">
        #alert_container {
            position: fixed;
            z-index: 999999;
            pointer-events: none;
        }

        .alert-top-right {
            top: 12px;
            right: 12px;
        }

        #alert_container .alert-success {
            background-color: #35b874;
        }

        .alert-message {
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }

        .alert {
            flex-basis: 350px;
            max-width: 350px;
            font-size: .875rem;
            background-color: rgba(255, 255, 255, .85);
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .1);
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .1);
            border-radius: 0.25rem;
        }
    </style>
@endsection
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
                                <input type="text" name="name"
                                       value="{{ old('name') }}"
                                       class="form-control"
                                       id="category_name">
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Chọn danh mục cha</label>
                                <select name="parent_id" class="form-control" id="parent_id">
                                    <option value="0">Danh mục cha</option>
                                     {!! $htmlOption !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category_slug">Slug</label>
                                <input type="text" name="slug"
                                       value="{{ old('slug') }}"
                                       class="form-control"
                                       id="category_slug">
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

    @if (\Session::has('success'))
        <div id="alert_container" class="alert-top-right">
            <div class="alert alert-success">
                <div class="alert-message">Tạo danh mục thành công.</div>
            </div>
        </div>
    @endif
@endsection
@section('javascript')
    <script type="javascript">
        $(document).ready(function () {
            window.setTimeout(function () {
                $("#alert_container").hide()
            }, 5000);
        });
    </script>
@endsection
