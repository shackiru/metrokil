import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#FE5352",
                blue: "#5C5EFF",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                raleway: ['Raleway', 'sans-serif'],
            },
            boxShadow: {
                soft: '0 0 15px 5px rgba(0,0,0,0.05)'
            }
        },
    },
    plugins: [],
};
