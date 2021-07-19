<?php
use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
</head>
<body>
    <?php 
    if(Session::get('user_id')!=null){
        echo "<h1>". Session::get('username') ."</h1>";
    }
    ?>
</body>
</html>