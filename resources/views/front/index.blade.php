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


            <div class="postcontent nobottommargin col_last clearfix">
                <div id="posts" class="post-timeline clearfix">
                        <div class="timeline-border"></div>

                    @forelse ($posts as $post)
                    

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            {{ $post->created_at->format('d') }}<span>{{ $post->created_at->format('M') }}</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="{{ Storage::url($post->cover_path) }}" data-lightbox="image"><img class="image_fade" src="{{ Storage::url($post->cover_path) }}" alt="Standard Post with Image"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="{{ route('index.show', $post) }}">{{ $post->title }}</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="#"><i class="icon-user"></i> {{  $post->user->name.' '.  $post->user->last_name }}</a></li>
                            <li><i class="fa fa-hashtag"></i> 
                                @foreach ($post->tags as $tag)
                                    {{ $loop->first ? '' : '|' }}
                                    <a href="#">{{ $tag->name }}</a>
                                @endforeach
                                
                            </li>
                        </ul>
                        <div class="entry-content">
                            {!! str_limit($post->body, 100) !!}
                            <a href="{{ route('index.show', $post ) }}" class="button button-rounded button-reveal button-large button-border tright mt-30"><i class="icon-file"></i><span>Leer más</span></a>
                        </div>
                    </div>
                        
                    @empty
                        
                    @endforelse
                    

                    

                    
                </div>
            </div>
            

            <!-- Sidebar
            ============================================= -->
            <div class="sidebar nobottommargin clearfix">
                <div class="sidebar-widgets-wrap">

                    <div class="widget widget-twitter-feed clearfix">

                        <h4>Twitter Feed</h4>
                        <ul class="iconlist twitter-feed" data-username="envato" data-count="2">
                            <li></li>
                        </ul>

                        <a href="#" class="btn btn-secondary btn-sm fright">Follow Us on Twitter</a>

                    </div>

                    <div class="widget clearfix">

                        <h4>Tag Cloud</h4>
                        <div class="tagcloud">
                            @forelse ($tags as $tag)
                                <a href="#">{{ $tag->name }}</a>
                            @empty
                                
                            @endforelse
                        </div>

                    </div>

                </div>

            </div><!-- .sidebar end -->
        </div>
    </div>
</div>
    
@endsection