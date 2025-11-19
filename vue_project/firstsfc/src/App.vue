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

export default {
  data() {
    return {
      foods: [
        { name: 'Pizza ', desc: 'A pizza egy alapvető élelmiszer.', favorite: true },
        { name: 'Hamburger', desc: 'A hamburger egy népszerű amerikai gyorsétel.', favorite: false },
        { name: 'Sajt', desc: 'A sajt egy tejből készült élelmiszer. ', favorite: false },
        { name: 'Rizs', desc: 'A rizs egy alapvető élelmiszer. ', favorite: false },
      ],
      newItem: '',
      items: ['Első feladat', 'Második feladat', 'Harmadik feladat']
    }
  },
  methods: {
    removeItem() {
      this.foods.splice(0, 1);
    },
    receiveEmit(foodId) {
      const foundFood = this.foods.find(x => x.name === foodId);
      foundFood.favorite = !foundFood.favorite;
    },
    addItem(){
      this.items.push(this.newItem);
      this.newItem='';
    }
  }
}
export default {
  data() {
    return {
      toggleValue: true
    };
  },
  computed: {
    activeComp() {
      return this.toggleValue ? 'comp-one' : 'comp-two';
    }
  },
}*/
</script>
<template>
  <!--h1>Ételek:</h1-->
  <!--  <h1>{{ msg }}</h1-->
  <!--button @click="removeItem">Eltavolítás</button>
  <div id="wrapper">
    <food-item 
      v-for="x in foods"
      :key="x.name"
      :food-name="x.name"
      :food-description="x.desc"
      :is-favorite="x.favorite"
      @toogle-favorite="receiveEmit"
      /-->
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
    
  </div>-->
  <!--h3>Todo list</h3>
  <ul>
    <todo-item v-for="x in items" :key="x" :item-name="x" style="background-color: lightblue;"/>
  </ul>
  <input v-model="newItem"/>
  <button @click="addItem">Hozzáadás</button>

  <h3>Vue slotok</h3>
  <div id="wrapper">
    <slot-comp v-slot:bottomSlot v-for="x in foods">
      <img :src="x.url">
      <h4>{{ x.name }}</h4>
      <p>{{ x.desc }}</p>
    </slot-comp>  
    <footer>
      <slot-comp v-slot:default>
        <h4>footer</h4>
      </slot-comp>
    </footer>
  </div-->

  <!--h1>App.vue</h1>
  <p>Ez egy komponens.</p>
  <slot-comp>
    <template #bottomSlot>
      <h4>Ez a bottomSlot</h4>
      <p>Ez a bottomSlot tartalma.</p>
    </template>
  </slot-comp-->

  <!--slot-comp v-slot="food">
    <hr>
    <p>{{ food.staticText }}</p>
    <h2>{{ food.foodName  }} <img :src="food.foodUrl"></h2>
    <p class="greenP">{{ food.foodDescription }}</p>
  </slot-comp-->
  <h1>Dinamikus komponens</h1>
  <p>A gombra kattintva válthatunk a dinamikus komponensek között.</p>
  <!--button @click="toggleValue = !toggleValue">Dinamikus komponens</button>
  <KeepAlive max="2"--><!--include="CompOne"-->
  <!--component :is="activeComp"></component>
  </KeepAlive-->
  <comp-one></comp-one>
</template>
<style>
  /*#wrapper {
    display: flex;
    flex-wrap: wrap;
  }
  #wrapper > div {
    border: dashed 1px black;
    /display: inline-block;/
    flex-basis: 120px;
    padding: 10px;
    margin: 10px;
    background-color: green;
  }*/
  /*
  #wrapper > div:hover {
    background-color: lightgreen;
    cursor: pointer;
  }
  #app {
    width: 300px;
  }
  h2, .greenP{
    background-color: lightgreen;
    padding: 10px;
    margin: 0;
  }
  img {
    float: right;
    height: 70px;
    margin-left: 10px;
  }*/
</style>