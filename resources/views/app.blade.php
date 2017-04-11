<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="csrf-token" content="<?= csrf_token() ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (isset($description))
        <meta name="description" content="{{ $description }}">
    @else
        <meta name="description" content="jQuery Datatables API for Laravel 4 and Laravel 5">
    @endif

    <title>মাইক্রোফ(MiKroF)</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('/jqueryui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/jqueryui/jquery-ui.theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/datatables.bootstrap.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,800' rel='stylesheet'
          type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="{{ asset('highlight/styles/zenburn.css') }}">
    <!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"> -->
    <link href="{{ asset('/css/bootstrap-combined.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="//resources/demos/style.css"> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script
            src="{{ asset('js/jquery1.12.1-ui.js') }}"
            integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
            crossorigin="anonymous"></script>
<!-- <link href="{{ asset('bootstrap-3.3.6/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <script src="{{ asset('highlight/highlight.pack.js')  }}"></script>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>--}}
    <script>hljs.initHighlightingOnLoad();</script>
    <style type="text/css">
        .dropdown-menu {
            float: left;
        }

        .dropdown-menu,
        .dropdown-submenu {
            width: 100% !important;
        }

        .pull-right {
            /* float: none!important; */
        }

        .navbar-inverse .nav > li > a {
            color: #ffffff !important;
        }

        .loading {
            background: lightgoldenrodyellow url('{{asset('images/processing.gif')}}') no-repeat center 65%;
            height: 80px;
            width: 100px;
            position: fixed;
            border-radius: 4px;
            left: 50%;
            top: 50%;
            margin: -40px 0 0 -50px;
            z-index: 2000;
            display: none;
        }

        div.product .input-group .form-control#search,
        div.product input[type="text"] {
            /* height: 24px;
            width: 100%; */
        }

        .pull-right > .dropdown-menu {
            left: none !important;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <script src="{{ asset('js/jquery3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery1.10.2.min.js') }}"></script>
    <script
            src="{{ asset('js/jquery-u.js') }}"
            integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="
            crossorigin="anonymous"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="dt-icon"><i class="fa fa-th-list"></i></span>
                MiKroF</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- <ul class="nav navbar-nav">
                <li><a href="https://github.com/yajra/laravel-datatables"><strong><i class="fa fa-github"></i>
                            Github</strong></a></li>
                <li><a href="https://yajrabox.com/docs/laravel-datatables/6.0"><strong>Documentation</strong></a></li>
                <li><a href="https://www.patreon.com/bePatron?u=4521203"><strong>Become a Patreon</strong></a></li>
            </ul> -->
            <div class="zoneareabran">
                <ul class="nav navbar-nav navbar-custom">
                    <li><span>Division: </span>&nbsp;Division Name </li>
                    <li><span>Zone: </span>&nbsp;Bogra &nbsp;</li>
                    <li><span>Area: </span> &nbsp;Central </li>
                    <li><span>Branch: </span> &nbsp;Central </li>
                </ul>
            </div>

            <ul class="nav navbar-nav navbar-right navbar-custom">

                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                <!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }} &nbsp; [Branch Manager] <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 main">
            @include('partials.sidebar-menu')
            <br>
            @include('donate')
            <br>
            <div class="panel panel-info" style="display: none;">
                @include('partials.ads',[
                    'client' => env('ADS_YAJRA_CLIENT'),
                    'slot'  => env('ADS_YAJRA_SLOT_BOX'),
                    'format'=>'auto',
                    'style'=>'display:none;'
                ])
            </div>
        </div>
        <div class="col-sm-10 main">
            @include('partials.ads',[
                'slot'=>env('ADS_VERTICAL_SLOT'),
                'format'=>'auto',
                'style'=>'display:none;'
            ])
            <div class="col-md-12">
            @yield('content')
            <!-- <hr> -->
                @include('partials.ads',[
                    'client' => env('ADS_YAJRA_CLIENT'),
                    'slot'  => env('ADS_YAJRA_SLOT'),
                    'format'=>'auto',
                    'style'=>'display:none;'
                ])
                <hr>
                <div id="disqus_thread"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="panel-footer footercopy">
            <div class="pull-left">Copyright <sup>&reg;</sup> MiKroF 2017</div>
            <div class="pull-right">Design & Developed by <a target="_blank" href="http://tmss-ict.com">TMSS-ICT</a></div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatables.bootstrap.js') }}"></script>
<script src="{{ asset('js/handlebars.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.0.0/jquery.mark.min.js"></script>
<script>
    $(function () {
        var $input = $("input[name='keyword']"), $context = $(".keyword");
        $input.on("input", function () {
            var term = $(this).val();
            $context.show().unmark();
            if (term) {
                $context.mark(term, {
                    done: function () {
                        $context.not(":has(mark)").hide();
                    }
                });
            }
        });
        $('#search-filter').focus();
    });
</script>
@stack('scripts')
@if (config('analytics.enabled', false))
    @include('analytics')
@endif
</body>
</html>
