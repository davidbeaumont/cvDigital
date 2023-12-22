/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    'src/styles.css',
    'public/styles.css',
    'index.php',
  ],  theme: {
    extend: {
      keyframes: {
        scale: {
          '0%; 100%': {transform: 'scale(1)'},
          '50%': {transform: 'scale(1.05)'},
        }
      },
      animation: {
        'scale': 'scale 500ms ease-in-out alternate 1'
      },
    },
  },
  plugins: [],
}