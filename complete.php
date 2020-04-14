<?php
//POSTされてきたデータを取得
$color=$_POST['color'];
// var_dump($user_name); //エラーを見つける用のコード、文字などの表示　
var_dump($color);//エラーを見つける用のコード、文字などの表示　
?>

<html>
    <head>
    <meta charset="UTF-8">
    </head>
<body>
<h1>受信ページ</h1>
<h3>好きな色</h3>
<ul>
<?php foreach($color as $c) {?>
  <li><?php echo htmlspecialchars($c,ENT_QUOTES,'UTF-8');?></li>
<?php } ?>
</ul>

<p>あなたの好きな色は<?php echo implode('と',$color);?>です。</p>

</body>
</html>