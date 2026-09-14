import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Páginas públicas — Bootstrap
                'resources/sass/guest.scss',
                'resources/js/guest.js',

                // Área da aplicação — Tabler
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],

    css: {
        preprocessorOptions: {
            scss: {
                quietDeps: true,
            },
        },
    },
});
