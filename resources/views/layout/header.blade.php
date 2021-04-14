

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    </head>



    <nav id="top-book" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div id="myNavbar-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="menu-nav slide"><a class="btn btn-primary btn-book" href="signin" role="button"><?php echo $lang['LOG IN'] ?></a></li>
                    <li id="menu-drive"class="menu-nav slide"><a href="signup"><?php echo $lang['SIGN UP'] ?></a></li>
                    <li class="menu-nav slide"><a data-toggle="modal" data-target="#gridSystemModal" style="font-weight: normal;cursor: pointer;"><?php echo $lang['Idioma'] ?></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--popup de boton de idioma-->
    <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="modal-header-close" class="modal-header">
                    <h4 class="modal-title" id="gridModalLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="hidden-lg" aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body" id="home">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center">
                            <h6 class="display-2 font-weight-bold d-inline-block slide popup-planos-title"><?php echo $lang['Select your preferred language'] ?></h6><br>
                        </div>

                        <div class="jumbotron-fluid-home">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a class="btn btn-outline-secondary btn-sm slide d-inline-block" role="button" aria-disabled="true" href="index.php?lang=es" style="font-weight: normal;"><?php echo $lang['es'] ?></a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a class="btn btn-outline-secondary btn-sm slide d-inline-block" role="button" aria-disabled="true" href="index.php?lang=en" style="font-weight: normal;"><?php echo $lang['en'] ?></a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--popup de boton de idioma-->




    <nav  class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">
                <div id="btn-menu-responsive" class="btn-menu-w" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target="#myNavbar-1"><span></span></div>
                <a class="navbar-brand " href="/" title="To Top">
                    <img id="logo" src="images/Metro-Home-logo.png"/>
                </a>
            </div>


            <div class="collapse navbar-collapse" id="myNavbar-1">

                <ul class="nav navbar-nav navbar-right">
                    <li class="menu-nav slide"><a href="#"><?php echo $lang['BECOME A DRIVER'] ?></a></li>
                    <li class="menu-nav slide"><a href="#"><?php echo $lang['REQUIREMENTS'] ?></a></li>
                    <li class="menu-nav slide"><a href="#"><?php echo $lang['WHY WORK WITH METRO'] ?></a></li>
                    <li class="menu-nav slide"><a href="#"><?php echo $lang['FAQ'] ?></a></li>
                </ul>
            </div>
        </div>
    </nav>





    <!--########   All JS  ########-->
    <!--Links local js-->
    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>














