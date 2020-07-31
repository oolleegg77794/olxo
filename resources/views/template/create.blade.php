@extends('main')
@section('add_goods')
   

<div class="container" style="width: 50%">

  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Заповніть поля щоб додати оголошення</h1>
  </div>

  <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Категорії
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="/add_goods.php?categorii=1">Авто</a>
    <a class="dropdown-item" href="/add_goods.php?categorii=2">Меблі</a>
    <a class="dropdown-item" href="/add_goods.php?categorii=3">Нерухомість</a>
    <a class="dropdown-item" href="/add_goods.php?categorii=4">Іграшки</a>
    <a class="dropdown-item" href="/add_goods.php?categorii=5">Товари для дому</a>
  </div>
</div>



<?php
/*if (isset($_GET['categorii'])){
  $id_categorii = $_GET['categorii']; 
}; 

if ($id_categorii=="1") {
  $name_categori = "Авто";
  echo "Ви обрали категорію - "."$name_categori";
};

if ($id_categorii=="2") {
  $name_categori = "Меблі";
  echo "Ви обрали категорію - "."$name_categori";
};

if ($id_categorii=="3") {
  $name_categori = "Нерухомість";
  echo "Ви обрали категорію - "."$name_categori";
};

if ($id_categorii=="4") {
  $name_categori = "Іграшки";
  echo "Ви обрали категорію - "."$name_categori";
};

if ($id_categorii=="5") {
  $name_categori = "Товари для дому";
  echo "Ви обрали категорію - "."$name_categori";
};
*/
?>


<br>
<form method="post"  action="add/submit" class="form-signin" enctype="multipart/form-data" id="999">
  @csrf
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

  <button class="btn btn-primary d-block mx-auto btn-lg" name= "form_submit" type="submit" onclick="send ()">Додати</button>

</form>
</div>



<?php
/*$photo_id=rand ();
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
$dop_description = filter_var(trim($_POST['dop_description']), FILTER_SANITIZE_STRING);
$price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

if (isset($_GET['categorii'])){
  $id_categorii = $_GET['categorii'];  
};

  if ($name or $description or $dop_description or $price !=0 ) {
  $link = mysqli_connect('localhost', 'root', '','olxo')
    or die("Ошибка " . mysqli_error($link));
    mysqli_query($link ,"INSERT INTO `goods` (`customer_id`, `description`, `dop_description`, `price`, `name`, `posts`, `categori_id`, `photo_id`, `del_id`) VALUES ('1', '$description', '$dop_description', '$price', '$name', '', '$id_categorii', '$photo_id', '0')");

    mysqli_close($link);
  };
  include 'img/resizer.php';*/

?>

@endsection



