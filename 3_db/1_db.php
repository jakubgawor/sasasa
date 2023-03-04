<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s</title>
</head>
<body>
    
    <h4>Użytwkonicy z bazy</h4>

    <?php

        require_once "../scripts/connect.php";

        $sql = "SELECT * FROM `users`;";

        $result = $conn->query($sql);


        while ($user = $result->fetch_assoc()) {
            echo <<< USER
            Imię: $user[firstName] <br>
            Nazwisko: $user[lastName]<br>
            Data: $user[birthday]<br> <br>
            USER;
        }
        $conn->close();

    ?>

</body>
</html>