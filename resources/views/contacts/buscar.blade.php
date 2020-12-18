@extends('base')
@section('main')
@inject('contactos','App\Http\Controllers\ContactsController')

<nav class="navbar navbar-light mt-3">
    <a class="btn btn-primary" href="{{ route('contacts.index')}}" >
        Volver a Contactos
    </a>
</nav>
<div class="row"> <div class="col-sm-8 offset-sm-2">   
     <h1 class="d-flex justify-content-center py-4">Buscar Contacto por Apellido</h1>  <div>   
          @if ($errors->any())     
         <div class="alert alert-danger">
             <ul>            
             @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>   
              @endforeach 
            </ul></div>
             <br />    
            @endif     
            <div class="card bg-dark">
                <div class="card-body ">                    
                    <form method="post" >         
                        {{ csrf_field() }}        
                            <div class="form-group">             
                                <label for="apellidos">Apellido(s):</label>             
                            <input type="text" class="form-control" name="apellidos" id="apellidos"/>      
                                        </div>
                                          <button type="submit" class="btn btn-primary">Buscar Contacto</button> 
                                                </form>  
                </div>
            
            </div>  


        </div>
    </div>
</div>
<div class="row"><div class="col-sm-12">    
    <h1 class="d-flex justify-content-center py-4">Resultados</h1>      
    <table class="table table-dark">    
        <thead>       
        <tr>          
            <td>ID</td>          
            <td>Nombres</td>       
                <td>Apellidos</td>        
                <td>Correo</td>   
                <td>Teléfono</td> 
                <td>Imagen</td>             
        </tr>    
    </thead>    
    <tbody>     
        @if(session()->get('data'))
  
    @foreach(session()->get('data') as $contact)        
    <tr>            
    <td>{{$contact->id}}</td>            
    <td>{{$contact->nombres}}</td> 
    <td>{{$contact->apellidos}}</td>            
    <td>{{$contact->correo}}</td>
    <td>{{$contact->telefono}}</td> 
    <td><img src="{{$contact->preview_url}}" alt="" width="90px"></td>                    
    <td>                
</td>            
<td>                
               
</td>        </tr>       
 @endforeach  
 @endif   
</tbody>  </table>
</div>
</div>
@endsection