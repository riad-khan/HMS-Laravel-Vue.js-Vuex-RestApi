import {router} from '../../app.js'


const state ={
    user:{}
};
const getters ={};
const mutations ={
    SetUser(state , data ){
        state.user = data
    }
};
const actions ={
    userLogin( {}, user ){
        axios.post('/api/login',{
            email: user.email,
            password : user.password
        })
            .then( response =>{
               //store token

                if(response.data.access_token){
                    localStorage.setItem(
                        'access_token',
                        response.data.access_token
                    )
                    router.push("/home")
                    new Noty({
                        type: 'success',
                        layout: 'topRight',
                        text: 'Logged In SuccessFully ',
                        timeout: 2000,
                    }).show();
                }else{
                    new Noty({
                        type: 'warning',
                        layout: 'topRight',
                        text: 'Invalid Email or Password ',
                        timeout: 2000,
                    }).show()
                }

            })

    },
    UserLoggedIn(){
        let token = localStorage.getItem('access_token')

        if(token){
            router.push("/home")
        }
    },
    logout(){
       localStorage.removeItem('access_token')
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: 'Log Out SuccessFull',
            timeout: 2000,
        }).show();

        router.push("/")
    },

    getUser({commit}){
        axios.get('/api/user')
            .then( response =>{
                commit('SetUser', response.data)
            })
    },

    registerUser({}, form){
     let  password = form.password
      let  confirmPass = form.confirmPassword

        if(password != confirmPass){
            new Noty({
                type: 'error',
                layout: 'topRight',
                text: 'password doesnt matched ',
                timeout: 2000,
            }).show()
        }else if( password.length < 6){
            new Noty({
                type: 'error',
                layout: 'topRight',
                text: 'password should be minimum 6 digits long',
                timeout: 2000,
            }).show()
        }
        else{
            axios.post('/api/register',{
                email : form.email,
                name: form.name,
                password: form.password,
                password_confirmation : form.confirmPassword
            })
                .then( () =>{
                    router.push("/")
                    new Noty({
                        type: 'success',
                        layout: 'topRight',
                        text: 'Signed Up SuccessFully ',
                        timeout: 2000,
                    }).show();
                })
        }

    },
    forgotPassword({}, resets){
        axios.post('/api/password/forgot',{
            email: resets.email
        })
            .then( () =>{
                new Noty({
                    type: 'info',
                    layout: 'topRight',
                    text: 'password Reset email sent to your email address',
                    timeout: 3000,
                }).show();
            })
            .catch((error) => {
                new Noty({
                    type: 'error',
                    layout: 'topRight',
                    text: 'you can request 1 password reset email per minute',
                    timeout: 3000,
                }).show();
            })


    },




};

export default {
    namespaced:true,
    state,
    getters,
    mutations,
    actions,
}
