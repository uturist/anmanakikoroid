<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">

<?php
$text = fopen("text.txt", "r");

if ($text){
    if (flock($text, LOCK_SH)){
        while (!feof($text)) {
            $buffer = fgets($text);
            print($buffer);
        }

        flock($text, LOCK_UN);
    }else{
        print('再度読み込んでください（ファイルロック失敗）');
    }
}

fclose($text);

?>
