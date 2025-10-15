
<template lang="pug">
    div
        p Hello {{ name }}
        h1 This is a heading
        p This is a paragraph
</template>

<script>
    export default {
        props: {
            name: String,
        }
    }
</script>
<style lang="less" scoped>
    @color: red;
    p{
        color: @color;
    }
</style>