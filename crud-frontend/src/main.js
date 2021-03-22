import { createApp, h } from 'vue'

import routes from './routes'

const SimpleRouter = {
    data: () => ({
        currentRouter: window.location.pathname
    }),

    computed: {
        CurrentComponent(){
            return routes[this.currentRouter]
        }
    },

    render(){ 
        return h(this.CurrentComponent)
    }
}

createApp(SimpleRouter).mount('#app')