require('./bootstrap')

const Vue = require('vue')
const Vuetify = require('vuetify')
import App from './components/App'

Vue.use(Vuetify)

new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    template: '<App/>',
    components: {
        App
    }
})
