<html>

<head>
    <title>Alex</title>
</head>

<body>
    <?php
    if (isset($_POST['click'])) {

        $names = [
            0 => 'Alex',
            1 => 'Gabi',
            2 => 'Bogo',
            3 => 'Florin',
        ];

        $randomNameIndex = array_rand($names);

        $firstName = $names[$randomNameIndex];

        if ($firstName == 'Alex') {
            echo $firstName . ' is the greatest!';
        } elseif ($firstName == 'Bogo') {
            echo $firstName . ' is king of shaorma!';
        } else {
            echo $firstName . ' is ok!';
        }

        for ($i = 0; $i <= 100; $i++) {
            echo $i . '.' . $firstName . ' is the greatest!<br>';
        }
    }
    ?>


    <br><br>
    <form action="" method="post">
        <button name="click">Click here</button>
    </form>
</body>

</html>