<script>
    export default {
        data() {
            return {
                counter: 0
            }
        }
    }

</script>
<template lang="pug">
    div
        button(@click="counter++") click me
        p Count: {{ counter }}

</template>
<style lang="less" scoped>
@color: blue;
button {
    font-size: 1.5em;
    margin: 1em;
    padding: 0.25em 1em;
    border: 2px solid #42b983;
    border-radius: 3px;
    background-color: transparent;
    color: #42b983;
    cursor: pointer;
}
p{
    color: @color;
}
</style>