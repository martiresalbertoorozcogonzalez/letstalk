@extends('layouts.app')

@section('content')

<b-container>
    
    <b-row align-h="center">
        
        <b-col cols="8">
            
            <b-card title="Inicio de sesion" class="my-4">
           

         @if ($errors->any())  
             <b-alert show variant="danger">
               <ul class="mb-0">
                @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
                @endforeach 
               </ul>
             </b-alert>
          @else
             <b-alert show>
               Porfavor ingresa tus datos
             </b-alert>     
          @endif  
            
            <b-form  method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <b-form-group
                    label="Correo electronico:"
                    label-for="email">

                        <b-form-input type="email"
                          id="email"
                          name="email"
                          value="{{ old('email') }}" required autofocus
                          placeholder="example@programcionymas.com">
                        </b-form-input> 
                </b-form-group>

                  
                <b-form-group label="Contrasena" label-for="password">
                        <b-form-input type="password"
                        id="password"
                        name="password"required>
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
