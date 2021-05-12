@extends('layouts.app')

@section('title', 'Contatti')
    
@section('content')

<h1>i contatti</h1>

@foreach ($contatti as $contatto)
<ul>
    <li>{{$contatto}}</li>
</ul>
    
@endforeach
    
@endsection