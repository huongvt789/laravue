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
        }
    },
    methods: {
        createItem() {
            let intput =  this.newItem;
            if(intput['name'] == '') {
                this.hasError = false;
            } else {
                this.hasError = true;
                axios.post('/vueitems', input)
                    .then(function (response) {
                        this.outout = response.data;
                    }).catch(function (error) {
                    this.output = error;
                });
            }
        }
    },
}