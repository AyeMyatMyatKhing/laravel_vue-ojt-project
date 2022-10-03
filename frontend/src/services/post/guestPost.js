export default {
    name : 'guest-post',
    data() {
        return {
            posts : [],
            searchData : ''
        }
    },
    mounted() {
        this.guestPosts();
    },
    methods: {
        guestPosts() {
            this.$axios.get('/guestPost').then((response) => {
                this.posts = response.data.posts;
            })
        }
    }
}