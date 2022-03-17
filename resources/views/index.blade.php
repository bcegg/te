<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問い合わせ</title>
</head>

<body>
  <form action="thanks" method="POST">
    @csrf
    <dl>
      <dt>氏名</dt>
      <input type="text" name="name">
      <dt>メールアドレス</dt>
      <input type="email" name="email">
    </dl>
    <input type="submit" value="送信する">
  </form>
</body>
