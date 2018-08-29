@extends('layouts.master')

@section('content')



    <table id="table_id" class="display">

        <thead>

            <tr>

                <th>Id</th>

                <th>Name</th>

                <th>Car Number</th>

                <th>Update</th>

                <th>Delete</th>

            </tr>

        </thead>

        <tbody>

        </tbody>

    </table>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>

        $(document).ready( function () {

            var table = $('#table_id').DataTable({

                    'ajax': 'http://lumen.cars:81/clients',

                    "columns": [

                        { "data": "id" },
                        { "data": "name" },
                        { "data": "cars.number" },
                        { "data" : "id",
                            "render": function ( data, type, row, meta ) {
                                return '<a class="btn btn-info update-btn" data-id="'+ data +'">Update</a>';
                            },
                        },
                        { "data" : "id",
                            "render": function ( data, type, row, meta ) {
                                return '<a class="btn btn-danger delete-btn" data-id="'+ data +'">Delete</a>';
                        },
                        }
                    ],

                    "lengthMenu": [[10, 25, -1], [10, 25, "All"]]

            });

            $('body #table_id').on('click', '.delete-btn', function(){

                var elementId = $(this).attr('data-id');

                $.ajax({

                    url: "http://lumen.cars:81/client/" + elementId,

                    contentType:'application/json',

                    type: 'DELETE',

                    success: function(){

                        table.ajax.reload();

                    }

                });

                });

            });

        $('body #table_id').on('click', '.update-btn', function(){

            var elementId = $(this).attr('data-id');

            var url = "http://laravel.cars:81/client/update?id=" + elementId; 

            window.location.href = url;         

            });


        

    </script>

    


@endsection