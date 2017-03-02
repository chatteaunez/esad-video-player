<html>
  <head>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/video.css">
  </head>

<?php
  $projects=json_decode(file_get_contents('data/projects.json'));
?>

  <body>

    <section class="menu">
      <?php
        foreach ($projects as $p) {
          echo('<a class="" onclick="getVideo(\''.$p->title.'\');" data-image="data/images/'.$p->image.'">'.$p->title.'</a>');
        }
      ?>
    </section>
    <script src="js/script.js"></script>
  </body>
</html>
