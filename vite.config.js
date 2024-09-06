import { defineConfig } from 'vite';

export default defineConfig({
  server: {
    host: '127.0.0.1',  // Ensure this matches the host in your error message
    port: 5500,  // Ensure this matches the port in your error message
    hmr: {
      protocol: 'ws',
      host: '127.0.0.1',
      port: 5500,
    },
  },
});
