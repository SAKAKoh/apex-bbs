<?php
$user='blog_user';
$pass='7185sakakibara';
if(empty($_GET['id'])){
    echo 'IDを正しく入力してください';
    exit;
}
try{
    $id=(int)$_GET['id'];
    $dbh=new PDO('mysql:host=localhost;dbname=blog.php;charset=utf8', $user,$pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM blog WHERE id ?';
$stmt = $dbh->prepare($sql);
$stmt->bindValue(1, $id, PDO::PARAM_INT);
$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);
print_r($result);
$dbh = null;
}catch (PDOException $e){
    echo 'エラーが発生:'.htmlspecialchars($e->getMessage(),ENT_QUOTES).'<br>';
    exit;
}





?>