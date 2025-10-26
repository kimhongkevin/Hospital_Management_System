<template>
  <div>
    <!-- Sign Up Modal -->
    <div 
      class="fixed inset-0 bg-sky-500 bg-opacity-70 z-50 flex items-center justify-center transition-opacity duration-300" 
      :class="activeModal === 'signup' ? 'opacity-100 pointer-events-auto' : 'opacity-0 pointer-events-none'"
      @click.self="$emit('close')"
    >
      <div class="bg-white p-12 rounded-2xl max-w-md w-11/12 relative transform transition-transform duration-300" 
           :class="activeModal === 'signup' ? 'scale-100' : 'scale-95'">
        <button 
          class="absolute top-4 right-4 bg-transparent border-none text-3xl cursor-pointer text-gray-500 hover:text-sky-500 transition-colors"
          @click="$emit('close')"
        >
          ×
        </button>
        <h2 class="text-3xl font-bold text-sky-500 mb-6">Sign Up</h2>
        <div v-if="signupError" class="text-red-600 mb-4">{{ signupError }}</div>
        <form @submit.prevent="handleSignup">
          <div class="mb-6">
            <label class="block text-sky-800 font-semibold mb-2">Full Name</label>
            <input 
              type="text" 
              v-model="signupData.name" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
          </div>
          <div class="mb-6">
            <label class="block text-sky-800 font-semibold mb-2">Email Address</label>
            <input 
              type="email" 
              v-model="signupData.email" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
          </div>
          <div class="mb-6">
            <label class="block text-sky-800 font-semibold mb-2">Password</label>
            <input 
              type="password" 
              v-model="signupData.password" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
          </div>
          <button 
            type="submit" 
            :disabled="isSigningUp"
            class="w-full bg-sky-500 text-white py-4 px-10 rounded-full font-semibold text-lg hover:translate-y-[-2px] hover:shadow-lg transition-all duration-300 hover:bg-sky-600 disabled:opacity-50"
          >
            {{ isSigningUp ? 'Signing Up...' : 'Sign Up' }}
          </button>
          
          <p class="text-center text-gray-600 mt-4">
            Already have an account? 
            <button 
              type="button" 
              @click="$emit('close'); $emit('open-modal', 'signin')" 
              class="text-sky-500 hover:text-sky-600 font-semibold underline bg-transparent border-none cursor-pointer"
            >
              Sign In
            </button>
          </p>
        </form>
      </div>
    </div>

    <!-- Sign In Modal -->
    <div 
      class="fixed inset-0 bg-sky-500 bg-opacity-70 z-50 flex items-center justify-center transition-opacity duration-300" 
      :class="activeModal === 'signin' ? 'opacity-100 pointer-events-auto' : 'opacity-0 pointer-events-none'"
      @click.self="$emit('close')"
    >
      <div class="bg-white p-12 rounded-2xl max-w-md w-11/12 relative transform transition-transform duration-300" 
           :class="activeModal === 'signin' ? 'scale-100' : 'scale-95'">
        <button 
          class="absolute top-4 right-4 bg-transparent border-none text-3xl cursor-pointer text-gray-500 hover:text-sky-500 transition-colors"
          @click="$emit('close')"
        >
          ×
        </button>
        <h2 class="text-3xl font-bold text-sky-500 mb-6">Sign In</h2>
        <div v-if="signinError" class="text-red-600 mb-4">{{ signinError }}</div>
        <form @submit.prevent="handleSignin">
          <div class="mb-6">
            <label class="block text-sky-800 font-semibold mb-2">Email Address</label>
            <input 
              type="email" 
              v-model="signinData.email" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
          </div>
          <div class="mb-6">
            <label class="block text-sky-800 font-semibold mb-2">Password</label>
            <input 
              type="password" 
              v-model="signinData.password" 
              required
              class="w-full px-4 py-3 border-2 border-sky-200 rounded-lg focus:outline-none focus:border-sky-500 transition-colors"
            >
          </div>
          <button 
            type="submit" 
            :disabled="isSigningIn"
            class="w-full bg-sky-500 text-white py-4 px-10 rounded-full font-semibold text-lg hover:translate-y-[-2px] hover:shadow-lg transition-all duration-300 hover:bg-sky-600 disabled:opacity-50"
          >
            {{ isSigningIn ? 'Signing In...' : 'Sign In' }}
          </button>
          
          <p class="text-center text-gray-600 mt-4">
            Don't have an account? 
            <button 
              type="button" 
              @click="$emit('close'); $emit('open-modal', 'signup')" 
              class="text-sky-500 hover:text-sky-600 font-semibold underline bg-transparent border-none cursor-pointer"
            >
              Sign Up
            </button>
          </p>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import { reactive, ref } from 'vue';
import { register, login, getCsrfToken } from '../services/api';
import AuthStore from '../store/AuthStore';

export default {
  name: 'AuthModal',
  props: {
    activeModal: {
      type: String,
      default: null
    }
  },
  emits: ['close', 'signup', 'signin', 'open-modal'],
  setup(props, { emit }) {
    const isSigningUp = ref(false);
    const isSigningIn = ref(false);
    const signupError = ref('');
    const signinError = ref('');

    const signupData = reactive({
      name: '',
      email: '',
      password: ''
    });

    const signinData = reactive({
      email: '',
      password: ''
    });

    const handleSignup = async () => {
      isSigningUp.value = true;
      signupError.value = '';

      try {
        await getCsrfToken(); 
        const response = await register({ ...signupData });
        
        AuthStore.mutations.setUser(response.data.user);
        
        emit('signup', response.data.user);
        
        Object.assign(signupData, { name: '', email: '', password: '' });
      } catch (error) {
        if (error.response && error.response.status === 422) {
            signupError.value = 'Validation failed: Please check your input.';
        } else {
            signupError.value = 'Registration failed. Please try again.';
        }
        console.error('Signup error:', error);
      } finally {
        isSigningUp.value = false;
      }
    };

    const handleSignin = async () => {
      isSigningIn.value = true;
      signinError.value = '';

      try {
        await getCsrfToken(); 
        const response = await login({ ...signinData });

        AuthStore.mutations.setUser(response.data.user);

        emit('signin', response.data.user);

        Object.assign(signinData, { email: '', password: '' });
      } catch (error) {
        if (error.response && error.response.status === 401) {
             signinError.value = 'Invalid credentials. Please try again.';
        } else {
            signinError.value = 'Sign In failed. Please try again.';
        }
        console.error('Signin error:', error);
      } finally {
        isSigningIn.value = false;
      }
    };

    return {
      signupData,
      signinData,
      isSigningUp,
      isSigningIn,
      signupError,
      signinError,
      handleSignup,
      handleSignin
    };
  }
};
</script>