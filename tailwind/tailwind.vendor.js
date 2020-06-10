module.exports = {
  purge: [],
  theme: {

  },
  variants: {
    fill: ['responsive', 'hover', 'focus', 'group-hover'],
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
    zIndex: ['responsive', 'focus'],
    cursor: ['responsive', 'hover'],
  },
  plugins: [
    require('tailwindcss-animatecss')({
      classes: [],
      settings: {},
      variants: [],
    }),
  ],
}
