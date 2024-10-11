import {defineConfig} from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost', // Can use 'localhost' or '0.0.0.0'
            port: 3000
        },
        port: 3000,
        host: '0.0.0.0', // Ensure Docker can bind to the port
        watch: {
            ignored: ['**/vendor/**']
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js'
            ], // Adjust paths as necessary
            refresh: true,
        }),
        vue()
    ],
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
});