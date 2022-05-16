@if ($errors->any())
    <div class="col-md-6">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Lỗi!</h4>
                {{ $error }}
            </div>
        @endforeach
    </div>
@endif

@if(request()->session()->has('error'))
    <div class="col-md-6">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Lỗi!</h4>
            {{ request()->session()->get('error') }}
        </div>
    </div>
@endif

@if(request()->session()->has('success'))
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Thành công</h4>
            {{ request()->session()->get('success') }}
        </div>
    </div>
@endif