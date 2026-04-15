<?php

Class Dbc
{

function dbConnect(){

    $dsn = 'mysql:host=localhost;dbname=blog.php;charset=utf8';

$user='blog_user';

$pass='7185sakakibara';

    try{
        $dbh= new PDO($dsn,$user,$pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    
    
    }catch(PDOException $e){
        echo'接続失敗'.$e->getMessage();
        exit();
    };

return $dbh;
}

function getAllBlog(){

    $dbh=$this->dbConnect();

$sql='SELECT*FROM blog';

$stmt=$dbh->query($sql);

$result=$stmt->fetchall(PDO::FETCH_ASSOC);
return $result;
$dbh=null;
}



//ゲームモード
function setselectName($ゲームモード){
    if($ゲームモード==='0'){
        return '訓練所';
    }elseif($ゲームモード==='1'){
        return 'カジュアル';
    }elseif($ゲームモード==='2'){
        return 'ランクマッチ';
    }elseif($ゲームモード==='3'){
        return 'アリーナ';
    }elseif($ゲームモード==='4'){
        return 'アリーナランク';
    }elseif($ゲームモード==='5'){
        return 'コントロール';
    }
}
//クロスプレイ
function setcrossplayName($クロスプレイ){
    if($クロスプレイ==='0'){
        return 'できる';
    }elseif($クロスプレイ==='1'){
        return 'できない';
    }
}

//機種
function setmodelName($機種){
    if($機種==='0'){
        return 'PC';
    }elseif($機種==='1'){
        return 'PS';
    }
}

//ランク
function setrankName($ランク){
    if($ランク==='0'){
        return 'ブロンズIV';
    }elseif($ランク==='1'){
        return 'ブロンズⅢ';
    }elseif($ランク==='2'){
        return 'ブロンズⅡ';
    }elseif($ランク==='3'){
        return 'ブロンズⅠ';
    }elseif($ランク==='4'){
        return 'シルバーⅣ';
    }elseif($ランク==='5'){
        return 'シルバーⅢ';
    }elseif($ランク==='6'){
        return 'シルバーⅡ';
    }elseif($ランク==='7'){
        return 'シルバーⅠ';
    }elseif($ランク==='8'){
        return 'ゴールドⅣ';
    }elseif($ランク==='9'){
        return 'ゴールドⅢ';
    }elseif($ランク==='10'){
        return 'ゴールドⅡ';
    }elseif($ランク==='11'){
        return 'ゴールドⅠ';
    }elseif($ランク==='12'){
        return 'プラチナⅣ';
    }elseif($ランク==='13'){
        return 'プラチナⅢ';
    }elseif($ランク==='14'){
        return 'プラチナⅡ';
    }elseif($ランク==='15'){
        return 'プラチナⅠ';
    }elseif($ランク==='16'){
        return 'ダイヤⅣ';
    }elseif($ランク==='17'){
        return 'ダイヤⅢ';
    }elseif($ランク==='18'){
        return 'ダイヤⅡ';
    }elseif($ランク==='19'){
        return 'ダイヤⅠ';
    }elseif($ランク==='20'){
        return 'マスター';
    }elseif($ランク==='21'){
        return 'Apexプレデター';
    }
}
//myレジェンド
function setparty0Name($myレジェンド){
    if($myレジェンド==='0'){
        return 'なんでも';
    }elseif($myレジェンド==='1'){
        return 'ブラッドハウンド';
    }elseif($myレジェンド==='2'){
        return 'ジブラルタル';
    }elseif($myレジェンド==='3'){
        return 'ライフライン';
    }elseif($myレジェンド==='4'){
        return 'パスファインダー';
    }elseif($myレジェンド==='5'){
        return 'レイス';
    }elseif($myレジェンド==='6'){
        return 'バンガロール';
    }elseif($myレジェンド==='7'){
        return 'コースティック';
    }elseif($myレジェンド==='8'){
        return 'ミラージュ';
    }elseif($myレジェンド==='9'){
        return 'オクタン';
    }elseif($myレジェンド==='10'){
        return 'ワットソン';
    }elseif($myレジェンド==='11'){
        return 'クリプト';
    }elseif($myレジェンド==='12'){
        return 'レヴナント';
    }elseif($myレジェンド==='13'){
        return 'ローバ';
    }elseif($myレジェンド==='14'){
        return 'ランパート';
    }elseif($myレジェンド==='15'){
        return 'ホライゾン';
    }elseif($myレジェンド==='16'){
        return 'ヒューズ';
    }elseif($myレジェンド==='17'){
        return 'ヴァルキリー';
    }elseif($myレジェンド==='18'){
        return 'シア';
    }elseif($myレジェンド==='19'){
        return 'アッシュ';
    }elseif($myレジェンド==='20'){
        return 'マッドマギー';
    }
}
//ボイスチャット
function setvcName($ボイスチャット){
    if($ボイスチャット==='0'){
        return 'あり';
    }elseif($ボイスチャット==='1'){
        return 'なし';
    }
}

function blogCreat($blogs){
    $sql ='INSERT INTO
         blog(ネーム,ゲームモード,クロスプレイ,機種,ランク,myレジェンド,ボイスチャット,コメント)
         VALUES
         (:ネーム,:ゲームモード,:クロスプレイ,:機種,:ランク,:myレジェンド,:ボイスチャット,:コメント)';

$dbh=$this->dbConnect();

try{
    $stmt=$dbh->prepare($sql);
    $stmt->bindValue(':ネーム',$blogs['ネーム'],PDO::PARAM_STR);
    $stmt->bindValue(':ゲームモード',$blogs['ゲームモード'],PDO::PARAM_INT);
    $stmt->bindValue(':クロスプレイ',$blogs['クロスプレイ'],PDO::PARAM_INT);
    $stmt->bindValue(':機種',$blogs['機種'],PDO::PARAM_INT);
    $stmt->bindValue(':ランク',$blogs['ランク'],PDO::PARAM_INT);
    $stmt->bindValue(':myレジェンド',$blogs['myレジェンド'],PDO::PARAM_INT);
    $stmt->bindValue(':ボイスチャット',$blogs['ボイスチャット'],PDO::PARAM_INT);
    $stmt->bindValue(':コメント',$blogs['コメント'],PDO::PARAM_STR);
echo'募集を開始しました！';
}catch(PDOException $e){
    exit($e);

}

}

}



?>

