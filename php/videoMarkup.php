<?php
  $projects=json_decode(file_get_contents('../data/projects.json'));
  foreach ($projects as $p) {
    if ($p->title == $_POST['name']) {
      echo('<aside>');
        echo('<h1 class="title">'.$p->title.'</h1>');
        echo('<h2 class="participants">');
        foreach ($p->participants as $participant) {
          echo ('<span>'.$participant.'</span>');
        }
        echo('</h2>');
        echo ('<p class="description">'.$p->description.'</p>');
        echo ('<div class="back" onclick="this.parentNode.parentNode.innerHTML=\'\'">Retour</div>');
      echo('</aside>');
      echo('<video src="./data/videos/'.$p->lien.'"></video>');
      echo('<div id="mask" onclick="playPause(this);"></div>');
    }
  }

?>
