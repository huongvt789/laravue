export default {
    data() {
        return {
            newItem: {
                name: '',
                age: '',
                profession: '',
            },
            hasError: true,
            seenAdd: false,
            seenEdit: false,
            modal: false,
            message: 'Working with Vuejs',
            list: [],
            task: {
                id: '',
                name: '',
                age: ''
            },
            itemEdit: {
                id: '',
                name: '',
                age: '',
                profession: '',
            },
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
        create() {
            this.seenAdd = true;
            this.seenEdit = false;
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
                        this.seenAdd = false;
                    }).catch((err) => console.error(err));
            }
        },
        edit() {
            this.seenAdd = false;
            this.seenEdit = true;
            const axios = require('axios');
            axios.post('/edit/' + this.id )
                .then((res) => {
                    this.listMember();
                    this.itemEdit = {
                        id: this.id,
                        name: this.name,
                        age: this.age,
                        profession: this.profession
                    }
                }).catch((err) => console.error(err));
        },
        editItem() {
            let intput =  this.itemEdit;
            let data = {
                id: intput['id'],
                name : intput['name'],
                age: intput['age'],
                profession:intput['profession']
            };
            if(intput['name'] == '') {
                this.hasError = false;
            } else {
                const axios = require('axios');
                axios.post('/update', data)
                    .then((res) => {
                        this.seenEdit = false;
                        this.listMember();
                    }).catch((err) => console.error(err));
            }
        },
    },
}