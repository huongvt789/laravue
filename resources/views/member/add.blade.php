<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello VueJS</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/add.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div id="app_vue">
        <my-component></my-component>
        <modal></modal>
    </div>
</div>
</body>
<script type="text/javascript" src="/js/vue.js"></script>
</html>
