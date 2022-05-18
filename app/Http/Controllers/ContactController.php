<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\contact;


class ContactController extends Controller
{
    public function index(){
        $message=contact::paginate(20);
        return view('message')->with(array(
            'message'=>$message,
        ));
    }


    public function AddMessage(Request $request){
        $data=$request->all();
        $message=new contact();
        $message->nom=$request->nom;
        $message->email=$request->email;
        $message->message=$request->msg;
        $message->save();
        return back()->with('flash_message_success','Message envoyé');
    }


    public function search(Request $request){
        $contact=$request->get('recherche');
        $message=contact::where('nom','like','%'.$contact.'%')->paginate(20);
        return view('message')->with(array(
            'message'=>$message,
        ));
    }


    public function destroy(Request $request){
        $id=$request->get('id_contact');
        $message=contact::find($id);
        $message->delete();
        return back()->with('flash_message_success','Le message est bien effacé');
    }
}
