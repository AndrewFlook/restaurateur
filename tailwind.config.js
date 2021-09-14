const colors = require('tailwindcss/colors')

module.exports = {
  // mode: 'jit',
  purge: [
    './resources/**/*.blade.php',
    './resources/**/**/*.blade.php',
    './resources/**/**/**/*.blade.php',
    './resources/**/**/**/**/*.blade.php',
    './resources/**/**/**/**/**/*.blade.php',
    './resources/**/*.js',
  ],
  darkMode: 'class', // 'false', 'media' or 'class'
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: '#000',
      white: '#fff',
      bluegray: colors.blueGray,
      coolgray: colors.coolGray,
      gray: colors.gray,
      truegray: colors.trueGray,
      warmgray: colors.warmGray,
      red: colors.red,
      orange: colors.orange,
      amber: colors.amber,
      yellow: colors.yellow,
      lime: colors.lime,
      green: colors.green,
      emerald: colors.emerald,
      teal: colors.teal,
      cyan: colors.cyan,
      sky: colors.sky,
      blue: colors.blue,
      indigo: colors.indigo,
      violet: colors.violet,
      purple: colors.purple,
      fuchsia: colors.fuchsia,
      pink: colors.pink,
      rose: colors.rose,
    },
    extend: {
      width: {
        '1/5': '20%',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require(
      '@tailwindcss/forms',
      '@tailwindcss/typography',
      '@tailwindcss/aspect-ratio'
    ),
  ],
}
