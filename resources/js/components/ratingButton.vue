<template>
    <div>
            <div class=" form-group">
                        <star-rating 
                            v-model="rating"
                            @rating-selected ="setRating"
                            :increment="0.5"
                            inactive-color="#F2F3FA"
                            :glow="10" 
                            :rounded-corners="true" 
                            :star-points="[23,2, 14,17, 0,19, 10,34, 7,50, 23,43, 38,50, 36,34, 46,19, 31,17]">
                        </star-rating>  
                    </div>
                                            
                    <div class="form-group">
                            <textarea class="form-control" placeholder="Description" v-model="description" required></textarea>
                    </div>
                    <div class="form-group wt-btnarea">
                            <a @click="submitFunction" class="wt-btn">Submit</a>
                    </div>

      
    </div>
</template>

<script>
    import Swal from 'sweetalert2'
    export default {
        mounted() {
            console.log('Component mounted.')
             let url = '/api/rate/'+this.user_id;
             this.url = url;
        },
        props:[ 'user_id','auth_id' ],
        methods:{
            setRating(rating){
                this.rating = rating;
            },
            submitFunction(){
            
                axios.post(this.url,{
                    user_id:this.auth_id,
                    description: this.description,
                    rating:this.rating
                }).then(res => Swal.fire({
                    icon: 'success',
                    title: res.data,
                    showConfirmButton: false,
                    timer: 1500
                }))
                .catch(err => console.log(err));
            }
        },
    
        data: function(){
            return{
                rating: 0,
                description:'',
                url:'',
            }
        },

        
    }
</script>
