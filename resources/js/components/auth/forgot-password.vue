<template>

    <div>
        <div class="row">
            <div class="col-sm-6 auth-box">
                <div class="proclinic-box-shadow">
                    <h3 class="widget-title">Forgot Password ?</h3>
                    <form class="widget-form">
                        <!-- form-group -->
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="email" placeholder="user email" v-model="resets.email" class="form-control" required="" data-validation="length alphanumeric" data-validation-length="3-12"
                                       data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" data-validation-has-keyup-event="true">
                            </div>
                        </div>
                        <!-- /.form-group -->


                        <!-- Login Button -->
                        <div class="button-btn-block">
                            <button type="button" @click="reset" class="btn btn-primary btn-lg btn-block">Reset Password</button>
                        </div>
                        <!-- /Login Button -->
                        <!-- Links -->
                        <div class="auth-footer-text">
                            <small>Existing users ?,
                                <router-link to="/">Login</router-link> Here</small>
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

        },

        data(){
            return{
                resets:{
                    email:'',
                }
            }
        },
        methods:{
           reset(){
                this.$store.dispatch('User/forgotPassword',this.resets)
           }
        },

    }
</script>

<style scoped>

</style>
