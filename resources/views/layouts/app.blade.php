<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="{{asset('js/app.js') }}"></script>

         <link rel ="stylesheet" herf="{{'asset/css/app.css'}}">  
        
        
        <title>{{config('app.name', 'LSAPP')}}</title>

         
       
    </head>
   <body>
        <div class="container">
            @yield('content')
        </div>
    
    </body>
    </html>
