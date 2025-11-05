<template>
    <div class="pinkBall"></div>
    <li v-bind="$attrs">{{ itemName }}</li>
    <p>piros</p>
    <div class="pinkBall"></div>
</template>

<script>
export default {
    props: ['itemName']
}
</script>

<style scoped>
    p{
        color:red;
    }
</style>