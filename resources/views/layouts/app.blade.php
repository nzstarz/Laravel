<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
       
      <!--  <link rel ="stylesheet" herf="{{'asset/css/app.css'}}"> -->
        
       <!--  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">, none of above two worked
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">-->
        
        <!--<script type="text/javascript" src="{{asset('js/app.js') }}"></script>-->
         <link href="{{asset('css/app.css') }}" rel="stylesheet">
         

        
        
            <title>{{config('app.name', 'LSAPP')}}</title>

         
       
    </head>
   <body>
       @include('inc.navbar')
         <div class="container">
            @yield('content')
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
    </html>
