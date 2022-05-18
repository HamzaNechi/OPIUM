<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = ['nom_prenom', 'tel' , 'dateevent', 'heure' , 'nb_personne','nb_garçon','nb_fille','code_réservation','id_event'];
}