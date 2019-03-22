@extends('layouts.app')

@section('content')

<b-container>
    
    <b-row align-h="center">
        
        <b-col cols="8">
            
            <b-card title="Inicio de sesion">
            
            <b-alert show>Porfavor ingresa tus datos</b-alert>
           
            <b-form  method="POST" action="{{ route('login') }}">
                
                {{ csrf_field() }}

                <b-form-group
                    label="Correo electronico:"
                    label-for="email"
                    description="Nunca compartiremos tu correo. Esta seguro con nosotros.">

                        <b-form-input id="email"
                          type="email"
                          value="{{ old('email') }}" 
                          required 
                          autofocus
                          placeholder="example@programcionymas.com">
                        </b-form-input> 
                </b-form-group>

                  
                <b-form-group 
                        label="Contrasena:"
                        label-for="password">
                        
                        <b-form-input id="password" 
                        id="password"
                        name="password"
                        type="password"
                        value="{{ old('password') }}"
                        required/>
                       </b-form-input>
                </b-form-group>


                <b-form-group>
                  <b-form-checkbox 
                       name="remember" 
                       {{ old('remember') ? 'checked="true"' : '' }}>
                       
                       Recordar contrasena                      

                  </b-form-checkbox>
                </b-form-group>
                     
                        
                <b-button type="submit" variant="primary">
                    Ingresar
                </b-button>                  

                <b-button href="{{ route('password.request') }}" variant="link">
                    Olvidaste tu contrasena?
                </b-button>


            </b-form>


        </b-col>

    </b-row>
    
</b-container>

@endsection
