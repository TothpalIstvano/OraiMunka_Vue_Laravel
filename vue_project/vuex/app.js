const store = new Vuex.Store({
    state: {
        counter: 0
    },
    mutations: {
        increment(state) {
            state.counter++
        },
    },
});

new Vue({
    el: '#app',
    store,
    methods: {
        addOne() {
            store.commit('increment');
        }
    },
    computed: {
        counter() {
            return store.state.counter;
        }
    }
});