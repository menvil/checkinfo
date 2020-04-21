<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; WebApp Template</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}" >
</head>

<body class="overflow-hidden">
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">

    <div class="container">

        <div class="content">
            <nav class="navbar navbar-light navbar-glass fs--1 font-weight-semi-bold row navbar-top sticky-kit navbar-expand">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand text-left ml-3" href="index.html">
                    <div class="d-flex align-items-center">
                        <span class="text-sans-serif">CheckInfo</span>
                    </div>
                </a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown1">
                    <ul class="navbar-nav align-items-center ml-auto d-lg-block">
                        <li class="nav-item">
                            <form class="form-inline search-box" action="/">
                                <input class="form-control rounded-pill search-input" type="search" placeholder="Search..." aria-label="Search" />
                                <span class="position-absolute fas fa-search text-400 search-box-icon"></span>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="card card-chat">
                <div class="card-body d-flex p-0 h-100">
                    <div class="chat-sidebar">
                        <div class="contacts-search-wrapper">
                            Related Addresses
                        </div>
                        <div class="contacts-list chat-content-scroll-area" data-scrollbar="data-scrollbar">
                            @for ($i = 0 ; $i <=  255 ; $i++)
                            <div class="nav nav-tabs border-0 flex-column" role="tablist" aria-orientation="vertical">
                                <div class="media chat-contact hover-actions-trigger w-100" id="chat-link-0" data-toggle="tab" data-target="#chat-0" role="tab" aria-controls="chat-0" aria-selected="true">
                                    <div class="media-body chat-contact-body ml-2 d-md-none d-lg-block">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="mb-0 chat-contact-title"><a href="{{ action('IpController@show', ['ip' => $ip.'.'.$i]) }}">{{$ip}}.{{ $i }}</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="tab-content card-chat-content fs--1 position-relative">
                        <div class="tab-pane card-chat-pane active" id="chat-0" role="tabpanel" aria-labelledby="chat-link-0">
                            <div class="chat-content-header">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pr-3 text-700 d-md-none contacts-list-show" href="#!">
                                            <div class="fas fa-chevron-left"></div>
                                        </a>
                                        <div class="min-w-0">
                                            <h5 class="mb-0 text-truncate fs-0">{{$info['ip']['address']}}</h5>
                                            <div class="fs--2 text-400">Version: IpV{{$info['ip']['version']}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-content-body">
                                <div class="chat-content-scroll-area" data-scrollbar='{"from":"bottom"}'>
                                    <table class="table table-bordered-bottom fs--1">
                                        <tbody>
                                        @if ($info['country']['name'])
                                            <tr>
                                                <td colspan="2" class="bg-300" style="width: 100%;">Country</td>
                                            </tr>
                                            @if ($info['country']['name'])
                                            <tr>
                                                <td class="bg-100" style="width: 30%;">Country Name</td>
                                                <td>{{$info['country']['name']}}</td>
                                            </tr>
                                            @endif
                                            @if ($info['country']['iso_code'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">ISO Code</td>
                                                    <td>{{$info['country']['iso_code']}}</td>
                                                </tr>
                                            @endif
                                            @if ($info['country']['is_in_european_union'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">European Union</td>
                                                    <td>{{$info['country']['is_in_european_union'] == true ? 'Yes' : 'No'}}</td>
                                                </tr>
                                            @endif
                                            @if ($info['continent']['code'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">Continent Code</td>
                                                    <td>{{$info['continent']['code']}}</td>
                                                </tr>
                                            @endif
                                            @if ($info['continent']['name'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">Continent Name</td>
                                                    <td>{{$info['continent']['name']}}</td>
                                                </tr>
                                            @endif
                                        @endif
                                        @if ($info['city']['name'])
                                            <tr>
                                                <td colspan="2" class="bg-300" style="width: 100%;">City</td>
                                            </tr>
                                            @if ($info['city']['name'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">City Name</td>
                                                    <td>{{$info['city']['name']}}</td>
                                                </tr>
                                            @endif
                                            @if ($info['city']['latitude'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">Latitude</td>
                                                    <td>{{$info['city']['latitude']}}</td>
                                                </tr>
                                            @endif
                                            @if ($info['city']['longitude'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">Longitude</td>
                                                    <td>{{$info['city']['longitude']}}</td>
                                                </tr>
                                            @endif
                                            @if ($info['city']['accuracy_radius'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">Accuracy Radius</td>
                                                    <td>{{$info['city']['accuracy_radius']}}</td>
                                                </tr>
                                            @endif
                                            @if ($info['city']['time_zone'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">Time Zone</td>
                                                    <td>{{$info['city']['time_zone']}}</td>
                                                </tr>
                                            @endif
                                            @if ($info['city']['zip'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">Postal Code</td>
                                                    <td>{{$info['city']['zip']}}</td>
                                                </tr>
                                            @endif
                                            @if ($info['region']['name'])
                                                <tr>
                                                    <td class="bg-100" style="width: 30%;">State/Provice</td>
                                                    <td>{{$info['region']['name']}} @if($info['region']['iso_code'])({{$info['region']['iso_code']}}@endif</td>
                                                </tr>
                                            @endif
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <footer>
                <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2019 &copy; <a href="https://themewagon.com">Themewagon</a></p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">v1.8.0</p>
                    </div>
                </div>
            </footer>
            -->
        </div>
    </div>
</main><!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->



<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<!-- Global site tag (gtag.js) - Google Analytics-->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-122907869-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-122907869-1');
</script>
</body>

</html>
