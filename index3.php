<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack n.7</title>
</head>
<body>
    <h1>SCHOOL CLASS</h1>
    <?php
        $students=[
            [
                'name'=> 'Dante',
                'surname'=> 'Alighieri',
                'votes'=> [2, 2, 6, 5, 3]
            ],
            [
                'name'=> 'Giacomino',
                'surname'=> 'Leopardi',
                'votes'=> [8, 4, 5, 6, 9]
            ],
            [
                'name'=> 'Niccolo',
                'surname'=> 'Machiavelli',
                'votes'=> [3, 5, 6, 5, 8]
            ],
            [
                'name'=> 'Benedetto',
                'surname'=> 'Croce',
                'votes'=> [7, 9, 5, 6, 7]
            ],
            [
                'name'=> 'Carmelo',
                'surname'=> 'Bene',
                'votes'=> [10, 10, 9, 8, 10]
            ]
        ];

        for($x=0; $x<count($students); $x++){
            $student= $students[$x];
            $myVotes= array_sum($student['votes'])/count($student['votes']);

            echo $student['name'] . ' ' . $student['surname'] . 'vote average is:' . $myVotes;
        }
    ?>
</body>
</html>