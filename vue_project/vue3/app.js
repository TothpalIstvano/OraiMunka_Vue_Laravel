Vue.component('tab-home', {
    template: `<div>Home Component</div>`
})

Vue.component('tab-hello', {
    template: `<div>Hello Component</div>`
})

Vue.component('tab-fruit', {
    template: `<div>Fruit Component</div>`
})

new Vue({
    el: '#app',
    data: {
        currentTab: 'home',
        tabs: ['home', 'hello', 'fruit']
    },
    computed:{
        currentTabComponent(){
            return 'tab-' + this.currentTab.toLowerCase();
        }
    }
})