<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    Hello!
    <?php
        $first_array = ["a", "b", "c", "d"];
        echo "<br />";
        echo "First item: $first_array[0]";
        echo "<br />";
        $second_array = [0 => "a", 1 =>"b", "cool" => "c", 123 => "d"];
        echo "Cool item: $second_array[cool]";
        echo "<br />";
        echo $_SERVER["HTTP_USER_AGENT"];
        echo "<br />";
        $abc = "123";
        echo $abc;
        echo "<br />";
        define("MINSIZE", 50);
        echo MINSIZE;
        echo constant("MINSIZE");
        echo "<br />";
        echo __FILE__;
        phpinfo();
    ?>
</body>

</html>