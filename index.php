<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" 
        content="text/html; charset=utf-8">
<title>あんまんあきこロイドちゃん</title>
</head>

<body>
<p>あんまんあきこロイドちゃんのページです。</p>
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
        print('ファイルロックに失敗しました');
    }
}

fclose($text);

?>
</body>
</html>
