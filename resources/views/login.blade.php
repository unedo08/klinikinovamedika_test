<!DOCTYPE html>
<html>
<body>

<h2>Silahkan Login</h2>

<form method=post action="/login">
    @csrf
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>

