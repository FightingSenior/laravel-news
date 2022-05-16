@extends('backend.layout.master')

@section('title', 'Cập nhật người dùng')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        <small><a href="{{ route('admin.users.index') }}" class="btn btn-block btn-xs btn-warning btn-flat"><i class="fa fa-arrow-left"></i> BACK</a></small>
        Cập nhật người dùng
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Các hình thức</a></li>
        <li class="active">Các yếu tố chung</li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <form action="{{ route('admin.users.update',$user->id) }}" method="POST" enctype="multipart/form-data" role="form">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="editusername">Tên người dùng</label>
                            <input type="text" name="name" class="form-control" id="editusername" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="edituseremail">Email người dùng</label>
                            <input type="email" name="email" class="form-control" id="edituseremail" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label>Vai trò</label>
                            <select name="role_id" class="form-control" style="width: 100%;">
                                <option value="1" @if($user->role_id == 1) {{'selected'}} @endif)>Quản trị viên</option>
                                <option value="2" @if($user->role_id == 2) {{'selected'}} @endif)>Biên tập viên</option>
                                <option value="3" @if($user->role_id == 3) {{'selected'}} @endif)>Người dùng</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="box-img">
                            <img src="{{ asset('images/'.$user->photo) }}" alt="{{ $user->name }}" class="img-responsive">
                        </div>
                        <div class="form-group">
                            <label for="newsimage">Hình ảnh</label>
                            <input type="file" name="photo" id="newsimage">
                            <p class="help-block">(Hình ảnh phải ở định dạng .png hoặc .jpg)</p>
                        </div>
                        <hr>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="status" {{ $user->status ? 'checked' : '' }}> Kích hoạt
                            </label>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-flat">Cập nhật</button>
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