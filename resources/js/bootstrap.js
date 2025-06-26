// resources/js/bootstrap.js
// Import axios for HTTP requests
import axios from 'axios';
window.axios = axios;

// Set default header for AJAX requests
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Ensure this file is part of Laravel's default setup (e.g., via webpack.mix.js)