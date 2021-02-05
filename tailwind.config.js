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
                    50: "#f6fafd",
                    100: "#eef6fb",
                    200: "#d3e8f5",
                    300: "#b9daef",
                    400: "#85bee3",
                    500: "#50a2d7",
                    600: "#4892c2",
                    700: "#3c7aa1",
                    800: "#306181",
                    900: "#274f69",
                },
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
