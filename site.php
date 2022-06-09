<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

     <?php
       class chef {
          function makeChicken(){
            echo "The chef makes chicken <br>";
          }
          function makeSalad(){
            echo "The chef makes sald <br>";
          }
          function makesSpecialDish(){
            echo "The chef makes bbq ribs <br>";
          }
        }


        class ItalianChef extends chef {
          function makePasta(){
            echo "The chef makes pasta";
          }
          function makesSpecialDish(){
            echo "The chef makes chicken parm";
          }
        }

       $chef = new chef();
       $chef->makesSpecialDish();

       $italianchef = new Italianchef();
       $italianchef->makesSpecialDish();
      ?>


  </body>
</html>
