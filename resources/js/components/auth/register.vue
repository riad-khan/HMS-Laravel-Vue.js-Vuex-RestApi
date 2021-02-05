<template>
    <div>
        <div class="row">
            <div class="col-sm-6 auth-box">
                <div class="proclinic-box-shadow">
                    <!-- Page Title -->
                    <h3 class="widget-title">Sign Up</h3>
                    <!-- /Page Title -->

                    <!-- Form -->
                    <form class="widget-form">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="email" placeholder="Email" name="email" v-model="form.email" class="form-control" required="" data-validation="email" data-validation-has-keyup-event="true">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" placeholder="Patient Name" v-model="form.name" class="form-control" required="" data-validation="length alphanumeric" data-validation-length="3-12"
                                       data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" data-validation-has-keyup-event="true">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" placeholder="Password" v-model="form.password" name="pass_confirmation" class="form-control" data-validation="strength" data-validation-strength="2"
                                       data-validation-has-keyup-event="true">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" placeholder="Confirm Password" v-model="form.confirmPassword" name="pass_confirmation" class="form-control" data-validation="strength"
                                       data-validation-strength="2" data-validation-has-keyup-event="true">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="button-btn-block">
                            <button type="button" @click="sign_up" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                        </div>
                        <!-- /Button -->
                        <!-- Linsk -->
                        <div class="auth-footer-text">
                            <small>Alredy Sign Up,
                                <router-link to="/">Login</router-link> Here</small>
                        </div>
                        <!-- /Links -->
                    </form>
                    <!-- /Form -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       data(){
           return{
               form:{
                   email:'',
                   name:'',
                   password:'',
                   confirmPassword:'',
               }

           }
       },
        methods:{
           sign_up(){
               this.$store.dispatch('User/registerUser',this.form)
           }
        }
    }
</script>

<style scoped>

</style>
