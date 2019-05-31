<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Online Shoping</title>

</head>

<body>
    <h1>Welcome to my shop</h1>
    <ul>
        <?php
        $json = file_get_contents("http://api-server:8080/");
        $obj = json_decode($json);
        $products = $obj->products;
        foreach ($products as $key => $product) {
            echo "<li>$product</li>";
        }
        ?>
    </ul>
</body>

</html>