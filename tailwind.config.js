import defaultTheme from "tailwindcss/defaultTheme";

module.exports = {
  content: [
    './layouts/**/*.html',
    './content/**/*.md',
    './content/**/*.html',
    './src/*.js',
    './node_modules/flowbite/**/*.js',
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  safelist: [
    'w-64',
    'w-1/2',
    'rounded-l-lg',
    'rounded-r-lg',
    'bg-gray-200',
    'grid-cols-4',
    'grid-cols-7',
    'h-6',
    'leading-6',
    'h-9',
    'leading-9',
    'shadow-lg',
    'bg-opacity-50',
    'dark:bg-opacity-80'
  ],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        primary: "#FE5352", // Retained from the second config
        adminPrimary: { // Renamed from the first config
          "50": "#eff6ff",
          "100": "#dbeafe",
          "200": "#bfdbfe",
          "300": "#93c5fd",
          "400": "#60a5fa",
          "500": "#3b82f6",
          "600": "#2563eb",
          "700": "#1d4ed8",
          "800": "#1e40af",
          "900": "#1e3a8a"
        },
        blue: "#5C5EFF",
      },
      fontFamily: {
        sans: ["Inter", "Figtree", ...defaultTheme.fontFamily.sans],
        body: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'system-ui', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', 'monospace'],
        raleway: ['Raleway', 'sans-serif'],
      },
      transitionProperty: {
        'width': 'width'
      },
      textDecoration: ['active'],
      minWidth: {
        'kanban': '28rem'
      },
      boxShadow: {
        soft: '0 0 15px 5px rgba(0,0,0,0.05)',
        regular: '0 0 15px 5px rgba(0,0,0,0.1)',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')({
      charts: true,
    }),
    require("@tailwindcss/typography"),
  ],
};
