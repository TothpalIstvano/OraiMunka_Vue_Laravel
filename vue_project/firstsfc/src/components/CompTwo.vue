<template>
    <div>
        <h2>component Two</h2>
        <input type="text" v-model="msg" placeholder="Write something...">
        <p>Your message:</p>
        <p><strong>{{ msg }}</strong></p>
    </div>
</template>

<script>
export default {
    name: 'CompTwo',
    data() {
        return {
            msg: ''
        }
    }
}
</script>

<style scoped>
    div{
        background-color: lightpink;
        width: 300px;
        padding: 20px;
        margin: 10px;
    }
    strong{
        background-color: yellow;
        padding: 5px;
    }
</style>