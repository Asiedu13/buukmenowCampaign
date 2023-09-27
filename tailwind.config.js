/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "transparent-rgba": "rgba(243, 244, 246, 0.6)",
            },
        },
    },
    plugins: [],
};
