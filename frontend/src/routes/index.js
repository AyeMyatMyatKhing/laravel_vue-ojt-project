import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import postList from '../pages/post/PostList'
import login from '../pages/login'

const routes = [
    {
        path: '/',
        component : postList,
        name: 'postList'
    },
    {
        path: '/login',
        component: login,
        name: 'login'
    }
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router

