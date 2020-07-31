@extends('main')
@section('content')

<div class="container">
  <header class="jumbotron my-4">
    <div class="widget">
      <div class="row">
        
        <div class="col-md-3 mx-auto">
          <h5 class="widgetheading">Категорії</h5>
          <ul class="cat">
            <li><i class="fa fa-angle-right"></i><a href="/categoriall">УСІ ТОВАРИ</a>
              <span> (<?php echo $array[1]+$array[2]+$array[3]+$array[4]+$array[5]; ?>)</span></li>
            <li><i class="fa fa-angle-right"></i><a href="/categori1">Авто</a>
              <span> (<?php echo $array[1]; ?>)</span></li>
            <li><i class="fa fa-angle-right"></i><a href="/categori2">Меблі</a>
              <span> (<?php echo $array[2]; ?>)</span></li>
            <li><i class="fa fa-angle-right"></i><a href="/categori3">Нерухомість</a>
              <span> (<?php echo $array[3]; ?>)</span></li>
            <li><i class="fa fa-angle-right"></i><a href="/categori4">Ігршки</a>
              <span> (<?php echo $array[4]; ?>)</span></li>
            <li><i class="fa fa-angle-right"></i><a href="/categori5">Товари для дому</a>
              <span> (<?php echo $array[5]; ?>)</span></li>
          </ul>
        </div>

        <div class="col-md-3 mx-auto">
          <form method="post" action="{{route('price')}}">
            @csrf
            <h5 class="widgetheading">Ціна</h5>
              <div class="form-label-group">
                <input name = "price_min" type="number" class="form-control" placeholder="Min"
                value="<?php echo $_COOKIE["price_min"]?>"  style="width: 150px">
                <br>
              </div>
              <div class="form-label-group">
                <input name = "price_max" type="number" class="form-control" placeholder="Max"
                value="<?php echo $_COOKIE["price_max"]?>" style="width: 150px">
                <br>
              </div>
            </div>

          <div class="col-md-3 mx-auto">
            <div class="dropdown">
              <br><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php 
                  if (isset($_COOKIE["group"])) {
                    if ($_COOKIE["group"]=='desc') {
                      echo 'Спадання';
                    };
                  if ($_COOKIE["group"]=='asc') {
                      echo 'Зростання';
                    };
                  }
                  else { echo "Сортування";};
                ?>
              </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/group_desc"><ion-icon name="arrow-down-outline"></ion-icon>Спадання</a>
              <a class="dropdown-item" href="/group_asc"><ion-icon name="arrow-up-outline"></ion-icon>Зростання</a>
            </div>
          </div>
              <br><button type="submit" class="btn btn-primary btn-lg" name="price_submit">Шукати</button>

        </form>
      </div>
    </div>  
  </header>
</div>


<div class="container">
<div class="row text-center">

@foreach($data as $el)
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="/img/<?php echo 'img';?>{{$el->photo_id}}<?php echo '.jpg';?>">
          <div class="card-body">
            <h4 class="card-title">{{$el->name}}</h4>
            <p class="card-text">{{$el->description}}<br> 
              <?php echo "Ціна -";?>{{$el->price}} <?php echo "грн";?></p>
          </div>
          <div class="card-footer">
            <a href="info_good-{{$el->id}}">
              <button  class="btn btn-primary">Детальніше</button></a>
          </div>  
        </div>
      </div>      
@endforeach
</div>
</div>
</div>

@endsection


