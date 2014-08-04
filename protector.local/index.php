<?php
  if (isset($_POST['protector'])) {
    setcookie("protector", "passed", time()+86400, "/");
    header("Location: ".$_SERVER['REQUEST_URI']);
  }
?><!DOCTYPE html>
<html class="login-background">
<head>
    <title>Переход в панель управления</title>
</head>
<body>
    <div class="row">
        <div class="col col-lg-4 box">
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                <input type="hidden" name="protector" value="passed" />
                <h3>Панель управления</h3>
                <button class="btn btn-primary col-lg-5" type="submit">Войти</button>
            </form>
        </div>
    </div>
</body>
</html>
