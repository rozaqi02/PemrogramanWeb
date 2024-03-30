<?php
$myArray = array(); // Mendefinisikan Array kosong
if (empty($myArray)) { // memeriksa apakah array $myArray kosong
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong";
}

if (empty($nonExistentVar)) { // memeriksa apakah variabel $nonExistensVar kosong/terddefinisi
    echo "<br>";
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong";
}
?>