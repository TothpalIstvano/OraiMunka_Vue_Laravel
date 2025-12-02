<template>
    <div @click="countClicks">
        <h2>{{ foodName }}
            <img src="../img_quality.svg" v-show="isFavorite" alt="Favorite">
        </h2>
        <p>{{ foodDescription }}</p>
        <button @click="toogleFavorite">Favorite</button>
        <!--
        <p>{{ message }}</p>
        <p id="red">Click Count: {{ counter }}</p>
        -->
    </div>
</template>

<script>
export default {
    props: ['foodName', 'foodDescription', 'isFavorite'],
    emits: ['toogle-favorite'],
    /*props: {
        foodName:{
            type: String,
            required: true
        },
        foodDescription:{
            type: String,
            required: true,
            default: 'No description',
            validator: function(value){
               if(20 < value.length&&value.length < 50){
                    return true;
               }
               return false;
            }
        },
        isFavorite:{
            type: Boolean,
            required: false,
            default: false
        },
    }, */
    data() {
        return {
            foodIsFavorite: this.isFavorite,
        }
    },
    methods: {
        toogleFavorite() {
            /*this.foodIsFavorite = !this.foodIsFavorite;*/
            this.$emit('toogle-favorite', this.foodName);
        },
    }
   
    /*data() {
        return {
            name: this.foodName,
            message: 'This is a delicious pizza!',
            counter: 0
        }
    },
    methods: {
        countClicks() {
            this.counter++;
        }
    }*/
}
</script>

<style>
    /*#red {
        color: red;
        font-weight: bold;
    }
    */
    img{
        height: 1.5em;
        float: right;
    }
</style>