module.exports = {
  theme: {
    extend: {
      colors: {
        'primary' : '#ffdc34',
        'dark-brown': '#0e0101',
        'light-brown': '#543107',
      },
      inset: {
        '-4': '-1.5rem',
        '-8': '-3rem'
      }
    }
  },
  variants: {
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
    borderColor: ['responsive', 'hover', 'focus', 'group-hover'],
  },
  plugins: []
}
