<?php


function SUMA($a, $b) {
    echo "Suma wynosi: " . ($a + $b) . "<br>";
}


function PODSTAWY($a, $b) {
    echo "Różnica: " . ($a - $b) . "<br>";
    echo "Iloczyn: " . ($a * $b) . "<br>";
    if ($b != 0) {
        echo "Iloraz: " . ($a / $b) . "<br>";
    } else {
        echo "Iloraz: Nie można dzielić przez zero<br>";
    }
}


function KALKULATOR($a, $b, $dzialanie) {
    switch ($dzialanie) {
        case "suma":
            $wynik = $a + $b;
            break;
        case "roznica":
            $wynik = $a - $b;
            break;
        case "iloczyn":
            $wynik = $a * $b;
            break;
        case "iloraz":
            $wynik = ($b != 0) ? ($a / $b) : "Błąd (dzielenie przez 0)";
            break;
        default:
            $wynik = "Nieznane działanie";
    }
    echo "<div id='wynik'>$wynik</div>";
}


function MAKS($a, $b, $c) {
    echo "Największa liczba to: " . max($a, $b, $c) . "<br>";
}


function WZROST($wzrost) {
    if ($wzrost < 150) {
        echo "niski<br>";
    } elseif ($wzrost > 180) {
        echo "wysoki<br>";
    } else {
        echo "średni<br>";
    }
}


function BMI($wzrostCm, $waga) {
    $wzrostM = $wzrostCm / 100;
    $bmi = $waga / ($wzrostM * $wzrostM);
    
    if ($bmi < 18.5) {
        $komentarz = "za mało!";
    } elseif ($bmi > 25) {
        $komentarz = "za dużo!";
    } else {
        $komentarz = "OK!";
    }
    
    echo "<div id='wynik'>BMI: " . round($bmi, 2) . " - $komentarz</div>";
}


function STARSZY($data1, $data2) {
    $t1 = strtotime($data1);
    $t2 = strtotime($data2);
    
    if ($t1 < $t2) {
        echo "Starsza jest osoba pierwsza.<br>";
    } elseif ($t2 < $t1) {
        echo "Starsza jest osoba druga.<br>";
    } else {
        echo "Obie osoby są w tym samym wieku.<br>";
    }
}

function PRZESTEPNY($rok) {
    if (($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 == 0)) {
        echo "Rok $rok jest przestępny.<br>";
    } else {
        echo "Rok $rok nie jest przestępny.<br>";
    }
}


function SILA($haslo) {
    $maCyfre = preg_match('/[0-9]/', $haslo);
    $maDuza = preg_match('/[A-Z]/', $haslo);
    $maMala = preg_match('/[a-z]/', $haslo);
    $maSpecjalny = preg_match('/[^A-Za-z0-9]/', $haslo);

    if (strlen($haslo) <= 4 || !$maCyfre || !$maDuza || !$maMala || !$maSpecjalny) {
        echo "hasło słabe<br>";
    } elseif (strlen($haslo) <= 8) {
        echo "hasło średnie<br>";
    } else {
        echo "hasło mocne<br>";
    }
}


function TROJKAT($a, $b, $c) {
    if ($a > 0 && $b > 0 && $c > 0 && ($a + $b > $c) && ($a + $c > $b) && ($b + c > $a)) {
        echo "Z podanych boków można utworzyć trójkąt.<br>";
    } else {
        echo "Z podanych boków nie można utworzyć trójkąta.<br>";
    }
}




SUMA(5, 10);
PODSTAWY(10, 2);
KALKULATOR(10, 5, "iloczyn");
MAKS(3, 19, 7);
WZROST(175);
BMI(180, 75);
STARSZY("1995-05-12", "2000-01-20");
PRZESTEPNY(2024);
SILA("Haslo123!");
TROJKAT(3, 4, 5);

?>
