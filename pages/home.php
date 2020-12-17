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
            color: #fff;
        }

        .btn-default,
        .btn-default:hover,
        .btn-default:focus {
            color: #333;
            text-shadow: none;
            background-color: #fff;
            border: 1px solid #fff;
        }

        html,
        body {
            height: 100%;
            background-color: #fff;
        }
        body {
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .site-wrapper {
            display: table;
            width: 100%;
            height: 600px;
            background-color: #064179;     //hintergrundfarbe
        }
        .site-wrapper-inner {
            display: table-cell;
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
            color: #fff;
            color: rgba(255,255,255,.75);
            border-bottom: 2px solid transparent;
        }
        .masthead-nav > li > a:hover,
        .masthead-nav > li > a:focus {
            background-color: transparent;
            border-bottom-color: #a9a9a9;
            border-bottom-color: rgba(255, 255, 255, 0.25);
        }
        .masthead-nav > .active > a,
        .masthead-nav > .active > a:hover,
        .masthead-nav > .active > a:focus {
            color: #fff;
            border-bottom-color: #fff;
        }

        @media (min-width: 768px) {
            .masthead-brand {
                float: left;
            }
            .masthead-nav {
                float: right;
            }
        }

        .cover {
            padding: 0 20px;
        }
        .cover .btn-lg {
            padding: 10px 20px;
            font-weight: bold;
        }

        @media (min-width: 768px) {
            .masthead {
                position: fixed;
                top: 0;
            }
            .site-wrapper-inner {
                vertical-align: middle;
            }

        }

        .jumbotron {
            background-color: #282828;
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
                            <li class="active"><a href="home.php">Home</a></li>
                            <li><a href="index.php">Online Rechner</a></li>
                            <li class="active"><a href="home.php">Home</a></li>
                            <li><a href="index.php?type=explaination">Rechner mit Schritten</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">Schriftliche Division jetzt auch digital!</h1>
                <p class="lead">Moritz's Online Rechner ist ein einfacher Rechner der es ermöglicht, sich die schriftliche Division online und mit Lösungsweg vorrechnen zu lassen.</p>
                <p class="lead">
                    <a href="index.php" class="btn btn-lg btn-default">Rechnen!</a>
                </p>
            </div>

        </div>

    </div>
</div>
<div class="jumbotron text-center">
    <h1>How Does It Work?</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor eveniet fugiat ipsum nulla obcaecati quae quaerat tempora ullam. Aperiam at cum inventore, libero nostrum repellendus repudiandae tempore unde voluptate.</p>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src=""></iframe>          //video
    </div>
</div>
</body>
</html>