        <!-- Header
		============================================= -->
		<header id="header" class="full-header dark">

                <div id="header-wrap">
    
                    <div class="container clearfix">
    
                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
    
                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="/" class="standard-logo" data-dark-logo="/site/images/logo-dark.png"><img src="/site/images/logo.png" alt="Canvas Logo"></a>
                            <a href="index.html" class="retina-logo" data-dark-logo="/site/images/logo-dark@2x.png"><img src="/site/images/logo@2x.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->
    
                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu">
    
                            <ul>
                                <li><a href="/"><div>Inicio</div></a></li>
                                @auth
                                    <li><a href="{{ route('admin.index') }}"><div>Panel Administrador</div></a></li>
                                @else
                                    <li><a href="{{ route('register') }}"><div>Registro</div></a></li>

                                    @if (Route::has('register'))
                                        <li><a href="{{ route('login') }}"><div>Iniciar Sesión</div></a></li>
                                    @endif
                                @endauth
                                
                                
                            </ul>
    
                        </nav><!-- #primary-menu end -->
    
                    </div>
    
                </div>
    
            </header><!-- #header end -->