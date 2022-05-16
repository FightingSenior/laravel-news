@extends('backend.layout.master')

@section('title', 'Cập nhật danh mục')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        <small><a href="{{ route('admin.category.index') }}" class="btn btn-block btn-xs btn-warning btn-flat"><i class="fa fa-arrow-left"></i> Quay lại</a></small>
        Cập nhật danh mục
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Các hình thức</a></li>
        <li class="active">Các yếu tố chung</li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">

                <div class="box-header with-border">
                    <h3 class="box-title">Cập nhật danh mục</h3>
                </div>

                <form action="{{ route('admin.category.update',$category->id) }}" method="POST" enctype="multipart/form-data" role="form">
                    @csrf
                    @method('PUT')

                    <div class="box-body">
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
                            <button type="submit" class="btn btn-primary btn-flat">Cập nhật</button>
                        </div>
                </form>
            </div>

        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Hình ảnh</h3>
                </div>
                <div class="box-body">
                    <img src="{{ asset('images/'.$category->image) }}" alt="{{ $category->name }}" class="img-responsive">
                </div>
            </div>
        </div>

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