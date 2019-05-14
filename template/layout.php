<?php
echo "
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta name='author' content='dIkaps'/>
    <title>Apps</title>
    <link rel='stylesheet' href='vendors/mdi/css/materialdesignicons.min.css'>
    <link rel='stylesheet' href='vendors/base/vendor.bundle.base.css'>
    <link rel='stylesheet' href='vendors/font-awesome/css/font-awesome.min.css'>
    <link rel='stylesheet' href='vendors/datepicker/datepicker3.css'>
    <link rel='stylesheet' href='css/style.css'>
    <link rel='shortcut icon' href='images/icon.png' />
  </head>
  <style>
    .form-control{
        border: 1px solid rgba(0,0,0,0.4);
    }
    label{
        font-weight: bold;
    }
  </style>
  <body>
    $wadah

    <script src='vendors/base/vendor.bundle.base.js'></script>
    <script src='vendors/datepicker/bootstrap-datepicker.js'></script>
    <script src='js/off-canvas.js'></script>
    <script src='js/template.js'></script>
    <script src='js/dashboard.js'></script>
    <script src='js/data-table.js'></script>
    <script src='js/dataTables.bootstrap4.js'></script>
    <script>
    $(function(){
      $('#datepicker').datepicker({
        format : 'yyyy-mm-dd',
        autoclose: true
      });
    });

    </script>
  </body>
</html>
";

?>

