/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            'transparent': 'transparent',
            'mint': '#6EE7B7',
            'lightblue': '#3B82F6',
            'darkblue': '#1f48ff',
            'lightgrey': '#F3F4F6',
            'darkgrey': '#1F2937',
            'red': '#EF4444',
        },
    },
    plugins: [],
}
