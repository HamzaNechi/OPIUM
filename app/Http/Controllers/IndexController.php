<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\event;
use App\booking;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function index2()
    {   $eventDate=NULL;
        $event= event::orderBy('date','desc')->take(7)->get();
        return view('index')->with(
            array(
                'event' => $event,
                'eventDate'=>$eventDate,
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
        return view('index');

    }
}
