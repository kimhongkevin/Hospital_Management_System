import { reactive, readonly } from 'vue';

/**
 * Global reactive store for Authentication state.
 * Simple and reliable implementation.
 */
const state = reactive({
  user: null,
  isLoading: false,
});

const mutations = {
  setUser(userData) {
    state.user = userData;
  },
  clearUser() {
    state.user = null;
  },
  setLoading(status) {
    state.isLoading = status;
  }
};

const getters = {
  getUserName: () => state.user ? state.user.name : 'Visitor',
  isAuthenticated: () => !!state.user,
  isLoading: () => state.isLoading,
  getUser: () => state.user,
};

export default {
  state: readonly(state),
  getters,
  mutations,
};