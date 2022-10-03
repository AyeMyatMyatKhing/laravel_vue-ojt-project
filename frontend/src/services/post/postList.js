
export default {
    name: 'post-list',
    data() {
        return {
            posts : [],
            searchData : null,
            filterPost : []
        }
    },
    mounted() {
        this.guestPosts();
    },
    methods: {
        guestPosts() {
            if (this.searchData != null){
                this.$axios.get('/guestPost?searchData=' + this.searchData ).then((response) => {
                    this.posts = response.data.posts;
                })
            }
           else {
                this.$axios.get('/guestPost' ).then((response) => {
                    this.posts = response.data.posts;
                })
           }
        },
        // searchPost() {
        //     this.filterPost = this.posts.filter((post) => {
        //         return (
        //             post.title.toLowerCase().includes(this.searchData.toLowerCase()) ||
        //             post.description.toLowerCase().includes(this.searchData.toLowerCase())
        //         )
        //     })
        // }
    }
}