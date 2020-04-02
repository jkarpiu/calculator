<template>
    <div id="all">
        <h3>Historia: </h3>
        <div id="main">
                <div v-for="record in everything" v-bind:key="everything[record]" class="element" @click="$emit()">
                    <span class="left">{{record.equasion}} = {{record.result}}</span>
                    <span class="right"> {{record.created_at}}
                </span> <br> </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return{
            serverAdress: 'http://127.0.0.1:8000/',
            everything: this.everything
        }
    },
    methods: {
        getData() {
        axios.get( this.serverAdress + '/karpapi/history')
            .then(res => this.everything = res.data)
            .catch(err => console.log(err.response));
        }

    },
    created(){
        this.getData();
    }
}
</script>

<style scoped>
    #all {
        margin-top: 20px;
    }
    #main {
        background-color: #bfbfbf;
        width: 600px;
        color: #3d3d3d;
        border: 5px white solid;
        border-radius: 20px;
        padding: 20px;
        height: 400px;
        font-weight: bold;
        overflow: scroll;
    }
    .left {
        display: block;
        float: left;
        text-align: left;
    }
    .right {
        display: block;
        float: right;
        text-align: right;
    }
    .element {
        margin-top: 4px;
        display:block;
        border-bottom: 5px dotted #3d3d3d ;
    }
</style>
