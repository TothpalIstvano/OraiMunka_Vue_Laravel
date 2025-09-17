new Vue({
    el: '#app',
    data: {
        hello: 'Hello World',
        /*revreseHello: '',*/
        tooltip: 'This is a tooltip',
        myStyle: 'redText', /*redText, blueText, greenText*/
        color: 'redText',
        fontWeight: 'boldText',
        styleObject: {
            color: 'blue',
            fontSize: '20px'
        },
        myHeader: '<h2>Dynamic Header</h2>',
        showHelloWorld: true,
        a: 5,
        fruits: ['Apple', 'Banana', 'Orange'],
        person: { 
            firstName: 'John',
            lastName: 'Doe', 
            age: 30
        },
        counter: 0,
        mouseEventStatus: 'start',
        inputText: 'Hello World!',
    },
    /*created: function() {
        console.log('Vue instance created');
    },*/
    methods: {
        /*revreseHello: function() {
            return  this.hello.split('').reverse().join('');
        },*/
        capitalize: function() {
            return this.hello.toUpperCase();
        },
        add: function(a, b) {
            return a + b;
        },
        addOne(event) {
            this.counter += 1;
            //console.log(event);
            /*if(event) {
                event.preventDefault();
            }*/
        },
        addSomething(something) {
            this.counter += something;
        },
        performMouseOver() {
            this.mouseEventStatus = 'You are hovering the mouse over the box';
        },
        performMouseOut() {
            this.mouseEventStatus = 'You are outside the box';
        },
    },
     /*
    watch: {
        hello(newVal) {
            this.revreseHello = newVal.split('').reverse().join('');ű
            console.log('hello changed to:', newVal);
        }
    },
    created() {
        this.revreseHello = this.hello.split('').reverse().join('');
    },*/
   
   computed:{
        revreseHello() {
            return this.hello.split('').reverse().join('');
        }
    }
})

