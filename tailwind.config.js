/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "new-black" : "#171720",
        "accent" : "#252531",
        "main" : "#A5AEFC",
      }
    },
  },
  plugins: [],
}