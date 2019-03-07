
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
$code=$_POST['code'];


include('functions.php');

//DB接続
$pdo = db_conn();

$sql= 'SELECT * FROM anketo WHERE code=?';
$stmt=$pdo->prepare($sql);
$data[]=$code;
$stmt->execute($data);


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

$dbn=null;
?>

    <br />
    <a href="kensaku.html">検索画面に戻る</a>
</body>
</html>
