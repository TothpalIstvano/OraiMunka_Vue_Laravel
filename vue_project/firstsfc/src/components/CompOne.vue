<template>
    <div>
        <h2>Komponens</h2>
        <p>A szöveg a komponensen belül van.</p>
        <Teleport to="body">
            <div id="redDiv">Hello</div>
        </Teleport>
       <!--img :src="imgSrc" >
        <h2>Elso komponens</h2>
        <p>Choose food.</p>
        <label>
            <input type="radio" name="rgbFood" v-model="imgSrc" :value="'img/img_apple.svg'">Apple
        </label>
        <label>
            <input type="radio" name="rgbFood" v-model="imgSrc" :value="'img/img_cake.svg'">Cake
        </label-->
    </div>
</template>

<script>/*
export default {
    name: 'CompOne',
    data() {
        return {
            imgSrc: 'img/img_question.svg'
        }
    }
}*/
</script>

<style scoped>
    div{
        background-color: rgb(255, 0, 0);
        width: 300px;
        padding: 20px;
        margin: 10px;
    }
    /*img{
        float: right;
        height: 100px;
        margin-top: 20px;
    }
    label:hover{
        cursor: pointer;
    }*/
</style>