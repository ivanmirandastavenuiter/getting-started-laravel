
@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">The beautiful Laravel</p>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">{{ $post['title'] }}</h1>
            <p>{{ $post['content'] }}</p>
            <p><a href="{{ route('blog.post', ['id' => array_search($post, $posts)]) }}">Read more...</a></p>
        </div>
    </div>
    <hr>
    @endforeach
@endsection

<!--

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Some content</h1>
        @if(true)
            <p>This only displays if it is true</p>
        @else 
            <p>This only display if it is false</p>
        @endif
        <hr>
        @for($i = 0; $i < 5; $i++) 
            <p>{{ $i + 1 }}. Iteration</p>
        @endfor
        <hr>
        <h2>XSS</h2>
         Security possible messure: string replace with curly bracelets substituting excalamation bracelets 
        {{ "<script>alert('Hello')</script>" }}
    </div>
</div>
@endsection

-->