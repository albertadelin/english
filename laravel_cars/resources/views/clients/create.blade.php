@extends ('layouts.master')

@section ('content')

    <div class = "container">

        <form id = "form">

            <h1>Create Client</h1>

            <div class="form-group">

                <label>Name</label>

                <input type="text" class="form-control" id = "name" placeholder="Name" name="name">

            </div>

            <div class="form-group">

                <label>Car</label>

                <select id="car_id" name="car_id" class="form-control">
                </select>

            </div>

            <input type = "submit" value = "submit" class = "btn btn-primary" id = "submitBtn">

        </form>

    </div>



        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <script>

                $(document).ready( function () {
                    
                    $.ajax({
                        type: "GET",
                        url: "http://lumen.cars:81/cars",
                        
                        
                        success: function(data){
                            var opts = $.parseJSON(data);
                            //console.log(opts);
                            $.each(opts.data, function(i, d) {
                                //console.log(d.id);
                                $('#car_id').append('<option value="' + d.id + '">' + d.name + ' - ' + d.number + '</option>');
                            });

                            
                        }
                    });

                $(function(){

                $('#submitBtn').on('click', function(e){

                    console.log($("#form").serialize());

                    $.ajaxSetup({

                        header:$('meta[name="_token"]').attr('content')

                    })

                    e.preventDefault(e);

                        $.ajax({

                        type:"POST",

                        url:'http://lumen.cars:81/client',

                        data: $("#form").serialize(),

                        success: function(data){

                            window.location = "http://laravel.cars:81/drivetest";

                        },

                        error: function(data){



                        }

                    })

                });

});

                    });

            
            

        </script>

@endsection