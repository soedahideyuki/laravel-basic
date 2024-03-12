<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel基礎</title>
</head>
<body>
  <h1>お問い合わせ</h1>
  <form action="{{ route('requests.confirm') }}" method="POST">
    <table>
      <tr>
        <th>お名前</th>
        <td>
          <input type="text" name="user_name">
        </td>
      </tr>      
      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="text" name="user_email">
        </td>
      </tr>
      <tr>
        <th>性別</th>
        <td>
          <input type="radio" name="user_gender" value="男性" checkd>男性
          <input type="radio" name="user_gender" value="女性">女性
        </td>
      </tr>

  </table>
  </form>
</body>
</html>