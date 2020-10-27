@extends('layouts.plantilla')
@section('content')
<h1 class="text-center">Listado de facturas</h1>
<div class="bg-primary col-12 col-md-4 offset-md-4">
    @foreach ($facturas as $factura)
    <div class="bg-secondary col-12 col-md-8 offset-md-2 text-center mt-2">
        <h4>Fecha: {{$factura->fecha}}</h4>
        <h4>Cantidad de items: {{$factura->cantItems}}</h4>
        <h5>Total: {{$factura->total}}</h5>
        <button class="btn btn-success"><a href="/detalleFactura/{{$factura->id}}" class="text-white">Ver detalle</a></button>
        <button class="btn btn-success"><a href="/detalleJson/{{$factura->id}}" class="text-white">Ver detalle JSON</a></button>
    </div>  
    @endforeach
</div>
@endsection