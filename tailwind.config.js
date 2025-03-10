import defaultTheme from "tailwindcss/defaultTheme";

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        primary: "#FE5352",
        blue: "#5C5EFF",
      },
      fontFamily: {
        sans: ["Inter", "Figtree", ...defaultTheme.fontFamily.sans],
        body: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'system-ui', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', 'monospace'],
        raleway: ['Raleway', 'sans-serif'],
      },
      boxShadow: {
        soft: '0 0 15px 5px rgba(0,0,0,0.05)',
        regular: '0 0 15px 5px rgba(0,0,0,0.1)',
        smooth: 'rgba(223, 225, 231, 0.5) 0px 0px 0px 1px, rgba(223, 225, 231, 0.5) 0px 2px 0px 1px, rgba(220, 220, 220, 0.25) 0px 16px 40px 1px',
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
