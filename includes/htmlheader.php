<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
        <link href="css/summernote.css" rel="stylesheet">
<script src="js/summernote.min.js"></script>
        
        <script>
        $(document).ready(function() {
            $('#ticket-table').DataTable();
            $('#summernote').summernote({height: 150} );
        } );
        $('#myTabs a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        })
        </script>
    </head>