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
        echo "<br />";
        echo '-------------------------';
        echo "<br />";
        if (2 == 2)
        echo "true in an if check";
        else
        echo "false in an if check";
        echo "<br />";
        for ( $i = 0; $i < 5; $i+=1 ) {
            echo "This is the {$i}(th) time it runs";
            echo "<br />";
        }
        foreach( $first_array as $item ) {
            echo "The item is $item";
            echo "<br />";
        }
        for ( $i = 0; $i < sizeof($first_array); $i+=1 ) {
            echo "The item is $first_array[$i]";
            echo "<br />";
        }
        echo $i;
        phpinfo();
    ?>
</body>

</html>