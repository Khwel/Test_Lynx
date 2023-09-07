<template>
    <footer>
      <div class="footer-content">
        <p>&copy; {{ currentYear }} EbahMoriCompany. Tous droits réservés.</p>
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    name: 'Footer',
    data() {
      return {
        currentYear: new Date().getFullYear()
      }
    }
  }
  </script>
  
  <style scoped>
  /* Styles pour votre footer, vous pouvez personnaliser ici */
  footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
  }
  
  .footer-content {
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .footer-content p {
    margin: 0;
  }
  
  </style>
  