/** @type {import('tailwindcss').Config} */
export default {
    content: [
      './resources/**/*.blade.php',
      './resources/js/**/*.js',
      './resources/**/*.vue',
    ],
    darkMode: 'class',
    theme: {
      extend: {
        colors: {
          primary: {
            "50": "#fdf4ff",
            "100": "#fae8ff",
            "200": "#f5d0fe",
            "300": "#f0abfc",
            "400": "#e879f9",
            "500": "#d946ef",
            "600": "#c026d3",
            "700": "#a21caf",
            "800": "#86198f",
            "900": "#701a75",
            "950": "#4a044e",
          },
        },
        fontFamily: {
          body: [
            'Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'Segoe UI',
            'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif',
            'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'
          ],
          sans: [
            'Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'Segoe UI',
            'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif',
            'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'
          ],
        },
      },
    },
    plugins: [
        require("tailwindcss-animate"),
    ],
  }
