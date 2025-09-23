Vue.component('custom-row', {
    data(){
        return {
            counter: 0,
        }
    },
    template: `
        <tr>
            <td>
                <button @click="counter++">Add 1</button>
            </td>
            <td>
                <button @click="counter += 5">Add 5</button>
            </td>
            <td>
                 Counter: {{ counter }}
            </td>
        </tr>`,
});

let app = new Vue({
    el: '#app',
});