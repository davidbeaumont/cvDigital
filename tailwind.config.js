/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    'src/styles.css',
    'public/styles.css',
    'index.php',
  ],  theme: {
    screens: {
      'sm': '425px',
      // => @media (min-width: 425px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1440px',
      // => @media (min-width: 1440px) { ... }
    },
    extend: {
      keyframes: {
        scale: {
          '0%; 100%': {transform: 'scale(1)'},
          '50%': {transform: 'scale(1.05)'},
        },
        loupe: {
          '0%' : {transform: 'scale(1)'},
          '100%' : {transform: 'scale(1.05)'},
        }
      },
      animation: {
        'scale': 'scale 500ms ease-in-out alternate 1',
        'loupe': 'loupe 500ms ease-in-out forwards',
      },
    },
  },
  plugins: [],
}