<template>

        <div>
            <div class="row">
                <div class="col-sm-6 auth-box">
                    <div class="proclinic-box-shadow">
                        <h3 class="widget-title">Login</h3>
                        <form class="widget-form">
                            <!-- form-group -->
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="email" placeholder="user email" v-model="user.email" class="form-control" required="" data-validation="length alphanumeric" data-validation-length="3-12"
                                           data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" data-validation-has-keyup-event="true">
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <!-- form-group -->
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="password" placeholder="Password" v-model="user.password" name="pass_confirmation" class="form-control" data-validation="strength" data-validation-strength="2"
                                           data-validation-has-keyup-event="true">
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <!-- Check Box -->
                            <div class="form-check row">
                                <div class="col-sm-12 text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                        <label class="custom-control-label" for="ex-check-2">Remember Me</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /Check Box -->
                            <!-- Login Button -->
                            <div class="button-btn-block">
                                <button type="button" @click="login" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                            <!-- /Login Button -->
                            <!-- Links -->
                            <div class="auth-footer-text">
                                <small>New Patient,
                                    <router-link to="/register">Sign-up</router-link> Here</small>
                            </div>
                            <!-- /Links -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>


    export default {
        created() {
           this.checkUser()
        },

        data(){
           return{
               user:{
                   email:'',
                   password:''
               }
           }
       },
        methods:{
           login(){
               this.$store.dispatch('User/userLogin', this.user)

           },
            checkUser(){
                this.$store.dispatch('User/UserLoggedIn')

            }
        },

    }
</script>

<style scoped>

</style>
