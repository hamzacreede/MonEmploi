
@extends('layouts.enseignant')

@section('tables')

  <ul class="tabs group">
    <li><a class="active" href="/show">Liste des Enseignants</a></li>
    <li><a href="/add">Ajouter un Enseignant</a></li>
    <li><a href="#/three">Ajouter un Enseignant</a></li>
  </ul>
  

<div class="container ">
<style>
    @import  url('https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css'); 
// modifer avec css
</style>


    

<table   id="example" class="display" cellspacing="0" width="100%" style="background-color: #ccc">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>

                <th>supprimer</th>
                
            </tr>
        </thead>
     
        <tbody>

          @foreach($resultat as $valeur) 


            <tr>

                <td>{{$valeur->Nom_Enseignant   }}</td>

                <td>{{   $valeur->Email_Enseignant }} </td>

                <td>{{   $valeur->Email_Enseignant }} </td>
                    
            </tr>

           @endforeach 

             @foreach($resultat as $valeur) 


            <tr>
                <td>{{$valeur->Nom_Enseignant   }}</td>
                
                <td>{{   $valeur->Email_Enseignant }} </td>
        
            
            </tr>

           @endforeach 
             @foreach($resultat as $valeur) 


            <tr>
                <td>{{$valeur->Nom_Enseignant   }}</td>
                
                <td>{{   $valeur->Email_Enseignant }} </td>
        
            
            </tr>

           @endforeach 

              
        </tbody>
    </table>


</div>
<script>

    /* API method to get paging information */

    'use strict';
    var $ = jQuery;
    //https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js
    $.getScript("{{asset('js/datatables.min.js')}}", function(){
       
            $('#example').DataTable( {
                "paging":   true,
                "ordering": true,
                "info":     false
            } );
    });
    
</script>


@endsection