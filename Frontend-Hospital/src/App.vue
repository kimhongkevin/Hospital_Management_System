<template>
  <div id="app">
    <Header 
      @scroll-to="scrollToSection"
      @open-modal="openModal"
    />
    
    <Home 
      @scroll-to="scrollToSection" 
      @open-modal="openModal"
    />
    <About />
    <Services />
    <Appointment @open-modal="openModal" />
    <Contact />
    
    <AuthModal 
      :active-modal="activeModal"
      @close="closeModal"
      @signup="handleSignup"
      @signin="handleSignin"
    />
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import Header from './components/Header.vue';
import Home from './components/Home.vue';
import About from './components/About.vue';
import Services from './components/Services.vue';
import Appointment from './components/Appointment.vue';
import Contact from './components/Contact.vue';
import AuthModal from './components/AuthModal.vue';
import AuthStore from './store/AuthStore';
import { getCurrentUser, getCsrfToken } from './services/api';

export default {
  name: 'App',
  components: {
    Header,
    Home,
    About,
    Services,
    Appointment,
    Contact,
    AuthModal
  },
  setup() {
    const activeModal = ref(null);

    // Function to check if the user is already authenticated
    const checkAuthStatus = async () => {
      AuthStore.mutations.setLoading(true);
      try {
        // Fetch CSRF token once on app load (critical for Sanctum)
        await getCsrfToken(); 

        const response = await getCurrentUser();
        if (response.data) {
          AuthStore.mutations.setUser(response.data);
          console.log("User retrieved:", response.data.name);
        }
      } catch (error) {
        // 401 response means the user is not authenticated, which is normal.
        if (error.response?.status === 401) {
            AuthStore.mutations.clearUser();
        } else {
            console.error("Error checking auth status:", error);
        }
      } finally {
        AuthStore.mutations.setLoading(false);
      }
    };
    
    onMounted(checkAuthStatus);

    const scrollToSection = (section) => {
      const element = document.getElementById(section);
      if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
      }
    };

    const openModal = (type) => {
      activeModal.value = type;
    };

    const closeModal = () => {
      activeModal.value = null;
    };

    const handleSignup = (userData) => {
      // AuthModal will now handle the API call and AuthStore update.
      // We just need to close the modal here.
      closeModal();
      console.log('Signup successful, user data received:', userData.name);
    };

    const handleSignin = (userData) => {
      // AuthModal will now handle the API call and AuthStore update.
      // We just need to close the modal here.
      closeModal();
      console.log('Signin successful, user data received:', userData.name);
    };

    return {
      activeModal,
      scrollToSection,
      openModal,
      closeModal,
      handleSignup,
      handleSignin
    };
  }
};
</script>

<style>
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.animate-fadeInUp {
  animation: fadeInUp 1s ease-out;
}
</style>
