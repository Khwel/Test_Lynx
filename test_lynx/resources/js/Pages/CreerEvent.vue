<script>
import { defineProps } from 'vue';
import Header from './Header.vue';
import Footer from'./Footer.vue';
import {useForm} from '@inertiajs/vue3'
import {router} from '@inertiajs/vue3';
  
defineProps({
    errors:Object
  })

const form =useForm({
        title:null,
        date_debut: null,
        date_fin:null,
        description: null,
        localisation:null
})
function submit(){
  console.log(form);
  router.post('/EventController',form);
}
console.log(form.title);
export default {
  
  components:{
    Header,
    Footer
  }
}

  
</script>

<style scoped>
.centered-form {
display: flex;
flex-direction: column;
align-items: center; /* Centrer horizontalement */
justify-content: center; /* Centrer verticalement */
height: 90vh; /* Occupe toute la hauteur de la vue */
}
/* Styles CSS pour le formulaire */
.form-group {
  margin-bottom: 20px;
}
.button {
background-color: #007bff; /* Couleur de fond du bouton */
color: #fff; /* Couleur du texte */
padding: 10px 20px; /* Espacement intérieur du bouton */
border: none; /* Supprimer la bordure par défaut */
border-radius: 5px; /* Coins arrondis */
cursor: pointer; /* Curseur pointeur au survol */
font-size: 16px; /* Taille de la police */
}

.button:hover {
background-color: #0056b3; /* Couleur de fond au survol */
}
</style>

<template>
    <Header />
    <div class="centered-form" >
      <h2>Créer un nouvel événement</h2>
      <form @submit.prevent="submit">
        <div class="form-group">
          <label for="title">Titre de l'événement : </label>
          <input type="text" v-model="title" id="title"  required>
         
        </div>
        <div class="form-group">
          <label for="date">Date de début : </label>
          <input type="date" v-model="date_debut" id="date-debut"  required>
        </div>
        <div class="form-group">
          <label for="date">Date de fin :   </label>
          <input type="date" id="date_fin" v-model="date_fin" required>
        </div>
        <div class="form-group">
          <label for="description">Description :    </label>
          <textarea id="description" v-model="description" required></textarea>
        </div>
        <div class="form-group">
          <label for="localisation">Localisation :  </label>
          <textarea id="localisation" v-model="localisation" required></textarea>
        </div>
        <button type="submit" class="button">Créer l'événement </button>
      </form>
      <Footer></Footer>
    </div>
  </template>
  

  