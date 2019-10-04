export default {
    data() {
        return {
            newItem: {
                name: '',
                age: '',
                profession: '',
            },
            hasError: true,
            message: 'Working with Vue js',
            list: [],
            task: {
                id: '',
                name: '',
                age: ''
            }
        }
    },
    created() {
        this.listMember();
    },
    methods: {
        listMember() {
            const axios = require('axios');
            axios.get('/list').then((res) => {
                this.list = res.data;
            });
        },
        createItem() {
            let intput =  this.newItem;
            let data = {
                    name : intput['name'],
                    age: intput['age'],
                    profession:intput['profession']
            };
            if(intput['name'] == '') {
                this.hasError = false;
            } else {
                const axios = require('axios');
                axios.post('/store', data)
                    .then((res) => {
                        this.listMember();
                    }).catch((err) => console.error(err));
            }
        }
    },
}