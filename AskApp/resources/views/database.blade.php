<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel & Heidi Connection</title>
</head>
<body>
    <?php
        if(DB::connection()->getPdo()){
            echo"Sucess Connect Database";
        }
        ?>
</body>
</html>
