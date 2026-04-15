<html>
<head><title>PHP TEST</title></head>
<body>

<p>掲示板</p>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
●Apexネーム：<input type="text" name="personal_name"><br><br>
●ランク帯：<select name="ranktai" id="ranktai">


         <optgroup label="ブロンズ">
            <option value="ブロンズⅤ">ブロンズⅤ</option>
            <option value="ブロンズⅣ">ブロンズⅣ/option>
            <option value="ブロンズⅢ">ブロンズⅢ<</option>
            <option value="ブロンズⅡ">ブロンズⅡ</option>
            <option value="ブロンズⅠ">ブロンズⅠ</option>   
         </optgroup>

         <optgroup label="シルバー">
            <option value="シルバーⅤ">シルバーⅤ</option>
            <option value="シルバーⅣ">シルバーⅣ</option>
            <option value="シルバーⅢ">シルバーⅢ</option>
            <option value="シルバーⅡ">シルバーⅡ</option>
            <option value="シルバーⅠ">シルバーⅠ</option>   
         </optgroup>

         <optgroup label="ゴールド">
            <option value=">ゴールドⅤ">ゴールドⅤ</option>
            <option value="ゴールドⅣ">ゴールドⅣ</option>
            <option value="ゴールドⅢ">ゴールドⅢ</option>
            <option value="ゴールドⅡ">ゴールドⅡ</option>
            <option value="ゴールドⅠ">ゴールドⅠ</option>   
         </optgroup>

         <optgroup label="プラチナ">
            <option value="プラチナⅤ">プラチナⅤ</option>
            <option value="プラチナⅣ">プラチナⅣ</option>
            <option value="プラチナⅢ">プラチナⅢ</option>
            <option value="プラチナⅡ">プラチナⅡ</option>
            <option value="プラチナⅠ">プラチナⅠ</option>   
         </optgroup>

         <optgroup label="ダイアモンド">
            <option value="ダイアモンドⅤ">ダイアモンドⅤ</option>
            <option value="ダイアモンドⅣ">ダイアモンドⅣ</option>
            <option value="ダイアモンドⅢ">ダイアモンドⅢ</option>
            <option value="ダイアモンドⅡ">ダイアモンドⅡ</option>
            <option value="ダイアモンドⅠ">ダイアモンドⅠ</option>   
         </optgroup>

         <optgroup label="マスター">
            <option value="マスターⅤ">マスターⅤ</option>
            <option value="マスターⅣ">マスターⅣ</option>
            <option value="マスターⅢ">マスターⅢ</option>
            <option value="マスターⅡ">マスターⅡ</option>
            <option value="マスターⅠ">マスターⅠ</option>   
         </optgroup>
      
    
         <optgroup label="Apexプレデター">
            <option value="ApexプレデターⅤ">ApexプレデターⅤ</option>
            <option value="ApexプレデターⅣ">ApexプレデターⅣ</option>
            <option value="ApexプレデターⅢ">ApexプレデターⅢ</option>
            <option value="ApexプレデターⅡ">ApexプレデターⅡ</option>
            <option value="ApexプレデターⅠ">ApexプレデターⅠ</option>   
       </select>
●使用レジェンド：<select name="party5" id="party5">

         <option value="ブラッドハウンド">ブラッドハウンド</option>
         <option value="ジブラルタル">ジブラルタル</option>
         <option value="ライフライン">ライフライン</option>
         <option value="パスファインダー">パスファインダー</option>
         <option value="レイス">レイス</option>   
         <option value="バンガロール">バンガロール</option>
         <option value="コースティック">コースティック</option>
         <option value="ミラージュ">ミラージュ</option>
         <option value="オクタン">オクタン</option>
         <option value="ワットソン">ワットソン</option>
         <option value="クリプト">クリプト</option>
         <option value="レヴナント">レヴナント</option>
         <option value="ローバ">ローバ</option>
         <option value="ランパート">ランパート</option>
         <option value="ホライゾン">ホライゾン</option>
         <option value="ヒューズ">ヒューズ</option>
         <option value="ヴァルキリー">ヴァルキリー</option>
         <option value="シア">シア</option>
         <option value="アッシュ">アッシュ</option>
         <option value="マッドマギー">マッドマギー</option>
         </select>
●ボイスチャット：<input type="radio" name="voice" value="あり" id="あり"><label for="あり">あり</label>  
       <input type="radio" name="voice" value="なし" id="なし"><label for="なし">なし</label><br>
 ●コメント,所有バッジなど：<br><textarea name="contents" rows="2" cols="30">
</textarea><br><br>
<input type="submit" name="btn1" value="投稿する">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    writeData();
}

readData();

function readData(){
    $keijban_file = 'keijiban.txt';

    $fp = fopen($keijban_file, 'rb');

    if ($fp){
        if (flock($fp, LOCK_SH)){
            while (!feof($fp)) {
                $buffer = fgets($fp);
                print($buffer);
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}

function writeData(){
    $personal_name = $_POST['personal_name'];
    $ranktai=$_POST['ranktai'];
    $party5 =$_POST['party5'];
    $voice = $_POST['voice'];
    $contents = $_POST['contents'];
    $contents = nl2br($contents);

    $data = "<hr>\r\n";
    $data = $data."<p>Apexネーム:".$personal_name."</p>\r\n";
    $data = $data."<p>ランク帯:".$ranktai."</p>\r\n";
    $data = $data."<p>使用レジェンド:".$party5."</p>\r\n";
    $data = $data."<p>ボイスチャット:".$voice."</p>\r\n";
    $data = $data."<p>コメント:</p>\r\n";
    $data = $data."<p>".$contents."</p>\r\n";

    $keijban_file = 'keijiban.txt';

    $fp = fopen($keijban_file, 'ab');

    if ($fp){
        if (flock($fp, LOCK_EX)){
            if (fwrite($fp,  $data) === FALSE){
                print('ファイル書き込みに失敗しました');
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}

?>
</body>
</html>
