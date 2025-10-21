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
export default {
  data() {
    return {
      foods: [
        { name: 'Pizza ', desc: 'A pizza egy alapvető élelmiszer.', favorite: true },
        { name: 'Hamburger', desc: 'A hamburger egy népszerű amerikai gyorsétel.', favorite: false },
        { name: 'Sajt', desc: 'A sajt egy tejből készült élelmiszer. ', favorite: false },
        { name: 'Rizs', desc: 'A rizs egy alapvető élelmiszer. ', favorite: false },
      ]
    }
  },
  methods: {
    removeItem() {
      this.foods.splice(0, 1);
    },
    receiveEmit(foodId) {
      const foundFood = this.foods.find(x => x.name === foodId);
      foundFood.favorite = !foundFood.favorite;
    }
  }
}
</script>
<template>
  <div>
    <h1>Ételek:</h1>
    <!--  <h1>{{ msg }}</h1>--->
    <button @click="removeItem">Eltavolítás</button>
    <div id="wrapper">
      <food-item 
        v-for="x in foods"
        :key="x.name"
        :food-name="x.name"
        :food-description="x.desc"
        :is-favorite="x.favorite"
        @toogle-favorite="receiveEmit"
        />
      <!--
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
      -->
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