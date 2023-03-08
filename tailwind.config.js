const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
<<<<<<< HEAD
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
=======
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
