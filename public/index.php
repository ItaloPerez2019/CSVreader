<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>


    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id = "one">


    <?php
    $file = fopen("contacts.csv","r");

    while(! feof($file))
    {
        print_r(fgetcsv($file));
    }

    fclose($file);
    ?>

</div>
</body>
</html>