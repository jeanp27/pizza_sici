<?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        $links = array(
            'HOME' => 'index.php',
            'MENU' => 'menu.php',
            'CONTÁCTANOS' => 'contact.php'
        );
        echo '<ul>';
          foreach ($links as $name => $url) {
            echo '<li><a href="'.$url.'"'.(($currentPage == $url) ? ' style="color:#9c9c9c">': '>').$name.'</a></li>';
          }
        echo '</ul>';
?>