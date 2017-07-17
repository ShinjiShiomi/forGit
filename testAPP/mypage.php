<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>マイページ</title>
  </head>
  <body>
    <?php
    require_once "connect-testDB.php";

    $name=$_POST['name'];
    // $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="select count(ID) as COUNT from users where name='$name' and password='$password'";
    $stmt = $dbh->prepare($sql);
    // print $sql;
    // $stmt=$dbh->query($sql);
    $stmt->execute();
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    // for($i=1;$i<10;$i++){
      // print $rec['COUNT'];
    // }

    if($rec['COUNT'] == 0){
      print "入力された登録名、パスワードの組み合わせが正しくありません。";
      print '<br/>';
      print '<input type="button" onclick="history.back()" value="戻る">';
    }else{
      print 'ようこそ' .$name. 'さん';
      print '<br/>';
      print '<input type="button" onclick="history.back()" value="戻る">';
    }
    ?>
  </body>
</html>
