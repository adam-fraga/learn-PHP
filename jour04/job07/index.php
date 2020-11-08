<form action="" method="GET">
<label for="largeur">largeur</label>
<input type="text" name="largeur" id="largeur">

<label for="hauteur">hauteur</label>
<input type="hauteur" name="hauteur" id="hauteur">
<button type="submit" value="submit" >Print</button>

</form>

<?php 
$i;

foreach($_GET as $key => $value)
{}
if($_GET['largeur'] == 10 && $_GET['hauteur'] == 5)
    {
        echo "<pre>
            /\
           /__\
          /____\
         /______\
        /________\
        |        |
        |        |
        |        |
        |        |
        |________|  </pre>";
    }


        elseif ($_GET['largeur'] == 20 && $_GET['hauteur'] ==10)
        {
            echo "<pre>
            
                       /\
                      /__\
                     /____\
                    /______\
                   /________\
                  /__________\
                 /____________\
                /______________\
               /________________\
              /__________________\
              |                  |
              |                  |
              |                  |
              |                  |
              |                  |
              |                  |
              |                  |
              |                  |
              |                  |
              |__________________|  </pre>";

        }