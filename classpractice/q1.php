<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php

 class Employee
    {
        // public $Id;
        // public  $Name;

        public function __construct($id, $name)
        {
            $this->Id = $id;
            $this->Name = $name;
        }

        public  function splitname()
        {
            $pos = 0;
            $fisrtName = "";
            $lastName = "";
            for ($i = 0; $i <= strlen($this->Name); $i++) {
                if ($this->Name[$i] == " ") {
                    $pos = $i;
                }
            }
            $lastName = substr($this->Name, $pos + 1, strlen($this->Name));
            $fisrtName = substr($this->Name, 0, $pos - 1);
            return $lastName;
        }
    }

    $id = 123;
    $name = "tinkal Patel";

    $employee = new Employee($id, $name);

    echo $employee->splitname($name);
 class Teacher extends Employee
    {
        public $department;

        public function constructor($id, $name, $department)
        {
            $id = 0000;
            $name = '';
            $department = '';
        }
        
            }

    ?>
    </body>
</html>