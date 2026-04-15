<?php
$user='blog_user';
$pass='7185sakakibara';
try
{
$dbh=new PDO('mysql:host=localhost;dbname=blog.php;charset=utf8', $user,$pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM blog';
$stmt = $dbh ->query($sql);
$result= $stmt->FetchAll(PDO::FETCH_ASSOC);
       
echo '<table  border="1">'.PHP_EOL;
        echo '<tr>'.PHP_EOL;
         echo '<th>ネーム</th><th>ゲームモード</th><th>クロスプレイ</th><th>機種</th><th>ランク</th><th>myレジェンド</th><th>ボイスチャット</th><th>コメント</th>'.PHP_EOL;
        echo '</tr>'.PHP_EOL; 

        foreach ($result as $row) {

                print_r($row);

                echo '<tr>'.PHP_EOL;
                echo '<td>' . htmlspecialchars($row['ネーム'] ,ENT_QUOTES) . '</td>'.PHP_EOL;
                echo '<td>' .
                        match($row['ゲームモード']){
                                '1' => '訓練所',
                                '2' => 'ランクマッチ',
                                '3' => 'アリーナ',






                                

                        }. '</td>'.PHP_EOL;
                echo '<td>' . $row['クロスプレイ'].'</td>'.PHP_EOL;
                echo '<td>' . $row['機種'] . '</td>'.PHP_EOL;
                echo '<td>' . $row['ランク'] . '</td>'.PHP_EOL;
                echo '<td>' . $row['myレジェンド'] . '</td>'.PHP_EOL;
                echo '<td>' . match ($row['ボイスチャット']){
                        '1'=> あり,
                        '2'=> なし,
                }. '</td>'.PHP_EOL;
                echo '<td>' . htmlspecialchars($row['コメント'] ,ENT_QUOTES) . '</td>'.PHP_EOL;
                echo '</tr>'. PHP_EOL;
        }
        echo '</table>'.PHP_EOL; 
        


$dbh = null;
}catch (PDOException $e){
echo 'エラーが発生:'.htmlspecialchars($e->getMessage(),ENT_QUOTES).'<br>';
exit;
}


?>