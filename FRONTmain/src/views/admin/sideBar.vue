<template>
<div class="min-h-screen bg-custom-color">
<div class="flex">
    <div class="sidebar min-h-screen w-[3.35rem]  overflow-hidden border-r hover:w-56 hover:bg-white hover:shadow-lg"  >
    <div class="flex h-screen flex-col justify-between pt-2 pb-6 bg-white"  >
      <div >
        <div class=" flex">
          
            <a href="#" aria-label="dashboard" class="bg group flex items-center space-x-4 rounded-full px-4 py-3 text-gray-600">
              <div style="width: 37px; height: 37px; margin-top: 10px ;">
                <img src="@/assets/images/lampe.png" alt="">
              </div>
              <div class="image" style="width: 130px; height: 30px;">
                <router-link to="/test"><img src="@/assets/images/LOGO.png" alt=""></router-link>
                
              </div>
            </a>
        </div>
        <ul class="mt-6 space-y-2 tracking-wide">
          <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path class="fill-current text-gray-600 group-hover:text-selected" d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 11 21 L 11 15 L 13 15 L 13 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z M 12 4.7910156 L 18 10.191406 L 18 11 L 18 19 L 15 19 L 15 13 L 9 13 L 9 19 L 6 19 L 6 10.191406 L 12 4.7910156 z"/>
                <!-- <path class="fill-current text-gray-600 group-hover:text-selected" d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                <path class="fill-current text-gray-300 group-hover:text-selected-h" d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" /> -->
              </svg>
              <router-link to="/test">Home</router-link>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" aria-label="dashboard" class="bg group flex items-center space-x-4 rounded-full px-4 py-3 text-gray-600">
                <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                    class="fill-current text-gray-600 group-hover:text-selected"
                  ></path>
                  <path
                    d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                    class="fill-current text-gray-300 group-hover:text-selected-h"
                  ></path>
                  <path
                    d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                    class="fill-current text-gray-600 group-hover:text-selected"
                  ></path>
                </svg>
              <span class="group-hover:text-gray-700">
                <router-link to="/offre">Offres</router-link>
              </span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="bg group flex items-center space-x-4 rounded-full px-4 py-3 text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path class="fill-current text-gray-300 group-hover:text-selected-h" fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                <path class="fill-current text-gray-600 group-hover:text-selected" d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
              </svg>
              <span class="group-hover:text-gray-700">
                <router-link to="/atelier">Ateliers</router-link>
              </span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path class="fill-current text-gray-600 group-hover:text-selected-h" fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                <path class="fill-current text-gray-300 group-hover:text-selected" d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
              </svg>
              <span class="group-hover:text-gray-700">
                <router-link to="/inscription">Inscriptions</router-link>
              </span>
            </a>
          </li>
          
          <li class="min-w-max ">
            <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path class="fill-current text-gray-300 group-hover:text-selected" d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                <path class="fill-current text-gray-600 group-hover:text-selected-h" fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
              </svg>
              <span class="group-hover:text-gray-700 ">
                <router-link to="/packs">Packs inscription</router-link>
              </span>
            </a>
          </li>
          <!-- <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path class="fill-current text-gray-600 group-hover:text-selected" d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                <path class="fill-current text-gray-300 group-hover:text-selected-h" d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
              </svg>
              <span class="group-hover:text-gray-700">Paiement</span>
            </a>
          </li> -->
        </ul>
      </div>
      <div class="w-max -mb-3">
        <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:text-selected" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
          </svg>
          <span class="group-hover:text-gray-700 ">
            <a  @click.prevent="logout">Déconnexion</a>
          </span>
        </a>
      </div>
    </div>
  </div>
    <section class="flex flex-col justify-center max-w-6xl min-h-screen px-4 py-10 mx-auto sm:px-6 bg-custom-color " >
        
        <RouterView/>
    </section>
</div>
</div>
</template>
<script>
import { mapGetters } from 'vuex';

    export default {
        name :'sideBar',
        computed: {
      ...mapGetters(['user']),

      },
      methods:{
      logout(){
        localStorage.removeItem('token');
        this.$store.dispatch('user', null);
        this.$router.push('/');
      }
    }
    }
    
</script>
<style scoped>
.bg-gradient-selected {
  background-color: #a3b18a; /* Utilisez la même couleur personnalisée ici */
}
.bg-custom-color {
  background-color: #f6f5f4;
}

.custom-hover-text:hover {
  color: #a3b18a;
}

/* Correction de la pseudo-classe group-hover */
/* Utilisez .group:hover pour cibler le groupe lorsqu'il est survolé */
.group:hover .group-hover\:text-selected {
  color: #a3b18a;
}

.group:hover .group-hover\:text-selected-h {
  color: #5E713C;
}
</style>
