<!DOCTYPE html>
<html lang="pt_BR" ng-app="myapp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cidadania</title>
</head>
<div id="preloader">
<img class="centered" src="assets/imgs/logo.png" alt="">
    <div id="status">
        
    </div>
</div>
<body>
    <div class="container">
        <div class="row ">
                <div id="logo-container" class="col-sm-4 hidden-xs">
                <a ui-sref="/"><div id="logo" class="logo padding"></div></a>
                    
                </div>
                <div class="col-sm-8 ">
                    <div class="row hidden-xs">
                        <div class="padding">
                            <div class="col-md-4 pull-right">
                            <form action="" class="search-form">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Buscar</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="Buscar...">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div id="navcontainer" class="row hidden-xs">
                        <ul>
                            <li>
                                <a ui-sref="conheca"><b>conheça o cidadania</b></a> /
                                <a ui-sref="fale"><b>fale conosco</b></a> /
                                <a ui-sref="voce"><b>você propondo leis</b></a> /
                                <a ui-sref="apoie"><b>apoie essa ideia</b></a>
                            </li>
                        </ul>
                    </div>
                    <nav class="navbar navbar-default visible-xs navbar-fixed-top padding">
                       
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                            <a ui-sref="/">
                             <div class="logo padding" alt="cidadania"></div>
                            </a>
                            
                          </div>
                          <div id="navbar" class="navbar-collapse collapse">
                            
                            <ul class="nav navbar-nav navbar-right">
                              <li>
                                <a ui-sref="conheca"><b>conheça o cidadania  </b></a>
                              </li>
                              <li>
                                <a ui-sref="fale"><b>fale conosco </b></a> 
                              </li>
                              <li>
                                <a ui-sref="voce"><b>você propondo leis </b></a> 
                              </li>
                              <li>
                                <a ui-sref="apoie"><b>apoie essa ideia</b></a>
                              </li>
                            </ul>
                          </div><!--/.nav-collapse -->
                
                      </nav>
                      <div class="padding visible-xs"></div>
                      <div class="padding visible-xs"></div>
                      <div class="padding visible-xs"></div>                     
                </div>
        </div>



    <!-- view -->
        <div ui-view class="reveal-animation"></div>


    <!-- view -->
  </div>
<footer id="footer" class="panel-footer verde navbar navbar-inverse navbar-fixed-bottom hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="row verde">
                    <div><img src="assets/imgs/cid-log.png" alt=""> cidadania / mapa do site</div>
                    <div id="mapa" class="row">
                        <ul >
                        <div class="padding-menor"></div>
                            <li class="menu-rodape">

                                <a ui-sref="/">Principal</a><br />
                                <a ui-sref="conheca">Conheça o Cidadania</a><br />
                                <a ui-sref="fale">Fale conosco</a><br />
                                <a ui-sref="voce">Proponha</a><br />
                                <a ui-sref="apoie">Apoie</a>
                            </li>
                            <div class="padding-menor"></div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4 siganos">
                Siga-nos <a href="" target="_blank"><i class="fa fa-facebook-square fa-spc"></i></a>
                    <a href="" target="_blank"><i class="fa fa-twitter-square fa-spc"></i></a> 

            </div>
        </div>
    </div>
</footer>
<footer id="footer-mob" class="panel-footer verde navbar navbar-inverse navbar-fixed-bottom visible-xs visible-sm">
    <div class="container">
        <div class="row">
            
        
            <div class="col-sm-4 pull-right" style="float:right;">
                <img src="assets/imgs/cid-log.png" alt=""> cidadania 2015 \   Siga-nos <a href="" target="_blank"><i class="fa fa-facebook-square fa-spc"></i></a>
                <a href="" target="_blank"><i class="fa fa-twitter-square fa-spc"></i></a> 
            </div>
        </div>
    </div>
</footer>
</body>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-beta.2/angular.min.js"></script>
    <script src="assets/js/angular-ui-router.min.js"></script>
    <script src="https://code.angularjs.org/1.5.0-beta.2/angular-animate.min.js"></script>
    <script src='assets/js/ngMask.min.js'></script>
    <script src="assets/js/app.js"></script>

</html>
