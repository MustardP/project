<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
    </head>
<body background ="hello/background.jpg">
  <ul>
    @foreach ($tasks as $task)
      <li>
          <a href = "database/{{$task->id}}">
            {{$task->Info}}
          </a>
      </li>
    @endforeach
  </ul>
</body>
</html>
