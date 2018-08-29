@extends('layouts.master')

@section('content')


    <div class = "container">

<h1>Inscriere Test Drive</h1>

<form id = "form">

    <div class="form-group">

        <label>Name</label>

        <select type="text" class="form-control" id = "name" placeholder="Name" name="name">

    </div>

    <div class="form-group">

        <label>Masina</label>

        <input type="text" class="form-control" id = "car_id" placeholder="Location" name="car_id">

    </div>

    <input type = "submit" value = "Submit" class = "btn btn-primary" id = "submitBtn">

</form>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>

$(function(){

    $('#submitBtn').on('click', function(e){

        console.log($("#form").serialize());

        $.ajaxSetup({

            header:$('meta[name="_token"]').attr('content')

        })

        e.preventDefault(e);



            $.ajax({



            type:"POST",

            url:'http://tema4api/teams/create',

            data: $("#form").serialize(),

            success: function(data){

                window.location = "http://tema4laravel/teams/"

            },

            error: function(data){



            }

        })

    });

});

</script>


@endsection