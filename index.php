<html>
  <head>
   <link href="https://fonts.googleapis.com/css?family=Chivo:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/video.css">
  </head>

<?php
  $projects=json_decode(file_get_contents('data/projects.json'));
?>

  <body>

    <section class="menu">
      <?php
        $i=0;
        foreach ($projects as $p) {
          if($i>0){
            echo '<span class="pipe">|</span>';
          }
          echo('<a class="" onclick="getVideo(\''.$p->title.'\');" data-image="data/images/'.$p->image.'">'.$p->title.'</a>');
          $i++;
        }
      ?>
    </section>
    <script src="js/script.js"></script>
  </body>
</html>
