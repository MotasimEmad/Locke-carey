module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
],
  theme: {
    extend: {
      fontFamily: {
        'Quicksand': ['Quicksand']
      },
      animation: {
        bounce: 'bounce 5s infinite'
      }
    },
  },
  plugins: [],
}
