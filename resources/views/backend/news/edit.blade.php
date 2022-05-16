@extends('backend.layout.master')

@section('title', 'Cập nhật tin tức')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
<link rel="stylesheet" href="{{ asset('backend/components/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        <small><a href="{{ route('admin.news.index') }}" class="btn btn-block btn-xs btn-warning btn-flat"><i class="fa fa-arrow-left"></i> Quay lại</a></small>
        Cập nhật tin tức
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Các hình thức</a></li>
        <li class="active">Các yếu tố chung</li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <form action="{{ route('admin.news.update',$news->id) }}" method="POST" enctype="multipart/form-data" role="form">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="newstitle">Tiêu đề</label>
                            <input type="text" name="title" class="form-control" value="{{ $news->title }}" id="newstitle">
                        </div>
                        <div class="form-group">
                            <label>Chi tiết</label>
                            <textarea class="textarea" name="details" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{ $news->details }}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select name="category_id" class="form-control select2" style="width: 100%;">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == $news->category_id) {{'selected'}} @endif)>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="box-body">
                            <img src="{{ asset('images/'.$news->image) }}" alt="{{ $news->title }}" class="img-responsive">
                        </div>
                        <div class="form-group">
                            <label for="newsimage">Hình ảnh</label>
                            <input type="file" name="image" id="newsimage">
                            <p class="help-block">(Hình ảnh phải ở định dạng .png hoặc .jpg)</p>
                        </div>
                        <hr>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="status" {{ $news->status ? 'checked' : '' }}> Đăng bài
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
<script src="{{ asset('backend/components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
    $(function() {

        $('.select2').select2();

        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue'
        });

        $('.textarea').wysihtml5();
    });
</script>
@endpush