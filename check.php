<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>


<!-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style> -->
<!-- </head> -->




<body>
<?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname=htmlspecialchars($nickname);
$email=htmlspecialchars($email);
$goiken=htmlspecialchars($goiken);



if($nickname==''){
    print'ニックネームが入力されていません';
}else{
    print'ようこそ'." ".$nickname." ".'様'.'<br/><br/>';
}

if($email==''){
    print'メールアドレスが入力されていません<br/>';
}else{
    print'メールアドレス'.'<br/>';
    print $email.'<br/>'.'<br/>';
}

if($goiken==''){
    print'ご意見が入力されていません<br/>';
}else{
    print'ご意見'.'<br/>';
    print $goiken.'<br/>'.'<br/>';
    print 'であっていますか？';
}

if($nickname==''||$email==''||$goiken==''){
    print'<form>';
    print'<input type="button" onclick="history.back()"value="戻る">';
    print'</form>';
}else{
    print'<form method="post" action="thanks.php">';
    
    print'<input input name="nickname" type="hidden"value="'.$nickname.'">';
    print'<input input name="email" type="hidden"value="'.$email.'">';
    print'<input input name="goiken" type="hidden"value="'.$goiken.'">';
    
    print'<input type="button" onclick="history.back()"value="戻る">';
    print'<input type="submit"value="OK">';
    print'</form>';
}

?>
</body>
</html>
