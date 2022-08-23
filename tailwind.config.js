/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            xs: '330px',
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
            '2xl': '1456px',
        },
        colors: ({ colors }) => ({
            inherit: colors.inherit,
            current: colors.current,
            transparent: colors.transparent,
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            red: colors.red,
            orange: colors.orange,
            green: colors.green,
            blue: colors.blue,
            purple: colors.purple,
            pink: colors.pink,
        }),
        extend: {
            zIndex: {
                auto: 'auto',
                0: '0',
                500: '500',
                600: '600',
                780: '500',
                800: '800',
            },
            lineClamp: {
                7: '7',
                8: '8',
                9: '9',
                10: '10',
            },
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
    ],
}
