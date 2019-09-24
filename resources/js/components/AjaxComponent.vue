

<template>
    <div class="container">
        <div class="row">
            <button @click="update" class="btn btn-default mb-1" v-if="!is_refresh">
                Update - {{id}}
            </button>
            <span class="badge badge-primary mb-1" v-if="is_refresh">Updating...</span>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>URL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="url in url_data">
                        <th>{{url.title}}</th>
                        <th>{{url.url}}</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data: function(){
            return{
                url_data: [],
                is_refresh: false,
                id: 0,
            }
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function(){
                this.is_refresh = true;
                axios.get('/start/get-json').then((response)=>{
                        console.log(response),
                        this.url_data = response.data,
                        this.is_refresh = false,
                        this.id++
                });
            }
        }
    }
</script>
