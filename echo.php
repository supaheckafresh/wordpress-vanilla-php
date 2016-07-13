<?php
    $title = 'hello world';
    $one = 60;
    $ten = 89;
    $arr = ['geekwise', 'is', 'awesome'];
    $arr2 = [1, function () {}, new stdClass(), 3];

    $str = 'i am string';
    $specialString = "I am $ten string";
    $float = 1.2321;
    $number = 24;
    $anArray = [1, 2, 4];
    $trueBoo = True;
    $falseBoo = False;

    $obj = new stdClass();
    $obj->name = 'neil';
    $obj->email = 'neilstrain@gmail.com';
    $obj->age = 34;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP test</title>
</head>
<body>

    <h1><?php echo $title; ?></h1>

    <h2>
        <?php echo sprintf('%s - %s = %s', $ten, $one, ($ten - $one)) ?>
    </h2>


    <pre>
        <?php
//            foreach ($arr as $word) {
//                echo $word . ' ';
//            }

            var_dump($obj);

            echo implode(' ', $arr);

            echo '<br/>' .$specialString;
        ?>
    </pre>
</body>
</html>