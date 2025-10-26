<template>
  <header class="bg-gradient-to-br from-sky-500 to-sky-400 shadow-lg fixed w-full top-0 z-50 transition-all duration-300">
    <nav class="flex justify-between items-center py-4 px-5 max-w-7xl mx-auto">
      <div class="logo text-2xl font-bold text-white tracking-wide">Sastra Hospital</div>
      <ul class="nav-links flex gap-8 list-none" :class="{ 'active': menuOpen }">
        <li><a href="#home" @click="handleNavClick('home')" class="text-white no-underline font-medium transition-all duration-300 py-2 px-4 rounded hover:bg-white hover:bg-opacity-20 hover:-translate-y-0.5">Home</a></li>
        <li><a href="#about" @click="handleNavClick('about')" class="text-white no-underline font-medium transition-all duration-300 py-2 px-4 rounded hover:bg-white hover:bg-opacity-20 hover:-translate-y-0.5">About</a></li>
        <li><a href="#services" @click="handleNavClick('services')" class="text-white no-underline font-medium transition-all duration-300 py-2 px-4 rounded hover:bg-white hover:bg-opacity-20 hover:-translate-y-0.5">Services</a></li>
        <li><a href="#appointment" @click="handleNavClick('appointment')" class="text-white no-underline font-medium transition-all duration-300 py-2 px-4 rounded hover:bg-white hover:bg-opacity-20 hover:-translate-y-0.5">Appointment</a></li>
        <li><a href="#contact" @click="handleNavClick('contact')" class="text-white no-underline font-medium transition-all duration-300 py-2 px-4 rounded hover:bg-white hover:bg-opacity-20 hover:-translate-y-0.5">Contact</a></li>
      </ul>
      <button class="mobile-menu-btn bg-transparent border-none text-white text-2xl cursor-pointer hidden" @click="menuOpen = !menuOpen">☰</button>
    </nav>
  </header>
</template>

<script>
import { ref } from 'vue';

export default {
  name: 'Header',
  emits: ['scroll-to', 'open-modal'],
  setup(props, { emit }) {
    const menuOpen = ref(false);

    const handleNavClick = (section) => {
      menuOpen.value = false;
      emit('scroll-to', section);
    };

    return {
      menuOpen,
      handleNavClick
    };
  }
};
</script>

<style scoped>
@media (max-width: 768px) {
  .nav-links {
    position: fixed;
    left: -100%;
    top: 70px;
    flex-direction: column;
    background: #0ea5e9;
    width: 100%;
    padding: 2rem;
    transition: 0.3s;
    box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
  }

  .nav-links.active {
    left: 0;
  }

  .mobile-menu-btn {
    display: block !important;
  }

}
</style>