@extends('layouts.enseignant')

@section('tables')


  <ul class="tabs group">
    <li><a  href="/show">Liste des Enseignants</a></li>
    <li><a class="active" href="/add">Ajouter un Enseignant</a></li>
    <li><a href="#/three">Ajouter un Enseignant</a></li>
  </ul>
  
<div class="container" style="margin-top: 80px">
    <div class="row clearfix">
    <div class="col-md-12 column">
      <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
          <tr >
            <th class="text-center">
              #
            </th>
            <th class="text-center">
              Name
            </th>
            <th class="text-center">
              Mail
            </th>
            <th class="text-center">
              matricule
            </th>
          </tr>
        </thead>
     <form method="post" action="/add"> 

            {{ csrf_field() }}

        <tbody>

          <tr id='addr0'>

            <td>
                 1
            </td>

            <td>
                 <input type="text" name='name0'  placeholder='Name' class="form-control"/>
            </td>

            <td>
                 <input type="text" name='mail0' placeholder='Mail' class="form-control"/>
            </td>

            <td>
                 <input type="text" name='mat0' placeholder='matricule' class="form-control"/>
            </td>
          
          </tr>

           <tr id='addr1'>

            <td>
                 2
            </td>

            <td>
                 <input type="text" name='name1'  placeholder='Name' class="form-control"/>
            </td>

            <td>
                 <input type="text" name='mail1' placeholder='Mail' class="form-control"/>
            </td>

            <td>
                 <input type="text" name='mat1' placeholder='matricule' class="form-control"/>
            </td>
          
          </tr>
                 

                  <tr id='addr2'>

            <td>
                 3
            </td>

            <td>
                 <input type="text" name='name2'  placeholder='Name' class="form-control"/>
            </td>

            <td>
                 <input type="text" name='mail2' placeholder='Mail' class="form-control"/>
            </td>

            <td>
                 <input type="text" name='mat2' placeholder='matricule' class="form-control"/>
            </td>
          
          </tr>
                 

                  <tr id='addr3'>

            <td>
                 4
            </td>

            <td>
                 <input type="text" name='name3'  placeholder='Name' class="form-control"/>
            </td>

            <td>
                 <input type="text" name='mail3' placeholder='Mail' class="form-control"/>
            </td>

            <td>
                 <input type="text" name='mat3' placeholder='matricule' class="form-control"/>
            </td>
          
          </tr>
                 

                  <tr id='addr4'>

            <td>
                 5
            </td>

            <td>
                 <input type="text" name='name4'  placeholder='Name' class="form-control"/>
            </td>

            <td>
                 <input type="text" name='mail4' placeholder='Mail' class="form-control"/>
            </td>

            <td>
                 <input type="text" name='mat4' placeholder='matricule' class="form-control"/>
            </td>
          
          </tr>
                 
                    <tr id='addr1'></tr>
        </tbody>


              <button type="submit" value="">Valider</button>
      </form>  
      

      </table>
    </div>
  </div>


  <a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
</div>

<script type="text/javascript">

     $(document).ready(function(){

     
     $("#add_row").click(function(){
      
       for($i=0 ; $i<8 ;$i++){ 

        $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='mobile"+i+"' type='text' placeholder='Mobile'  class='form-control input-md'></td>");
        }

        $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');

       });



      var i=1;
     $("#delete_row").click(function(){
       if(i>1){
     $("#addr"+(i-1)).html('');
     i--;
     


   });

     }

});


</script>
@endsection