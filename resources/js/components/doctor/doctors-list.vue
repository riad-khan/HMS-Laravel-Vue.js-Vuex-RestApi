<template>
    <div class="row">
        <!-- Responsive Table-->
        <div class="col-md-12">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class="widget-title text-secondary" >Doctors List</h3>


                    <input type="text" class="form-control float-right " v-model="searchTerm" style="width: 350px" placeholder="Search Employee Here"><br><br>


                <div class="table-div">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Doctors ID</th>
                                <th scope="col">Doctors Name</th>
                                <th scope="col">Doctors Photo</th>
                                <th scope="col">Specialization</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="doctor in alldoctors" :key="doctor.id">
                                <th scope="row">{{ doctor.id }}</th>
                                <td>{{ doctor.name }}</td>
                                <td> <img :src="doctor.image" width="50px;" height="50px;"></td>
                                <td>{{ doctor.specialization }}</td>
                                <td>{{ doctor.phone }}</td>
                                <td>{{ doctor.email }}</td>
                                <td>{{ doctor.gender }}</td>
                                <td>{{ doctor.address }}</td>
                                <td>
                                    <router-link :to="{name:'Edit_doctors',params:{id:doctor.id}}"><i style="height: 25px;" class="ti-pencil"></i></router-link>
                                    <a @click="deleteDoctors(doctor.id)"><i style="height: 25px;" class="ti-trash" ></i></a>

                                </td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Responsive Table-->
    </div>
</template>

<script>
    export default {
        created() {
            this.$store.dispatch('Doctor/viewDoctors')

        },

       computed:{
          alldoctors(){
              this.doctors =  this.$store.getters["Doctor/allDoctors"]
              return this.doctors.filter(doctor => {
                  return doctor.name.toUpperCase().match(this.searchTerm.toUpperCase())
              })
          }

       } ,
        data(){
            return{
                doctors : [],
                searchTerm: '',
            }
        },
        methods:{
            deleteDoctors(id){
                 this.$store.dispatch('Doctor/DeleteDoctors',id)
            }
        }
    }
</script>

<style scoped>

</style>
