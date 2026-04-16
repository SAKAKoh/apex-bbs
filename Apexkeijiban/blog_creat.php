<?php
$env = parse_ini_file('private.env');
$user = $env['DB_USER'];
$pass = $env['DB_PASS'];

try
{
$dbh=new PDO('mysql:host=localhost;dbname=blog.php;charset=utf8',$user,$pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name      = $_POST['name']??'';
        $mode      = (int)$_POST['mode'];
        $play      = (int)$_POST['play'];
        $model     = (int)$_POST['model'];
        $rank      = (int)$_POST['rank'];
        $character = (int)$_POST['character'];
        $voice     = (int)$_POST['voice'];
        $comment   = $_POST['comment']??'';

        $sql = "INSERT INTO blog (name, mode, play, model, rank, `character`, voice, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);

        $stmt->execute([$name, $mode, $play, $model, $rank, $character, $voice, $comment]);
      
        echo '<h3>募集を開始しました！</h3>';
    }
   
    $sql = 'SELECT * FROM blog';
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo'募集を開始しました！<br>';

    echo '<table border="1">' . PHP_EOL;
    echo '<tr>' . PHP_EOL;
    echo '<th>No.</th><th>日付</th><th>ネーム</th><th>ゲームモード</th><th>クロスプレイ</th><th>機種</th><th>ランク</th><th>myレジェンド</th><th>ボイスチャット</th><th>コメント</th>'  . PHP_EOL;
    echo '</tr>' . PHP_EOL;
    foreach ($result as $row){
        echo '<tr>' . PHP_EOL;
        echo '<td>' . htmlspecialchars($row['No'], ENT_QUOTES) . '</td>' . PHP_EOL;
        echo '<td>' . htmlspecialchars($row['time'], ENT_QUOTES) . '</td>' . PHP_EOL;
        echo '<td>' . htmlspecialchars($row['name'], ENT_QUOTES) . '</td>' . PHP_EOL;
        echo '<td>' . htmlspecialchars match ($row['mode'], ENT_QUOTES){
                     '1'=>'訓練所',
                     '2'=>'カジュアル',
                     '3'=>'ランクマッチ',
                     '4'=>'アリーナ',
                     '5'=>'アリーナランク',
        } . '</td>' . PHP_EOL;
        echo '<td>' . htmlspecialchars($row['play'], ENT_QUOTES) . '</td>' . PHP_EOL;
        echo '<td>' . htmlspecialchars($row['model'], ENT_QUOTES) . '</td>' . PHP_EOL;
        echo '<td>' . htmlspecialchars($row['rank'], ENT_QUOTES) . '</td>' . PHP_EOL;
        echo '<td>' . htmlspecialchars($row['character'], ENT_QUOTES) . '</td>' . PHP_EOL;
        echo '<td>' . htmlspecialchars($row['voice'], ENT_QUOTES) . '</td>' . PHP_EOL;
        echo '<td>' . htmlspecialchars($row['comment'], ENT_QUOTES) . '</td>' . PHP_EOL;
        echo '</tr>' . PHP_EOL;    }
    echo '</table>' . PHP_EOL;
$dbh = null;
echo'<a href="form.html">トップページに戻る</a>';
}catch (PDOException $e){
    echo 'エラーが発生:'.htmlspecialchars($e->getMessage(),ENT_QUOTES).'<br>';
    exit;
}



?>