<template>
  <section id="services" class="bg-sky-50">
    <div class="container mx-auto max-w-6xl px-5 py-15">
      <h2 class="text-4xl font-bold text-sky-500 text-center mb-4">Our Services</h2>
      <p class="text-gray-600 text-center mb-8 text-lg">Comprehensive healthcare services tailored to your needs</p>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
        <div 
          class="service-card bg-white p-8 rounded-2xl shadow-lg transition-all duration-300 text-center hover:-translate-y-2 hover:shadow-xl hover:shadow-sky-200"
          v-for="service in services" 
          :key="service.id"
        >
          <div class="text-5xl text-sky-500 mb-4">{{ service.icon }}</div>
          <h3 class="text-xl font-bold text-sky-700 mb-4">{{ service.title }}</h3>
          <p class="text-gray-600">{{ service.description }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { ref } from 'vue';

export default {
  name: 'Services',
  setup() {
    const services = ref([
      { 
        id: 1, 
        icon: '❤️', 
        title: 'Cardiology', 
        description: 'Expert heart care with advanced diagnostic and treatment options' 
      },
      { 
        id: 2, 
        icon: '🧠', 
        title: 'Neurology', 
        description: 'Specialized care for brain and nervous system disorders' 
      },
      { 
        id: 3, 
        icon: '👶', 
        title: 'Pediatrics', 
        description: 'Comprehensive healthcare for infants, children, and adolescents' 
      },
      { 
        id: 4, 
        icon: '🦴', 
        title: 'Orthopedics', 
        description: 'Treatment for bones, joints, ligaments, and muscles' 
      },
      { 
        id: 5, 
        icon: '🔬', 
        title: 'Laboratory', 
        description: 'State-of-the-art diagnostic testing and analysis' 
      },
      { 
        id: 6, 
        icon: '🚑', 
        title: 'Emergency', 
        description: '24/7 emergency services for urgent medical needs' 
      }
    ]);

    return {
      services
    };
  }
};
</script>

<style scoped>
/* No custom CSS needed - all styles converted to Tailwind classes */
</style>