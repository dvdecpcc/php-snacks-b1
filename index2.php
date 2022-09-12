<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack n.4</title>
</head>
<body>
    <h1>RANDOM NUMBERS</h1>   
    
    <?php
        $myRandomNumbers= [];

        while(count($myRandomNumbers)<15){
            $myRandomNumber= rand(1,15);
            
            if(!in_array($myRandomNumbers, $myRandomNumber)){
                $myRandomNumbers[]+= $myRandomNumbers;
            }
        }
        var_dump($myRandomNumbers);
    ?>
</body>
</html>