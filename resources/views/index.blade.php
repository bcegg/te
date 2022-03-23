<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問い合わせ</title>
</head>

<body>
  <form action="/" method="POST">
    @csrf
    <label>氏名</label><br>
    <input type="text" name="name"><br>
    <label>メールアドレス</label><br>
    <input type="email" name="email"><br>
    <input type="submit" value="送信する">
  </form>
</body>
