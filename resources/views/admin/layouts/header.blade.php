<header class="main-header jumbotron">
    <div class="container-fluid" style="margin-top: -15px">
        <nav class = "navbar">
            <div class = "navbar-header">
                <button type = "button" class = "navbar-toggle"
                        data-toggle = "collapse" data-target = "#example-navbar-collapse">
                    <span class = "sr-only">Toggle navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
            </div>
            <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
                <ul class = "nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li><a href="{{ url('/') }}">回到站点</a></li>
                        <li><a href="{{ route('post.create') }}">写作</a></li>
                        <li><a href="{{ route('page.create') }}">新页面</a></li>
                        <li><a href="{{ route('category.create') }}">新分类</a></li>
                        <li>
                            <a href="{{ url('/logout') }}" style="color: white;"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                退出登录
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @else
                        <li><a href="{{ url('login') }}">登录</a></li>
                        <li><a href="{{ url('register') }}">注册</a></li>
                    @endif
                </ul>
            </div>

        </nav>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="branding" href="{{ route('admin.index') }}" title="title">
                                <img class="img-circle" src="https://avatars1.githubusercontent.com/u/16072881">
                            </a>
                            <h2>Admin - {{ Auth::user()->name }}</h2>
                            <p>Stay hungry.Stay Foolish.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>