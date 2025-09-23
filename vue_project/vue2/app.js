/*
Vue.component('button-counter', {
    data: function () {
        return {
        count: 0
        }
    },
    template: 
        `<div>
            <button @click="count++">Add 1</button>
            Counter: {{ count }}
        </div>`,
    });
*/
// Global components

/*
Vue.component('component-a', {
    template: `<div>Component A</div>`,
});

Vue.component('component-b', {
    template: `<div><component-a></component-a>Component B</div>`,
});

Vue.component('component-c', {
    template: `<div>Component C</div>`,
});
*/

// Local components
/*
let componentA = {
    template: `<div>Component A</div>`,
};

let componentB = {
    template: `<div>Component B</div>`,
};

let componentC = {
    template: `<div>Component C</div>`,
}
*/

// component with attributes
/*
Vue.component('hello-user', {
    //props: ['name'],
    props: {
        name: {
            type: String,
            required: false,
            default: 'Béla',
        },
    },
    template: `<div >Hello {{ name }}!</div>`,
});
*/

// component with events
/*
Vue.component('button-counter', {
    props: ['counter'],
    template: `
        <div>
            <button @click="$emit('add-some', 1)">Add 1</button>
            <button @click="$emit('add-some', 5)">Add 5</button>
            Counter: {{ counter }}
        </div>`,
});
*/
// component with mixins
/*
let myMixin = {
    created() {
        this.hello();
    },
    methods: {
        hello() {
            console.log('Hello from mixin!');
        },
    },
};

Vue.component('button-counter', {
    mixins: [myMixin],
    data(){
        return {
            counter: 0,
        }
    },
    template: `
        <div>
            <button @click="counter++">Add 1</button>
            Counter: {{ counter }}
        </div>`,
});
*/
// component with v-model
/*
Vue.component('custom-input', {
    props: ['value'],
    template: `
        <input :value="value" @input="$emit('input', $event.target.value)" />`,
    
});*/

Vue.component('hello-user', {
    //props: ['name'],
    template: `<div >Hello, <slot></slot>!</div>`,
});

// Root instance
let app = new Vue({
    el: '#app',
    /*data: {
        name: 'Aladár',
    },
    */
    /*data: {
        inputText: 'Hello World!',

    },
   */
    /*data: {
        counter: 0,
    },
    methods: {
        addSome: function(vauleToAdd) {
            this.counter +=  vauleToAdd;
        },
    },*/

    /*components: {
        'component-a': componentA,
        'component-b': componentB,
    },
    data: {
        name: 'Pisti',
    },*/
});