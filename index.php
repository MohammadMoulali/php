<html>
  <head>
    <title>details</title>
</head>
<body>
  <center><form method="post" action="process.php">
    enter your name:
    <input type="text" name="uname" placeholder="enter your name" required><br/>
    enter your password:
    <input type="password" name="password" placeholder="enter your password" required><br/>
    re-enter your password:
    <input type="password" name="rpassword" placeholder="re-enter your password" required><br/>
    enter your email-id:
    <input type="text" name="mail" placeholder="enter your email" required><br/>
    select your gender
    <input type="radio" name="gender" value="male">male
    <input type="radio" name="gender" value="female">female
    <input type="radio" name="gender" value="others">others<br/>
    select your hobbies:
    <input type="checkbox" name="hobbie[]" value="palying games">palying games
    <input type="checkbox" name="hobbie[]" value="reading books">reading books
    <input type="checkbox" name="hobbie[]" value="others">others
    <br/>
    <input type="submit" value="submit" name="submit">
</form>
