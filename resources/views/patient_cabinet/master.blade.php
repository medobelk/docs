<!DOCTYPE html>
<html lang="ru">
  <head>
    
    <title>Врач-уролог Брезицкий Юрий Иосифович</title>
    
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/favicon/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin-cabinet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset('css/compiled.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.css">

  </head>
  <body>
    
        @include('patient_cabinet.header')
        
        @yield('content')
        
        @include('patient_cabinet.footer')

  	@include('layouts.scripts')
    @include('layouts.form-errors-script')
    @include('layouts.enroll-dates-handler')
    <script>
      $(document).ready(function () {
        $('.control-buttons__phone-change').click(function () {
          $('#phoneChange').addClass('is-active');
        });

        $('.control-buttons__pass-change').click(function () {
          $('#passChange').addClass('is-active');
        });

        $('.control-buttons__email-change').click(function () {
          $('#emailChange').addClass('is-active');
        });

        $('.modal-background').click(function () {
          $('.is-active').removeClass('is-active');
        });

        $('.modal-close').click(function () {
          $('.is-active').removeClass('is-active');
        });

      });
    </script>
  </body>
</html>