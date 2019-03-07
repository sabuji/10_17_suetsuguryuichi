



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style> -->
</head>


<body>

<?php

include('functions.php');

//DB接続
$pdo = db_conn();


$sql= 'SELECT * FROM anketo WHERE 1';
$stmt=$pdo->prepare($sql);
$stmt->execute();


while(1){
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);    
    if($rec==false){
        break;
    }
    print $rec['code'];
    print $rec['nickname'];
    print $rec['email'];
    print $rec['goiken'];
    print '<br/>';
}

$dbh=null;
?>

<br />
    <a href="menu.html">メニューに戻る</a>
</body>
</html>
