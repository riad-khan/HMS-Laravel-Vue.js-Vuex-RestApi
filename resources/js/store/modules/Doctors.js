import {router} from '../../app.js'
import Api from '../../api/api.js'


const state={
    doctors:[],

}
const mutations={
    getDoctors(state , data){
        state.doctors = data
    },
    DELETE_DOCTORS(state , id ){
        let remove = state.doctors.filter(d => d.id != id)
        state.doctors = remove
    },
}
const getters={
    allDoctors: state => state.doctors,


}
const actions={
   async createDoctor({},form){
    let response = await Api().post('/doctors',{

            name: form.name,
            date: form.date,
            specialization: form.specialization,
            experience: form.experience,
            age: form.age,
            phone: form.phone,
            email: form.email,
            gender : form.gender,
            details: form.details,
            address: form.address,
            photo: form.photo
        })
            .then(() =>{
                router.push('/doctors-list')
                new Noty({
                    type: 'success',
                    layout: 'topRight',
                    text: 'Doctor Added SuccessFully ',
                    timeout: 2000,
                }).show();
            })
            .catch((error) =>{
                console.log(error)
            })

    },

    async viewDoctors({commit}){
        let response = await Api().get('/doctors')
         commit('getDoctors',response.data)
    },

 DeleteDoctors({commit},id) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                Api().delete('/doctors/'+id)
                commit('DELETE_DOCTORS', id)

                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })

    },


}




export default {
    namespaced:true,
    state,
    getters,
    mutations,
    actions,
}
