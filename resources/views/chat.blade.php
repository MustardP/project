<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
    </head>
<body background ="hello/background.jpg">
    <header>
        <nav>
            <a href="/">Homepage</a>
        </nav>
    </header>
    <div>
      <table>
        @foreach ($dialog as $row)
        <tr>
          <td>{{$row->username}}</td><td>{{$row->message}}</td><td>{{$row->created_at}}</td>
        </tr>
        @endforeach
      </table>
      <form action="textarea.php" method="post">
        @csrf
        <p><textarea rows="10" cols="45" name="text"></textarea></p>
        <p><input type="submit" value="Отправить"></p>
      </form>

    </div>
</body>
</html>
