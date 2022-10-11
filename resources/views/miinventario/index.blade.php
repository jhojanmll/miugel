@extends('layouts.main')

@section('content')
<h1 class="app-page-title">MI INVENTARIO </h1>
<div class="col-12 text-center">
    <h1>Bienvenido</h1>
</div>
<div class="card-columns">
    <a href="{{route("miinventario.inventario")}}" style="color: black;">
        <div class="card text-center">
            <img src="" class="card-img-top">
            <div class="card-body">
                <h6 class="card-title">INVENTARIO FISICO Y VALORIZADO EN BIENES PATRIMONIALES</h6>
            </div>
        </div>
    </a>

    <a style="color: black;" target="_blank" href="https://parzibyte.me/blog/contrataciones-ayuda/">
        <div class="card text-center">
            <img src="" class="card-img-top">
            <div class="card-body">
                <h6 class="card-title">BIENES EN AFECTACION EN USO O CESION EN USO O ARRENDADOS</h6>
            </div>
        </div>
    </a>
    <a style="color: black;" href="">
        <div class="card text-center">
            <img src="" class="card-img-top">
            <div class="card-body">
                <h6 class="card-title">BIENES FALTANTES</h6>
            </div>
        </div>
    </a>
    <a style="color: black;" href="">
        <div class="card text-center">
            <img src="" class="card-img-top">
            <div class="card-body">
                <h6 class="card-title">BIENES PROPUESTOS PARA LA BAJA Y EN CUSTODIA</h6>
            </div>
        </div>
    </a>
    <a style="color: black;" href="">
        <div class="card text-center">
            <img src="" class="card-img-top">
            <div class="card-body">
                <h6 class="card-title">BIENES INGRESADOS EN EL 2022</h6>
            </div>
        </div>
    </a>
    <a style="color: black;" href="">
        <div class="card text-center">
            <img src="" class="card-img-top">
            <div class="card-body">
                <h6 class="card-title">BIENES PROPUESTOS PARA TRANSFERIR A OTRA INSTITUCION EDUCATIVA</h6>
            </div>
        </div>
    </a>
</div>

@endsection