@extends('layout.app')

@section('title', 'Inicio')

@section('content')
    <h1>mi tienda</h1>

    <p>Estos son algunos de nuestros productos:</p>

    <div style="display: flex; gap: 20px; margin-top: 20px;">
        <div style="border: 1px solid #ccc; padding: 15px; width: 200px; text-align: center;">
            <img src="https://via.placeholder.com/150" alt="Producto 1" style="max-width: 100%; height: auto;">
            <h3>Producto 1</h3>
            <p>Precio: $10.00</p>
            <button style="background-color: #28a745; color: white; padding: 10px; margin-top: 10px; border: none;">Comprar</button>
        </div>

        <div style="border: 1px solid #ccc; padding: 15px; width: 200px; text-align: center;">
            <img src="https://via.placeholder.com/150" alt="Producto 2" style="max-width: 100%; height: auto;">
            <h3>Producto 2</h3>
            <p>Precio: $15.00</p>
            <button style="background-color: #28a745; color: white; padding: 10px; margin-top: 10px; border: none;">Comprar</button>
        </div>

        <div style="border: 1px solid #ccc; padding: 15px; width: 200px; text-align: center;">
            <img src="https://via.placeholder.com/150" alt="Producto 3" style="max-width: 100%; height: auto;">
            <h3>Producto 3</h3>
            <p>Precio: $20.00</p>
            <button style="background-color: #28a745; color: white; padding: 10px; margin-top: 10px; border: none;">Comprar</button>
        </div>
    </div>
@endsection
