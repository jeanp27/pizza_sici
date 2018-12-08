<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Pizza SICI </title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div id="templatemo_container">
  <div id="templatemo_top">
    <div id="templatemo_title">PIZZERIA <span>SICI</span></div>
      <div class="templatemo_menu">
        <?php
          include 'nav-bar.php';
        ?>
      </div>
    </div>
    <div id="templatemo_header">
      <div id="templatemo_header_slogan">      
        <p><br><br><br>¡ Este es el sitio web de pizzería SICI ! Aquí iría el slogan... ¡si se me ocurriera uno!</p>
      </div>
    </div>
    <div id="templatemo_content" class="style2">
      <div id="templatemo_main_content">
        <div><i id="icon" class="fa fa-shopping-cart"></i></div>          
        <h2>Menú</h2>

        <div class="checkbox">
          <label>Queso &nbsp;&nbsp; <input type="checkbox" value=""></label>
        </div>

        <?php
          $sauce = array('Nada', 'Tomate', 'Marinara', 'Alfredo', 'Guayaba');
          function showSelect($array, $arType) {

            echo '<div class = form-group>
                  <label for="sel1">'.$arType.'</label>
                  <select class="form-control" id="sel1">';
            foreach($array as $item) {
              echo '<option>'.$item.'</option>';
            }
            echo '</select></div><br>';
          }

          showSelect($sauce, 'Salsa')
        ?>
        <h3> Toppings </h3>
        <div class="row">
          <div class="column">
            <?php
              for ($i = 1; $i <= 3; $i++) {
                $carne = array('Nada', 'Pepperoni', 'Pollo', 'Bacon', 'Anchoas', 'Chorizo', 'Salami');
                showSelect($carne, 'Carne ' . $i);
              }
            ?>
          </div>
          <div class="column">
            <?php
              for ($i = 1; $i <= 3; $i++) {
                $otros = array('Nada', 'Cebolla', 'Setas', 'Pimiento Verde', 'Aceitunas Negras', 'Aceitunas Verdes', 'Orégano', 'Ajo', 'Piña');
                showSelect($carne, 'Otros ' . $i);
              }
            ?>
          </div>
        </div>
        
        <br><br>

        <div class="checkbox">
          <label><input type="checkbox" value=""> Aceite de Oliva </label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value=""> Sal </label>
        </div>
        <a class="button">Add to cart</a>
      </div>
    </div>
    <div id="templatemo_footer">
      <div id="templatemo_footer_left">Copyright © Pizzería SICI <!-- Credit: www.templatemo.com --></div>
      <div id="templatemo_footer_right">
        <strong>Llámanos:</strong><br />
          Tel: 000-100-1000<br />
          Email: pizza&#64;sici.com<br />
      </div>
    </div>
</div>
<!-- templatemo 033 tomato -->
<!-- 
Tomato Template 
http://www.templatemo.com/preview/templatemo_033_tomato 
-->
</body>
</html>