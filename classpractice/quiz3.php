<!DOCTYPE html>
<html lang="en">
    <head>
        <title>quiz3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
         class Employee
         {
             public $id;
             public $name;
     
             public function constrt($id, $name)
             {
                 $id = 0000;
                 $name = '';
             }
             public function LastName($string)
             {
                 $array = explode(' ', $string);
                 return $array[sizeof($array) - 1];
             }
         }
         $EmpName = new Employee();
         print "#que 1\n";
         print "last name is:";
         print "<h1>" . $EmpName->LastName("Tinkal Patel") . "</h1>";
    
    /////////////////////////////////////////////////////
        class teacher extends Employee{
            public $department;

        public function constructor($id, $name, $department)
        {
            $id = 0000;
            $name = '';
            $department = '';
        }
    }

    ///////////////////////////////////////////////////


    function forUnique($arr)
    {
        $result=array_unique($arr);
        echo "<br/>Unique Elements: ";
        print_r($result);
    }
    ////////////////
    class Teacher extends Employee {
        public $department;
        
        public function setDepartment($department) {
            $this->department = $department;
        }
        
        public function getDepartment() {
            return $this->department;
        }
    }


   
    ?>
    </body>
</html>