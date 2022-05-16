@extends('backend.layout.master')

@section('title', 'Menu')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        Danh sách Menu
        <small>
            <a href="{{ route('admin.menus.create') }}" class="btn btn-block btn-sm btn-success btn-flat"><i class="fa fa-plus"></i> Thêm Menu</a>
        </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Các hình thức</a></li>
        <li class="active">Các yếu tố chung</li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách</h3>
                </div>

                <div class="box-body">
                    <table id="menu-table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Thứ tự</th>
                                <th>Menu cha</th>
                                <th>URL</th>
                                <th width="60px">Hành động</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($menus as $menu)
                            <tr>
                                <td>{{ $menu->id }}</td>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->menuorder}}</td>
                                <td>{{ $menu->parent_id}}</td>
                                <td>{{ $menu->menu_url}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.menus.edit',$menu->id) }}" class="btn btn-warning btn-flat"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-flat" onclick="event.preventDefault();
                                                    document.getElementById('menu-delete-form-{{$menu->id}}').submit();">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="menu-delete-form-{{$menu->id}}" action="{{ route('admin.menus.destroy',$menu->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('backend/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function() {
        $('#menu-table').DataTable();
    })
</script>
@endpush