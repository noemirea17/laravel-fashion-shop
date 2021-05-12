@extends('layouts.app')

@section('title', 'Vestiti')
    
@section('content')

@foreach ($vestiti as $vestito)

<h3>Tipo:{{$vestito['tipo']}}</h3>
<p>Colore:{{$vestito['colore']}}</p>
<p>Taglia:{{$vestito['taglia']}}</p>
<p>Materiale:{{$vestito['materiale']}}</p>
<p>Stagione:{{$vestito['stagione']}}</p>
<p>Prezzo:{{$vestito['prezzo']}}€</p>
    
@endforeach
    
@endsection