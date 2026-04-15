<?php 
require_once('dbc.php');

$dbc = new Dbc();

$blogData = $dbc->getAllBlog();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>フレンド募集</title>
</head>
<body>
    <h2>募集一覧</h2>
    <p><a href="form.html">新規作成</a></p>

<table border="1">
 <tr>
 <th  style="width:100px;">No.</th>
    <th  style="width:100px;">日付</th>
    <th  style="width:200px;">ネーム</th>
    <th  style="width:120px;">ゲームモード</th>
    <th  style="width:120px;">クロスプレイ</th>
    <th  style="width:120px;">機種</th>
    <th  style="width:120px;">ランク</th>
    <th  style="width:120px;">myレジェンド</th>
    <th  style="width:120px;">ボイスチャット</th>
    <th  style="width:200px;">コメント</th>

  

 </tr>
 <?php foreach($blogData as $column): ?>
    <tr>
    <td><?php echo htmlspecialchars($column['No'],ENT_QUOTES) ?></td>
        <td><?php echo htmlspecialchars($column['time'],ENT_QUOTES) ?></td>
        <td><?php echo htmlspecialchars($column['name'],ENT_QUOTES) ?></td>
        <td><?php echo $dbc->setselectName($column['mode']) ?></td>
        <td><?php echo $dbc->setcrossplayName($column['play']) ?></td>
        <td><?php echo $dbc->setmodelName($column['model']) ?></td>
        <td><?php echo $dbc->setrankName($column['rank']) ?></td>
        <td><?php echo $dbc->setparty0Name($column['character']) ?></td>
        <td><?php echo $dbc->setvcName($column['voice']) ?></td>
        <td><?php echo htmlspecialchars($column['comment'],ENT_QUOTES) ?></td>



 </tr>
 <?php endforeach; ?>


</table>
    
</body>
</html>