<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
       
        </style>
    </head>
    <body style=" text-align:center">
       <!-- FORMULAIRE -->

       <form method="post" action="modules">

{{ csrf_field() }}

 

           <label>Nom Enseignant </label> <input type="text" name="Nom_Enseignant" value="test1"> <br><br>

   
           <!-- Moudle 1 --> <h1>Module Numéro 1</h1>

           <label>Nom Module 1 </label> <input type="text" name="module1" value="module1"> <br><br>

          
                  <label>Cours</label> <input type="checkbox" name="cours1" value="cours1"> 


                  <label>TD</label> <input type="checkbox" name="td1" value="td1"> 


                  <label>TP</label> <input type="checkbox" name="tp1" value="tp1"> <br><br>
        

                  <label>heure</label> <input type="time" name="heure1" value="tp1"> 

                  <select name="jour">
                    
                    <option value="samedi">Samedi</option>

                    <option value="dimanche">Dimanche</option>

                    <option value="lundi">Lundi</option>

                    <option value="mardi">Mardi</option>

                    <option value="ercredi">Mercredi</option>

                    <option value="jeudi">Jeudi</option>

                  </select>


                <br> <br><br>



   
           <!-- Moudle 2 --> <h1>Module Numéro 2</h1>

           <label>Nom Module 2 </label> <input type="text" name="module2" value="module2"> <br><br>

           <label>Cours</label> <input type="checkbox" name="cours2" value="cours2"> 


           <label>TD</label> <input type="checkbox" name="td2" value="td2"> 


           <label>TP</label> <input type="checkbox" name="tp2" value="tp2"> <br><br>

              
            <label>heure</label> <input type="time" name="heure2" value="tp1">

               <select name="jour">
                    
                     <option value="samedi">Samedi</option>

                    <option value="dimanche">Dimanche</option>

                    <option value="lundi">Lundi</option>

                    <option value="mardi">Mardi</option>

                    <option value="ercredi">Mercredi</option>

                    <option value="jeudi">Jeudi</option>

                    
              </select>

                <br> <br><br>

   
           <!-- Moudle 3--> <h1>Module Numéro 3</h1>


           <label>Nom Module 3 </label> <input type="text" name="module3" value="module3"> <br><br>


           <label>Cours</label> <input type="checkbox" name="cours3" value="cours3"> 


           <label>TD</label> <input type="checkbox" name="td3" value="td3"> 


           <label>TP</label> <input type="checkbox" name="tp3" value="tp3"> <br><br>

    
          <label>heure</label> <input type="time" name="heure3" value="tp1">

             <select name="jour">
                    
                     <option value="samedi">Samedi</option>

                    <option value="dimanche">Dimanche</option>

                    <option value="lundi">Lundi</option>

                    <option value="mardi">Mardi</option>

                    <option value="ercredi">Mercredi</option>

                    <option value="jeudi">Jeudi</option>

                    
            </select>


                <br> <br><br>


           <input type="submit" name="" value="valider"> <br>




       </form>
    </body>
</html>
