@extends ('layouts.master')

@section ('content')

    <div class = "container">

        <form id = "form">

            <h1>Update Client</h1>

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
                        data: { 'name' : name  },
                        
                        success: function(data){
                            var opts = $.parseJSON(data);
                            
                            $.each(opts, function(i, d) {
                                
                                $('#car_id').append('<option value="' + d.car_id + '">' + d.name + '</option>');
                            });
                        }
                });
                
            }
            



            $('#form').ready( function(e){

                e.preventDefault();

                var url_string = window.location.href;

                var url = new URL(url_string);

                var id = url.searchParams.get("id");

                var formData = $("#form").serialize();


                $.ajax({

                    type: "PUT",

                    url: "http://lumen.cars:81/client/" + id,

                    data: formData,

                    success: function(data){ 

                        window.location = "http://laravel.cars:81/drivetest"

                    }

                });
                

            });

            

        </script>

@endsection