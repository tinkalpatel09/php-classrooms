<!DOCTYPE html>
<html lang="en">
    <head>
        <title>oop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
         <?php 


            class point {
                public $x = 0;
                public $y = 0;

                function distance($p){
                    $deltaX = abs($this->x - $p->x);
                    $deltaX = abs($this->y - $p->y);
                    return sqrt(pow($deltaX, 2) + pow($deltaY, 2));

                      
                }
            }
            
            $p1 = new point();
            $p2 = new point();
            $p2 ->x  =3;
            $p2 ->y  =4;
            
            echo "Distance is:" . $p1->distance($p2);
            echo "<br/>";



           class demo{
               //field variables 
                public $name = "mir";
                public $age =25;


                //function 

                function printname(){
                    echo "Name is: " . $this->name;
                }
           }
           $person = new $demo();
           $person->printname();

           echo "<br/>";
           echo "Age is : " . $person->age;
           echo "<br/>";

         ?>
    </body>
</html>