@extends('layouts.app')

@section('content')
<b-container fluid>
    <b-row>
    
        <b-col cols="4">
              
            <b-form class="my-3 mx-2">  
              <b-form-input class="text-center "
                  type="text"
                  placeholder="Buscar contacto....">
              </b-form-input>  
             </b-form>

              <b-list-group-item variant="dark">
                  <b-row class="p-2" align-h="center" class="text-center"> 
                    <b-col cols="12" md="3">
                      <b-img rounded="circle" blank width="60" heigth="60" blank-color="#777" alt="Circle image" class="m-1" />
                    </b-col>
                   
                    <b-col cols="6" align-self="center" class="d-none d-md-block">
                       <p class="mb-1">Juan Ramos</p>
                       <p class="text-muted small mb-1">Tu: Hasta luego</p>  
                    </b-col>
                   
                    <b-col cols="3" class="d-none d-md-block">
                        <p class="text-muted small">
                         1:37 pm
                        </p>
                    </b-col>  
                 </b-row>
              </b-list-group-item>
              
              <b-list-group-item>
                   <b-row class="p-2" align-h="center" class="text-center"> 
                        <b-col cols="12" md="3">
                          <b-img rounded="circle" blank width="60" heigth="60" blank-color="#777" alt="Circle image" class="m-1" />
                        </b-col>
                       
                        <b-col cols="6" align-self="center" class="d-none d-md-block">
                           <p class="mb-1">Juan Ramos</p>
                           <p class="text-muted small mb-1">Tu: Hasta luego</p>  
                        </b-col>
                       
                        <b-col cols="3" class="d-none d-md-block">
                            <p class="text-muted small">
                             1:37 pm
                            </p>
                        </b-col>  
                   </b-row>
              </b-list-group-item>
              
              <b-list-group-item variant="secondary">
                   <b-row class="p-2" align-h="center" class="text-center"> 
                    <b-col cols="12" md="3">
                      <b-img rounded="circle" blank width="60" heigth="60" blank-color="#777" alt="Circle image" class="m-1" />
                    </b-col>
                   
                    <b-col cols="6" align-self="center" class="d-none d-md-block">
                       <p class="mb-1">Juan Ramos</p>
                       <p class="text-muted small mb-1">Tu: Hasta luego</p>  
                    </b-col>
                   
                    <b-col cols="3" class="d-none d-md-block">
                        <p class="text-muted small">
                         1:37 pm
                        </p>
                    </b-col>  
                   </b-row>   
              </b-list-group-item>
        
        </b-col>

        <b-col cols="8">

            <b-row>
                <b-col cols="8">
                    
                </b-col>
                <b-col cols="4">
                    <b-img rounded="circle" blank width="60" heigth="60" blank-color="#777" alt="Circle image" class="m-1" />
                    <p>Usuario seleccionado</p>
                    <hr>
                    <b-form-checkbox>
                        Descativar notificaciones
                    </b-form-checkbox>
                </b-col>
            </b-row>

        </b-col>
    
    </b-row>
</b-container>
@endsection
