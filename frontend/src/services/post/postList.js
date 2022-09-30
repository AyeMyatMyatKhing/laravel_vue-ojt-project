export default {
    name: 'post-list',
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
            this.$axios.get('/posts').then((response)=> {
                this.posts = response.data;
            })
        }
    }
}