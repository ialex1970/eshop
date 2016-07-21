<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Категории <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li><a href="{{ route('category', $category->name) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="active"><a href="{{ route('about') }}">About <span class="sr-only">(current)</span></a></li>
                <li><a href="{{ route('contacts') }}">Contacts</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('login') }}">{{ Auth::check() ? '' : 'Login' }}</a></li>

                <li><a href="{{ route('show.cart') }}"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> Корзина <span class="badge">{{ (\Auth::check() && \Session::has('count') && \Session::get('count') > 0 ) ? \Session::get('count') : '' }}</span></a></li>
                @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profile', Auth::user()->id) }}">Профиль</a></li>
                            @if(Auth::user()->is_admin)
                                <li><a href="{{ url('admin') }}">Вход в админку</a></li>
                            @endif
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('logout') }}">Выход</a></li>
                        </ul>
                    @endif
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>