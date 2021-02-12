<template>
    <div class="row">
        <!-- Widget Item -->
        <div class="col-md-6">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class="widget-title">Appointments Year by Year</h3>
                <line-chart :data="chartData"></line-chart>
            </div>
        </div>
        <!-- /Widget Item -->
        <!-- Widget Item -->
        <div class="col-md-6">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class="widget-title"> Patients Year by Year</h3>
                <column-chart :data="columnChart"></column-chart>

            </div>
        </div>
        <!-- /Widget Item -->
    </div>
</template>

<script>
    export default {
       data(){
           return{
               chartData:{
                   '2017-05-13': 2,
                   '2017-05-14': 5,
                   '2017-05-16': 1,
                   '2017-05-17': 7,
                   '2017-05-18': 5,
                   '2017-05-19': 9,
                   '2017-05-20': 10,
                   '2017-05-21': 4,
                   '2017-05-22': 8,
               },

               columnChart:{
                   '2017-05-13': 2,
                   '2017-05-14': 5,
                   '2017-05-16': 1,
                   '2017-05-17': 7,
                   '2017-05-18': 5,
                   '2017-05-19': 9,
                   '2017-05-20': 10,
                   '2017-05-21': 4,
                   '2017-05-22': 8,

               }           }
       }
    }
</script>

<style scoped>

</style>
