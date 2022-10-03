<template>
    <div class="container">
        <div class="title my-3">
            <h5>Post List</h5>
        </div>
        <div class="search-item my-4">
            <div class="form-inline">
                <input type="text" name="search_data" class="form-control" placeholder="Search" value="">
                <button class="btn btn-outline-primary mx-4">Search</button>
            </div>
        </div>
        <div class="post-list my-5">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th scope="col">Post Title</th>
                        <th scope="col">Post Description</th>
                        <th scope="col">Posted User</th>
                        <th scope="col">Posted Date</th>
                    </tr>
                </thead>
                <tbody v-if="posts.data.length > 0">
                    <tr v-for="post in posts.data" :key="post.id">
                        <td>{{ post.title }}</td>
                        <td>{{ post.description }}</td>
                        <td>{{ post.user.name }}</td>
                        <td>{{ moment(post.created_datetime).format('MM-DD-YYYY') }}</td>
                    </tr>
                </tbody>
                <tbody v-else>
                    <tr class="text-center">
                        <td colspan="4">There is no data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<style src="../../assets/css/style.css"></style>

<script src="../../services/post/guestPost.js"></script>