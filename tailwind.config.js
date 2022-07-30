module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            sans: ['Karla', 'sans-serif'],
            serif: ['Merriweather', 'serif'],
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
