<!DOCTYPE html>
<html lang="{{$doc_lang}}" class="{{implode(' ', $doc_classes)}} view-{{$doc_view_slug}}">
    <head>
        <meta charset="{{$doc_charset}}">
        <meta name="viewport" content="{{$doc_viewport}}">
        <meta name="description" content="{{$doc_description}}">
        <meta name="author" content="{{$doc_author}}">
        <link rel="shortcut icon" href="{{$doc_favicon}}">

        <title>{{$doc_title}}</title>

        <!-- Bootstrap core CSS -->
        <style type="text/css" id="relativecss">html,body{position:static}body *{position:relative}</style>
        <link href="{{Backend::asset('css/app.min.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <style>
            body {
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .navbar {
                margin-bottom: 20px;
                min-height:45px;
            }
            
            .navbar-brand{
                height:auto;
                padding:4px 15px;
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
                        <a class="navbar-brand" href="{{lang_url()}}">
                            <img src="{{Backend::asset('img/logo_gray.png')}}" alt="LOGO" />
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{lang_url()}}">Home</a></li>
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Lang::language()->name}} <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Change language:</li>
                @foreach(Lang::getActiveLanguages() as $i => $lang)
                <li @if($lang->code == Lang::code())class="active"@endif><a href="{{URL::langSwitch($lang->code)}}">{{$lang->name}}</a></li>
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
        <small class="thorcms-version al-c label label-info">Thor CMS {{THORCMS_VERSION}}{{'@'.App::environment()}}</small>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{Backend::asset('js/app.min.js')}}"></script>
    </body>
</html>
