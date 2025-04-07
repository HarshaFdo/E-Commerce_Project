<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewpoint" content="width=device-width, intial-scale=1">
  <title></title>
</head>

<body>
  <h1>ADMIN</h1>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <input type="submit" value="Logout">
  </form>
</body>

</html>