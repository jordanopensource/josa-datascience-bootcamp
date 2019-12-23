<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
        <meta property="og:title" content="JOSA Data Science Bootcamp" />
        <meta property="og:site_name" content="JOSA Data Science Bootcamp" />
        <meta property="og:description" content="Register now to JOSA Data Science Bootcamp! A 6-day bootcamp organized by Jordan Open Source Association and delivered by Jordanian data scientists who made sure that the content is relevant to the growing data science industry in Jordan." />
        <meta property="og:image" content="http://datascience.jordanopensource.org/images/fbimage.png" />
        <meta property="og:url" content="http://datascience.jordanopensource.org/" />
        <meta property="fb:pages" content="142511369904" />


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @yield("style")

        <!-- Fontawesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" integrity="sha384-b3ua1l97aVGAPEIe48b4TC60WUQbQaGi2jqAWM90y0OZXZeyaTCWtBTKtjW2GXG1" crossorigin="anonymous"></script>

        <title>JOSA Data Science Bootcamp</title>
    </head>
    <body>

        <!-- Website Background Image -->
        <div class="body-img"></div>

        <!-- Mobile Navbar -->
        @include('mobileNavbar')

        <!-- Website Container -->
        <div class="container">

            <!-- Desktop Navbar -->
            @include('navbar')

            <img class="logo d-block d-md-none" src="\images\logo.svg" alt="JOSA DATA SCIENCE BOOTCAMP LOGO">
            <div class="event-date mt-4">
                <br />january - february 2020<br />
                amman, jordan
            </div>
            <div class="body-section-container text-right">
                @yield("body-section")
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @yield("scripts")

    </body>
</html>
