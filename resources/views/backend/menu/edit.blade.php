@extends('backend.layout.master')

@section('title', 'Cập nhật Menu')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/components/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        <small><a href="{{ route('admin.menus.index') }}" class="btn btn-block btn-xs btn-warning btn-flat"><i class="fa fa-arrow-left"></i> Quay lại</a></small>
        Menu
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Các hình thức</a></li>
        <li class="active">Các yếu tố chung</li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cập nhật Menu</h3>
                </div>

                <form action="{{ route('admin.menus.update',$menu->id) }}" method="POST" role="form">
                    @csrf
                    @method('PUT')

                    <div class="box-body">
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" name="name" class="form-control" id="editmenuname" value="{{ $menu->name }}">
                        </div>

                        <div class="form-group">
                            <label>Thứ tự</label>
                            <input type="number" name="menuorder" class="form-control" id="editmenuorder" min="0" value="{{ $menu->menuorder }}">
                        </div>

                        <div class="form-group">
                            <label>Menu cha</label>
                            <select name="parent_id" class="form-control" style="width: 100%;">
                                <option selected value="0"> --Chọn-- </option>
                                @foreach ($menus as $item)
                                <option value="{{ $item->id }}" @if($item->id==$menu->parent_id){{'selected'}}@endif>{{ $item->name }}</option>
                                @endforeach
                                <option value="10000" @if(10000==$menu->parent_id){{'selected'}}@endif>More..</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Menu URL</label>
                            <input type="text" name="menu_url" class="form-control" id="editmenuurl" value="{{ $menu->menu_url }}" readonly>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">Cập nhật Menu</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('backend/components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
    $(function() {
        $('.select2').select2();
    });
</script>
@endpush