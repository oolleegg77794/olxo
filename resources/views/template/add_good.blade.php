@extends('main')
@section('add_good')

<div class="container" style="width: 50%">

  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Заповніть поля щоб додати оголошення</h1>
  </div>

  <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Категорії
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="/add_categori-1">Авто</a>
    <a class="dropdown-item" href="/add_categori-2">Меблі</a>
    <a class="dropdown-item" href="/add_categori-3">Нерухомість</a>
    <a class="dropdown-item" href="/add_categori-4">Іграшки</a>
    <a class="dropdown-item" href="/add_categori-5">Товари для дому</a>
  </div>
<?php 
if (isset($id)) {
  if ($id==1) {
    $idd="Авто";
  }

  if ($id==2) {
    $idd="Меблі";
  }

  if ($id==3) {
    $idd="Нерухомість";
  }

  if ($id==4) {
    $idd="Іграшки";
  }

  if ($id==5) {
    $idd="Товари для дому";
  }
  echo 'Ви обрали категорію - '.$idd;
}
?>

</div>



<br>
<form method="post"  action="{{route('contact-form')}}" class="form-signin" enctype="multipart/form-data">
  @csrf
  <input  type="hidden" name = "categori_id" value="<?php if (isset($id)) { echo $id;}?>">
  <div class="form-label-group">
    <input name = "name" type="text" id="inputEmail" class="form-control" placeholder="Назва" required="" autofocus="">
    <br>
  </div>

  <div class="form-label-group">
    <input name = "description" type="text"  class="form-control" placeholder="Опис" required="" autofocus="">
    <br>
  </div>

  <div class="form-label-group">
    <input name = "dop_description" type = "text" class="form-control"  placeholder="Детальний опис" required="" autofocus="">
    <br>
  </div>

  <div class="form-label-group">
    <input name = "price" type="text"  class="form-control" placeholder="Вартість" required="">
    <br>
  </div>

  <div class="form-label-group">
    <input name="upload_image" type="file">
    <br>
  </div>  

  <button class="btn btn-primary d-block mx-auto btn-lg" name= "form_submit" type="submit">Додати</button>

</form>
</div>












@endsection



