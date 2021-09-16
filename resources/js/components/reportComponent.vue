<template>
    <div>
      <div class="form-group">
                                                    <span class="wt-select">
                                                        <select v-model="selected">
                                                            <option value="1">Select Reason</option>
                                                            <option value="2">Stealing</option>
                                                            <option value="3">lieng</option>
                                                            <option value="4">fake account</option>
                                                            <option value="5">More</option>
                                                        </select>
                                                    </span>
        </div>
        <div class="form-group">
               <textarea class="form-control" v-model="description" placeholder="Description"></textarea>
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
             let url = '/api/report/'+this.user_id;
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
                    reason:this.selected,
                }).then(res => Swal.fire({
                    icon: 'success',
                    title: res.data,
                    showConfirmButton: false,
                    timer: 1500
                }))
                .catch(err => console.log(err));
                console.log(this.selected);
                console.log(this.description);
            }
        },
    
        data: function(){
            return{
                selected:0,
                description:'',
                url:'',
            }
        },

        
    }
    
</script>
