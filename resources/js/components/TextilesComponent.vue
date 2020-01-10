<template>
    <!--<datatable :columns="columns" :data="rows"></datatable>-->
<!--<ul>
    <li v-for="task in tasks" :key="task.id">{{task.id}}</li>
</ul>-->
</template>

<script>
   /* import DatatableFactory from 'vuejs-datatable';

    export default {
        components: { DatatableFactory },
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                columns: [
                    {label: 'Размер', field: 'textiles_size'},
                    {label: 'Цвет', field: 'textiles_color'},
                ],
                rows: [],
                page: 1,
                per_page: 10,
            }
        },
        methods:{
            getTextiles: function() {
                axios.get('/p-textile/40').then(function(response){
                    this.rows = response.data;
                }.bind(this));
            }
        },
        created: function(){
            this.getTextiles()
        }
    }*/
  /* export default {
       data(){
           return{
               tasks:[]
           }
       },
       created() {
           axios.get('/p-textile/40')
           .then(response=>this.tasks=response.data);
       }
   }*/
</script>


