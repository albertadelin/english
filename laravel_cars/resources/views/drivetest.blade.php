@extends('layouts.master')

@section('content')



    <table id="table_id" class="display">

        <thead>

            <tr>

                <th>Id</th>

                <th>Name</th>

                <th>Car Number</th>

            </tr>

        </thead>

        <tbody>

        </tbody>

    </table>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>

        $(document).ready( function () {

            $('#table_id').DataTable({

                    'ajax': 'http://lumen.cars:81/clients',

                    "columns": [

                        { "data": "id" },

                        { "data": "name" },

                        { "data": "cars.number" }

                    ],

                    "lengthMenu": [[10, 25, 2, -1], [10, 25, 'Multe', "Toate"]]

            });

        });

    </script>

    


@endsection