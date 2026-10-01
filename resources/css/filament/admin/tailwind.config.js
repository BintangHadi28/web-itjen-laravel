import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50:  '#FAF6F0',
                    100: '#F5EDE3',
                    200: '#E8D6BF',
                    300: '#D4B896',
                    400: '#A88B6A',
                    500: '#8B5A2B',
                    600: '#6B4226',
                    700: '#5D3A1F',
                    800: '#4E342E',
                    900: '#3E2723',
                    950: '#2D1B18',
                },
                warning: {
                    500: '#FFC107',
                    600: '#FFB300',
                },
            },
        },
    },
}