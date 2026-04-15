

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
         <option value="controle.html">コントローラー</option>
       </select>
       </div>
      -->
      <form   method="post" action="blog_creat.php">
   <fieldset class="sakusei">
      <legend>作成する</legend>
     <fieldset>
      <legend>Apexのネーム</legend>
      <input type="text" name="name" id="name"><br>
     </fieldset> 

     <fieldset>
        <legend>ゲームモードを選択</legend>
      <select name="select" id="select">
         <option value="訓練所">訓練所</a></option>
         <option value="カジュアル">カジュアル</option>
         <option value="ランクマッチ">ランクマッチ</option>
         <option value="アリーナ">アリーナ</option>
         <option value="アリーナランク">アリーナランク</option>
         <option value="コントロール">コントロール</option>
       </select>


     </fieldset>

     <fieldset>
        <legend>クロスプレイ</legend>
        <input type="radio" name="crossplay" value="できる" id="できる"><label for="できる">できる</label><br>
        <input type="radio" name="crossplay" value="できない" id="できない"><label for="できない">できない</label><br>

        <legend>機種</legend>
        <input type="radio" name="model" value="PC" id="PC"><label for="PC">PC</label><br>
        <input type="radio" name="model" value="PS" id="PS"><label for="PS">PS/Switch/xbox</label><br>
     </fieldset>

     <fieldset>
      <legend>ランク帯</legend>
       
         </optgroup>
   <select name="rank" id="rank">
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
     </fieldset>

     <fieldset>
        <legend>使用するレジェンド</legend>
        <select name="party0" id="party0">
         <option value="なんでも">なんでも</option>
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

     </fieldset>

     <fieldset> 
        <legend>パーティー構成</legend>
        <select name="party1" id="party1">
         <option value="指定しない">指定しない</option>
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

         <select name="party2" id="party2">
            <option value="指定しない">指定しない</option>
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

            <select name="party3" id="party3">
               <option value="指定しない">指定しない</option>
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
     </fieldset>

     <fieldset>
        <legend>ボイスチャット</legend>
         <input type="radio" name="vc" value="あり" id="あり"><label for="あり">あり</label><br>
         <input type="radio" name="vc" value="なし" id="なし"><label for="なし">なし</label><br>
     </fieldset>

     <fieldset>
      <legend>追加コメント、所有バッジなど</legend>
       <textarea name="text" type="text"></textarea>
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