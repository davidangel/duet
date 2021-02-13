const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                blue: {
                    '50': '#f2f8ff',
                    '100': '#e6f2ff',
                    '200': '#bfdeff',
                    '300': '#99cbff',
                    '400': '#4da3ff',
                    '500': '#007cff',
                    '600': '#0070e6',
                    '700': '#005dbf',
                    '800': '#004a99',
                    '900': '#003d7d'
                }
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
