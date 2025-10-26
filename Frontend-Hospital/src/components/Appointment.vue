<template>
  <section id="appointment" class="bg-white">
    <div class="container mx-auto max-w-6xl px-5 py-15">
      <h2 class="text-4xl font-bold text-sky-500 text-center mb-4">Make an Appointment</h2>
      <p class="text-gray-600 text-center mb-8">Fill out the form below and we'll get back to you shortly</p>
      <form class="max-w-2xl mx-auto bg-sky-50 p-12 rounded-2xl shadow-lg" @submit.prevent="submitAppointment">
        
        <div v-if="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline"> {{ successMessage }}</span>
        </div>
        <div v-if="errorMessage" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline"> {{ errorMessage }}</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
          <div class="form-group">
            <label class="block text-sky-800 font-semibold mb-2">First Name</label>
            <input 
              type="text" 
              v-model="form.firstName" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
          </div>
          <div class="form-group">
            <label class="block text-sky-800 font-semibold mb-2">Last Name</label>
            <input 
              type="text" 
              v-model="form.lastName" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
          </div>
          <div class="form-group">
            <label class="block text-sky-800 font-semibold mb-2">Email</label>
            <input 
              type="email" 
              v-model="form.email" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
          </div>
          <div class="form-group">
            <label class="block text-sky-800 font-semibold mb-2">Phone</label>
            <input 
              type="tel" 
              v-model="form.phone" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
          </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
          <div class="form-group">
            <label class="block text-sky-800 font-semibold mb-2">Department</label>
            <select 
              v-model="form.department" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
              <option value="" disabled>Select Department</option>
              <option value="Cardiology">Cardiology</option>
              <option value="Neurology">Neurology</option>
              <option value="Pediatrics">Pediatrics</option>
              <option value="General Practice">General Practice</option>
            </select>
          </div>
          <div class="form-group">
            <label class="block text-sky-800 font-semibold mb-2">Preferred Date</label>
            <input 
              type="date" 
              v-model="form.date" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
          </div>
        </div>
        
        <div class="mb-8">
          <label class="block text-sky-800 font-semibold mb-2">Your Message (Optional)</label>
          <textarea 
            v-model="form.message" 
            rows="4" 
            class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
          ></textarea>
        </div>
        
        <button 
          type="submit" 
          :disabled="isSubmitting"
          class="w-full bg-sky-500 text-white py-4 px-10 rounded-full font-semibold text-lg hover:translate-y-[-2px] hover:shadow-lg transition-all duration-300 hover:bg-sky-600 disabled:opacity-50 disabled:cursor-not-allowed"
        >
          {{ isSubmitting ? 'Booking...' : 'Request Appointment' }}
        </button>

        <!-- Sign up prompt -->
        <div class="text-center mt-6 pt-6 border-t border-sky-200">
          <p class="text-gray-600 mb-2">
            Would you like to create an account to manage your appointments?
          </p>
          <button 
            type="button"
            class="text-sky-500 font-semibold hover:text-sky-600 transition-colors duration-300 underline bg-transparent border-none cursor-pointer"
            @click="$emit('open-modal', 'signup')"
          >
            Sign Up
          </button>
        </div>
      </form>
    </div>
  </section>
</template>

<script>
import { reactive, ref } from 'vue';
import { createAppointment } from '../services/api';

export default {
  name: 'Appointment',
  emits: ['open-modal'],
  setup() {
    const isSubmitting = ref(false);
    const successMessage = ref('');
    const errorMessage = ref('');

    const form = reactive({
      firstName: '',
      lastName: '',
      email: '',
      phone: '',
      department: '',
      date: '',
      message: ''
    });

    const resetForm = () => {
      Object.assign(form, {
        firstName: '',
        lastName: '',
        email: '',
        phone: '',
        department: '',
        date: '',
        message: ''
      });
    }

    const submitAppointment = async () => {
      isSubmitting.value = true;
      successMessage.value = '';
      errorMessage.value = '';

      try {
        const appointmentData = {
          full_name: `${form.firstName} ${form.lastName}`,
          email: form.email,
          phone: form.phone,
          department: form.department,
          appointment_date: form.date,
          message: form.message,
        }

        const response = await createAppointment(appointmentData);
        
        successMessage.value = response.data.message || 'Appointment request submitted successfully! We will contact you soon.';
        
        resetForm();

      } catch (error) {
        if (error.response && error.response.status === 422) {
          const firstError = Object.values(error.response.data.errors)[0][0];
          errorMessage.value = `Validation Error: ${firstError}`;
        } else {
          errorMessage.value = 'Failed to submit appointment. Please try again.';
          console.error('Appointment submission error:', error);
        }
      } finally {
        isSubmitting.value = false;
        setTimeout(() => {
          successMessage.value = '';
          errorMessage.value = '';
        }, 5000);
      }
    };

    return {
      form,
      isSubmitting,
      successMessage,
      errorMessage,
      submitAppointment
    };
  }
};
</script>