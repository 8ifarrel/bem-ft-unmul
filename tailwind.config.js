
import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/views/**/*.blade.php",
        // "./resources/**/*.js",
        // "./resources/**/*.vue",
    ],

    darkMode: 'false',

    theme: {
        screens: {
            'sm': '640px',
      
            'md': '768px',
      
            'lg': '1024px',
      
            'xl': '1280px',
      
            '2xl': '1536px',
          },

        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'orange': 'rgba(239, 85, 44, 255)',
            },  
        },
    },

    plugins: [forms],
};
