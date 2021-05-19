<h1>Vue WordPress</h1>
<script id="plugin-admin-config" type="application/json">
<?php echo json_encode($config); ?>
</script>
<div id="app">
  <h1>Hello App!</h1>
  <p>
    <!-- use router-link component for navigation. -->
    <!-- specify the link by passing the `to` prop. -->
    <!-- `<router-link>` will be rendered as an `<a>` tag by default -->
    <router-link to="/">Go to home</router-link>
    <router-link to="/about">Go to about</router-link>
  </p>
  <!-- route outlet -->
  <!-- component matched by the route will render here -->
  <router-view></router-view>
</div>
