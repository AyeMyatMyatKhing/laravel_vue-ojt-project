<template>
   <main>
    <nav class="navbar navbar-expand-lg navbar-light bg-info shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"> <h1 class="nav-title">SCM BulletinBoard</h1> </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav first-item mr-auto">
             <router-link to="/user" class="nav-link">Users</router-link>
             <router-link to="" class="nav-link">User</router-link>
             <router-link to="/post" class="nav-link">Posts</router-link>
          </div>
          <div class="navbar-nav second-item ml-auto">
            <router-link to="/login" class="nav-link">Login</router-link>
          </div>
        </div>
      </div>
    </nav>
    <router-view></router-view>
  </main>
</template>

<style src="../assets/css/style.css"></style>


