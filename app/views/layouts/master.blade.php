<!doctype html>
<html lang="{{lang_code()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>ThorCMS starter project</title>
        
        <style type="text/css" id="relativecss">html,body{position:static}body *{position:relative}</style>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        @if(Config::get('thor::bootswatch_theme')!==false)
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.0/{{Config::get('thor::bootswatch_theme')}}/bootstrap.min.css" rel="stylesheet">
        @else
        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        @endif
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        
        @yield('head_append')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="masthead">
                <h3 class="text-muted">{{cfg('thor::brand_name')}}</h3>
                <ul class="nav nav-tabs nav-justified">
                    <li class="{{Route::is('home') ? 'active' : ''}}"><a href="{{locale_url()}}">Home</a></li>
                    <?php if(Auth::check()): ?>
                        <li class="{{Route::is('account.show') ? 'active' : ''}}"><a href="{{URL::route('account.show')}}"><i class="fa fa-user"></i> My profile</a></li>
                        <?php if(auth_user()->can('access_backend')): ?>
                        <li><a href="{{URL::route('admin')}}"><i class="fa fa-briefcase"></i> Admin</a></li>
                        <?php endif; ?>
                        <li><a href="{{URL::route('account.logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
                    <?php else: ?>
                        <li><a href="{{URL::route('account.login')}}"><i class="fa fa-sign-in"></i> Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="main">
                @yield('main')
            </div>
            <!-- Site footer -->
            <div class="footer">
                <p>&copy; Company 2014</p>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="{{asset('js/app.js')}}"></script>
        @yield('body_append')
    </body>
</html>