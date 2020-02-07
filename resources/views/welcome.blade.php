   <!DOCTYPE html>
<html>
<head >
    <title></title>
     <meta charset="utf-8">
   <link href="{{ asset('css/form.css') }}" rel="stylesheet">


</head>
<body style="background-image: url('image/planning.jpg'); height: 300px; background-size:cover ;background-repeat: no-repeat; background-attachment: fixed; " >
      <div class="formulaire">
 
  <div class="tile-header" style="margin-left: 45%">
    <h2 >MonEmploi</h2>

  </div>
  


    <div class="login-body " style="margin-left: 20%  ">

    <article class="container-login center-block">

        <section>

            <ul id="top-bar" class="nav nav-tabs nav-justified">
                    

            </ul>

            <div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">

                <div id="login-access" class="tab-pane fade active in">

                    <h2><i class="glyphicon glyphicon-log-in"></i>Identification</h2>  

                     <form class="form-horizontal  " method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <!-- tes t ** -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                          <div class="col-md-6">

                                  <div class="form-group">
                  
                                     <div class="input-group">

                                         <div class="input-group-addon bg-light">

                                             <span class="glyphicon glyphicon-lock"></span>

                                         </div>

                                         <input id="password" type="password" class="form-control" name="password" required placeholder="Mot de passe">

                                    </div>
                                    
                                  </div>     

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                        </div> <br>

                        <div class="checkbox">

                                <label class="control-label" for="remember_me">

                                    <input type="checkbox" name="remember_me" id="remember_me" value="1" class="" tabindex="3" /> Se souvient de moi

                                </label>

                        </div>  <br>

                        <br/>

                       <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Valider
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                   Vous-avez oublié votre mot de passe ?
                                </a>
                            </div>
                        </div>
                    </form>  

                </div>

            </div>

        </section>

    </article>

  </body>
 
