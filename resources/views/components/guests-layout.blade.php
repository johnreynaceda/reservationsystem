<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <style>
        [x-cloak] {
            display: none !important;
        }

        .custom-shape-divider-bottom-1695864863 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1695864863 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 93px;
        }

        .custom-shape-divider-bottom-1695864863 .shape-fill {
            fill: #ffffff;
        }

        .custom-shape-divider-top-1695878520 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1695878520 svg {
            position: relative;
            display: block;
            width: calc(130% + 1.3px);
            height: 171px;
        }

        .custom-shape-divider-top-1695878520 .shape-fill {
            fill: #FFFFFF;
        }
    </style>
    <!-- Scripts -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @wireUiScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    @stack('scripts')
</head>

<body class="font-sans antialiased">
    <div x-data="{ book_modal: false }">
        <div class="mx-auto relative flex max-w-7xl items-center justify-between py-2 lg:px-8">
            <div class="flex space-x-2 items-center">
                <a href="https://www.facebook.com/southwave.beachhouse.official" target="_blank" class="fill-blue-700">
                    <svg version="1.1" id="Icons" class="h-7 w-7" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #FFFFFF;
                            }

                            .st1 {
                                fill: #3A559F;
                            }

                            .st2 {
                                fill: #F4F4F4;
                            }

                            .st3 {
                                fill: #FF0084;
                            }

                            .st4 {
                                fill: #0063DB;
                            }

                            .st5 {
                                fill: #00ACED;
                            }

                            .st6 {
                                fill: #FFEC06;
                            }

                            .st7 {
                                fill: #FF0000;
                            }

                            .st8 {
                                fill: #25D366;
                            }

                            .st9 {
                                fill: #0088FF;
                            }

                            .st10 {
                                fill: #314358;
                            }

                            .st11 {
                                fill: #EE6996;
                            }

                            .st12 {
                                fill: #01AEF3;
                            }

                            .st13 {
                                fill: #FFFEFF;
                            }

                            .st14 {
                                fill: #F06A35;
                            }

                            .st15 {
                                fill: #00ADEF;
                            }

                            .st16 {
                                fill: #1769FF;
                            }

                            .st17 {
                                fill: #1AB7EA;
                            }

                            .st18 {
                                fill: #6001D1;
                            }

                            .st19 {
                                fill: #E41214;
                            }

                            .st20 {
                                fill: #05CE78;
                            }

                            .st21 {
                                fill: #7B519C;
                            }

                            .st22 {
                                fill: #FF4500;
                            }

                            .st23 {
                                fill: #00F076;
                            }

                            .st24 {
                                fill: #FFC900;
                            }

                            .st25 {
                                fill: #00D6FF;
                            }

                            .st26 {
                                fill: #FF3A44;
                            }

                            .st27 {
                                fill: #FF6A36;
                            }

                            .st28 {
                                fill: #0061FE;
                            }

                            .st29 {
                                fill: #F7981C;
                            }

                            .st30 {
                                fill: #EE1B22;
                            }

                            .st31 {
                                fill: #EF3561;
                            }

                            .st32 {
                                fill: none;
                                stroke: #FFFFFF;
                                stroke-width: 2;
                                stroke-miterlimit: 10;
                            }

                            .st33 {
                                fill: #0097D3;
                            }

                            .st34 {
                                fill: #01308A;
                            }

                            .st35 {
                                fill: #019CDE;
                            }

                            .st36 {
                                fill: #FFD049;
                            }

                            .st37 {
                                fill: #16A05D;
                            }

                            .st38 {
                                fill: #4486F4;
                            }

                            .st39 {
                                fill: none;
                            }

                            .st40 {
                                fill: #34A853;
                            }

                            .st41 {
                                fill: #4285F4;
                            }

                            .st42 {
                                fill: #FBBC05;
                            }

                            .st43 {
                                fill: #EA4335;
                            }
                        </style>
                        <path class="st1" d="M23,0H9C4,0,0,4,0,9v14c0,5,4,9,9,9h14c5,0,9-4,9-9V9C32,4,28,0,23,0z" />
                        <path class="st0"
                            d="M26.8,15.4C26.6,15.2,26.3,15,26,15h-5v-3.8c0-0.1,0.1-0.2,0.2-0.2H25c0.6,0,1-0.4,1-1V7c0-0.6-0.4-1-1-1h-4  c-3.3,0-5,2.7-5,6v3h-4c-0.6,0-1,0.4-1,1v3c0,0.6,0.4,1,1,1h4v12h5V20h3c0.4,0,0.8-0.2,0.9-0.6l2-3C27.1,16.1,27,15.7,26.8,15.4z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/southwavebeach/" target="_blank" class="fill-blue-700">
                    <svg class="h-7 w-7" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="2" width="28" height="28" rx="6"
                            fill="url(#paint0_radial_87_7153)" />
                        <rect x="2" y="2" width="28" height="28" rx="6"
                            fill="url(#paint1_radial_87_7153)" />
                        <rect x="2" y="2" width="28" height="28" rx="6"
                            fill="url(#paint2_radial_87_7153)" />
                        <path
                            d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z"
                            fill="white" />
                        <defs>
                            <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)">
                                <stop stop-color="#B13589" />
                                <stop offset="0.79309" stop-color="#C62F94" />
                                <stop offset="1" stop-color="#8A3AC8" />
                            </radialGradient>
                            <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)">
                                <stop stop-color="#E0E8B7" />
                                <stop offset="0.444662" stop-color="#FB8A2E" />
                                <stop offset="0.71474" stop-color="#E2425C" />
                                <stop offset="1" stop-color="#E2425C" stop-opacity="0" />
                            </radialGradient>
                            <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)">
                                <stop offset="0.156701" stop-color="#406ADC" />
                                <stop offset="0.467799" stop-color="#6A45BE" />
                                <stop offset="1" stop-color="#6A45BE" stop-opacity="0" />
                            </radialGradient>
                        </defs>
                    </svg>
                </a>
                <a href="https://twitter.com/beach_wave12239" target="_blank" class="fill-blue-700">
                    <svg class="h-7 w-7" viewBox="0 -4 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">

                        <title>Twitter-color</title>
                        <desc>Created with Sketch.</desc>
                        <defs>

                        </defs>
                        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Color-" transform="translate(-300.000000, -164.000000)" fill="#00AAEC">
                                <path
                                    d="M348,168.735283 C346.236309,169.538462 344.337383,170.081618 342.345483,170.324305 C344.379644,169.076201 345.940482,167.097147 346.675823,164.739617 C344.771263,165.895269 342.666667,166.736006 340.418384,167.18671 C338.626519,165.224991 336.065504,164 333.231203,164 C327.796443,164 323.387216,168.521488 323.387216,174.097508 C323.387216,174.88913 323.471738,175.657638 323.640782,176.397255 C315.456242,175.975442 308.201444,171.959552 303.341433,165.843265 C302.493397,167.339834 302.008804,169.076201 302.008804,170.925244 C302.008804,174.426869 303.747139,177.518238 306.389857,179.329722 C304.778306,179.280607 303.256911,178.821235 301.9271,178.070061 L301.9271,178.194294 C301.9271,183.08848 305.322064,187.17082 309.8299,188.095341 C309.004402,188.33225 308.133826,188.450704 307.235077,188.450704 C306.601162,188.450704 305.981335,188.390033 305.381229,188.271578 C306.634971,192.28169 310.269414,195.2026 314.580032,195.280607 C311.210424,197.99061 306.961789,199.605634 302.349709,199.605634 C301.555203,199.605634 300.769149,199.559408 300,199.466956 C304.358514,202.327194 309.53689,204 315.095615,204 C333.211481,204 343.114633,188.615385 343.114633,175.270495 C343.114633,174.831347 343.106181,174.392199 343.089276,173.961719 C345.013559,172.537378 346.684275,170.760563 348,168.735283"
                                    id="Twitter">

                                </path>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        {{ $slot }}

    </div>

    <section id = "contactUs">
        <!-- ====== Contact Section Start -->
        <section class="relative z-10 overflow-hidden bg-gray-100 py-20 lg:py-[120px]">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap lg:justify-between">
                    <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
                        <div class="mb-12 max-w-[570px] lg:mb-0">
                            <span class="text-primary mb-4 block text-base font-semibold">
                                Contact Us
                            </span>
                            <h2
                                class="text-dark mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                                GET IN TOUCH WITH US
                            </h2>
                            <p class="text-body-color mb-9 text-base leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim adiqua
                                minim veniam quis nostrud exercitation ullamco
                            </p>
                            <div class="mb-8 flex w-full max-w-[370px]">
                                <div
                                    class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                        <path
                                            d="M21.8182 24H16.5584C15.3896 24 14.4156 23.0256 14.4156 21.8563V17.5688C14.4156 17.1401 14.0649 16.7893 13.6364 16.7893H10.4026C9.97403 16.7893 9.62338 17.1401 9.62338 17.5688V21.8173C9.62338 22.9866 8.64935 23.961 7.48052 23.961H2.14286C0.974026 23.961 0 22.9866 0 21.8173V8.21437C0 7.62972 0.311688 7.08404 0.818182 6.77223L11.1039 0.263094C11.6494 -0.0876979 12.3896 -0.0876979 12.9351 0.263094L23.2208 6.77223C23.7273 7.08404 24 7.62972 24 8.21437V21.7783C24 23.0256 23.026 24 21.8182 24ZM10.3636 15.4251H13.5974C14.7662 15.4251 15.7403 16.3995 15.7403 17.5688V21.8173C15.7403 22.246 16.0909 22.5968 16.5195 22.5968H21.8182C22.2468 22.5968 22.5974 22.246 22.5974 21.8173V8.25335C22.5974 8.13642 22.5195 8.01949 22.4416 7.94153L12.1948 1.4324C12.0779 1.35445 11.9221 1.35445 11.8442 1.4324L1.55844 7.94153C1.44156 8.01949 1.4026 8.13642 1.4026 8.25335V21.8563C1.4026 22.285 1.75325 22.6358 2.18182 22.6358H7.48052C7.90909 22.6358 8.25974 22.285 8.25974 21.8563V17.5688C8.22078 16.3995 9.19481 15.4251 10.3636 15.4251Z" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="text-dark mb-1 text-xl font-bold">Our Location</h4>
                                    <p class="text-body-color text-base">
                                        National Circumferential Road Brgy, Mabini, 4202 Batangas
                                    </p>
                                </div>
                            </div>
                            <div class="mb-8 flex w-full max-w-[370px]">
                                <div
                                    class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                                    <svg width="24" height="26" viewBox="0 0 24 26" class="fill-current">
                                        <path
                                            d="M22.6149 15.1386C22.5307 14.1704 21.7308 13.4968 20.7626 13.4968H2.82869C1.86042 13.4968 1.10265 14.2125 0.97636 15.1386L0.092295 23.9793C0.0501967 24.4845 0.21859 25.0317 0.555377 25.4106C0.892163 25.7895 1.39734 26 1.94462 26H21.6887C22.1939 26 22.6991 25.7895 23.078 25.4106C23.4148 25.0317 23.5832 24.5266 23.5411 23.9793L22.6149 15.1386ZM21.9413 24.4424C21.8992 24.4845 21.815 24.5687 21.6466 24.5687H1.94462C1.81833 24.5687 1.69203 24.4845 1.64993 24.4424C1.60783 24.4003 1.52364 24.3161 1.56574 24.1477L2.4498 15.2649C2.4498 15.0544 2.61819 14.9281 2.82869 14.9281H20.8047C21.0152 14.9281 21.1415 15.0544 21.1835 15.2649L22.0676 24.1477C22.0255 24.274 21.9834 24.4003 21.9413 24.4424Z" />
                                        <path
                                            d="M11.7965 16.7805C10.1547 16.7805 8.84961 18.0855 8.84961 19.7273C8.84961 21.3692 10.1547 22.6742 11.7965 22.6742C13.4383 22.6742 14.7434 21.3692 14.7434 19.7273C14.7434 18.0855 13.4383 16.7805 11.7965 16.7805ZM11.7965 21.2008C10.9966 21.2008 10.3231 20.5272 10.3231 19.7273C10.3231 18.9275 10.9966 18.2539 11.7965 18.2539C12.5964 18.2539 13.2699 18.9275 13.2699 19.7273C13.2699 20.5272 12.5964 21.2008 11.7965 21.2008Z" />
                                        <path
                                            d="M1.10265 7.85562C1.18684 9.70794 2.82868 10.4657 3.67064 10.4657H6.61752C6.65962 10.4657 6.65962 10.4657 6.65962 10.4657C7.92257 10.3815 9.18552 9.53955 9.18552 7.85562V6.84526C10.5748 6.84526 13.7742 6.84526 15.1635 6.84526V7.85562C15.1635 9.53955 16.4264 10.3815 17.6894 10.4657H17.7315H20.6363C21.4782 10.4657 23.1201 9.70794 23.2043 7.85562C23.2043 7.72932 23.2043 7.26624 23.2043 6.84526C23.2043 6.50847 23.2043 6.21378 23.2043 6.17169C23.2043 6.12959 23.2043 6.08749 23.2043 6.08749C23.078 4.90874 22.657 3.94047 21.9413 3.18271L21.8992 3.14061C20.8468 2.17235 19.5838 1.62507 18.6155 1.28828C15.795 0.193726 12.2587 0.193726 12.0903 0.193726C9.6065 0.235824 8.00677 0.446315 5.60716 1.28828C4.681 1.58297 3.41805 2.13025 2.36559 3.09851L2.3235 3.14061C1.60782 3.89838 1.18684 4.86664 1.06055 6.04539C1.06055 6.08749 1.06055 6.12959 1.06055 6.12959C1.06055 6.21378 1.06055 6.46637 1.06055 6.80316C1.10265 7.18204 1.10265 7.68722 1.10265 7.85562ZM3.37595 4.15097C4.21792 3.3932 5.27038 2.93012 6.15444 2.59333C8.34355 1.79346 9.7749 1.62507 12.1745 1.58297C12.3429 1.58297 15.6266 1.62507 18.1525 2.59333C19.0365 2.93012 20.089 3.3511 20.931 4.15097C21.394 4.65615 21.6887 5.32972 21.7729 6.12959C21.7729 6.25588 21.7729 6.46637 21.7729 6.80316C21.7729 7.22414 21.7729 7.68722 21.7729 7.81352C21.7308 8.78178 20.8047 8.99227 20.6784 8.99227H17.7736C17.3526 8.95017 16.679 8.78178 16.679 7.85562V6.12959C16.679 5.7928 16.4685 5.54021 16.1738 5.41392C15.9213 5.32972 8.55405 5.32972 8.30146 5.41392C8.00677 5.49811 7.79628 5.7928 7.79628 6.12959V7.85562C7.79628 8.78178 7.1227 8.95017 6.70172 8.99227H3.79694C3.67064 8.99227 2.74448 8.78178 2.70238 7.81352C2.70238 7.68722 2.70238 7.22414 2.70238 6.80316C2.70238 6.46637 2.70238 6.29798 2.70238 6.17169C2.61818 5.32972 2.91287 4.65615 3.37595 4.15097Z" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="text-dark mb-1 text-xl font-bold">Phone Number</h4>
                                    <p class="text-body-color text-base">(+62)81 414 257 9980</p>
                                </div>
                            </div>
                            <div class="mb-8 flex w-full max-w-[370px]">
                                <div
                                    class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                                    <svg width="28" height="19" viewBox="0 0 28 19" class="fill-current">
                                        <path
                                            d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="text-dark mb-1 text-xl font-bold">Email Address</h4>
                                    <p class="text-body-color text-base">southwavebeach@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                        <div class="relative rounded-lg bg-white p-8 shadow-lg sm:p-12">
                            <form>
                                <div class="mb-6">
                                    <input type="text" placeholder="Your Name"
                                        class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
                                </div>
                                <div class="mb-6">
                                    <input type="email" placeholder="Your Email"
                                        class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
                                </div>
                                <div class="mb-6">
                                    <input type="text" placeholder="Your Phone"
                                        class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
                                </div>
                                <div class="mb-6">
                                    <textarea rows="6" placeholder="Your Message"
                                        class="text-body-color border-[f0f0f0] focus:border-primary w-full resize-none rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="bg-primary border-primary w-full rounded border p-3 text-white transition hover:bg-opacity-90">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                            <div>
                                <span class="absolute -top-10 -right-9 z-[-1]">
                                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                            fill="#3056D3" />
                                    </svg>
                                </span>
                                <span class="absolute -right-10 top-[90px] z-[-1]">
                                    <svg width="34" height="134" viewBox="0 0 34 134" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="31.9993" cy="132" r="1.66667"
                                            transform="rotate(180 31.9993 132)" fill="#13C296" />
                                        <circle cx="31.9993" cy="117.333" r="1.66667"
                                            transform="rotate(180 31.9993 117.333)" fill="#13C296" />
                                        <circle cx="31.9993" cy="102.667" r="1.66667"
                                            transform="rotate(180 31.9993 102.667)" fill="#13C296" />
                                        <circle cx="31.9993" cy="88" r="1.66667"
                                            transform="rotate(180 31.9993 88)" fill="#13C296" />
                                        <circle cx="31.9993" cy="73.3333" r="1.66667"
                                            transform="rotate(180 31.9993 73.3333)" fill="#13C296" />
                                        <circle cx="31.9993" cy="45" r="1.66667"
                                            transform="rotate(180 31.9993 45)" fill="#13C296" />
                                        <circle cx="31.9993" cy="16" r="1.66667"
                                            transform="rotate(180 31.9993 16)" fill="#13C296" />
                                        <circle cx="31.9993" cy="59" r="1.66667"
                                            transform="rotate(180 31.9993 59)" fill="#13C296" />
                                        <circle cx="31.9993" cy="30.6666" r="1.66667"
                                            transform="rotate(180 31.9993 30.6666)" fill="#13C296" />
                                        <circle cx="31.9993" cy="1.66665" r="1.66667"
                                            transform="rotate(180 31.9993 1.66665)" fill="#13C296" />
                                        <circle cx="17.3333" cy="132" r="1.66667"
                                            transform="rotate(180 17.3333 132)" fill="#13C296" />
                                        <circle cx="17.3333" cy="117.333" r="1.66667"
                                            transform="rotate(180 17.3333 117.333)" fill="#13C296" />
                                        <circle cx="17.3333" cy="102.667" r="1.66667"
                                            transform="rotate(180 17.3333 102.667)" fill="#13C296" />
                                        <circle cx="17.3333" cy="88" r="1.66667"
                                            transform="rotate(180 17.3333 88)" fill="#13C296" />
                                        <circle cx="17.3333" cy="73.3333" r="1.66667"
                                            transform="rotate(180 17.3333 73.3333)" fill="#13C296" />
                                        <circle cx="17.3333" cy="45" r="1.66667"
                                            transform="rotate(180 17.3333 45)" fill="#13C296" />
                                        <circle cx="17.3333" cy="16" r="1.66667"
                                            transform="rotate(180 17.3333 16)" fill="#13C296" />
                                        <circle cx="17.3333" cy="59" r="1.66667"
                                            transform="rotate(180 17.3333 59)" fill="#13C296" />
                                        <circle cx="17.3333" cy="30.6666" r="1.66667"
                                            transform="rotate(180 17.3333 30.6666)" fill="#13C296" />
                                        <circle cx="17.3333" cy="1.66665" r="1.66667"
                                            transform="rotate(180 17.3333 1.66665)" fill="#13C296" />
                                        <circle cx="2.66536" cy="132" r="1.66667"
                                            transform="rotate(180 2.66536 132)" fill="#13C296" />
                                        <circle cx="2.66536" cy="117.333" r="1.66667"
                                            transform="rotate(180 2.66536 117.333)" fill="#13C296" />
                                        <circle cx="2.66536" cy="102.667" r="1.66667"
                                            transform="rotate(180 2.66536 102.667)" fill="#13C296" />
                                        <circle cx="2.66536" cy="88" r="1.66667"
                                            transform="rotate(180 2.66536 88)" fill="#13C296" />
                                        <circle cx="2.66536" cy="73.3333" r="1.66667"
                                            transform="rotate(180 2.66536 73.3333)" fill="#13C296" />
                                        <circle cx="2.66536" cy="45" r="1.66667"
                                            transform="rotate(180 2.66536 45)" fill="#13C296" />
                                        <circle cx="2.66536" cy="16" r="1.66667"
                                            transform="rotate(180 2.66536 16)" fill="#13C296" />
                                        <circle cx="2.66536" cy="59" r="1.66667"
                                            transform="rotate(180 2.66536 59)" fill="#13C296" />
                                        <circle cx="2.66536" cy="30.6666" r="1.66667"
                                            transform="rotate(180 2.66536 30.6666)" fill="#13C296" />
                                        <circle cx="2.66536" cy="1.66665" r="1.66667"
                                            transform="rotate(180 2.66536 1.66665)" fill="#13C296" />
                                    </svg>
                                </span>
                                <span class="absolute -left-7 -bottom-7 z-[-1]">
                                    <svg width="107" height="134" viewBox="0 0 107 134" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="104.999" cy="132" r="1.66667"
                                            transform="rotate(180 104.999 132)" fill="#13C296" />
                                        <circle cx="104.999" cy="117.333" r="1.66667"
                                            transform="rotate(180 104.999 117.333)" fill="#13C296" />
                                        <circle cx="104.999" cy="102.667" r="1.66667"
                                            transform="rotate(180 104.999 102.667)" fill="#13C296" />
                                        <circle cx="104.999" cy="88" r="1.66667"
                                            transform="rotate(180 104.999 88)" fill="#13C296" />
                                        <circle cx="104.999" cy="73.3333" r="1.66667"
                                            transform="rotate(180 104.999 73.3333)" fill="#13C296" />
                                        <circle cx="104.999" cy="45" r="1.66667"
                                            transform="rotate(180 104.999 45)" fill="#13C296" />
                                        <circle cx="104.999" cy="16" r="1.66667"
                                            transform="rotate(180 104.999 16)" fill="#13C296" />
                                        <circle cx="104.999" cy="59" r="1.66667"
                                            transform="rotate(180 104.999 59)" fill="#13C296" />
                                        <circle cx="104.999" cy="30.6666" r="1.66667"
                                            transform="rotate(180 104.999 30.6666)" fill="#13C296" />
                                        <circle cx="104.999" cy="1.66665" r="1.66667"
                                            transform="rotate(180 104.999 1.66665)" fill="#13C296" />
                                        <circle cx="90.3333" cy="132" r="1.66667"
                                            transform="rotate(180 90.3333 132)" fill="#13C296" />
                                        <circle cx="90.3333" cy="117.333" r="1.66667"
                                            transform="rotate(180 90.3333 117.333)" fill="#13C296" />
                                        <circle cx="90.3333" cy="102.667" r="1.66667"
                                            transform="rotate(180 90.3333 102.667)" fill="#13C296" />
                                        <circle cx="90.3333" cy="88" r="1.66667"
                                            transform="rotate(180 90.3333 88)" fill="#13C296" />
                                        <circle cx="90.3333" cy="73.3333" r="1.66667"
                                            transform="rotate(180 90.3333 73.3333)" fill="#13C296" />
                                        <circle cx="90.3333" cy="45" r="1.66667"
                                            transform="rotate(180 90.3333 45)" fill="#13C296" />
                                        <circle cx="90.3333" cy="16" r="1.66667"
                                            transform="rotate(180 90.3333 16)" fill="#13C296" />
                                        <circle cx="90.3333" cy="59" r="1.66667"
                                            transform="rotate(180 90.3333 59)" fill="#13C296" />
                                        <circle cx="90.3333" cy="30.6666" r="1.66667"
                                            transform="rotate(180 90.3333 30.6666)" fill="#13C296" />
                                        <circle cx="90.3333" cy="1.66665" r="1.66667"
                                            transform="rotate(180 90.3333 1.66665)" fill="#13C296" />
                                        <circle cx="75.6654" cy="132" r="1.66667"
                                            transform="rotate(180 75.6654 132)" fill="#13C296" />
                                        <circle cx="31.9993" cy="132" r="1.66667"
                                            transform="rotate(180 31.9993 132)" fill="#13C296" />
                                        <circle cx="75.6654" cy="117.333" r="1.66667"
                                            transform="rotate(180 75.6654 117.333)" fill="#13C296" />
                                        <circle cx="31.9993" cy="117.333" r="1.66667"
                                            transform="rotate(180 31.9993 117.333)" fill="#13C296" />
                                        <circle cx="75.6654" cy="102.667" r="1.66667"
                                            transform="rotate(180 75.6654 102.667)" fill="#13C296" />
                                        <circle cx="31.9993" cy="102.667" r="1.66667"
                                            transform="rotate(180 31.9993 102.667)" fill="#13C296" />
                                        <circle cx="75.6654" cy="88" r="1.66667"
                                            transform="rotate(180 75.6654 88)" fill="#13C296" />
                                        <circle cx="31.9993" cy="88" r="1.66667"
                                            transform="rotate(180 31.9993 88)" fill="#13C296" />
                                        <circle cx="75.6654" cy="73.3333" r="1.66667"
                                            transform="rotate(180 75.6654 73.3333)" fill="#13C296" />
                                        <circle cx="31.9993" cy="73.3333" r="1.66667"
                                            transform="rotate(180 31.9993 73.3333)" fill="#13C296" />
                                        <circle cx="75.6654" cy="45" r="1.66667"
                                            transform="rotate(180 75.6654 45)" fill="#13C296" />
                                        <circle cx="31.9993" cy="45" r="1.66667"
                                            transform="rotate(180 31.9993 45)" fill="#13C296" />
                                        <circle cx="75.6654" cy="16" r="1.66667"
                                            transform="rotate(180 75.6654 16)" fill="#13C296" />
                                        <circle cx="31.9993" cy="16" r="1.66667"
                                            transform="rotate(180 31.9993 16)" fill="#13C296" />
                                        <circle cx="75.6654" cy="59" r="1.66667"
                                            transform="rotate(180 75.6654 59)" fill="#13C296" />
                                        <circle cx="31.9993" cy="59" r="1.66667"
                                            transform="rotate(180 31.9993 59)" fill="#13C296" />
                                        <circle cx="75.6654" cy="30.6666" r="1.66667"
                                            transform="rotate(180 75.6654 30.6666)" fill="#13C296" />
                                        <circle cx="31.9993" cy="30.6666" r="1.66667"
                                            transform="rotate(180 31.9993 30.6666)" fill="#13C296" />
                                        <circle cx="75.6654" cy="1.66665" r="1.66667"
                                            transform="rotate(180 75.6654 1.66665)" fill="#13C296" />
                                        <circle cx="31.9993" cy="1.66665" r="1.66667"
                                            transform="rotate(180 31.9993 1.66665)" fill="#13C296" />
                                        <circle cx="60.9993" cy="132" r="1.66667"
                                            transform="rotate(180 60.9993 132)" fill="#13C296" />
                                        <circle cx="17.3333" cy="132" r="1.66667"
                                            transform="rotate(180 17.3333 132)" fill="#13C296" />
                                        <circle cx="60.9993" cy="117.333" r="1.66667"
                                            transform="rotate(180 60.9993 117.333)" fill="#13C296" />
                                        <circle cx="17.3333" cy="117.333" r="1.66667"
                                            transform="rotate(180 17.3333 117.333)" fill="#13C296" />
                                        <circle cx="60.9993" cy="102.667" r="1.66667"
                                            transform="rotate(180 60.9993 102.667)" fill="#13C296" />
                                        <circle cx="17.3333" cy="102.667" r="1.66667"
                                            transform="rotate(180 17.3333 102.667)" fill="#13C296" />
                                        <circle cx="60.9993" cy="88" r="1.66667"
                                            transform="rotate(180 60.9993 88)" fill="#13C296" />
                                        <circle cx="17.3333" cy="88" r="1.66667"
                                            transform="rotate(180 17.3333 88)" fill="#13C296" />
                                        <circle cx="60.9993" cy="73.3333" r="1.66667"
                                            transform="rotate(180 60.9993 73.3333)" fill="#13C296" />
                                        <circle cx="17.3333" cy="73.3333" r="1.66667"
                                            transform="rotate(180 17.3333 73.3333)" fill="#13C296" />
                                        <circle cx="60.9993" cy="45" r="1.66667"
                                            transform="rotate(180 60.9993 45)" fill="#13C296" />
                                        <circle cx="17.3333" cy="45" r="1.66667"
                                            transform="rotate(180 17.3333 45)" fill="#13C296" />
                                        <circle cx="60.9993" cy="16" r="1.66667"
                                            transform="rotate(180 60.9993 16)" fill="#13C296" />
                                        <circle cx="17.3333" cy="16" r="1.66667"
                                            transform="rotate(180 17.3333 16)" fill="#13C296" />
                                        <circle cx="60.9993" cy="59" r="1.66667"
                                            transform="rotate(180 60.9993 59)" fill="#13C296" />
                                        <circle cx="17.3333" cy="59" r="1.66667"
                                            transform="rotate(180 17.3333 59)" fill="#13C296" />
                                        <circle cx="60.9993" cy="30.6666" r="1.66667"
                                            transform="rotate(180 60.9993 30.6666)" fill="#13C296" />
                                        <circle cx="17.3333" cy="30.6666" r="1.66667"
                                            transform="rotate(180 17.3333 30.6666)" fill="#13C296" />
                                        <circle cx="60.9993" cy="1.66665" r="1.66667"
                                            transform="rotate(180 60.9993 1.66665)" fill="#13C296" />
                                        <circle cx="17.3333" cy="1.66665" r="1.66667"
                                            transform="rotate(180 17.3333 1.66665)" fill="#13C296" />
                                        <circle cx="46.3333" cy="132" r="1.66667"
                                            transform="rotate(180 46.3333 132)" fill="#13C296" />
                                        <circle cx="2.66536" cy="132" r="1.66667"
                                            transform="rotate(180 2.66536 132)" fill="#13C296" />
                                        <circle cx="46.3333" cy="117.333" r="1.66667"
                                            transform="rotate(180 46.3333 117.333)" fill="#13C296" />
                                        <circle cx="2.66536" cy="117.333" r="1.66667"
                                            transform="rotate(180 2.66536 117.333)" fill="#13C296" />
                                        <circle cx="46.3333" cy="102.667" r="1.66667"
                                            transform="rotate(180 46.3333 102.667)" fill="#13C296" />
                                        <circle cx="2.66536" cy="102.667" r="1.66667"
                                            transform="rotate(180 2.66536 102.667)" fill="#13C296" />
                                        <circle cx="46.3333" cy="88" r="1.66667"
                                            transform="rotate(180 46.3333 88)" fill="#13C296" />
                                        <circle cx="2.66536" cy="88" r="1.66667"
                                            transform="rotate(180 2.66536 88)" fill="#13C296" />
                                        <circle cx="46.3333" cy="73.3333" r="1.66667"
                                            transform="rotate(180 46.3333 73.3333)" fill="#13C296" />
                                        <circle cx="2.66536" cy="73.3333" r="1.66667"
                                            transform="rotate(180 2.66536 73.3333)" fill="#13C296" />
                                        <circle cx="46.3333" cy="45" r="1.66667"
                                            transform="rotate(180 46.3333 45)" fill="#13C296" />
                                        <circle cx="2.66536" cy="45" r="1.66667"
                                            transform="rotate(180 2.66536 45)" fill="#13C296" />
                                        <circle cx="46.3333" cy="16" r="1.66667"
                                            transform="rotate(180 46.3333 16)" fill="#13C296" />
                                        <circle cx="2.66536" cy="16" r="1.66667"
                                            transform="rotate(180 2.66536 16)" fill="#13C296" />
                                        <circle cx="46.3333" cy="59" r="1.66667"
                                            transform="rotate(180 46.3333 59)" fill="#13C296" />
                                        <circle cx="2.66536" cy="59" r="1.66667"
                                            transform="rotate(180 2.66536 59)" fill="#13C296" />
                                        <circle cx="46.3333" cy="30.6666" r="1.66667"
                                            transform="rotate(180 46.3333 30.6666)" fill="#13C296" />
                                        <circle cx="2.66536" cy="30.6666" r="1.66667"
                                            transform="rotate(180 2.66536 30.6666)" fill="#13C296" />
                                        <circle cx="46.3333" cy="1.66665" r="1.66667"
                                            transform="rotate(180 46.3333 1.66665)" fill="#13C296" />
                                        <circle cx="2.66536" cy="1.66665" r="1.66667"
                                            transform="rotate(180 2.66536 1.66665)" fill="#13C296" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Contact Section End -->

    </section>

    <footer class="bg-gray-800 mt-20 border-gray-200 overflow-hidden relative">
        <div class="absolute top-0 bottom-0 h-full w-full">
            <img src="{{ asset('images/footerbg.jpg') }}" class="object-cover opacity-30" alt="">
        </div>
        <div class="custom-shape-divider-top-1695878520 z-0">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="px-4  mx-auto max-w-7xl relative  pt-20 sm:px-6 lg:px-16">
            <div class="flex flex-col items-start justify-between pt-16  gap-y-12 lg:flex-row lg:items-center">
                <div>
                    <div class="flex items-center text-black">
                        <div>
                            <p class="font-semibold text-3xl leading-6 text-white uppercase">
                                SOUTH WAVE BEACH HOUSE
                            </p>

                        </div>
                    </div>
                    <nav class="flex gap-8 mt-11">
                        <a class="relative -my-2 -mx-3 rounded-lg px-3 py-2 text-sm text-white hover:text-blue-600 transition-colors delay-150 hover:delay-[0ms]"
                            href="#"><span class="relative z-10">Alpine</span></a><a
                            class="relative -my-2 -mx-3 rounded-lg px-3 py-2 text-sm text-white hover:text-blue-600 transition-colors delay-150 hover:delay-[0ms]"
                            href="#"><span class="relative z-10">Nextjs</span></a><a
                            class="relative -my-2 -mx-3 rounded-lg px-3 py-2 text-sm text-white hover:text-blue-600 transition-colors delay-150 hover:delay-[0ms]"
                            href="#"><span class="relative z-10">Tailwind</span></a><a
                            class="relative -my-2 -mx-3 rounded-lg px-3 py-2 text-sm text-white hover:text-blue-600 transition-colors delay-150 hover:delay-[0ms]"
                            href="#"><span class="relative z-10">FAQs</span></a>
                    </nav>
                </div>
                <div
                    class="relative mb-2 flex items-center self-stretch p-4 -mx-4 transition-colors group hover:bg-gray-100 sm:self-auto sm:rounded-2xl lg:mx-0 lg:self-auto lg:p-6">
                    <div class="relative flex items-center justify-center flex-none  rounded-xl">
                        <img src="{{ asset('images/logo.png') }}" class="h-16 rounded" alt="">
                    </div>
                    <div class="ml-8 lg:w-64">
                        <p class="text-base font-semibold text-gray-300 group-hover:text-black">
                            <a href="#"><span class="absolute inset-0 sm:rounded-2xl"></span>Stay
                                updated</a>
                        </p>
                        <p class="mt-1 text-sm group-hover:text-gray-800 text-white hover:text-blue-600">
                            Follow us for social media for news and updates
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col items-center pt-8 pb-8 border-t border-gray-200 md:flex-row-reverse md:justify-between md:pt-6">
                <div class="max-w-xl">
                    <form class="flex flex-col items-center justify-center max-w-sm mx-auto" action="">
                        <div class="flex flex-col w-full gap-1 mt-3 sm:flex-row">
                            <input name="email" type="email"
                                class="block w-full px-4 py-2 text-sm font-medium text-gray-800 placeholder-gray-400 bg-white border border-gray-300 rounded-full font-spline focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-600/50 disabled:opacity-50"
                                placeholder="Enter your email..." required=""><button type="button"
                                class="items-center inline-flex  justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-black border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none lg:w-auto focus-visible:outline-black text-sm focus-visible:ring-black">
                                <div style="position: relative"></div>
                                Subscribe<!-- -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true" class="w-4 h-auto ml-2">
                                    <path fill-rule="evenodd"
                                        d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <p class="mt-6 text-sm text-white md:mt-0">
                    © Copyright
                    <!-- -->2022
                    <!-- -->. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
