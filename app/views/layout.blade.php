<!DOCTYPE html>
<html lang="{{Doc::lang()}}" class="{{Doc::classes()}}">
    <head>
        <meta charset="{{Doc::charset()}}">
        <meta name="viewport" content="{{Doc::viewport()}}">
        <meta name="description" content="{{Doc::description()}}">
        <meta name="author" content="{{Doc::author()}}">
        <link rel="shortcut icon" href="{{Doc::favicon()}}">

        <title>{{Doc::title()}}</title>

        <!-- Bootstrap core CSS -->
        <style type="text/css" id="relativecss">html,body{position:static}body *{position:relative}</style>
        <link href="{{Admin::asset('css/app.min.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <style>
            body {
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .navbar {
                margin-bottom: 20px;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <!-- Static navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{lang_url()}}" style="padding:8px 15px;"><i class="fa fa-cube fa-2x fa-fw"></i></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{lang_url()}}">Home</a></li>
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Lang::code()}} <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Change language:</li>
                                    @foreach(Lang::getAvailableLocales() as $code => $locale)
                                    <li @if($code == Lang::code())class="active"@endif><a href="{{url().'/'.$code}}">{{$code}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>
            
            <div class="main">
                @yield('main')
            </div>
        </div> <!-- /container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{Admin::asset('js/app.min.js')}}"></script>
    </body>
</html>
