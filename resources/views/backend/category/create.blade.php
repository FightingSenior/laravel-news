@extends('backend.layout.master')

@section('title', 'Tạo danh mục')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        <small><a href="{{ route('admin.category.index') }}" class="btn btn-block btn-xs btn-warning btn-flat"><i class="fa fa-arrow-left"></i> Quay lại</a></small>
        Tạo danh mục
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Các hình thức</a></li>
        <li class="active">Các yếu tố chung</li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data" role="form">
            @csrf

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tạo danh mục</h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="categoryname">Tên danh mục</label>
                            <input type="text" name="name" class="form-control" id="categoryname">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Hình ảnh</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <input type="file" name="image" id="categoryimage">
                            <p class="help-block">(Hình ảnh phải ở định dạng .png hoặc .jpg)</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="status"> Kích hoạt
                            </label>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-flat">Xác nhận</button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</section>

@endsection

@push('scripts')
<!-- iCheck -->
<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue'
        });
    });
</script>
@endpush