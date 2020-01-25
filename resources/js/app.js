require('./bootstrap')

import Vue     from 'vue'
import Vuetify from 'vuetify'
import App     from './components/App'

Vue.config.productionTip = false
Vue.use(Vuetify)

new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    template: '<App/>',
    components: {
        App
    }
})
