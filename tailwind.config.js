/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,ts}",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
      },
      colors: {
        'primary': {
          DEFAULT: '#ff6644',
          100: '#ff4f44'
        },
        'secondary': '#2d8dff',
        'warning': '#ff9e44',
        'success': '#76d067',
        'dark': {
          50: '#e7e7e8',
          100: '#ceced0',
          200: '#b6b6b9',
          300: '#9d9da1',
          400: '#85858a',
          500: '#6c6c73',
          600: '#54545c',
          700: '#3b3b44',
          800: '#23232d',
          900: '#0a0a15'
        },
      },
    },
  },
  plugins: [],
}

