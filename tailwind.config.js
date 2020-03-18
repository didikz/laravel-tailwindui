module.exports = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var'],
      },
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms'),
    require('@tailwindcss/ui'),
  ]
}
