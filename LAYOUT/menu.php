<?php 

// session_start(); 


?>

<div class="navbar-fixed">
<div class="navbar-fixed">
<nav>  
  <div class="nav-wrapper color-background" >
    <a href="" class="brand-logo" style="margin-left: 10px;font-size: 1em;">PROYECTOS INEX</a>
    <a href="" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
    <li><a class="dropdown-trigger" href="" data-target="dropdown1">
        <i class="material-icons right">arrow_drop_down</i>
        </a> 
    </li> 
    </ul>
  </div> 

</nav> 
</div>

<nav class="hide-on-med-and-down">  
<div class="nav-wrapper color-background" style="background-color: white; ">
<ul class="left hide-on-med-and-down" style="">

<li><a class="black-text" id="mnuProy" style="font-size: 0.8em; text-align: center; height: 64px;" href="index.php" >
  <i class="material-icons teal-text " style="height: 16px; line-height: 48px;">home</i>Inicio
</a></li>
<li><a class="black-text" id="" style="font-size: 0.8em; text-align: center; height: 64px;" href="create_user.php" >
  <i class="material-icons teal-text " style="height: 16px; line-height: 48px;">supervisor_account</i>Usuarios
</a></li>
</ul>

<ul class="right hide-on-med-and-down">
<li style="position: relative; left:-13px;"><span style="color:black"></span></li>
</ul>

</div>
</nav>

<ul id="dropdown1" class="dropdown-content dropdown-menu">
  <li><a href="#modalUsuario" class="modal-trigger" Onclick="">
    <i class="material-icons black-text " >account_circle</i><?php echo $_SESSION["NOMB"]; ?></a></li>
  <li class="divider"></li>
  <li><a href="../config/cerrar.php"><i class="material-icons black-text">lock</i>Cerrar Sesión </a></li>
</ul>
</div>

<ul  id="mobile-demo" class="sidenav">
<li class="color-background" style="padding-left: 10px; ">
  <div style="color: white; font-size: 0.8em; font-weight: 500; ">
  <?php echo $_SESSION["NOMB"]; ?>
  </div>
<!-- <li><a href="javascript: $('.sidenav').sidenav('close');"  style="padding-left: 16px;"> -->
<li><a href="index.php"  style="padding-left: 16px;">
	<i class="material-icons teal-text ">home</i>Inicio </a>
</li>
<li><a class="black-text" id="" style="padding-left: 16px;" href="create_user.php" >
  <i class="material-icons teal-text " style="height: 16px; line-height: 48px;">supervisor_account</i>Usuarios
</a></li>

<li class="divider"></li>
<li><a href="../config/cerrar.php" style="padding-left: 16px;">
  <i class="material-icons teal-text">lock</i>Cerrar Sesión</a>
</li>
</ul>
