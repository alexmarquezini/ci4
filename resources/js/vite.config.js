import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import path from 'path'

// https://vite.dev/config/
export default defineConfig({
  plugins: [vue()],
  root: path.resolve(__dirname),
  server: {
    cors: true,
  },
  build: {
    outDir: '../../public/build',
    manifest: true,
    emptyOutDir: true,
    rollupOptions: {
      input: './src/main.js', 
    }
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js')
    }
  },
})
