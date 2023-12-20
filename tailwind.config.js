/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./Public/pages/**/*.{html,js,php}"],
  plugins: [],
  darkMode: "class",
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
    },
  },
}
