<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Makale;

class MakalelerController extends Controller
{
    //
    public function index(){
        return view('makale.index')->with('listele',Makale::all());
    }

    public  function kaydet(Request $request) {
        $ekle=new Makale();
        $ekle->baslik=$request->input('baslik');
        $ekle->detay=$request->input('detay');
        $ekle->save();
        return redirect('/');
    }
}
