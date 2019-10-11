<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147952215-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-147952215-2');
        </script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MZ3RMHD');</script>
        <!-- End Google Tag Manager -->



        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
        <meta property="fb:app_id" content="497537457709140" />
        <link rel="icon" href="{{ url('HatchfulExport-All/favicon.png') }}">
        <link rel="alternate" href="https://akubagi.com" hreflang="id-ID" />
        <link href="https://fonts.googleapis.com/css?family=Gudea&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

        <link rel="stylesheet" href="{{ asset('mundana/css/main.css') }}">

        <style>
            .mb{
                margin-bottom: 100px !important;
            }
            .bold {
                font-weight: bold;
            }
            p.tldr{
                width: 250px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

        </style>

        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        <nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ url('HatchfulExport-All/sequare.png') }}" alt="" height="30" width="30"><strong>Akubagi</strong></a>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="container mb pt-4">
            <div id="index">
            </div>
        </div>
        
        <script src="{{ asset('mundana/js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('mundana/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('mundana/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('mundana/js/functions.js') }}"></script>
    </body>
</html>