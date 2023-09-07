<template>
    <div>
      <Header />
      <h1>Ma Page Inertia</h1>
      <p>Ceci est mon composant Vue.js rendu via Inertia.</p>
      <Footer />
    </div>
  </template>
  
  <script>
  import Header from './Header.vue';
  import Footer from'./Footer.vue';
  export default {
    components:{
      Header,
      Footer
    }
    
    // Vos méthodes et données ici
  }
  </script>
  