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
        },
    },
    darkMode: "class",
    plugins: [require("tw-elements/plugin.cjs")],
};
