<?php

namespace App\Http\Controllers;
require 'file:///C:/OSPanel/domains/OLXO/olxo/vendor/autoload.php';
use App\Models\Addgoods;	
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;


class AddgoodController extends Controller{


	public function content( $id='def') {
		//стантдарт виборка
		$result = DB::table('goods')->where ('del_id',0)->inRandomOrder()->get();

		//ціна
		$pmax=99999999;
		$pmin=1;

		if (isset($_COOKIE["price_max"])) {
			$pmax = $_COOKIE["price_max"];
			$pmin = $_COOKIE["price_min"];
			$result = DB::table('goods')
				->where ('del_id',0)
				->where ('price', '<=', $pmax)
				->where ('price', '>=', $pmin)->get();
		};		

		
		//групування
		if ($id=='desc') {

			setcookie("group", $id, time()+1800);
			$result = DB::table('goods')
			->where ('del_id',0)->orderBy('price', 'desc')->get();	

			if (isset($_COOKIE["categori"])){
				$t=$_COOKIE["categori"];
				$result = DB::table('goods')->where ('categori_id', $t)	
				->where ('del_id',0)
				->where ('price', '<=', $pmax)
				->where ('price', '>=', $pmin)
				->orderBy('price', 'desc')->get();				
				};

		};

		if ($id=='asc') {

			setcookie("group", $id, time()+1800);
			$result = DB::table('goods')
			->where ('del_id',0)
			->where ('price', '<=', $pmax)
			->where ('price', '>=', $pmin)
			->orderBy('price', 'asc')->get();

			if (isset($_COOKIE["categori"])){
				$t=$_COOKIE["categori"];
				$result = DB::table('goods')->where ('categori_id', $t)	
				->where ('del_id',0)
				->where ('price', '<=', $pmax)
				->where ('price', '>=', $pmin)
				->orderBy('price', 'asc')->get();				
				};
	
		};

		//видача по категрогії
			if ($id >= 1) {
				setcookie("categori", $id, time()+1800);
				$result = DB::table('goods')->where ('del_id',0)
				->where ('categori_id', $id)
				->where ('price', '<=', $pmax)
				->where ('price', '>=', $pmin)
				->get();

		};

			if ($id == 'all') {
				setcookie("categori", $id, time()-1800);
				setcookie("group", $id, time()-1800);
				$result = DB::table('goods')
				->where ('price', '<=', $pmax)
				->where ('price', '>=', $pmin)
				->where ('del_id',0)->get();	
		};

		//кількість товарів категрогії
		for ($i = 1; $i < 6; $i++){
		  $count = DB::table('goods')->where ('categori_id',$i)->count();
		  $array[$i]=$count;
		};

		return view ('template.content') 
		-> with (['data'=>$result])
		-> with (['array'=>$array]);
		
	}	


	public function price(Request $req) {
		//ціна
		$price_max = $req->input('price_max');
		$price_min = $req->input('price_min');
	    $default_min = 1;
	    $default_max = 99999999999;

	    if ($price_min==null) {
	      $price_min=$default_min;
	    };

	    if ($price_max==null) {
	      $price_max=$default_max;
	    };

	    setcookie("price_max", $price_max, time()+1800);
	    setcookie("price_min", $price_min, time()+1800);

		return redirect()->back();
	}	



		
    public function submit(Request $req, $id=False) {

		$Addgoods = new Addgoods();
		$Addgoods->name = $req->input('name');
		$Addgoods->description = $req->input('description');
		$Addgoods->dop_description = $req->input('dop_description');
		$Addgoods->price = $req->input('price');
		$Addgoods->categori_id = $req->input('categori_id');
		$Addgoods->customer_id = 1;

		$imagename=rand();
		$image=$req->file('upload_image');
		Image::make($image)->resize(500, 325)->save('img/bar.jpg');
		rename("img/bar.jpg", "img/img$imagename.jpg");
		
		$Addgoods->photo_id = $imagename;
		$Addgoods->posts = 1;
		$Addgoods->del_id = 1;
		$Addgoods-> save();

		return redirect()->route('home');

    }


	public function categori($id) {

		return view ('template.add_good')
		-> with ('id', $id);
 
	}



	public function reseeve(Request $req){

		$price_max = $req->input('price_max');
		$price_min = $req->input('price_min');
	    $default_min = 1;
	    $default_max = 99999999999;

	    if ($price_min==null) {
	      $price_min=$default_min;
	    };

	    if ($price_max==null) {
	      $price_max=$default_max;
	    };

		$result = DB::table('goods')
		->where ('del_id', '=', '0')
		->where ('price', '<=', $price_max)
		->where ('price', '>=', $price_min)->get();





				//ціна
		if (isset($req)) {
		$pmax = $req->input('price_max');
		$pmin = $req->input('price_min');
		echo $pmin;
		$result = DB::table('goods')
			->where ('del_id',0)
			->where ('price', '<=', $pmax)
			->where ('price', '>=', $pmin)->get();
		};

		//стантдарт виборка
		$result = DB::table('goods')->where ('del_id',0)->inRandomOrder()->get();

		//групування
		if ($by=='up') {$result = DB::table('goods')
			->where ('del_id',0)
			->where ('price', '<=', $pmax)
			->where ('price', '>=', $pmin)
		->orderBy('price', 'desc')->get();	
		};

		if ($by=='down') {$result = DB::table('goods')
			->where ('del_id',0)
			->where ('price', '<=', $pmax)
			->where ('price', '>=', $pmin)
		->orderBy('price', 'asc')->get();	
		};

		//видача по категрогії
		if ($categori=!0){
			echo $categori;
			$result = DB::table('goods')->where ('del_id',0)->where ('categori_id', $categori)->get();
		};

		//кількість товарів категрогії
		for ($i = 1; $i < 6; $i++){
		  $count = DB::table('goods')->where ('categori_id',$i)->count();
		  $array[$i]=$count;
		};

		return view ('template.content') 
		-> with (['data'=>$result] );

	}





	public function info($id) {

		$result = DB::table('goods')->where ('id',$id);
        $name=$result->value('name');
        $description=$result->value('description');
        $dop_description=$result->value('dop_description');
        $price=$result->value('price');
        $photo_id=$result->value('photo_id');
        $id=$result->value('id');
        $posts=$result->value('posts');

		return view ('template.info_good')
		-> with ('name', $name)
		-> with ('price' , $price)
		-> with ('dop_description', $dop_description)
		-> with ('description' , $description)
		-> with ('posts', $posts)
		-> with ('photo_id' , $photo_id);
	}

	public function account() {

		$result = DB::table('goods') ->where ('customer_id',1)->where ('del_id',0)->get();

		return view ('template.account') 
		-> with (['data'=>$result] );
	}

	public function account_delgood($id){

		$result = DB::table('goods') ->where ('customer_id',1)->where ('del_id',0)->get();

		if (isset($id)){
    	DB::table('goods')->where('id', $id)->update(['del_id' => 1]);
		};
    	return view ('template.account') 
		-> with (['data'=>$result]);
		

	}
}