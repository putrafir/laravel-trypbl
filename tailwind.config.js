/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                blueFist: "#3b82f6",
                bluSecond: "#2563eb",
                secondary: "#64748b",
                dark: "#384667",
            },
            fontFamily: {
                monserat: ["Montserrat"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
