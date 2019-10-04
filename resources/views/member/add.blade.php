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
        <h2 style="color: blue;">@{{ message }}</h2>
        <p class="alert alert-danger" v-bind:class="{hidden: hasError}">Please enter value</p>
        <form @submit="createItem">
            <div class="content">
                <div class="form-group">
                    <h3 for="name">Name:</h3>
                    <input type="text" class="form-control" id="name" name="name" required v-model="newItem.name" placeholder=" Enter some name">
                </div>
                <div class="form-group">
                    <h3 for="age">Age:</h3>
                    <input type="number" class="form-control" id="age" name="age" required v-model="newItem.age" placeholder=" Enter your age">
                </div>
                <div class="form-group">
                    <h3 for="profession">Profession:</h3>
                    <input type="text" class="form-control" id="profession" name="profession" required v-model="newItem.profession" placeholder=" Enter your profession">
                </div>
                <button class="btn btn-primary" id="name" name="name" @click.prevent="createItem()">
                    <span class="glyphicon glyphicon-plus"></span> ADD
                </button>
            </div>
        </form>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>
</html>
