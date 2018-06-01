@extends('layouts.app')

@section('content')
<div class="container">
    
    Bienvenue seigneur {{ Auth::user()->name }}
                
</div>
@endsection