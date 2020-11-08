
    <?php
    $nombre = 0;
    while ($nombre < 100) {
        $nombre++;
        $str = "Fizz";
        $str2 = "Buzz";

        if ($nombre % 3 == 0  &&  $nombre % 5 != 0) {
            echo "$str</br>";
        } elseif ($nombre % 5 == 0 &&  $nombre % 3 != 0) {
            echo "$str2</br>";
        } elseif ($nombre % 3 == 0 ||  $nombre % 5 == 0) {
            echo "$str$str2 </br>";
        } else {
            echo "$nombre</br>";
        }
    }
    ?>