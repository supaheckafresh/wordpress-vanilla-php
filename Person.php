<?php
    $title = 'Person.php';

    class Person {

        // Constructor function with some default values if we don't provide parameters
        public function __construct($name = 'Neil', $age = 34, $kids = 1)
        {
            $this->name = $name;
            $this->age = $age;
            $this->kids = $kids;
        }

        public function speak()
        {
            echo sprintf('Hi, my name is %s', $this->name);
        }

        public function scoldKids()
        {
            echo sprintf('Hey you %s kids, pipe it down.', $this->kids);
        }
    }


    class Employee extends Person {

        public function __construct($name, $age, $kids)
        {
            parent::__construct($name, $age, $kids);
        }

        public function doWork()
        {
            echo sprintf('%s is now on the clock.', $this->name);
        }
    }

    $neil = new Employee();

    $jenny = new Employee('Jenny', 33, 1);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
</head>
<body>

    <h1><?php $jenny->speak() ?></h1>
    <h2><?php $jenny->scoldKids() ?></h2>
    <p><?php $jenny->doWork() ?></p>
</body>
</html>