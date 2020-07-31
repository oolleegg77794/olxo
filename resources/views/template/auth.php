<form class="form-signin" action="check.php" method="POST">
  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Авторизуйся</h1>
  </div>

  <div class="form-label-group">
    <input name = "login" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputEmail">Email адреса</label>
  </div>

  <div class="form-label-group">
    <input name = "password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <label for="inputPassword">Пароль</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Запам'ятай мене
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Увійти</button>
</form>




