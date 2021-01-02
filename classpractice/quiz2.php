<!DOCTYPE html>
<html lang="en">
    <head>
        <title>quiz2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php 
    echo "first question";
    echo "</br>";
    function my_array_product($array) {
		$pro = 1;
		foreach($array as $num) {
			$pro = $pro * $num;
		}
		return $pro;
	}
	echo my_array_product(array(1, 2, 3, 4)) . "</br>";
    
    echo "</br>";
   function array_product1($array){
       $product = 1;
       for($x = 0 ; $x < sizeof($array); $x++)
       {
        $product =  $product * $array[$x];
       }
       return $product;
   }
   echo array_product1(array(1, 2, 3, 4)) . "</br>";
   echo "</br>";

   function arrayProductThree(array $x,int $y)
{
    if($y==0)
    return ($x[$y]);
    else
    // $product=arrayProductThree($x,($y-1));
    return ($x[$y] * arrayProductThree($x,$y-1));
}
$size=count($array);
$result3 = arrayProductThree($array,$size-1);
echo ("$result3");

  


   echo "second question";
   echo "</br>";

   function arrayfor_eachh($array,$operation)
   { $sum = $array[0];
       $lenght = count($array);
       for($i = 1; $i < $lenght; $i++) {
           $sum = $operation($sum, $array[$i]);
       }
   
       return $sum;
   
   }
   
   $result=arrayfor_eachh($array, function($x,$y)
   {return $x + $y;});
   
   echo ("$result");

echo "Third question";
echo "</br>";

function CalculateInterest($array,$interest)
{
    $total=$array[sizeof($array)-1];
    for($i=1;$i<sizeof($array);$i++)
    {
        $total+=$array[$i];
    }
    return ($total*($interest/100))/365.0;    
}

echo CalculateInterest(array(5000, 4800, 4000, 5000, 4500, 5000, 5000),19.99);




echo "Four question";
echo "</br>";




    ?>
    </body>
</html>