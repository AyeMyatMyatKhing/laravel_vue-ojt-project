<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Login</h5>
            </div>
            <div class="card-body">
                <div class="error-message">
                    <div class="alert alert-danger" role="alert" v-if="error != null">{{ error }}</div>
                </div>
                <form action="" class="login-form">
                    <div class="input">
                        <input type="text" name="email" placeholder="Email" class="form-control" v-model="email">
                    </div>
                    <div class="input">
                        <input type="password" name="password" placeholder="Password" class="form-control" v-model="password">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember_me" name="remember_me">
                        <label class="form-check-label">Remember Me</label>
                    </div>
                    <div class="login-btn">
                        <button class="btn btn-primary" @submit="login" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style src="../../assets/css/style.css"></style>

<script src="../../services/user/login.js"></script>