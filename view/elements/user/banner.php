<section class="banner-user">

    <div class="banner"
         style="background-image: url('<?= $user->cover ?>');">
        <div class="user-info">
            <img src="<?= $user->thumbnail ?>" alt="<?= $user->name ?>'s profile" class="thumbnail">
            <h1 class="h1 user-name"><?= $user->name ?></h1>
            <img class="country" src="https://osu.ppy.sh/images/flags/<?php $user->country ?>.png" alt="<?php $user->country ?>">
        </div>
    </div>

    <div class="stats">

            <span class="mappool-stat">
            Completed mappools<br><?= count($completed) ?>
            </span>
        <span class="mappool-stat">
            Completed mappools<br><?= count($submitted) ?>
            </span>
        <span class="mappool-stat">
            Completed mappools<br><?= count($follow) ?>
            </span>
        <span class="mappool-stat">
            Completed mappools<br><?= $user->rank ?>
            </span>

        <div class="stat-note">

            <div class="note">
                <svg viewBox="0 0 42 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.5 0H10.5C4.70101 0 0 4.70101 0 10.5C0 16.299 4.70101 21 10.5 21H31.5C37.299 21 42 16.299 42 10.5C42 4.70101 37.299 0 31.5 0Z"
                          fill="#CE1C9D"/>
                    <path d="M7.00781 15.0176V17.168H17.071C20.3134 17.168 21.5566 15.7904 21.5566 13.8416C21.5566 11.5232 19.8094 10.6664 17.1046 10.448L11.8126 10.028C9.93101 9.87676 9.49421 9.54076 9.49421 8.90236C9.49421 8.12956 10.1326 7.82716 11.2582 7.82716H20.8174V5.67676H11.4766C9.10781 5.67676 7.05821 6.53356 7.05821 8.96956C7.05821 11.0864 8.60381 12.0104 11.191 12.212L16.7518 12.6488C18.3982 12.7832 19.087 13.1696 19.087 13.9424C19.087 14.5808 18.6334 15.0176 17.2222 15.0176H7.00781ZM20.6808 15.0176V17.168H30.744C33.9864 17.168 35.2296 15.7904 35.2296 13.8416C35.2296 11.5232 33.4824 10.6664 30.7776 10.448L25.4856 10.028C23.604 9.87676 23.1672 9.54076 23.1672 8.90236C23.1672 8.12956 23.8056 7.82716 24.9312 7.82716H34.4904V5.67676H25.1496C22.7808 5.67676 20.7312 6.53356 20.7312 8.96956C20.7312 11.0864 22.2768 12.0104 24.864 12.212L30.4248 12.6488C32.0712 12.7832 32.76 13.1696 32.76 13.9424C32.76 14.5808 32.3064 15.0176 30.8952 15.0176H20.6808Z"
                          fill="#5E244E" fill-opacity="0.5"/>
                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="42"
                          height="21">
                        <path d="M31.5 0H10.5C4.70101 0 0 4.70101 0 10.5C0 16.299 4.70101 21 10.5 21H31.5C37.299 21 42 16.299 42 10.5C42 4.70101 37.299 0 31.5 0Z"
                              fill="#DE31AE"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M21.0003 -11.8125L43.7334 27.5625H-1.73291L21.0003 -11.8125Z" fill="#DE31AE"/>
                        <path d="M36.0938 3.9375L44.6187 18.7031H27.5688L36.0938 3.9375Z" fill="#C30B90"/>
                        <path d="M9.84396 -2.625L14.9589 6.23438H4.729L9.84396 -2.625Z" fill="#BE0089"/>
                        <path d="M12.469 17.0625L17.5839 25.9219H7.354L12.469 17.0625Z" fill="#BE0089"/>
                        <path d="M7.00781 15.0176V17.168H17.071C20.3134 17.168 21.5566 15.7904 21.5566 13.8416C21.5566 11.5232 19.8094 10.6664 17.1046 10.448L11.8126 10.028C9.93101 9.87676 9.49421 9.54076 9.49421 8.90236C9.49421 8.12956 10.1326 7.82716 11.2582 7.82716H20.8174V5.67676H11.4766C9.10781 5.67676 7.05821 6.53356 7.05821 8.96956C7.05821 11.0864 8.60381 12.0104 11.191 12.212L16.7518 12.6488C18.3982 12.7832 19.087 13.1696 19.087 13.9424C19.087 14.5808 18.6334 15.0176 17.2222 15.0176H7.00781ZM20.6808 15.0176V17.168H30.744C33.9864 17.168 35.2296 15.7904 35.2296 13.8416C35.2296 11.5232 33.4824 10.6664 30.7776 10.448L25.4856 10.028C23.604 9.87676 23.1672 9.54076 23.1672 8.90236C23.1672 8.12956 23.8056 7.82716 24.9312 7.82716H34.4904V5.67676H25.1496C22.7808 5.67676 20.7312 6.53356 20.7312 8.96956C20.7312 11.0864 22.2768 12.0104 24.864 12.212L30.4248 12.6488C32.0712 12.7832 32.76 13.1696 32.76 13.9424C32.76 14.5808 32.3064 15.0176 30.8952 15.0176H20.6808Z"
                              fill="#5E244E" fill-opacity="0.5"/>
                        <path d="M7.00781 13.7051V15.8555H17.071C20.3134 15.8555 21.5566 14.4779 21.5566 12.5291C21.5566 10.2107 19.8094 9.35386 17.1046 9.13546L11.8126 8.71546C9.93101 8.56426 9.49421 8.22826 9.49421 7.58986C9.49421 6.81706 10.1326 6.51466 11.2582 6.51466H20.8174V4.36426H11.4766C9.10781 4.36426 7.05821 5.22106 7.05821 7.65706C7.05821 9.77386 8.60381 10.6979 11.191 10.8995L16.7518 11.3363C18.3982 11.4707 19.087 11.8571 19.087 12.6299C19.087 13.2683 18.6334 13.7051 17.2222 13.7051H7.00781ZM20.6808 13.7051V15.8555H30.744C33.9864 15.8555 35.2296 14.4779 35.2296 12.5291C35.2296 10.2107 33.4824 9.35386 30.7776 9.13546L25.4856 8.71546C23.604 8.56426 23.1672 8.22826 23.1672 7.58986C23.1672 6.81706 23.8056 6.51466 24.9312 6.51466H34.4904V4.36426H25.1496C22.7808 4.36426 20.7312 5.22106 20.7312 7.65706C20.7312 9.77386 22.2768 10.6979 24.864 10.8995L30.4248 11.3363C32.0712 11.4707 32.76 11.8571 32.76 12.6299C32.76 13.2683 32.3064 13.7051 30.8952 13.7051H20.6808Z"
                              fill="url(#paint0_linear)"/>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear" x1="21" y1="2.73046" x2="21" y2="21.0005"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#AADFF0"/>
                        </linearGradient>
                    </defs>
                </svg>
                <span><?= $user->silver_ss ?></span>
            </div>

            <div class="note">
                <svg viewBox="0 0 42 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.5 0H10.5C4.70101 0 0 4.70101 0 10.5C0 16.299 4.70101 21 10.5 21H31.5C37.299 21 42 16.299 42 10.5C42 4.70101 37.299 0 31.5 0Z"
                          fill="#CE1C9D"/>
                    <path d="M7.00781 15.0176V17.168H17.071C20.3134 17.168 21.5566 15.7904 21.5566 13.8416C21.5566 11.5232 19.8094 10.6664 17.1046 10.448L11.8126 10.028C9.93101 9.87676 9.49421 9.54076 9.49421 8.90236C9.49421 8.12956 10.1326 7.82716 11.2582 7.82716H20.8174V5.67676H11.4766C9.10781 5.67676 7.05821 6.53356 7.05821 8.96956C7.05821 11.0864 8.60381 12.0104 11.191 12.212L16.7518 12.6488C18.3982 12.7832 19.087 13.1696 19.087 13.9424C19.087 14.5808 18.6334 15.0176 17.2222 15.0176H7.00781ZM20.6808 15.0176V17.168H30.744C33.9864 17.168 35.2296 15.7904 35.2296 13.8416C35.2296 11.5232 33.4824 10.6664 30.7776 10.448L25.4856 10.028C23.604 9.87676 23.1672 9.54076 23.1672 8.90236C23.1672 8.12956 23.8056 7.82716 24.9312 7.82716H34.4904V5.67676H25.1496C22.7808 5.67676 20.7312 6.53356 20.7312 8.96956C20.7312 11.0864 22.2768 12.0104 24.864 12.212L30.4248 12.6488C32.0712 12.7832 32.76 13.1696 32.76 13.9424C32.76 14.5808 32.3064 15.0176 30.8952 15.0176H20.6808Z"
                          fill="#5E244E" fill-opacity="0.5"/>
                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="42"
                          height="21">
                        <path d="M31.5 0H10.5C4.70101 0 0 4.70101 0 10.5C0 16.299 4.70101 21 10.5 21H31.5C37.299 21 42 16.299 42 10.5C42 4.70101 37.299 0 31.5 0Z"
                              fill="#DE31AE"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M21.0003 -11.8125L43.7334 27.5625H-1.73291L21.0003 -11.8125Z" fill="#DE31AE"/>
                        <path d="M36.0938 3.9375L44.6187 18.7031H27.5688L36.0938 3.9375Z" fill="#C30B90"/>
                        <path d="M9.84396 -2.625L14.9589 6.23438H4.729L9.84396 -2.625Z" fill="#BE0089"/>
                        <path d="M12.469 17.0625L17.5839 25.9219H7.354L12.469 17.0625Z" fill="#BE0089"/>
                        <path d="M7.00781 15.0176V17.168H17.071C20.3134 17.168 21.5566 15.7904 21.5566 13.8416C21.5566 11.5232 19.8094 10.6664 17.1046 10.448L11.8126 10.028C9.93101 9.87676 9.49421 9.54076 9.49421 8.90236C9.49421 8.12956 10.1326 7.82716 11.2582 7.82716H20.8174V5.67676H11.4766C9.10781 5.67676 7.05821 6.53356 7.05821 8.96956C7.05821 11.0864 8.60381 12.0104 11.191 12.212L16.7518 12.6488C18.3982 12.7832 19.087 13.1696 19.087 13.9424C19.087 14.5808 18.6334 15.0176 17.2222 15.0176H7.00781ZM20.6808 15.0176V17.168H30.744C33.9864 17.168 35.2296 15.7904 35.2296 13.8416C35.2296 11.5232 33.4824 10.6664 30.7776 10.448L25.4856 10.028C23.604 9.87676 23.1672 9.54076 23.1672 8.90236C23.1672 8.12956 23.8056 7.82716 24.9312 7.82716H34.4904V5.67676H25.1496C22.7808 5.67676 20.7312 6.53356 20.7312 8.96956C20.7312 11.0864 22.2768 12.0104 24.864 12.212L30.4248 12.6488C32.0712 12.7832 32.76 13.1696 32.76 13.9424C32.76 14.5808 32.3064 15.0176 30.8952 15.0176H20.6808Z"
                              fill="#5E244E" fill-opacity="0.5"/>
                        <path d="M7.00781 13.7051V15.8555H17.071C20.3134 15.8555 21.5566 14.4779 21.5566 12.5291C21.5566 10.2107 19.8094 9.35386 17.1046 9.13546L11.8126 8.71546C9.93101 8.56426 9.49421 8.22826 9.49421 7.58986C9.49421 6.81706 10.1326 6.51466 11.2582 6.51466H20.8174V4.36426H11.4766C9.10781 4.36426 7.05821 5.22106 7.05821 7.65706C7.05821 9.77386 8.60381 10.6979 11.191 10.8995L16.7518 11.3363C18.3982 11.4707 19.087 11.8571 19.087 12.6299C19.087 13.2683 18.6334 13.7051 17.2222 13.7051H7.00781ZM20.6808 13.7051V15.8555H30.744C33.9864 15.8555 35.2296 14.4779 35.2296 12.5291C35.2296 10.2107 33.4824 9.35386 30.7776 9.13546L25.4856 8.71546C23.604 8.56426 23.1672 8.22826 23.1672 7.58986C23.1672 6.81706 23.8056 6.51466 24.9312 6.51466H34.4904V4.36426H25.1496C22.7808 4.36426 20.7312 5.22106 20.7312 7.65706C20.7312 9.77386 22.2768 10.6979 24.864 10.8995L30.4248 11.3363C32.0712 11.4707 32.76 11.8571 32.76 12.6299C32.76 13.2683 32.3064 13.7051 30.8952 13.7051H20.6808Z"
                              fill="#5E244E"/>
                        <path d="M7.00781 13.7051V15.8555H17.071C20.3134 15.8555 21.5566 14.4779 21.5566 12.5291C21.5566 10.2107 19.8094 9.35386 17.1046 9.13546L11.8126 8.71546C9.93101 8.56426 9.49421 8.22826 9.49421 7.58986C9.49421 6.81706 10.1326 6.51466 11.2582 6.51466H20.8174V4.36426H11.4766C9.10781 4.36426 7.05821 5.22106 7.05821 7.65706C7.05821 9.77386 8.60381 10.6979 11.191 10.8995L16.7518 11.3363C18.3982 11.4707 19.087 11.8571 19.087 12.6299C19.087 13.2683 18.6334 13.7051 17.2222 13.7051H7.00781ZM20.6808 13.7051V15.8555H30.744C33.9864 15.8555 35.2296 14.4779 35.2296 12.5291C35.2296 10.2107 33.4824 9.35386 30.7776 9.13546L25.4856 8.71546C23.604 8.56426 23.1672 8.22826 23.1672 7.58986C23.1672 6.81706 23.8056 6.51466 24.9312 6.51466H34.4904V4.36426H25.1496C22.7808 4.36426 20.7312 5.22106 20.7312 7.65706C20.7312 9.77386 22.2768 10.6979 24.864 10.8995L30.4248 11.3363C32.0712 11.4707 32.76 11.8571 32.76 12.6299C32.76 13.2683 32.3064 13.7051 30.8952 13.7051H20.6808Z"
                              fill="url(#paint0_linear)"/>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear" x1="21" y1="2.73046" x2="21" y2="21.0005"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFE7A8"/>
                            <stop offset="1" stop-color="#FFB800"/>
                        </linearGradient>
                    </defs>
                </svg>
                <span><?= $user->ss ?></span>
            </div>

            <div class="note">
                <svg viewBox="0 0 42 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.5 0H10.5C4.70101 0 0 4.07522 0 9.10226C0 14.1293 4.70101 18.2045 10.5 18.2045H31.5C37.299 18.2045 42 14.1293 42 9.10226C42 4.07522 37.299 0 31.5 0Z"
                          fill="#00A8B5"/>
                    <path d="M13.8442 13.0183V14.8824H23.9076C27.15 14.8824 28.3932 13.6882 28.3932 11.9988C28.3932 9.98902 26.646 9.24628 23.9412 9.05695L18.649 8.69286C16.7674 8.56179 16.3306 8.27052 16.3306 7.7171C16.3306 7.04718 16.969 6.78503 18.0946 6.78503H27.654V4.9209H18.313C15.9442 4.9209 13.8946 5.66364 13.8946 7.77536C13.8946 9.61037 15.4402 10.4114 18.0274 10.5861L23.5884 10.9648C25.2348 11.0813 25.9236 11.4163 25.9236 12.0862C25.9236 12.6396 25.47 13.0183 24.0588 13.0183H13.8442Z"
                          fill="#095056" fill-opacity="0.5"/>
                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="42"
                          height="19">
                        <path d="M31.5 0H10.5C4.70101 0 0 4.07522 0 9.10226C0 14.1293 4.70101 18.2045 10.5 18.2045H31.5C37.299 18.2045 42 14.1293 42 9.10226C42 4.07522 37.299 0 31.5 0Z"
                              fill="#02B5C3"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M21.0003 -10.2402L43.7334 23.8932H-1.73291L21.0003 -10.2402Z" fill="#02B5C3"/>
                        <path d="M36.0938 3.41309L44.6187 16.2131H27.5688L36.0938 3.41309Z" fill="#009DAA"/>
                        <path d="M9.84396 -2.27539L14.9589 5.40463H4.729L9.84396 -2.27539Z" fill="#0096A2"/>
                        <path d="M12.469 14.791L17.5839 22.471H7.354L12.469 14.791Z" fill="#0096A2"/>
                        <path d="M13.8442 13.0183V14.8824H23.9076C27.15 14.8824 28.3932 13.6882 28.3932 11.9988C28.3932 9.98902 26.646 9.24628 23.9412 9.05695L18.649 8.69286C16.7674 8.56179 16.3306 8.27052 16.3306 7.7171C16.3306 7.04718 16.969 6.78503 18.0946 6.78503H27.654V4.9209H18.313C15.9442 4.9209 13.8946 5.66364 13.8946 7.77536C13.8946 9.61037 15.4402 10.4114 18.0274 10.5861L23.5884 10.9648C25.2348 11.0813 25.9236 11.4163 25.9236 12.0862C25.9236 12.6396 25.47 13.0183 24.0588 13.0183H13.8442Z"
                              fill="#095056" fill-opacity="0.5"/>
                        <path d="M13.8442 11.8806V13.7447H23.9076C27.15 13.7447 28.3932 12.5505 28.3932 10.8611C28.3932 8.85132 26.646 8.10858 23.9412 7.91926L18.649 7.55517C16.7674 7.42409 16.3306 7.13282 16.3306 6.57941C16.3306 5.90948 16.969 5.64734 18.0946 5.64734H27.654V3.7832H18.313C15.9442 3.7832 13.8946 4.52595 13.8946 6.63766C13.8946 8.47267 15.4402 9.27367 18.0274 9.44843L23.5884 9.82708C25.2348 9.94359 25.9236 10.2786 25.9236 10.9485C25.9236 11.5019 25.47 11.8806 24.0588 11.8806H13.8442Z"
                              fill="url(#paint0_linear)"/>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear" x1="21" y1="2.3669" x2="21" y2="18.2048"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#AADFF0"/>
                        </linearGradient>
                    </defs>
                </svg>
                <span><?= $user->silver_s ?></span>
            </div>

            <div class="note">
                <svg viewBox="0 0 42 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.5 0H10.5C4.70101 0 0 4.70101 0 10.5C0 16.299 4.70101 21 10.5 21H31.5C37.299 21 42 16.299 42 10.5C42 4.70101 37.299 0 31.5 0Z"
                          fill="#00A8B5"/>
                    <path d="M13.8442 15.0176V17.168H23.9076C27.15 17.168 28.3932 15.7904 28.3932 13.8416C28.3932 11.5232 26.646 10.6664 23.9412 10.448L18.649 10.028C16.7674 9.87676 16.3306 9.54076 16.3306 8.90236C16.3306 8.12956 16.969 7.82716 18.0946 7.82716H27.654V5.67676H18.313C15.9442 5.67676 13.8946 6.53356 13.8946 8.96956C13.8946 11.0864 15.4402 12.0104 18.0274 12.212L23.5884 12.6488C25.2348 12.7832 25.9236 13.1696 25.9236 13.9424C25.9236 14.5808 25.47 15.0176 24.0588 15.0176H13.8442Z"
                          fill="#095056" fill-opacity="0.5"/>
                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="42"
                          height="21">
                        <path d="M31.5 0H10.5C4.70101 0 0 4.70101 0 10.5C0 16.299 4.70101 21 10.5 21H31.5C37.299 21 42 16.299 42 10.5C42 4.70101 37.299 0 31.5 0Z"
                              fill="#02B5C3"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M21.0003 -11.8125L43.7334 27.5625H-1.73291L21.0003 -11.8125Z" fill="#02B5C3"/>
                        <path d="M36.0938 3.9375L44.6187 18.7031H27.5688L36.0938 3.9375Z" fill="#009DAA"/>
                        <path d="M9.84396 -2.625L14.9589 6.23438H4.729L9.84396 -2.625Z" fill="#0096A2"/>
                        <path d="M12.469 17.0625L17.5839 25.9219H7.354L12.469 17.0625Z" fill="#0096A2"/>
                        <path d="M13.8442 15.0176V17.168H23.9076C27.15 17.168 28.3932 15.7904 28.3932 13.8416C28.3932 11.5232 26.646 10.6664 23.9412 10.448L18.649 10.028C16.7674 9.87676 16.3306 9.54076 16.3306 8.90236C16.3306 8.12956 16.969 7.82716 18.0946 7.82716H27.654V5.67676H18.313C15.9442 5.67676 13.8946 6.53356 13.8946 8.96956C13.8946 11.0864 15.4402 12.0104 18.0274 12.212L23.5884 12.6488C25.2348 12.7832 25.9236 13.1696 25.9236 13.9424C25.9236 14.5808 25.47 15.0176 24.0588 15.0176H13.8442Z"
                              fill="#095056" fill-opacity="0.5"/>
                        <path d="M13.8442 13.7051V15.8555H23.9076C27.15 15.8555 28.3932 14.4779 28.3932 12.5291C28.3932 10.2107 26.646 9.35386 23.9412 9.13546L18.649 8.71546C16.7674 8.56426 16.3306 8.22826 16.3306 7.58986C16.3306 6.81706 16.969 6.51466 18.0946 6.51466H27.654V4.36426H18.313C15.9442 4.36426 13.8946 5.22106 13.8946 7.65706C13.8946 9.77386 15.4402 10.6979 18.0274 10.8995L23.5884 11.3363C25.2348 11.4707 25.9236 11.8571 25.9236 12.6299C25.9236 13.2683 25.47 13.7051 24.0588 13.7051H13.8442Z"
                              fill="url(#paint0_linear)"/>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear" x1="21" y1="2.73046" x2="21" y2="21.0005"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFE7A8"/>
                            <stop offset="1" stop-color="#FFB800"/>
                        </linearGradient>
                    </defs>
                </svg>
                <span><?= $user->s ?></span>
            </div>

            <div class="note">
                <svg viewBox="0 0 42 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.5 0H10.5C4.70101 0 0 4.70101 0 10.5C0 16.299 4.70101 21 10.5 21H31.5C37.299 21 42 16.299 42 10.5C42 4.70101 37.299 0 31.5 0Z"
                          fill="#7CCE14"/>
                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="42"
                          height="21">
                        <path d="M31.5 0H10.5C4.70101 0 0 4.70101 0 10.5C0 16.299 4.70101 21 10.5 21H31.5C37.299 21 42 16.299 42 10.5C42 4.70101 37.299 0 31.5 0Z"
                              fill="#88DA20"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M21.0003 -11.8125L43.7334 27.5625H-1.73291L21.0003 -11.8125Z" fill="#88DA20"/>
                        <path d="M36.0938 3.9375L44.6187 18.7031H27.5688L36.0938 3.9375Z" fill="#72C904"/>
                        <path d="M9.84396 -2.625L14.9589 6.23438H4.729L9.84396 -2.625Z" fill="#69BB00"/>
                        <path d="M12.469 17.0625L17.5839 25.9219H7.354L12.469 17.0625Z" fill="#69BB00"/>
                        <path d="M24.336 7.20855C23.643 5.86981 22.8398 4.9248 20.997 4.9248C19.1543 4.9248 18.3353 5.86981 17.658 7.20855L13.248 15.8553H15.6578L17.028 13.1936H24.966L26.3363 15.8553H28.7618L24.336 7.20855ZM23.9265 11.1933H18.0518L19.8788 7.6653C20.115 7.20855 20.4143 6.92506 20.997 6.92506C21.5798 6.92506 21.879 7.20855 22.1153 7.6653L23.9265 11.1933Z"
                              fill="#275227"/>
                    </g>
                </svg>
                <span><?= $user->a ?></span>
            </div>

        </div>

    </div>

</section>
