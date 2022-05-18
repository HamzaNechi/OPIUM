<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\booking;
use App\event;
use Dompdf\Dompdf;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking=booking::orderBy('dateevent', 'desc')->paginate(7);
        return view('reservation')->with(
            array(
                'booking' => $booking ,
            )
        );
    }

    public function getEventDate($date){
      $eventDate=event::where('date','=',$date)->get();
      if(sizeof($eventDate)>0){
        return view('reservation_vitrine')->with(array(
          'eventDate'=>$eventDate,
        ));
      }else{
        $eventDate=NULL;
        return view('reservation_vitrine')->with(array(
          'eventDate'=>$eventDate,
        ));
      }
    }

    public function detail($id, $date){
      $detail= booking::where(['dateevent'=>$date , 'id_event'=>$id])->get();
      if(sizeof($detail)>0){
      return view('viewreservation')->with(
        array(
          'detail' => $detail,
          )
        );
      }
      else{
        return redirect('page404');
      }
    }

    public function search(Request $request){
      $nom=$request->recherche;
      $booking=booking::where('nom_prenom','like','%'.$nom.'%')->paginate(50);
      if(sizeof($booking)>0){
        return view('reservation')->with(
          array(
              'booking' => $booking,
          )
        );
      }else{
        return back();
      }
    }


    public function sortWithDate(Request $request){
      $date=$request->recherche;
      $booking=booking::where('dateevent','=',$date)->paginate(50);
      if(sizeof($booking)>0){
        return view('reservation')->with(
          array(
              'booking' => $booking,
          )
        );
      }else{
        return back();
      }
    }

    public function exportTodayBookingpdf(){
      $today = date("Y-m-d"); 
      $book= booking::where('dateevent', '=' ,$today )->get();

        $html='
            <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Réservation</title>
    
    <style type="text/css">
        .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 19.2cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 200px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  position: absolute;
  top: 225px;
  right:0;
  left:620px;
  width: 200px;
  height: 100px;
  border:;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
    </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="">
      </div>
      <h1>OPIUM</h1>
      
    </header>
    <br>
    <br>
    <center><h3>Date:'.$today.'</h3></center>
    <main>
      <table>
        <thead>
          <tr>
            <th>Nom et Prenom</th>
            <th>Téléphone</th>
            
            <th>Nombre personne</th>
      <th>Nombre garçon</th>
      <th>Nombre fille</th>
            <th>Code</th>
          </tr>
        </thead>
        <tbody>';

        foreach ($book as $key) {
         $html.=' <tr>
            <td>'.$key->nom_prenom.'</td>
            <td>'.$key->tel.'</td>
            
            <td>'.$key->nb_personne.'</td>
            <td>'.$key->nb_garçon.'</td>
            <td>'.$key->nb_fille.'</td>
            <td>'.$key->code_réservation.'</td>
          </tr>';
        }
       $html.=' </tbody>
      </table>
      
    </main>
    
  </body>
</html>
        '
        ;
           
        
        $pdf = new Dompdf(); 
        $pdf->loadHtml($html);
        $pdf->render();
        

    

        return $pdf->setPaper('a4','landscape')->stream('Reservation_'.$today.'.pdf');
    }
    

    public function exportpdf($datee)
    {
        $book= booking::all();
        $book= booking::where('dateevent', '=' ,$datee )->get();
        if (sizeof($book)<=0) {
          return back()->with('flash_message_error',"Il n'a pas de réservations aujourd'hui .");
        }
        $html='
            <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Réservation</title>
    
    <style type="text/css">
        .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 19.2cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 200px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  position: absolute;
  top: 225px;
  right:0;
  left:620px;
  width: 200px;
  height: 100px;
  border:;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
    </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="">
      </div>
      <h1>OPIUM</h1>
      
    </header>
    <br>
    <br>
    <center><h3>Date:'.$book[0]['dateevent'].'</h3></center>
    <main>
      <table>
        <thead>
          <tr>
            <th>Nom et Prenom</th>
            <th>Téléphone</th>
            
            <th>Nombre personne</th>
      <th>Nombre garçon</th>
      <th>Nombre fille</th>
            <th>Code</th>
          </tr>
        </thead>
        <tbody>';

        foreach ($book as $key) {
         $html.=' <tr>
            <td>'.$key->nom_prenom.'</td>
            <td>'.$key->tel.'</td>
            
            <td>'.$key->nb_personne.'</td>
            <td>'.$key->nb_garçon.'</td>
            <td>'.$key->nb_fille.'</td>
            <td>'.$key->code_réservation.'</td>
          </tr>';
        }
       $html.=' </tbody>
      </table>
      
    </main>
    
  </body>
</html>
        '
        ;
           
        
        $pdf = new Dompdf(); 
        $pdf->loadHtml($html);
        $pdf->render();
        

    

        return $pdf->setPaper('a4','landscape')->stream('reservation_en_pdf.pdf');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    

    public function store(Request $request)
    {
      
     
        $this->validate($request, [
            'nom_prenom' => 'required',
            'tel' => 'required',
             'dateevent' => 'required',
             //'heure' => 'required',
             'nb_garçon' => 'required',
             'nb_fille' => 'required',
             
        ]);

        $ph='';
        for($i=0 ; $i<2 ; $i++){
        if($i%2==0){
            $c=rand(ord("A"),ord("Z"));
            $r=rand(ord("a"),ord("z"));
            $ch=chr($c);
            $rh=chr($r);
            $ph=$ph.$ch.$rh;
        }
        else{
            $s=rand(0,9);
            $ch=strval($s);
            $ph=$ph.$ch;
        }
       }


        if($request->id_event > 0){
          $id_event=$request->id_event;
        }else{
          $id_event=0;
        }
        
        $booking=new booking([
            'nom_prenom' => $request->nom_prenom,
            'tel' => $request->tel,
            'dateevent' => $request->dateevent,
            'nb_personne' => $request->nb_garçon+$request->nb_fille,
            'nb_garçon' => $request->nb_garçon,
            'nb_fille' => $request->nb_fille,
            'code_réservation' =>$ph,
            'id_event'=>$id_event,
        ]);

        
      if ($request->nb_fille==0) {
        return back()->withInput()->withErrors([
    'nb_fille' => 'Tu ne peut pas réserver .. Nombre de fille 0',
]);
      }
      else{
        $booking->save();
       return redirect('/popupreserv')->with('success,bien');
      }
       
      
    }

    public function PopUp(){
        $max=0;
        $pop= booking::all();
        $tab = array('pop' => $pop );
        
       
        foreach ($pop as $key) {
            if ($key->id>$max) {
                $max=$key->id;
            }
        }

        foreach ($pop as $key) {
            if ($key->id == $max) {
                $ligne=$key;
            }
        }
       
        return view('/popupreserv')->with(array('ligne' => $ligne ));
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
        $booking= booking::find($id);
        return view('modifbook',compact('booking'));
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
        $booking=booking::find($id);
           $booking->nom_prenom=$request->nom;
            $booking->tel=$request->tel;
            $booking->dateevent=$request->dateevent;
            $booking->heure=$request->heure;
            $booking->nb_personne=$request->nb_garçon+$request->nb_fille;
            $booking->nb_garçon=$request->nb_garçon;
            $booking->nb_fille=$request->nb_fille;
            $booking->code_réservation=$request->code_réservation;
            $booking->update(); 
        
        

        return redirect('/reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    { $id=$request->get('id_book');
        $booking=booking::find($id);
        $booking->delete();
        return redirect()->back()->with('flash_message_success', 'Booking has been deleted successfully');
    }
}