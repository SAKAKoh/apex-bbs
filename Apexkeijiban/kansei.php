<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gamefriends</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>
    <div class="header-logo">APEXフレンズ掲示板</div>
   </header>
   <main>
        <!--<h3>ゲームモードを選択 </h3>
     <div class="main-wrapper">
       <select onChange="location.href=value;" class="game-mode" name="mode" id="mode">
         <option value="top-html">選択してください</option>
         <option value="kunren.html">訓練所</option>
         <option value="casual.html">カジュアル</option>
         <option value="rank.html">ランクマッチ</option>
         <option value="arena.html">アリーナ</option>
         <option value="arenarank.html">アリーナランク</option>
         <option value="controle.html">フラッシュポイント</option>
       </select>
       </div>
      -->
      <form   method="post" action="blog_creat.php">
   <fieldset class="sakusei">
      <legend>作成する</legend>
     <fieldset>
      <legend>Apexのネーム</legend>
      <input type="text" name="name" ><br>
     </fieldset> 

     <fieldset>
        <legend>ゲームモードを選択</legend>
      <select name="mode">
         <option hidden>選択してください</option>
         <option value="1">訓練所</option>
         <option value="2">カジュアル</option>
         <option value="3">ランクマッチ</option>
         <option value="4">アリーナ</option>
         <option value="5">アリーナランク</option>
       </select>


     </fieldset>

     <fieldset>
        <legend>クロスプレイ</legend>
        <input type="radio" name="play" value="1" >できる<br>
        <input type="radio" name="play" value="2" >できない<br>

        <legend>機種</legend>
        <input type="radio" name="model" value="1" >PC<br>
        <input type="radio" name="model" value="2" >PS/Switch/xbox<br>
     </fieldset>

     <fieldset>
      <legend>ランク帯</legend>

   <select name="rank" >
      <option hidden>選択してください</option>
         <optgroup label="ブロンズ">
            <option value="1">ブロンズⅣ</option>
            <option value="2">ブロンズⅢ</option>
            <option value="3">ブロンズⅡ</option>
            <option value="4">ブロンズⅠ</option>   
         </optgroup>

         <optgroup label="シルバー">
            <option value="5">シルバーⅣ</option>
            <option value="6">シルバーⅢ</option>
            <option value="7">シルバーⅡ</option>
            <option value="8">シルバーⅠ</option>   
         </optgroup>

         <optgroup label="ゴールド">
            <option value="9">ゴールドⅣ</option>
            <option value="10">ゴールドⅢ</option>
            <option value="11">ゴールドⅡ</option>
            <option value="12">ゴールドⅠ</option>   
         </optgroup>

         <optgroup label="プラチナ">
            <option value="13">プラチナⅣ</option>
            <option value="14">プラチナⅢ</option>
            <option value="15">プラチナⅡ</option>
            <option value="16">プラチナⅠ</option>   
         </optgroup>

         <optgroup label="ダイアモンド">
            <option value="17">ダイアⅣ</option>
            <option value="18">ダイアⅢ</option>
            <option value="19">ダイアⅡ</option>
            <option value="20">ダイアⅠ</option>   
         </optgroup>

         <optgroup label="マスター">
            <option value="21">マスター</option>
         </optgroup>
      
    
         <optgroup label="Apexプレデター">
            <option value="22">Apexプレデタ-</option>  
       </select>
     </fieldset>

     <fieldset>
        <legend>使用するレジェンド</legend>
        <select name="character">
         <option hidden>選択してください</option>
         <option value="1">なんでも</option>
         <option value="2">ブラッドハウンド</option>
         <option value="3">ジブラルタル</option>
         <option value="4">ライフライン</option>
         <option value="5">パスファインダー</option>
         <option value="6">レイス</option>   
         <option value="7">バンガロール</option>
         <option value="8">コースティック</option>
         <option value="9">ミラージュ</option>
         <option value="10">オクタン</option>
         <option value="11">ワットソン</option>
         <option value="12">クリプト</option>
         <option value="13">レヴナント</option>
         <option value="14">ローバ</option>
         <option value="15">ランパート</option>
         <option value="16">ホライゾン</option>
         <option value="17">ヒューズ</option>
         <option value="18">ヴァルキリー</option>
         <option value="19">シア</option>
         <option value="20">アッシュ</option>
         <option value="21">マッドマギー</option>
         </select>

     </fieldset>

     

     <fieldset>
        <legend>ボイスチャット</legend>
         <input type="radio" name="voice" value="1" id="ボイスチャット"><label for="あり">あり</label><br>
         <input type="radio" name="voice" value="2" id="ボイスチャット"><label for="なし">なし</label><br>
     </fieldset>

     <fieldset>
      <legend>追加コメント、所有バッジなど</legend>
       <textarea name="comment" type="text"></textarea>
     </fieldset>
     <input type="submit" value="募集する" id="input" >
   </fieldset>
  </form>

         

    </main>
   <footer>
     <div class="footer">
        <div class="footer-logo"></div>
        <H3>お問い合わせ</H3>
         <P>通報依頼</P>
         <form  method="post" action="apexfriendsboard@gmail.com">
            <input class="text" type="text" value="" required>
            <input class="sousin"type="submit" value="  送信  ">
          </form>
         <P>ご要望はこちら</P> 
         <form  method="post" action="apexfriendsboard@gmail.com">
            <textarea class="text"type="text" value="" required></textarea>
            <input class="sousin" type="submit" value="  送信  ">
            <button ></button>
          </form>
        </div>
     </div>
   </footer>
   <script src=index.js></script>
</body>
</html>