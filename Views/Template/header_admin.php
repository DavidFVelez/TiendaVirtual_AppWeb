<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"> //formato para caracteres especiales
  <meta name="description" content="Tienda Virtual App Web"> //descripcion que aparece bajo el nombre la pagina cuando se busca
  <meta http-equiv="X-UA-Compatible" content="IE=edge">//compatibilidad con edge
  <meta name="viewport" content="width=device-width, initial-scale=1"> //permite formatear el responsive
  <meta name="author" content="David Vélez, Cristian Charo"> //esto es para los autores
  <meta name="theme-color" content="#009688"> //cambia color
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/images/favicon.ico"> //icono que aparece en la pestaña del navegador
  <title><?= $data['page_tag'] ?></title> //nombre de la pestaña
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css"> //este llamado se usa para darle estilos peronalizados agenos al template

  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> //llamado a los iconos de font.awesome
</head>

<body class="app sidebar-mini">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="<?= base_url(); ?>/dashboard">Tienda Virtual_ App Web</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> //icono del menu
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a> //icono del usuario
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="<?= base_url(); ?>/opciones"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
          <li><a class="dropdown-item" href="<?= base_url(); ?>/perfil"><i class="fa fa-user fa-lg"></i> Profile</a></li>
          <li><a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <?php require_once("nav_admin.php"); ?>