<?php

namespace App\Http\Controllers;

use App\Etudiant; 
use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    public function index(){
        return view('etudiants.form');
            
    }

    public function liste() {
       $etudiants= Etudiant::all();

       return view('etudiants.etudiant',[
            'etudiants'=>$etudiants 

       ]);
    }

    public function store(Request $request){
        $name = $request['name'];
        $prenom =  $request['prenom'];
        $email =  $request['email'];
        $phone =  $request['phone'];
        $filliere=  $request['filliere'];

        $etudiants = new Etudiant();
        $etudiants->name = $name;
        $etudiants->prenom =$prenom;
        $etudiants->email = $email;
        $etudiants->phone = $phone;
        $etudiants->filliere = $filliere;
        $etudiants->save();

        

        return redirect('/etudiants/liste');

    }

    public function show($id){
        $etudiants = Etudiant::where('id' ,$id)->first();
        return view('etudiants.etudiant_show' , ['etudiant'=> $etudiants]);
    }

  
    public function edit($id){
        $etudiants = Etudiant::where('id',$id)->first();
        return view('etudiants.etudiant_edit',['etudiant'=>$etudiants]);
    }

     public function update(Request $request, $id){
       $name = $request['name'];
        $prenom =  $request['prenom'];
        $email =  $request['email'];
        $phone =  $request['phone'];
        $filliere=  $request['filliere'];
      
      
      
        $etudiants = Etudiant::find($id);
        $etudiants->name = $name;
        $etudiants->prenom =$prenom;
        $etudiants->email = $email;
        $etudiants->phone = $phone;
        $etudiants->filliere = $filliere;
        $etudiants->update();
        
        return redirect('/etudiants/liste');
     }


    public function destroy($id) {

        Etudiant::find($id)->delete();
        
        return redirect()->back();
    }
}
