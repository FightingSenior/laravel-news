@extends('backend.layout.master')

@section('title', 'Tạo người dùng')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        <small><a href="{{ route('admin.users.index') }}" class="btn btn-block btn-xs btn-warning btn-flat"><i class="fa fa-arrow-left"></i> BACK</a></small>
        Tạo người dùng
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Các hình thức</a></li>
        <li class="active">Các yếu tố chung</li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data" role="form">
            @csrf

            <div class="col-md-6">
                <div class="box box-primary">

                    <div class="box-header with-border">
                        <h3 class="box-title">Tạo</h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="username">Tên người dùng</label>
                            <input type="text" name="name" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="useremail">Email người dùng</label>
                            <input type="email" name="email" class="form-control" id="useremail">
                        </div>
                        <div class="form-group">
                            <label for="userpassword">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" id="userpassword">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Vai trò</label>
                            <select name="role_id" class="form-control" style="width: 100%;">
                                <option value="3">Người dùng</option>
                                <option value="2">Biên tập viên</option>
                                <option value="1">Quản trị viên</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userimage">Hình ảnh</label>
                            <input type="file" name="photo" id="userimage">
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