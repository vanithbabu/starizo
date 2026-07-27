/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./*.html",
    "./src/**/*.{js,ts,jsx,tsx,html}",
  ],
  theme: {
    extend: {
      colors: {
        'starizo-orange': '#FF8D00',
        'starizo-orange-dark': '#FF8500',
        'starizo-green-start': '#00A256',
        'starizo-green-end': '#5DC671',
        'starizo-bg': '#FDFBF3',
        'starizo-bg-cream': '#FDF7E9',
        'starizo-brown': '#5D3700',
        'starizo-green-forest': '#003F1A',
        'starizo-yellow-border': '#DF890C',
      },
      fontFamily: {
        'montserrat': ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
