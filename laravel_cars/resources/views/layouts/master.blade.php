<!doctype html>
<html lang="en">

  @include('layouts.head')
<link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

  <body>
    @include('layouts.nav')








    <!-- Bootstrap core JavaScript

    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>





    <!-- Icons -->

    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

    <script>

      feather.replace()

    </script>



    <!-- Graphs -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    <div class="container-fluid">

  <div class="row">

    @include('layouts.sidebar')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        @yield('content')
        
    </main>

  </div>

</div>

  </body>

</html>