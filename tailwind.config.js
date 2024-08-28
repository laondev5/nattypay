/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            padding: {
                container: "4rem", // This is an example, set your desired padding value
            },
             screens: {
        'xs': '480px',    // Custom screen size for extra small devices
        'sm': '640px',    // Default small size, you can change this
        'md': '768px',    // Default medium size
        'lg': '1024px',   // Default large size
        'xl': '1280px',   // Default extra-large size
        '2xl': '1536px',  // Default 2x extra-large size
        '3xl': '1920px',  // Custom screen size for 3x extra-large devices
      }
        },
    },
    darkMode: "class",
    plugins: [require("tw-elements/plugin.cjs")],
};
