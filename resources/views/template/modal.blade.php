<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Авторизація</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="d-flex justify-content-center">
          <form  action="{{route('auth_submit')}}" method="POST">
          @csrf
            <div class="col-auto">
              <div class="input-group mb-2">
                <div class="input-group-prepend" style="margin-bottom:8px">
                  <div class="input-group-text"><ion-icon name="person-outline"></ion-icon></div>
                </div>
                <input name = "login" type="email" id="inputEmail" class="form-control mb-2" placeholder="Логін">
              </div>
            </div>

            <div class="col-auto">
              <div class="input-group mb-2">
                <div class="input-group-prepend" >
                  <div class="input-group-text"><ion-icon name="keypad-outline"></ion-icon></div>
                </div>
                <input name = "password" type="password" id="inputPassword" class="form-control" placeholder="Пароль">
              </div>
            </div>

            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-2">Далі</button>
              <a class="btn btn-primary mb-2" href="/regestration" >Реєстрація</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>