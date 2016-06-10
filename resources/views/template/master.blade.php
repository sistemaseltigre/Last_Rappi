<!DOCTYPE html>
<html lang="en">

<head>

    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/adsbygoogle.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/ajax.js')}}"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/1-col-portfolio.css')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JESUS SILVA</title>  

</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-center" role="navigation" style="background-color: #FFFFFF;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Jesus Silva</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{url('hackerrank')}}">Hackerrank</a>
                    </li>
                    <li>
                        <a href="{{url('capayAplicacion')}}">Capa y Aplicacion</a>
                    </li>
                    <li>
                        <a href="{{url('coderefa')}}">Code Refactoring y Preguntas</a>
                    </li>
                    <li>
                        <a href="{{url('noticias')}}">Noticias</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->

    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
    
      
 

<div class="panel panel-default">
  <div class="panel-body"> @yield('contenido_vista')</div>
</div>
    

        <!-- Footer -->
        <footer>
            
                <div class="panel panel-default">
                    <p align="center"><b>Copyright &copy; Jesus Silva 2016</b></p>
                </div>
            
            <!-- /.row -->
        </footer>

    </div>


<div class="modal fade" id="modal_error">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Error</h4>
      </div>
      <div class="modal-body">
        <p id="mensaje_error"></p>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->