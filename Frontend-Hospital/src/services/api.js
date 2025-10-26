// services/api.js
import axios from 'axios';

// Create axios instance with default config
const api = axios.create({
  // **CRUCIAL CONFIGURATION FOR LARAVEL SANCTUM**
  baseURL: 'http://localhost:8000', // Matches APP_URL in .env
  withCredentials: true, // Sends cookies (including XSRF-TOKEN) with requests

  headers: {
    'Accept': 'application/json',
    'Content-Type': 'application/json',
  }
});

// NOTE: The repeated getCsrfToken() call in the request interceptor has been REMOVED.
// The getCsrfToken() call must now be handled ONCE on app load (in App.vue).

// Response interceptor to handle errors
api.interceptors.response.use(
  (response) => response,
  (error) => {
    // Check for common API errors
    if (error.response) {
      if (error.response.status === 401) {
        // Unauthorized - User is not logged in or token expired
        console.error('Authentication failed (401)', error.response.data);
      } else if (error.response.status === 403) {
        // Forbidden - User is logged in but lacks permissions (e.g., CheckRole failed)
        console.error('Permission denied (403)', error.response.data);
      } else if (error.response.status === 419) {
        // CSRF Token Mismatch - This is the error we are preventing!
        console.error('CSRF token mismatch or Session expired (419). Please refresh and try again.', error.response.data);
      } else if (error.response.status === 422) {
        // Validation Error
        console.error('Validation failed (422)', error.response.data);
      }
    } else {
      console.error('Network or unknown error', error.message);
    }
    return Promise.reject(error);
  }
);

// This function must be called ONCE when your Vue application starts up.
// It hits the special Laravel endpoint to set the XSRF-TOKEN cookie.
export const getCsrfToken = () => api.get('/sanctum/csrf-cookie');

// --- API Endpoints ---
export const login = (data) => api.post('/api/login', data);
export const register = (data) => api.post('/api/register', data);
export const logout = () => api.post('/api/logout');

export const getCurrentUser = () => api.get('/api/me');
export const getDoctors = (data) => api.get('/api/doctors', data);
export const getDoctor = (id) => api.get(`/api/doctors/${id}`);
export const getAvailableSlots = (id) => api.get(`/api/doctors/${id}/available-slots`);
export const getAppointments = () => api.get('/api/appointments');

// Endpoint for booking a new appointment
export const createAppointment = (data) => api.post('/api/appointments', data);

export const getAppointment = (id) => api.get(`/api/appointments/${id}`);
export const cancelAppointment = (id) => api.post(`/api/appointments/${id}/cancel`);

export default api;
