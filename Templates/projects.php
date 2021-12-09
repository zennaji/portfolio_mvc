<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/reset.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <title><?= getTitle() ?></title>
</head>

<body class="body-light">

  <!-- Navbar -->
  <?php include_once "defaults/menu.php";  ?>
  <!-- Projects -->
  <h1 class="title_prj">Projects</h1>
  <p class="mini_title_prj">here are a few projects i've worked on recently </p>

  <?php
    foreach ($project as $data): ?>
   <div class='projects_section'>
   <div class='all_projects'>
   <div class='project'>
   <img src=" <?= $data->image ?> " width='300px'>
   <div class='project_01_presentation'>
   <h3><?= $data->name ?></h3>
   <p><?= $data->discription ?></p>
   <a href=" <?= $data->link ?> "> <input id='btn'  type='button' value='See'> </a>
   </div>
   </div>
   </div>
   </div>
   <?php endforeach; ?>

  <!-- Footer -->
  <?php include_once "defaults/footer.php";  ?>
