<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack n.2</title>
</head>
<body>
<h1>LOG IN</h1>
    <?php
        $name= $_GET['name'];
        $age= $_GET['age'];
        $email= $_GET['email'];

        $message= '';

        if($name!= '' && $age!= '' && $email!= ''){
            if(strlen($name)) > 3 && is_numeric($age) == true
            && strpos($email, '@') !== false && strpos($email, '.') !==false{
                $message= 'Legged in successfully'
            } else{
                $message= 'Access denied'
            }
        }
    ?>

        <p><?php echo $message?></p>
</body>
</html>