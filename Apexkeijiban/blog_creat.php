<?php
$user='blog_user';
$pass='7185sakakibara';
$ネーム=$_POST['ネーム'];
$ゲームモード=(INT)$_POST['ゲームモード'];
$クロスプレイ=(INT)$_POST['クロスプレイ'];
$機種=(INT)$_POST['機種'];
$ランク=(INT)$_POST['ランク'];
$myレジェンド=(INT)$_POST['myレジェンド'];
$ボイスチャット=(INT)$_POST['ボイスチャット'];
$コメント=$_POST['コメント'];
try
{
$dbh=new PDO('mysql:host=localhost;dbname=blog.php;charset=utf8', $user,$pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql="INSERT INTO blog (ネーム,ゲームモード,クロスプレイ,機種,ランク,myレジェンド,ボイスチャット,コメント) VALUES (?,?,?,?,?,?,?,?)";
      $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1,$ネーム,PDO::PARAM_STR);
    $stmt->bindValue(2,$ゲームモード,PDO::PARAM_INT);
    $stmt->bindValue(3,$クロスプレイ,PDO::PARAM_INT);
    $stmt->bindValue(4,$機種,PDO::PARAM_INT);
    $stmt->bindValue(5,$ランク,PDO::PARAM_INT);
    $stmt->bindValue(6,$myレジェンド,PDO::PARAM_INT);
    $stmt->bindValue(7,$ボイスチャット,PDO::PARAM_INT);
    $stmt->bindValue(8,$コメント,PDO::PARAM_STR);
$stmt->execute();
$dbh = null;
echo'募集を開始しました！<br>';
echo'<a href="form.html">トップページに戻る</a>';
echo '<a href="index.php">募集一覧を見る</a>';
}catch (PDOException $e){
    echo 'エラーが発生:'.htmlspecialchars($e->getMessage(),ENT_QUOTES).'<br>';
    exit;
}



?>