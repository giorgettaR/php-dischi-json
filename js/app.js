const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue',
            discs: [],
        }
    },
    methods: {
        fetchData() {
            axios.get('./server.php').then((res) => {
                console.log(res.data)
                this.discs = res.data.results
            })
        },
    },
    created() {
        this.fetchData()
    },
}).mount('#app')