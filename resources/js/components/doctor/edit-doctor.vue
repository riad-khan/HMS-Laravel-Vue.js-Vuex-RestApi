<template>
    <div>




        <!-- Page Title -->
        <div class="row no-margin-padding">
            <div class="col-md-6">
                <h3 class="block-title">Edit Doctor</h3>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <span class="ti-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Doctors</li>
                    <li class="breadcrumb-item active">Edit Doctor</li>
                </ol>
            </div>
        </div>
        <!-- /Page Title -->


        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Edit Doctor</h3>
                    <form @submit.prevent="addDoctor">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Doctor-name">Doctor Name</label>
                                <input v-model="form.name" type="text" class="form-control" placeholder="Doctor name" id="Doctor-name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob">Date Of Birth</label>
                                <input v-model="form.date" type="date" placeholder="Date of Birth" class="form-control" id="dob">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="specialization">Specialization</label>
                                <input v-model="form.specialization" type="text" placeholder="Specialization" class="form-control" id="specialization">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="experience">Experience</label>
                                <input v-model="form.experience" type="text" placeholder="Experience" class="form-control" id="experience">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="age">Age</label>
                                <input v-model="form.age" type="text" placeholder="Age" class="form-control" id="age">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input v-model="form.phone" type="text" placeholder="Phone" class="form-control" id="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input v-model="form.email" type="email" placeholder="email" class="form-control" id="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select v-model="form.gender" class="form-control" id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="about-doctor">Doctor Details</label>
                                <textarea v-model="form.details" placeholder="Doctor Details" class="form-control" id="about-doctor" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <textarea v-model="form.address" placeholder="Address" class="form-control" id="address" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-9">
                                <label for="file">File</label>
                                <input type="file" @change="onFileSelected" style="height:45px;" class="form-control" id="file">
                            </div>

                            <div class="form-group col-md-3 mt-4">
                                <img :src="form.photo" width="50px;" height="50px;">
                            </div>

                            <div class="form-check col-md-12 mb-2">
                                <div class="text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                        <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
</template>

<script>

    export default {
        created() {

        },
        data() {
            return {
                form: {
                    name: '',
                    date: '',
                    specialization: '',
                    experience: '',
                    age: '',
                    phone: '',
                    email: '',
                    gender: '',
                    details: '',
                    address: '',
                    photo: '',
                    newphoto: '',
                }
            }
        },
        methods: {
            onFileSelected(event) {
                let file = event.target.files[0];
                if (file.size > 1048770) {
                    new Noty({
                        type: 'error',
                        layout: 'topRight',
                        text: 'uploaded File should be 2 mb or less',
                        timeout: 2000,
                    }).show();
                } else {
                    let reader = new FileReader();
                    reader.onload = event => {
                        this.form.newphoto = event.target.result
                        console.log(event.target.result)
                    };
                    reader.readAsDataURL(file);
                }


            },


        },
    }
</script>

<style scoped>

</style>
