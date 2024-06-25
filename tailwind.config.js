import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/awcodes/filament-curator/resources/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'cinder': {
                    DEFAULT: '#15101E',
                    '50': '#A998C8',
                    '100': '#9E8BC1',
                    '200': '#8870B3',
                    '300': '#7257A3',
                    '400': '#604988',
                    '500': '#4D3B6E',
                    '600': '#3A2C53',
                    '700': '#281E39',
                    '800': '#15101E',
                    '900': '#000000'
                },
                'fuchsia-pink': {
                    DEFAULT: '#CE4EBD',
                    '50': '#F6DEF3',
                    '100': '#F1CEED',
                    '200': '#E9AEE1',
                    '300': '#E08ED5',
                    '400': '#D76EC9',
                    '500': '#CE4EBD',
                    '600': '#B231A1',
                    '700': '#87257A',
                    '800': '#5B1952',
                    '900': '#2F0D2A'
                },
                'governor-bay': {
                    DEFAULT: '#492EAC',
                    '50': '#B7A9E8',
                    '100': '#A999E4',
                    '200': '#8E79DB',
                    '300': '#7359D3',
                    '400': '#5839CA',
                    '500': '#492EAC',
                    '600': '#362280',
                    '700': '#231653',
                    '800': '#110A27',
                    '900': '#000000'
                },
                'picton-blue': {
                    DEFAULT: '#28CFEB',
                    '50': '#D0F5FB',
                    '100': '#BDF0F9',
                    '200': '#98E8F5',
                    '300': '#73E0F2',
                    '400': '#4DD7EE',
                    '500': '#28CFEB',
                    '600': '#13AEC8',
                    '700': '#0E8295',
                    '800': '#095562',
                    '900': '#04282E'
                },
            },
            transitionProperty: {
                left: 'left',
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ]
}
