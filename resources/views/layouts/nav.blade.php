<nav class="main-navigation">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="navbar-header">
               <span class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#main-menu">
               <span class="sr-only">Toggle navigation</span>
               <i class="fa fa-bars"></i>
            </span>
         </div>
         <div class="collapse navbar-collapse" id="main-menu">
            <ul class="menu">
               <li class="nav-current" role="presentation">
                  <a href="http://joysport.club/">我的博客</a>
               </li>
               <li role="presentation">
                  <a href="http://joysport.club/">我的博客</a>
               </li>
               @if(Auth::check())
                  <li role="presentation">
                     <a href="{{ route('post.create') }}">发表文章</a>
                  </li>
               @endif
               <li role="presentation">
                  <a href="http://joysport.club/">我的博客</a>
               </li>
               <li role="presentation">
                  <a href="http://joysport.club/">我的博客</a>
               </li>
               <li role="presentation">
                  <a href="http://joysport.club/">我的博客</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
</nav>