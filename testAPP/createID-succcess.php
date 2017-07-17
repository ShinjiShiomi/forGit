<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>登録完了</title>
  </head>
  <body>
登録が完了しました！ <br>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
print 'あなたの登録名は『' .$name.'』です。<br>';
print 'あなたの登録emailは『' .$email.'』です。<br>';
print 'あなたの登録passwordは『' .$password.'』です。<br><br>';

print '<form method="post" action="mypage.php?userId='.$name.'">';
print '<input type="hidden" name="name" value="'.$name.'">';
print '<input type="hidden" name="email" value="'.$email.'">';
print '<input type="hidden" name="password" value="'.$password.'">';
print '<input type="submit" value="マイページに移動">';
print '</form>';
 ?>
  </body>
</html>
