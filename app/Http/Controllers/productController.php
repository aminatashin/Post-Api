<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Session;

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
 $form['logo']=$request->file('logo')->getClientOriginalName();
//  $form['logo']=$request->file('logo')->getClientOriginalExtension();
//  $form['logo']=$request->file('logo')->getSize();
//  $form['logo']=$request->file('logo')->getPath();
 
 product::create($form);

 
 return redirect('/')->with('success','file uploaded');

    }
}
