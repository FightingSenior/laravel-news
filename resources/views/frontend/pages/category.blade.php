@extends('frontend.layout.master')

@section('title', 'Danh mục')

@section('content')

<section class="section">
    <div class="page-header container">
        <h1>Category: {{ $category->name }}</h1>
        <ul>
            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
            <li> / </li>
            <li><i class="far fa-folder"></i> {{ $category->name }}</li>
        </ul>
    </div>
</section>

<section class="section">

    <div class="section-news container">
        <div class="news">
            <div class="news-category-container">
                <div class="news-technology">
                    @foreach($newscategorylist as $newscategory)
                    <div class="section-item">
                        <a href="{{ route('page.news',$newscategory->slug) }}">
                            <img src="{{ asset('images/'.$newscategory->image) }}" alt="{{ $newscategory->title }}" class="width-100">
                        </a>

                        <h3><a href="{{ route('page.news',$newscategory->slug) }}">{{ $newscategory->title }}</a></h3>

                        <!-- <p>{!! $newscategory->details !!}</p> -->

                        <ul>
                            <li><i class="far fa-comment-alt"></i> <a href="#">{{ $newscategory->id }}</a></li>
                            <li><i class="far fa-clock"></i> {{ $newscategory->created_at->diffForHumans() }}</li>
                        </ul>
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

@endpush