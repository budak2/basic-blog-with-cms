@extends('layouts.frontend')

@section('title')
<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{ $title }}</h1>
    </div>
</div>
@endsection


@section('content')
<div class="container">
    <div class="row medium-padding120">
                <main class="main">
            
            <div class="row">
                @if($posts->count() > 0)
                    <div class="case-item-wrap">
                        @foreach($posts as $post)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="case-item">
                                <div class="case-item__thumb">
                                    <img src="{{ $post->featured }}" alt="{{ $post->title }}">
                                </div>
                                <h6 class="case-item__title"><a href="{{ route('post.single', ['category' => $post->category->name, 'slug' => $post->slug]) }}">{{ $post->title }}</a></h6>
                            </div>
                        </div>
                        @endforeach
                    </div> 
                @else
                <h1 class="text-center"> No results found for {{ $query }}</h1>
                @endif
            </div>

            <!-- End Post Details -->
            <br>
            <br>
            <br>
        </main>
    </div>
</div>
@endsection