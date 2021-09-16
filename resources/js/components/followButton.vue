<template>
    <div >
       <button class="follow-btn" @click="follow" v-text="buttonText"></button>
    </div>
</template>

<script>
import { allSettled } from 'q'
import { log } from 'util';
    export default {
        props:[ 'user_id', 'follows' ],

        mounted() {
            console.log('Component mounted.')
        },


        methods:{
            follow(){

               console.log('this follow button is clicked!');
            }
        },


        data: function(){
            return{
                status: this.follows,
            }
        },


        computed:{
            buttonText(){
                let text = 'follow';
                if(this.status == 1){
                    text = 'unfollow';
                }
                return text;
            }
        },




    }
</script>
