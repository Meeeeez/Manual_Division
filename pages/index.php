<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        a,
        a:focus,
        a:hover {
            color: royalblue;
        }

        h1 {
            color: black;
        }
        p {
            color: black;
        }
        a {
            color: dodgerblue;
        }

        .btn-default,
        .btn-default:focus {
            color: dodgerblue;
            background-color: #fff;
            border: 1px solid #fff;
        }

        .btn-default:hover {
            color: dodgerblue;
            background-color: #f5f5f5;
        }

        body {
            height: 100%;
            background-color: #fff;
        }
        body {
            color: #fff;
            text-align: center;
        }

        .site-wrapper {
            width: 100%;
            height: 500px;
            background-color: #EBEDF1;     //hintergrundfarbe
        }
        .site-wrapper-inner {
            vertical-align: top;
        }

        .inner {
            padding: 30px;
        }

        .masthead-brand {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .masthead-nav > li {
            display: inline-block;
        }

        .masthead-nav > li + li {
            margin-left: 20px;
        }

        .masthead-nav > li > a {
            padding-right: 0;
            padding-left: 0;
            font-size: 16px;
            font-weight: bold;
            color: dodgerblue;
            border-bottom: 2px solid transparent;
        }

        .masthead-nav > li > a:hover,
        .masthead-nav > li > a:focus {
            background-color: transparent;
            color: royalblue;
            border-bottom-color: royalblue;
        }

        .masthead-nav > .active > a {
            color: dodgerblue;
            border-bottom-color: dodgerblue;
        }

        .masthead-nav > .active > a:hover,{
            color: royalblue;
            border-bottom-color: royalblue;
        }

        @media (min-width: 768px) {
            .masthead-brand {
                float: left;
            }
            .masthead-nav {
                float: right;
            }
        }

        .inner-cover {
            padding: 0 20px;
        }
        .inner-cover .btn-lg {
            padding: 10px 20px;
            font-weight: bold;
        }

        @media (min-width: 768px) {
            .masthead {
                position: sticky;
                top: 0;
            }
            .site-wrapper-inner {
                vertical-align: middle;
            }
        }

        .inner-cover {
            margin-top: 85px;
        }

        .jumbotron {
            background-color: dodgerblue;
            height: 600px;
        }
    </style>
</head>
<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="container">

            <div class="masthead clearfix">
                <div class="container inner">
                    <h3 class="masthead-brand">
                        <a href="index.php">Moritz's Online Rechner</a>
                    </h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="calculatorPage.php">Online Rechner</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner-cover">
                <h1 class="cover-heading">Schriftliche Division jetzt auch digital!</h1>
                <p class="lead">Moritz's Online Rechner ist ein einfacher Rechner der es ermöglicht, sich die schriftliche Division online und mit Lösungsweg vorrechnen zu lassen.</p>
                <p class="lead">
                    <a href="calculatorPage.php" class="btn btn-lg btn-default">Dividieren!</a>
                </p>
            </div>

        </div>

    </div>
</div>
<div class="jumbotron text-center">
    <h1>How Does It Work?</h1>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src=""></iframe>
    </div>
</div>
</body>
</html>