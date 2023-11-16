<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân</title>
</head>
<body>
    <?php
    if (isset($_GET["name"]) && isset($_GET["age"])){
        echo "Chào " . $_GET["name"] . "<br>";
        echo "Tuổi " . $_GET["age"];
    }
    ?>
    <form action="" method="get">
        Name: <input type="text" name="name"> 
        Age: <input type="text" name="age"> 
        <input type="submit" name="submit" value="Submit"> 
    </form>
</body>
</html>