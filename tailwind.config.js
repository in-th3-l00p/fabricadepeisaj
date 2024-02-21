/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            "green": "#2AA480",
            "cyan": "#206a81"
        }
    },
  },
  plugins: [],
}

