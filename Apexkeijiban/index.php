<?php 
require_once('dbc.php');

$dbc = new Dbc();

$blogData = $dbc->getAllBlog();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フレンド募集</title>
</head>
<body>
    <h2>募集一覧</h2>
    <p><a href="form.html">新規作成</a></p>

<table>
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
    <td><?php echo $column['No.'] ?></td>
        <td><?php echo $column['日付'] ?></td>
        <td><?php echo $column['ネーム'] ?></td>
        <td><?php echo $dbc->setselectName($column['ゲームモード']) ?></td>
        <td><?php echo $dbc->setcrossplayName($column['クロスプレイ']) ?></td>
        <td><?php echo $dbc->setmodelName($column['機種']) ?></td>
        <td><?php echo $dbc->setrankName($column['ランク']) ?></td>
        <td><?php echo $dbc->setparty0Name($column['myレジェンド']) ?></td>
        <td><?php echo $dbc->setvcName($column['ボイスチャット']) ?></td>
        <td><?php echo $column['コメント'] ?></td>



 </tr>
 <?php endforeach; ?>


</table>
    
</body>
</html>