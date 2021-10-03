module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  darkMode:'class',
  theme: {
    extend: {
      colors:{
        'dark-main':'#18191A',
        'dark-second':'#242526',
        'dark-third':'#3a3b3c',
        'dark-txt':'#B8BBBF',
      },
      screens: {
        'sm': '640px',
        // => @media (min-width: 640px) { ... }
  
        'md': '768px',
        // => @media (min-width: 768px) { ... }
  
        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }
  
        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }
  
        '2xl': '1536px',
        // => @media (min-width: 1536px) { ... }
      }
    }
  },
  variants: {
    extend:{
      display:['group-hover'],
      transform:['group-hover'],
      scale:['group-hover'],
    },
  },
  plugins: [
    // require('@tailwindcss/ui'),
  ]
}
