<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{


    public function index(){
        return view ('products',[
            'products'=>product::latest()
        ]);
    }


    public function store(Request $request){
 $form= $request->validate([
        'title'=>'required',
        'logo'=>'required'
  ]);
  if ($request->hasFile('logo')){
    $form['logo']=$request->file('logo')->store('logs','public');
  }
 product::create($form);
 return ('message:it uploaded');

    }
}
