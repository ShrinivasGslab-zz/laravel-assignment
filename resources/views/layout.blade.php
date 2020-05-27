<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Laravel Product CRUD Example</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
      <!--!<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>-->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
      
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
   </head>
   <body>
      <div class="container">
         @yield('content')
      </div>

   </body>
   <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>
</html>