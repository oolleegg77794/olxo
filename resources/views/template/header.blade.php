<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/" style="text-decoration: none; color: black;">OLXO</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/regestration">Реєстрація</a>
        <a class="p-2 text-dark" href="/add">Подати оголошення</a>
    </nav>

    <?php
    if (isset($_COOKIE["auth"])) {?>
    <a class="btn btn-outline-primary" href="/account"><ion-icon name="person-outline"></ion-icon></a>
    <a class="btn btn-outline-primary" href="{{route('exit')}}"><ion-icon name="exit-outline"></ion-icon></a>

    <?php } else {?>
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#staticBackdrop">
        Увійти</button> <?php };?>
</div>
