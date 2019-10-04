<template>
    <div class="my-component">
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
                <button class="btn btn-primary" id="name" name="name" v-on:click="createItem()">
                    <span class="glyphicon glyphicon-plus"></span> ADD
                </button>
            </div>
        </form>
    </div>
</template>

<style scoped>
</style>
<script src="../form_add.js"></script>