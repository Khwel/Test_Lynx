<template>
    <header>
      <nav>
        <ul>
          <li><router-link to="/">Accueil</router-link></li>
          <li><router-link to="/Creer">Creer un event</router-link></li>
          <li><router-link to="/Modifier">Modifier un event</router-link></li>
          <li><router-link to="/Supprimer">Supprimer un event</router-link></li>
        </ul>
      </nav>
    </header>
  </template>
  
  <script>
  export default {
    name: 'Header'
  }
  </script>
  
  <style scoped>
  /* Styles pour votre en-tête, vous pouvez personnaliser ici */
  header {
    background-color: #333;
    color: #fff;
    padding: 10px;
  }
  
  nav ul {
    list-style: none;
    padding: 0;
    display: flex;
  }
  
  nav li {
    margin-right: 20px;
  }
  
  nav a {
    text-decoration: none;
    color: #fff;
  }
  
  nav a:hover {
    text-decoration: underline;
  }
  </style>
  