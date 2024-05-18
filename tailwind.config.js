/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
  content: ["./src/**/*.{html,php,js}"],
  theme: {
    extend: {
      colors: {
        'primary': colors.pink,
        'secondary': colors.purple,
        'dark': colors.neutral,
        ...colors
      },
    },
  },
  plugins: [],
}
