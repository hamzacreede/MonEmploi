
@extends('layouts.app')


@section('content')


<div class="container ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">

            <div class="panel panel-default animated tada">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal  " method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <label for="email" class="col-md-4 control-label">Matricule</label>

                               <div class="col-md-6">

                                  <div class="form-group">
                  
                                     <div class="input-group">

                                         <div class="input-group-addon bg-light">

                                             <span class="glyphicon glyphicon-envelope"></span>

                                         </div>

                                          <input id="utilisateur" type="text"  class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                      </div>

                                   </div>

                             
                                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                          <div class="col-md-6">

                                  <div class="form-group">
                  
                                     <div class="input-group">

                                         <div class="input-group-addon bg-light">

                                             <span class="glyphicon glyphicon-lock"></span>

                                         </div>

                                         <input id="password" type="password" class="form-control" name="password" required>

                                    </div>
                                    
                                  </div>     

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

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
        </div>
    </div>

</div>

@endsection
