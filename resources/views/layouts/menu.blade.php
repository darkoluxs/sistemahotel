<html>
<head>
<link rel="stylesheet" type="text/css" href="{{'assets/css/menu.css'}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <div class="row">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs-inline-block nav-logo" href="/"><img src="/images/logo-dark-inset.png" class="img-responsive" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav js-nav-add-active-class">
            <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
            <li><a href="/habitaciones"><i class="fa fa-bed" aria-hidden="true"></i> Habitaciones</a></li>
            <li><a href="/empleados"><i class="fa fa-users" aria-hidden="true"></i> Empleados</a></li>
            <li><a href="/facturas"><i class="fa fa-money" aria-hidden="true"></i> Facturas</a></li>
            <li><a href="/servicios"><i class="fa fa-bell" aria-hidden="true"></i> Servicios</a></li>
            <li><a href="/clientes"><i class="fa fa-users" aria-hidden="true"></i> Clientes</a></li>
            <!--<li class="visible-xs-block"><a href="">About Us</a></li>
            <li class="visible-xs-block"><a href="">Careers</a></li>
            <li class="visible-xs-block"><a href="">Press Release</a></li>
            <li class="visible-xs-block"><a href="">Cerrar s</a></li> -->
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-star" aria-hidden="true"></i> Servicio al cliente <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" id="desplegar">
                <li><a href="/Reservas">Reservas</a></li>
                <li id="tip1"><a href="">Servicio a la habitacion</a></li>
                <li><a href="/consumos">Consumos</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-xs">
            <a type="button" class="navbar-btn btn btn-gradient-blue" am-latosans="bold">Cerrar Sesion</a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div>
</div>
</body>
</html>


