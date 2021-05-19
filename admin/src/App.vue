<template>
  <div id="app">
    <img v-bind:src="logo">
    <h1>{{ msg }}</h1>
    <h2>Essential Links test</h2>
    <ul>
    </ul>
  </div>
</template>

<script>
export default {
  props: ['config', 'assetsUrl'],
  name: 'app',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App!',
      logo: this.assetsUrl + '/assets/logo.png'
    }
  }
}
</script>

<style lang="scss">
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

h1, h2 {
  font-weight: normal;
}
h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
