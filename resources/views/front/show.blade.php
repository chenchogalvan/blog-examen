@extends('front')

@section('content')

@include('front.partial.menu')


<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Blog</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<div id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="single-post nobottommargin">
                <div class="entry clearfix">
                    <div class="entry-title">
                        <h2>{{ $post->title }}</h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> {{ $post->created_at->format('d/m/Y') }}</li>
                        <li><a href="#"><i class="icon-user"></i> {{ $post->user->name.' '. $post->user->last_name }}</a></li>
                        <li><i class="fa fa-hashtag"></i>
                            @forelse ($post->tags as $tag)
                                {{ $loop->first ? '' : '|' }}
                                <a href="#">{{ $tag->name }}</a>
                            @empty
                                
                            @endforelse
                        </li>
                    </ul>
                    <div class="entry-image bottommargin">
                        <a href="{{ Storage::url($post->cover_path) }}" data-lightbox="image"><img class="image_fade" src="{{ Storage::url($post->cover_path) }}" alt="Standard Post with Image"></a>
                    </div>
                    <div class="entry-content notopmargin">
                        {!! $post->body !!}
                        <div class="tagcloud clearfix bottommargin">
                                @forelse ($post->tags as $tag)
                                    <a href="#">{{ $tag->name }}</a>
                                @empty
                                    
                                @endforelse
                        </div>
                    </div>
                </div>
                <div id="comments" class="clearfix">
                    <h3 id="comments-title">Comentarios</h3>
                    <div id="disqus_thread"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection