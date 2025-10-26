<template>
  <section class="bg-gradient-to-r from-blue-50 to-cyan-100 min-h-screen pt-24 pb-16 flex items-center justify-center">
      <div class="max-w-4xl mx-auto px-4 text-center animate-fadeInUp">
          <h1 class="text-6xl md:text-7xl font-extrabold text-blue-900 mb-4 tracking-tight">
              Welcome to Sastra Hospital
          </h1>
          <p class="text-xl md:text-2xl text-cyan-800 mb-8 font-light">
              Your Health, Our Priority - Quality Care You Can Trust
          </p>
      <div class="flex justify-center gap-4 flex-wrap">
        <button 
          class="bg-sky-500 text-white py-4 px-10 rounded-full font-semibold text-lg hover:translate-y-[-2px] hover:shadow-lg transition-all duration-300 hover:bg-sky-600"
          @click="$emit('scroll-to', 'appointment')"
        >
          Book Appointment
        </button>
        
        <!-- Dynamic Sign In / Hello, Name button -->
        <button 
          v-if="!isAuthenticated"
          class="bg-transparent text-sky-500 py-4 px-10 rounded-full font-semibold text-lg border-2 border-sky-500 cursor-pointer transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg hover:bg-sky-500 hover:text-white"
          @click="$emit('open-modal', 'signin')"
        >
          Sign In
        </button>
        
        <button 
          v-else
          class="bg-transparent text-sky-500 py-4 px-10 rounded-full font-semibold text-lg border-2 border-sky-500 cursor-pointer transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg hover:bg-sky-500 hover:text-white"
          @click="handleSignout"
        >
          Hello, {{ userName }}
        </button>

      </div>
    </div>
  </section>
</template>

<script>
import { computed } from 'vue';
import AuthStore from '../store/AuthStore';
import { logout } from '../services/api';

export default {
  name: 'Home',
  emits: ['scroll-to', 'open-modal'],
  setup(props, { emit }) {
    
    const isAuthenticated = computed(() => AuthStore.getters.isAuthenticated());
    const userName = computed(() => AuthStore.getters.getUserName());

    const handleSignout = async () => {
      if (window.confirm("Are you sure you want to sign out?")) {
          try {
              AuthStore.mutations.setLoading(true);
              await logout();
              AuthStore.mutations.clearUser();
              console.log("User signed out successfully.");
          } catch (error) {
              console.error("Signout failed:", error);
          } finally {
              AuthStore.mutations.setLoading(false);
          }
      }
    };

    return {
      isAuthenticated,
      userName,
      handleSignout
    };
  }
};
</script>