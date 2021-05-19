import Vue from 'vue'
import App from './App.vue'

const configElement = document.getElementById( 'plugin-admin-config' );
const config = JSON.parse( configElement.innerHTML );

new Vue({
  el: '#app',
  data() {
    return {
      config: config
    }
  },
  render: h => h(App, {
    props: {
      'config': config,
      'assetsUrl': config.adminRootUrl,
      'assetsUrl3': config.adminRootUrl
    }
  })
})
