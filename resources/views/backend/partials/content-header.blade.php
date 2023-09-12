<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $name . '' . $key }}</h1>
                @if($key)
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item">
                            <a href="{{ route($route) }}">{{ $name }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ $key }}</li>
                    </ol>
                @else
                @endif
            </div>
            <!-- /.col -->
            <div class="col-sm-6 text-right">
                <a href="{{ route($routeAdd) }}" class="btn btn-primary">
                    <i class="fa fa-plus sm" aria-hidden="true"></i>
                    Tạo mới
                </a>
            </div>
            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
