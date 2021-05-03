<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Makanan</title>
</head>

<body>

    <?php
    $_listMenu = ["Makanan", "Minuman", "Parsel"];
    
    foreach ($_listMenu as $list) {
        echo "<p>$list</p>";
        echo "<ol><li>Menu $list ke 1</li>";
        echo "<li>Menu $list ke 2</li>";
        echo "<li>Menu $list ke 3</li></ol>";
    }
    
    ?>

</body>

</html>