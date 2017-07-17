<?php require_once "connect-testDB.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ログイン</title>
  </head>
  <body>
    会員名とパスワードを入力してください
    <br>
    <form class="" action="mypage.php" method="post">
      LOGIN NAME ：<input type="text" name="name" style="width:150px">
      <br>
      　password　：<input type="text" name="password" style="width:300px" >
      <br>
      <input type="submit" value="ログイン">
    </form>
    <br>
    <a href="createID.php">IDを新規に登録</a>
  </body>
</html>
