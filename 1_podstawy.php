<?php

    $firstName = "Janusz";
    $lastName = "Janusz";

    echo "imie  i nazwisko $firstName $lastName<br>";
    echo 'imie i nazwisko $firstName $lastName';



    //heredoc
    $data = <<< DATA
        <hr>
        Imię: $firstName<br>
        Nazwisko: $lastName<br>

    DATA;

    echo $data;


    //nowdoc
    echo <<< 'DATA'
    <hr>
    Imię: $firstName<br>
    Nazwisko: $lastName<br>

    DATA;

    $bin = 0b1010;
    echo $bin;

    $oct = 0o10;
    echo $oct;

    $hex = 0x1A;
    echo $hex;