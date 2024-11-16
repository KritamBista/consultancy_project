/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        colors:{
            customColor: '#e8eff5', // Add custom color with anf9fy name
            darkBlue: '#003366',
            customColor1:'#0d5ba4',
            customColor2:'#f9f9f9',
            customColor3:'#e8eff5',
            customColor4:'#2c81ce',
            customColor5:'#0d5ba3',


        }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

