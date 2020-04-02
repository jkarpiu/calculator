<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <Display :display="showing" />
                <Keypad v-on:pressed="show" v-on:equals="equal" v-on:clear="clear"/>
                <History ref="history" />
            </div>
        </div>
    </div>
</template>

<script>
    import Keypad from './Keypad';
    import Display from './Display';
    import History from './History';
    import axios from 'axios';
    export default {
        data () {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                serverAdress: 'http://127.0.0.1:8000/',
                showing: this.showing,
                last: this.last
            }
        },
        components: {
            Keypad,
            Display,
            History: History
        },
        methods: {
            show(num){
                console.log(this.last);
                this.showing = this.showing + num;
                this.last = num;

            },
            equal(){
                var cache = eval(this.showing);
                axios.post( this.serverAdress + '/karpapi/add', {
                    equasion: this.showing,
                    result: cache,
                    csrf: this.csrf})
                    .then (this.$refs.history.getData())
                    .catch(err => console.log(err.response));
                this.showing = cache;
                this.showing = this.showing;
            },
            clear() {
                this.showing = "";
            }
        },
        created() {
            this.clear();
        }
    }
</script>
