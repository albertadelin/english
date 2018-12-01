@extends('layouts.master')

@section('content')

<div class = "container">

<form id = "form" method="POST">


    <h1 align="center">Să înceapă testul!</h1>

    <hr>

    <div class="form-group">

        <label>Q1</label>
        <input type="text" class="form-control" id ="q1" name="q1">

    </div>

     <div class="form-group">

        <label>Q2</label>
        <input type="text" class="form-control" id ="q2" name="q2">

    </div>

    <hr>

    <input type = "submit" value = "Trimite" class = "btn btn-primary" id = "submitBtn">

</form>

</div>
    
    
@endsection