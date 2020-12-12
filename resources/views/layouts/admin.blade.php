<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<![endif]-->
<!--[if IE 9]>
<html id="ie9" class="ie" dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie" dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<![endif]-->
<!--[if !IE]>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<![endif]-->

<!-- START HEAD -->
<head>

    <meta charset="UTF-8" />
    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <title>{{ $title }}</title>

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('administrator/images/favicon.ico') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('administrator/images/favicon.ico') }}" />
    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('administrator/images/apple-touch-icon-144x.png') }}" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('administrator/images/apple-touch-icon-114x.png') }}" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('administrator/images/apple-touch-icon-72x.png') }}" />
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('administrator/images/apple-touch-icon-57x.png') }}" />
    <!-- [favicon] end -->

    <!-- CSSs -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('administrator/css/reset.css') }}" /> <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('administrator/css/style.css') }}" /> <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" id="max-width-1024-css" href="{{ asset('administrator/css/max-width-1024.css') }}" type="text/css" media="screen and (max-width: 1240px)" />
    <link rel="stylesheet" id="max-width-768-css" href="{{ asset('administrator/css/max-width-768.css') }}" type="text/css" media="screen and (max-width: 987px)" />
    <link rel="stylesheet" id="max-width-480-css" href="{{ asset('administrator/css/max-width-480.css') }}" type="text/css" media="screen and (max-width: 480px)" />
    <link rel="stylesheet" id="max-width-320-css" href="{{ asset('administrator/css/max-width-320.css') }}" type="text/css" media="screen and (max-width: 320px)" />

    <!-- CSSs Plugin -->
    <link rel="stylesheet" id="thickbox-css" href="{{ asset('administrator/css/thickbox.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="styles-minified-css" href="{{ asset('administrator/css/style-minifield.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="buttons" href="{{ asset('administrator/css/buttons.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="cache-custom-css" href="{{ asset('administrator/css/cache-custom.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="custom-css" href="{{ asset('administrator/css/custom.css') }}" type="text/css" media="all" />

    <!-- FONTs -->
    <link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
    <link rel='stylesheet' href="{{ asset('administrator/css/font-awesome.css') }}" type='text/css' media='all' />

    <!-- JAVASCRIPTs -->
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/comment-reply.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.quicksand.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.tipsy.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.cycle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.anythingslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.eislideshow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.aw-showcase.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/layerslider.kreaturamedia.jquery-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/shortcodes.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.colorbox-min.js') }}"></script> <!-- nav -->
    <script type="text/javascript" src="{{ asset('administrator/js/jquery.tweetable.js') }}"></script>

</head>
<!-- END HEAD -->

<!-- START BODY -->
<body class="no_js responsive page-template-home-php stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">

    <!-- START WRAPPER -->
    <div id="wrapper" class="group">

        <!-- START HEADER -->
        <div id="header" class="group">
            <div class="group inner">

                @yield('header')

                <div class="clear space"></div>
                <hr />
            </div>
        </div>
        <!-- END HEADER -->

        <br />

        <!-- START PRIMARY -->
        <div id="primary" class="sidebar-no">
            <div class="inner group">

                @if(session('status'))
                    <div class="box success-box">
                        {{ session('status') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="box error-box">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- START CONTENT -->
                <div id="content-home" class="content group">
                    <div class="hentry group">

                        @yield('content')

                    </div>
                </div>
                <!-- END CONTENT -->
                <!-- START EXTRA CONTENT -->
                <!-- END EXTRA CONTENT -->
            </div>
        </div>
        <!-- END PRIMARY -->


        <!-- START FOOTER -->
        <div id="copyright">
            <div class="inner group">
                @yield('footer')
            </div>
        </div>
        <!-- END FOOTER -->

    </div>
    <!-- END WRAPPER -->
</div>
<!-- END BG SHADOW -->

<script type="text/javascript" src="{{ asset('administrator/js/jquery.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('administrator/js/contact.js') }}"></script>
<script type="text/javascript" src="{{ asset('administrator/js/jquery.mobilemenu.js') }}"></script>

</body>
<!-- END BODY -->
</html>
