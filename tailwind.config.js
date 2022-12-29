/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Lato', 'Verdana', 'Arial', 'sans-serif'],
                'serif': ['Cinzel', 'Palatino', 'Georgia', 'serif']
            }
        },
    },
    plugins: [],
}
