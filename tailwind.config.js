/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["./Public/pages/**/*.{html,js,php}"],
  content: [
    "./Public/pages/*.php",
    "./lang/*.php",
    "./lang/*.html",
    "./js/custom.min.js",
    "./app/Views/includes/*.php",
    "./app/views/*.php"
  ],

  "tailwindCSS.includeLanguages": {
    plaintext: "php",
  },

  plugins: [],
  darkMode: "class",
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
    },
  },
};
