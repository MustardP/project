<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
    </head>
<body background ="hello/background.jpg">
  <ul>
    @foreach ($tasks as $task)
      <li>{{$task->Info}}</li>
    @endforeach
  </ul>
</body>
</html>
