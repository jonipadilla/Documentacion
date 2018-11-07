<!DOCTYPE html>
<html>
    <head>
        <!--<link rel="stylesheet" type="text/css" href="view/stylesheet.css">-->
      <link rel="stylesheet" href="public/template/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="public/template/bootstrap/css/bootstrap-theme.min.css" type="text/css" />    
      <link rel="stylesheet" href="public/template/bootstrap/css/ie10-viewport-bug-workaround.css" type="text/css" />
      <link rel="stylesheet" href="public/template/bootstrap/css/theme.css" type="text/css" />


      <script src="public/template/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="public/template/bootstrap/js/docs.min.js" type="text/javascript"></script>
      <script src="public/template/bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
      <script src="public/template/bootstrap/js/jquery.min.js" type="text/javascript"></script>
      <script src="public/template/bootstrap/js/npm.js" type="text/javascript"></script>
     
      <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
          margin-bottom: 0;
          border-radius: 0;
        }
        
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}
        
        /* Set gray background color and 100% height */
        .sidenav {
          padding-top: 20px;
          background-color: #f1f1f1;
          height: 100%;
        }
        
        /* Set black background color, white text and some padding */
        footer {
          background-color: #555;
          color: white;
          padding: 15px;
        }



    ul.topnav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #f1f1f1;
    }

    ul.topnav li {float: left;}

    ul.topnav li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 36px;
        text-decoration: none;
    }
    li {
        float: left;
        border-right:1px solid #bbb;
    }

    ul.topnav li a:hover:not(.active) {background-color: DodgerBlue;}

    ul.topnav li a.active {background-color: DodgerBlue;}

    ul.topnav li.right {float: right;}

    @media screen and (max-width: 700px){
        ul.topnav li.right, 
        ul.topnav li {float: none;}
    }
  </style>

   
        <nav class="navbar navbar-default">
          <div class="container">
            <ul class="topnav">
                
                <li><a class="active" href="<?php echo base_url(); ?>Cadministrador/index">Inicio</a></li>
               
                <li><a href='<?php echo base_url('Csocio/registrarSocio')?>'>Socios</a></li>
                <li><a href='<?php echo site_url('cPersonal/registrar')?>'>Personal</a></li>
                <!--<li><a href="<?php echo base_url(); ?>CasistenciaSocio/index">Asistencia</a></li>-->
                <li><a href='<?php echo site_url('clistadoAsistencia/asistenciaSocio')?>'>Litado Asistencia</a></li>
                <li><a href='<?php echo site_url('cinscripcion/registrarInscripcion')?>'>Inscripcion</a></li>
                <li><a href='<?php echo site_url('cservicio/registrarServicio')?>'>Servicio</a></li>
                <li><a href='<?php echo base_url('cdisciplina/registrarDisciplina')?>'>Disciplina</a></li>
            
               
                <li><a class="col-xs-12 text-right" href="<?php echo base_url(); ?>Clogin/logout"> Cerrar Sesión</a>
                  </li>   
            </ul>                                            
          </div>
        </nav>
 </head>