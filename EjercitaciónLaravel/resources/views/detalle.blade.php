@extends('layouts.plantilla')
@section('content')
   <h1 class="text-center">Detalle de factura seleccionada</h1> 
   <div class="bg-primary col-12 col-md-4 offset-md-4">
   <h4>Fecha: {{$factura->fecha}}</h4>
    @foreach ($productos as  $key  => $producto)
    <div class="bg-secondary col-12 col-md-8 offset-md-2 text-center mt-2">
        <h5>Tipo de producto: {{$producto->descripcion}}</h5>
        <h5>Cantidad: {{$producto->cantidad}}</h5>
        <h5>Precio unitario: {{$producto->precioUnitario}}</h5>
        <h5>Subtotal: {{$producto->subtotal}}</h5>
    </div>  
    @endforeach
    <h1>Total: {{$factura->total}}</h1>
</div>
@endsection