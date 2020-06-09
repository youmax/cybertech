module.exports = {
  purge: [],
  theme: {
    gradients: theme => ({
      'orange-180': ['180deg', theme('colors.orange.500'), theme('colors.orange.600')],
    }),
  },
  variants: {
    gradients: ['responsive', 'hover'],
    fill: ['responsive', 'hover', 'focus', 'group-hover'],
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
    zIndex: ['responsive', 'focus'],
  },
  plugins: [
    require('tailwindcss-plugins/gradients'),
  ],
}
