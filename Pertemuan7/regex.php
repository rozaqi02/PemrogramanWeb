<?php

$pattern = '/[a-z]/'; //cocokkan huruf kecil.
$text = 'This is a Sample text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

$pattern = '/[0-9]/'; //cocokkan huruf kecil.
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>";
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie';
$new_text = preg_replace($pattern, $replacement, $text);
echo "<br>";
echo $new_text; // Output: "I like banana pie."

$pattern = '/go*d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good.';
echo "<br>";
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>