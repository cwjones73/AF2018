<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>Bootstrap 4 Layout</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/style.css">
    <style>
    body { 
    @include background-image(rainbow(left, $colors));
  }
    </style>
    </head>
<body>
    <div class="index-container gradient">
        
        <div class="main-title-heading index-box">
            
                <ul class="main-nav">
                    <li class="nav-item">home!</li>
                    <li class="nav-item">Young People</li>
                    <li class="nav-item">Employers</li>
                    <li class="nav-item">Providers</li>
                </ul>

            <h1 class="index-title">Aspirational Futures</h1>
        </div>
        <div class="main-content text-center">
            <div class="row">
                <div class="col-sm-12 col-lg-3">
                    <nav> 
                        <ul class="main animated bounceInUp slower go delay-250">
                                <li class="main employers">Employers</li>
                                <li class="main employers">mid 1</li>
                                <li class="main employers">mid 2</li>
                                <li class="main employers">this is a box last child</li>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <nav>
                        <ul class="main YoungPeople">
                                <li class="main YoungPeople">Young People</li>
                                <li class="main YoungPeople">mid 1</li>
                                <li class="main YoungPeople">mid 2</li>
                                <li class="main YoungPeople">this is a box last child</li>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <nav>
                        <ul class="main providers">
                                <li class="main providers">Learning Providers</li>
                                <li class="main providers">mid 1</li>
                                <li class="main providers" class="providers">mid 2</li>
                                <li class="main providers">this is a box last child</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
  </div>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>