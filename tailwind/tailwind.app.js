module.exports = {
  purge: [],
  theme: {
    gradients: theme => ({
      'linear-orange-500': ['180deg', theme('colors.orange.500'), theme('colors.orange.600')],
      'linear-orange-600': ['180deg', theme('colors.orange.600'), theme('colors.orange.700')],
    }),
  },
  variants: {
    gradients: ['responsive', 'hover'],
    fill: ['responsive', 'hover', 'focus', 'group-hover'],
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
    zIndex: ['responsive', 'focus'],
    backgroundColor: ['responsive', 'hover', 'focus'],
  },
  plugins: [
    require('tailwindcss-plugins/gradients'),
  ],
}
