<!DOCTYPE html>
<html>
<head>
	<title>pdf</title>
</head>
<body>
	<table border="1">
		<tr>
                            <td>Nom</td>
                            <td>Téléphone</td>
                            <td>Date</td>
                            <td>Heure</td>
                            <td>NB_Personne</td>
                            <td>NB_Garçon</td>
                            <td>NB_Fille</td>
                            <td>Présence</td>
                        </tr>

            @foreach($book as $key)
            		<td>{{$key->nom_prenom}}</td>
                                <td>{{$key->tel}}</td>
                                <td>{{$key->dateevent}}</td>
                                <td>{{$key->heure}}</td>
                                <td>{{$key->nb_personne}}</td>
                                <td>{{$key->nb_garçon}}</td>
                                <td>{{$key->nb_fille}}</td>
                                <td></td>
            @endforeach
	</table>
</body>
</html>