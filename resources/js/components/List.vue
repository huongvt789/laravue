<template id="list">
    <div class="row">
        <div class="pull-right">
            <route-link class="btn btn-xs btn-primary">
                Add new @{{ message }}
            </route-link>
        </div>
        <div class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
            <tr v-for="{post, index} in filterPost">
                <td>{{ index + 1 }}</td>
                <td>{{ post.name }}</td>
            </tr>
        </div>
    </div>
</template>

<script>
    export default {
        name: "list",
        data: function () {
            return {
                post: '',
                message: 'aaaa',
            };
        },
        created: function () {
         let url = 'http://localhost:8081/';
         Axios.get(url).then((responsive) => {
            this.posts = responsive.data;
         })
        },
        computed: {
            filterPost: function () {
                if(this.posts.length) {
                    return this.posts;
                }
            }
        }
    }
</script>

<style scoped>

</style>