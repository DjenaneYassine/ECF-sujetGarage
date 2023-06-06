/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}",
            "/src/index.html",
            "/src/style.css"],
  theme: {
    extend: {
      colors:{
        'black100': '#262526',
        'red100': '#D92332',
        'red200': '#D94350',
        'rose100': '#D9777F',
      },
      listStyleImage:{
        'imagePrincipal' : 'url("../img/Image\ 1.png")'
      }
    },
  },
  plugins: [],
}

