@extends('layouts.master')

@section('content')

<div class = "container">

<form id = "form" method="POST">


    <h1 align="center">Să înceapă testul!</h1>

    <hr>

    <h5>&diams; Răspunde la următoarele întrebari: </h5>

    <br>

    <div class="form-group">
        <label>1. What is your name?</label>
        <input type = "text" class="form-control" id ="q11" name="q11">

        <br>

        <label>2. How old are you?</label>
        <input type = "text" class="form-control" id ="q12" name="q12">
    </div>

    <hr>

    <h5>&diams; Alege numărul corect: </h5>

    <br>

    <div class="form-group">
        <label>3</label>
        <select id="q21" name="q21" class="form-control">
            <option values="1">Three</option>
            <option values="2">Six</option>
            <option values="3">Eleven</option>
        </select>

        <br>

        <label>10</label>
        <select id="q22" name="q22" class="form-control">
            <option values="1">Seven</option>
            <option values="2">Two</option>
            <option values="3">Ten</option>
        </select>

        <br>

        <label>8</label>
        <select id="q23" name="q23" class="form-control">
            <option values="1">Four</option>
            <option values="2">Eight</option>
            <option values="3">One</option>
        </select>

        <br>

        <label>1</label>
        <select id="q24" name="q24" class="form-control">
            <option values="1">Eleven</option>
            <option values="2">One</option>
            <option values="3">Eight</option>
        </select>

    </div>

    <hr>

    <h5>&diams; Alege varianta corectă: </h5>

    <br>

    <div class="form-group">
        <label> 
            I <select id="q31" name="q31">
                <option values="1">are</option>
                <option values="2">is</option>
                <option values="3">am</option>
            </select> a beautiful girl.
        </label>

        <br><br>

        <label> 
            Susan has a beautiful <select id="q32" name="q32">
                <option values="1">dres</option>
                <option values="2">dress</option>
                <option values="3">dres</option>
            </select> .
        </label>

        <br><br>

        <label> 
            My parents <select id="q33" name="q33">
                <option values="1">watch</option>
                <option values="2">play</option>
                <option values="3">eat</option>
            </select> TV every day.
        </label>

        <br><br>

        <label> 
            Teddy and Mary <select id="q34" name="q34">
                <option values="1">sing</option>
                <option values="2">run</option>
                <option values="3">play</option>
            </select> tennis every week.
        </label>
    </div>

    <hr>

    <input type = "submit" value = "Trimite" class = "btn btn-primary" id = "submitBtn">

    <br>

</form>

</div>
    
    
@endsection