@extends('main')
@section('info_good')

  <div class="container"  style="width: 100%">

    <div class="row" >

      <div class="col-lg-9 mx-auto">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="/img/<?php echo 'img'.$photo_id.'.jpg';?>" alt="">
          <div class="card-body">
            <h3 class="card-title"><?php echo $name;?></h3>
            <h4><?php echo $price . ' грн';?></h4>
            <p class="card-text"><?php echo $dop_description;?></p>
          </div>
        </div>

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Відгуки про продавця
          </div>
          <div class="card-body">
            <p><?php echo $posts;?></p>
            <small class="text-muted">Опубліковано Анонімом  3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Купити</a>
          </div>
        </div>

      </div>

    </div>

  </div>

@endsection




 













