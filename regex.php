<?php
//soal no 9
//$pattern = '/[a-z]/'; //cocokkan huruf kecil
//$pattern = '/[0-9]+/';
//$text = 'This is a sample text';
//if (preg_match($pattern, $text)){
    //if (preg_match($pattern, $text, $matches)){
    //echo "Cocokkan".$matches[0];
//}else{
    //echo "Tidak ada yang cocok";
//}
//soal no 10
//$pattern = '/[0-9]+/';
//$text = 'This is a sample text';
//if (preg_match($pattern, $text, $matches)){
    //echo "Cocokkan".$matches[0];
//}else{
//    echo "Tidak ada yang cocok";
//}
//soal  no 11
//$pattern = '/apple/';
//$replacement = 'banana';
//$text = 'I like apple pie';
//$new_text = preg_replace($pattern, $replacement, $text);
//echo $new_text;
//soal no 12
$pattern = '/[0] {1,3}/';
$text = 'good is good';
if(preg_match($pattern, $text, $matches)){
    echo "Cocokkan: ".$matches[0];
}else{
    echo "Tidak ada yang cocok";
}
?>