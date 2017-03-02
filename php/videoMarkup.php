<?php
  $projects=json_decode(file_get_contents('../data/projects.json'));
  foreach ($projects as $p) {
    if ($p->title == $_POST['name']) {
      # code...
    }
  }
  echo($_POST['name']);
 ?>
