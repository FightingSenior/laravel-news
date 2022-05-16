@extends('frontend.layout.master')

@section('title', 'Trang chủ')

@section('content')

<section class="section">
    <div class="section-grid container">

        @foreach($topnewslist as $key => $topnews)
        <div class="section-item">
            <a href="{{ route('page.news',$topnews->slug) }}">
                <img src="{{ asset('images/'.$topnews->image) }}" alt="{{ $topnews->title }}" class="width-100">
            </a>

            <h3>
                <a href="{{ route('page.news',$topnews->slug) }}">{{ $topnews->title }}</a>
            </h3>
            <ul>
                <li><i class="far fa-folder"></i> <a href="{{ route('page.category',$topnews->category->slug) }}">{{ $topnews->category->name }}</a></li>
                <li><i class="far fa-clock"></i> {{ $topnews->created_at->diffForHumans() }}</li>
            </ul>
        </div>
        @endforeach

    </div>
</section>

<section class="section">
    <div class="section-news container">
        <div class="news">
            <div class="news-category-container">
                <h2>Bài viết mới</h2>
                <div class="news-category">
                    @foreach($newscategory as $key => $topnews)
                    <div class="section-item">
                        <a href="{!!route('page.news',$topnews->slug) !!}" class="bg-image" style="background-image: url('{{asset('images')}}/{{$topnews->image}}')"></a>
                        <div>
                            <h3><a href="{{ route('page.news',$topnews->slug) }}">{{ $topnews->title }}</a></h3>
                            <ul>
                                <li><i class="far fa-folder"></i> <a href="{{ route('page.category',$topnews->category->slug) }}">{{ @$topnews->category->name }}</a></li>
                                <li><i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($topnews->created_at)->diffForHumans() }}</li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <aside class="sidebar">
            @include('frontend.pages.sidebar')
        </aside>

    </div>
</section>

@endsection

@push('scripts')
<script>
    $(function() {

        // 

    });
</script>
@endpush