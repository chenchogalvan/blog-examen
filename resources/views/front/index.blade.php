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

                    <div class="entry clearfix">
                        <div class="entry-timeline">
                            10<span>Feb</span>
                            <div class="timeline-divider"></div>
                        </div>
                        <div class="entry-image">
                            <a href="/site/images/3.jpg" data-lightbox="image"><img class="image_fade" src="/site/images/3.jpg" alt="Standard Post with Image"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><a href="#"><i class="icon-user"></i> admin</a></li>
                            <li><i class="icon-folder-open"></i> 
                                <a href="#">General</a>, <a href="#">Media</a>
                            </li>
                        </ul>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
                            <a href="#" class="button button-rounded button-reveal button-large button-border tright"><i class="icon-file"></i><span>Leer más</span></a>
                        </div>
                    </div>
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
                            <a href="#">general</a>
                            <a href="#">videos</a>
                            <a href="#">music</a>
                            <a href="#">media</a>
                            <a href="#">photography</a>
                            <a href="#">parallax</a>
                            <a href="#">ecommerce</a>
                            <a href="#">terms</a>
                            <a href="#">coupons</a>
                            <a href="#">modern</a>
                        </div>

                    </div>

                </div>

            </div><!-- .sidebar end -->
        </div>
    </div>
</div>
    
@endsection