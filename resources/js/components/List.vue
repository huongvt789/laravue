<template>
    <div class="my-component">
        <div class="container">
            <h4>All Tasks</h4>
            <div class="form-group">
                <ul class="list-group">
                    <li v-if='list.length === 0'>There are no tasks yet!</li>
                    <li class="list-group-item" v-for="(task, index) in list">
                        {{ task.name }}
                        <button class="btn btn-danger btn-xs pull-right">Delete</button>
                    </li>
                </ul>
            </div>
            <h2 style="color: blue;">@{{ message }}</h2>
            <p class="alert alert-danger" v-bind:class="{hidden: hasError}">Please enter value</p>
            <form action="#" @submit.prevent="createItem()">
                <div class="content">
                    <div class="form-group">
                        <h3 for="name">Name:</h3>
                        <input type="text" class="form-control" id="name" required v-model="newItem.name" placeholder=" Enter some name">
                    </div>
                    <div class="form-group">
                        <h3 for="age">Age:</h3>
                        <input type="number" class="form-control" id="age" v-model="newItem.age" placeholder=" Enter your age">
                    </div>
                    <div class="form-group">
                        <h3 for="profession">Profession:</h3>
                        <input type="text" class="form-control" id="profession" v-model="newItem.profession" placeholder=" Enter your profession">
                    </div>
                    <button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-plus"></span> ADD
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<style scoped>
</style>
<script src="../form_add.js"></script>