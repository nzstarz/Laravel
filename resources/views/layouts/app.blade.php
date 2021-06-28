<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
        <script src="{{asset('js/app.js')}}"></script>

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({selector:'textarea'});</script>
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
            @include('inc.messages')
                     
         @yield('content')
              
         <!--   <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
            <script>CKEDITOR.replace('article-ckeditor');</script>, Manual Installaation of ckeditor 
            didn't work so I had to use TinyMCE CDN-->


        </div>
            
        
    </body>
    </html>
