<?php
if(isset($_COOKIE['font-size'])){
    $tamaño = $_COOKIE['font-size'];
}else{
    $tamaño = '15px';
}
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style>
        p{
            font-size: <?php echo $tamaño; ?>;
        }
    </style>
</head>

<body>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, quisquam vero! Exercitationem natus dignissimos distinctio, accusantium sunt facilis? Iusto culpa voluptates impedit ratione? Animi recusandae veritatis, quia sequi repellendus excepturi.</p>
</body>

</html>