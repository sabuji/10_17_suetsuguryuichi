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

$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname=htmlspecialchars($nickname);
$email=htmlspecialchars($email);
$goiken=htmlspecialchars($goiken);

print $nickname.'様<br/>';
print 'ご意見ありがとうございました<br/><br/>';
print '頂いたご意見<br/>';
print '『'.$goiken.'』<br/><br/>';
print $email;
print '宛にメールを送りましたのでご確認ください。<br/>';

$mail_sub='アンケートを受け付けました。';
$mail_body=$nickname."様へ\nアンケートご協力ありがとうございました。";
$mail_body='html_entity_decode($mail_body,ENT_QUOTES,"UTF-8")';
$mail_head='From:oichikun@gmail.co.jp';
mb_language('Japanese');
mb_send_mail($email,$mail_sub,$email_body,$email_head);


$sql='INSERT INTO anketo(nickname,email,goiken)VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
$stmt =$pdo->prepare($sql);
$stmt->execute();

$pdo =null;
?>
</body>
</html>
