@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">INVENTARIO FISICO Y VALORIZADO DE BIENES PATRIMONIALES</div>

                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    <hr class="my-3">
                    @endif
                    <form action="/pelicula" method="POST" >
                        {{ csrf_field()}}
                        <div class="row">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Codigo SBN</label>
                                    <input type="number" name="nombres" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Fecha de ingreso</label>
                                    <input type="date" name="fechaesperada" id="" class="form-control"> 
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Entidad que entrega</label>
                                    <input type="text" name="dni" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Forma de ingreso</label>
                                    <input type="text" name="celular" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Documento de ingreso</label>
                                    <div class="input-group">
                                        <input name="documento" id="documento" type="text" required class="form-control" placeholder="Documento">
                                        <span class="input-group-addon">-</span>
                                        <input name="numero" id="numero" type="number" required class="form-control" placeholder="Numero">
                                      </div>                                    
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Tipo de bien</label>
                                    <select type="text" name="grado_instructivo" id="" class="form-control">
                                    
                                    <option>Maquina y equipos educativos</option>
                                    <option>Mobilario educativo</option>
                                    <option>Maquinas y equipos de oficina</option>
                                    <option>Mobilaria de oficina</option>
                                    </select>
                                  
                                </div>
                            </div>
                                                    
                          
                        </div>
                    </form>
                 
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BIENES INVENTARIADOS</div>

                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    <hr class="my-3">
                    @endif
                    <form action="/pelicula" method="POST" >
                        {{ csrf_field()}}
                        <div class="row">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Descripcion</label>
                                    <input type="text" name="nombres" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Caracteristica</label>
                                    <input type="text" name="apellidos" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Medidas</label>
                                    <div class="input-group">
                                        <input name="documento" id="documento" type="text" required class="form-control" placeholder="Largo">
                                        <span class="input-group-addon">-</span>
                                        <input name="numero" id="numero" type="text" required class="form-control" placeholder="Anchura">
                                        <span class="input-group-addon">-</span>
                                        <input name="numero" id="numero" type="text" required class="form-control" placeholder="Altura">
                                      </div>                                    
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Marca</label>
                                    <input type="text" name="dni" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Modelo</label>
                                    <input type="text" name="celular" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Serie</label>
                                    <input type="number" name="correo_electronico" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Color</label>
                                    <input type="text" name="direccion" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Unidad</label>
                                    <select type="text" name="personero" id="" class="form-control">
                                    <option>Si</option>
                                    <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Estado Conservado</label>
                                    <select type="text" name="grado_instructivo" id="" class="form-control">
                                    
                                    <option>Bueno</option>
                                    <option>Regular</option>
                                    <option>Malo</option>
                                    </select>
                                  
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form group">
                                    <label for="">Precio total</label>
                                    <input type="number" name="grupo_votacion" id="" class="form-control">
                                </div>
                            </div>
                            
                             
                            <div class="col-12">
                            <div class="col-md-5 offset-md-10">
                                <button type="submit" class="btn btn-success btl-block">
                                    ENVIAR
                                </button>
                            </div>
                        </div>
                            
                           
                        </div>
                    </form>
                 
                </div>
            </div>
        </div>
    </div>
</div>
       

@endsection