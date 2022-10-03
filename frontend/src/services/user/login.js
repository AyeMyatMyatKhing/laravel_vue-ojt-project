export default {
    name: 'login',
    data() {
        return {
            email: "",
            password: "",
            error: null
        }
    },
    methods: {
        login(e){
            e.preventDefault();
            if (this.password.lenght > 0) {
                this.$axios.get('/sanctum/csrf-cookie').then(response => {
                    this.$axios.post('login' , {
                        email: this.email,
                        password: this.password
                    }).then(response=>{
                        console.log(response.data);
                        if (response.data.success) {
                            this.$router.push({name: 'postList'})
                        }
                        else {
                            response.data.message
                        }
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
                })
            }
        }
    },
    // beforeRouteEnter(to, from, next) {
    //     if (window.Laravel.isLoggedin) {
    //         return next('postList');
    //     }
    //     next();
    // }
}