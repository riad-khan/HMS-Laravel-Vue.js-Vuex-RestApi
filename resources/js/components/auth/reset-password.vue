<template>

    <div>
        <div class="row">
            <div class="col-sm-6 auth-box">
                <div class="proclinic-box-shadow">
                    <h3 class="widget-title">Reset Password</h3>
                    <form class="widget-form">

                        <!-- form-group -->

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="email" placeholder="Email" v-model="email" name="pass_confirmation" class="form-control" data-validation="strength" data-validation-strength="2"
                                       data-validation-has-keyup-event="true">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" placeholder="Password" v-model="password" name="pass_confirmation" class="form-control" data-validation="strength" data-validation-strength="2"
                                       data-validation-has-keyup-event="true">
                            </div>
                        </div>
                        <!-- /.form-group -->

                        <!-- form-group -->
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" placeholder="Confirm Password" v-model="confirmPassword" name="pass_confirmation" class="form-control" data-validation="strength" data-validation-strength="2"
                                       data-validation-has-keyup-event="true">
                            </div>
                        </div>
                        <!-- /.form-group -->

                        <!-- form-group -->

                        <!-- /.form-group -->


                        <!-- Login Button -->
                        <div class="button-btn-block">
                            <button type="button" @click="changePassword" class="btn btn-primary btn-lg btn-block">Change Password</button>
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

        data(){
            return{

                    password:null,
                    email:null,
                    confirmPassword:null,
                    token:null,

            }
        },
        methods:{
            changePassword(){
                    axios.post("/api/password/reset", {
                        token: this.$route.params.token,
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.confirmPassword
                    })
                        .then(() => {
                            new Noty({
                                type: 'success',
                                layout: 'topRight',
                                text: 'password updated Successfully',
                                timeout: 3000,
                            }).show();
                            this.$router.push({name: 'login'})
                        }, error => {
                            console.error(error);
                        });
                }
        },

    }
</script>

<style scoped>

</style>
