<html>
<body>
<h1>チェックボックスを使ったフォーム</h1>
<p>好きな色を選択してください。(複数選択可)</p>
<form action="./complete.php" method="POST">
<!--color[] []は必須で送る先を配列として渡す。-->
<input type="checkbox" name ="color[]" value="赤">赤
<input type="checkbox" name ="color[]" value="青">青
<input type="checkbox" name ="color[]" value="黄">黄
<input type="checkbox" name ="color[]" value="緑">緑
<input type="checkbox" name ="color[]" value="白">白
<input type="checkbox" name ="color[]" value="黒">黒
<input type="checkbox" name ="color[]" value="橙">橙
<br>
<input type="submit" value="送信">
</form>
</body>
</html>