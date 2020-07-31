@extends('main')
@section('account')
<div class="container">
	<h3 style="text-align: center;">Мої оголошення</h3><br>

@foreach($data as $el) 
    <div class="alert alert-info">{{$el->name}}
        	<a style="float: right; margin: -6px 15px;" 
            href="account_goods_del{{$el->id}}"><button type="button" class="btn btn-danger">Видалити</button></a>
        	<a style="float: right; margin: -6px 0px;" 
            href="info_good-{{$el->id}}"><button type="button" class="btn btn-info">Переглянути</button></a>
    </div>
@endforeach
</div>

@endsection