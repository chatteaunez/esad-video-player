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
    <div id="fond">
    </div>

    <section class="menu" onmouseout="this.classList.remove('active');">
      <?php
        $i=0;
        foreach ($projects as $p) {
          if($i>0){
            echo '<span class="">|</span>';
          }
          echo('<a class="" onclick="getVideo(\''.$p->title.'\');" data-image="data/images/'.$p->image.'" onmouseenter="menuhover(this)">'.$p->title.'</a>');
          $i++;
        }
      ?>
    </section>


    <div id="single"></div>

    <script src="js/script.js"></script>
  </body>
</html>
