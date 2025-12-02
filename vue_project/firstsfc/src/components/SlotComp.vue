<template>
    <slot staticText="Ez egy statikus szöveg." v-for="x in foods" :key="x.name" :foodName="x.name" :foodDescription="x.desc" :foodUrl="x.url"></slot>
    <!--slot v-bind:lclData="data"></slot-->
    <!--div>
        <slot></slot>
    </div>
    <div>
        <slot name="bottomSlot"></slot>
    </div-->
</template>
<script>
export default {
    data() {
        return {
            /*data: 'Ez egy slot példa.'*/
            foods: [
                { name: 'Pizza ', desc: 'A pizza egy alapvető élelmiszer.', url: 'img/img_pizza.svg' },
                { name: 'Rizs', desc: 'A rizs egy alapvető élelmiszer. ', url: 'img/img_rice.svg' },
                { name: 'Alma', desc: 'Az alma egy gyümölcs. ', url: 'img/img_apple.svg' }
            ]
                
        }
    }
}
</script>

<style scoped>
    div {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        margin: 10px;
        border: solid 4px yellowgreen;    
    }
</style>