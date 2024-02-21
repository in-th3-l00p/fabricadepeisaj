/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            "green": "#238c6d",
            "cyan": "#206a81"
        }
    },
  },
  plugins: [],
}

