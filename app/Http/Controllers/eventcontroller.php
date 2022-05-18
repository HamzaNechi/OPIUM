<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\event;

class eventcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $event=event::orderBy('date','desc')->get();
        return view('event')->with(
            array(
                'event' => $event ,
            )
        );
    }

    public function index()
    {
        $event=event::all();
        $event= event::orderBy('date','desc')->paginate(7);
        return view('event')->with(
            array(
                'event' => $event ,
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $request->hasFile('photo')){
            $filename=$request->photo->getClientOriginalName();
            $request->photo->move(public_path(). '/img',$filename);
            $event=new event;
            $event->photo=$filename;
            $event->nom=$request->nom;
            $event->date=$request->date;
            $event->heure=$request->heure;
            $event->description=$request->description;
        $event->save();
        }
   
        return redirect('event')->with('success','événement ajouter avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event= event::find($id);
        return view('modifevent',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event=event::find($id);
        if( $request->hasFile('photo')){
            $filename=$request->photo->getClientOriginalName();
            $request->photo->move(public_path(). '/img',$filename);
            $event->photo=$filename;
            $event->nom=$request->nom;
            $event->date=$request->date;
            $event->heure=$request->heure;
            $event->description=$request->description;
        $event->update();
        }
        else{
           $event->nom=$request->nom;
            $event->date=$request->date;
            $event->heure=$request->heure;
            $event->description=$request->description;
        $event->update(); 
        }
        

        return redirect('/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->get('id_event');
        $event=event::find($id);
        $event->delete();
        return redirect('event');
    }


    public function getEventWithDate($date){
        $event=event::where('date','=',$date)->get();
        return response()->json($event);
    }

    public function search(Request $request){
        $nom=$request->recherche;
        $event=event::where('nom','like','%'.$nom.'%')->get();
        if(sizeof($event) > 0){
            return view('event')->with(
                array(
                    'event' => $event ,
                )
            );
        }else{
            return back();
        }
    }
}
