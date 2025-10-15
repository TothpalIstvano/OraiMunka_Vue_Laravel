<script>
/*
import FoodItem from './components/FoodItem.vue'
  export default {
  components: { FoodItem },
    data() {
      return {
        msg: 'Ételek: '
      }
    }
  }
*/
</script>
<template>
  <div>
    <h1>Ételek:</h1>
    <!--  <h1>{{ msg }}</h1>--->
    <div id="wrapper">
      <food-item 
        food-name="Pizza"
        food-description="A pizza egy olasz étel, amely egy kerek."
      :is-favorite="true"
        />
      <food-item 
        food-name="Hamburger"
        food-description="A hamburger egy népszerű amerikai gyorsétel."
        :is-favorite="false"
        />
      <food-item 
        food-name="Sajt"
        food-description="A sajt egy tejből készült élelmiszer. "
        :is-favorite="false"
        />
      <food-item
        food-name="Rizs"
        food-description="A rizs egy alapvető élelmiszer. "
        :is-favorite="false"
        />
    </div>
  </div>
</template>

<style>
  #wrapper {
    display: flex;
    flex-wrap: wrap;
  }
  #wrapper > div {
    border: dashed 1px black;
    /*display: inline-block;*/
    flex-basis: 120px;
    padding: 10px;
    margin: 10px;
    background-color: green;
  }
  #wrapper > div:hover {
    background-color: lightgreen;
    cursor: pointer;
  }
</style>