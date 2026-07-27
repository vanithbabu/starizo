import { resolve } from 'path';
import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        careers: resolve(__dirname, 'careers.html'),
        about: resolve(__dirname, 'about.html'),
        'product-rice-starch': resolve(__dirname, 'product-rice-starch.html'),
        partner: resolve(__dirname, 'partner-with-us.html'),
        contact: resolve(__dirname, 'contact.html'),
        blog: resolve(__dirname, 'blog.html'),
        'blog-detail': resolve(__dirname, 'blog-detail.html'),
        'research-lab': resolve(__dirname, 'research-lab.html'),
      },
    },
  },
});
