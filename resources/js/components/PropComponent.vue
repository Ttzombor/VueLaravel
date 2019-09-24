<template>
    <div class="container">
        <div class="row">
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
    export default {
        props:[
            'url_data'
        ],
        mounted() {
            this.update();
        },
        method: {
            update: function(){
                console.log(this.url_data)
            }
        }
    }
</script>
