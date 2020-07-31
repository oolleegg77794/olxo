@extends('main')
@section('regestration')
<form  class="form-signin" action="reg.php" method="POST" style="width: 50%; margin: auto;">
  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Заповніть поля щоб зареєструватись</h1>
  </div>

  <div class="form-label-group">
    <input name = "login" type="email" id="inputEmail" class="form-control" placeholder="Email адреса" required="" autofocus="">
    <br>
  </div>

  <div class="form-label-group">
    <input name = "name" type="text"  class="form-control" placeholder="Ваше ім'я" required="" autofocus="">
    <br>
  </div>

  <div class="form-label-group">
    <input name = "tel" type = "text" class="form-control"  placeholder="Телефон" required="" autofocus="">
    <br>
  </div>

  <div class="form-label-group">
    <input name = "password" type="password"  class="form-control" placeholder="Пароль" required="">
    <br>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Запам'ятай мене
    </label>
  </div>
  <button name="reg_submit" class="btn btn-primary d-block mx-auto btn-lg" type="submit">Зареєструвати</button>
</form>

<?php
/*$errors = "";
$link = mysqli_connect('localhost', 'root', '','olxo') 
    or die("Ошибка " . mysqli_error($link));

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$pass = md5($pass);


 if(isset($_POST[reg_submit]) AND mb_strlen($login) < 5 AND mb_strlen($login)>90){
   echo "недопустимая длина логина";
   exit();
}  else if (isset($_POST[reg_submit]) AND mb_strlen($name) < 2 AND mb_strlen($name)>20){
   echo "недопустимая длина имени";
   exit();
}  else if (isset($_POST[reg_submit]) AND mb_strlen($pass) < 4 AND mb_strlen($pass)>12){
   echo "недопустимая длина пароля (от 4 до 12 символов)";
   exit();
};

if (isset($_POST[reg_submit])) {
  mysqli_query($link ,"INSERT INTO register (login, name, tel, password) VALUES ('$login', '$name',  '$tel' ,'$pass')");
  mysqli_close($link);
  header('location:/index.php'); 
}*/


  
?>
@endsection