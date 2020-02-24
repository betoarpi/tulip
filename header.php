<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tulip</title>

    <script src="https://kit.fontawesome.com/fd7543ab2c.js" crossorigin="anonymous"></script>

     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="container header">
    <a href="/" class="header__logo">
        <svg viewBox="0 0 105 43">
            <g fill="#f54862" fill-rule="nonzero">
                <path d="M49.87 34h-2.74V8.489H38V6h21v2.578h-9.13z"></path>
                <path
                    d="M66.558 33.554c-.087-.535-.087-1.07-.087-1.695v-1.516h-.087c-.524 1.07-1.308 1.962-2.355 2.676a6.873 6.873 0 01-3.488.981c-2.18 0-3.838-.714-4.884-2.14C54.523 30.431 54 28.558 54 26.328V15h2.53v10.258c0 .892.086 1.784.26 2.676.088.714.35 1.428.786 2.052.348.535.872 1.07 1.395 1.338.61.357 1.395.446 2.267.446.698 0 1.309-.178 1.919-.446.61-.268 1.22-.803 1.657-1.338.523-.624.96-1.427 1.134-2.23.349-1.07.436-2.141.436-3.211V15h2.529v16.502c0 .803.087 1.517.087 2.141l-2.442-.089zM76 34h-3V6h3zM83 7.943c0 .53-.2.972-.598 1.325a2.102 2.102 0 01-2.79 0c-.798-.706-.798-1.855-.1-2.65l.1-.088a2.102 2.102 0 012.79 0c.399.442.598.972.598 1.413zM82.402 34h-2.89V15.54h2.89V34zM88.655 43H86V15.444h2.655v3.2h.092c.733-1.155 1.74-2.133 3.022-2.755 1.19-.622 2.472-.889 3.845-.889 1.282 0 2.656.267 3.846.711a8.254 8.254 0 012.93 2.045c.824.888 1.465 1.955 1.923 3.11.916 2.49.916 5.245 0 7.645-.458 1.156-1.099 2.222-1.923 3.111a8.254 8.254 0 01-2.93 2.045c-1.19.533-2.564.8-3.846.71-1.281 0-2.655-.355-3.845-.888-1.19-.622-2.29-1.511-3.022-2.667h-.092V43zm13.552-18.311c0-.978-.183-1.956-.458-2.933a6.35 6.35 0 00-1.373-2.4c-.641-.712-1.282-1.245-2.106-1.6-.916-.445-1.923-.623-2.93-.623-.916 0-1.923.178-2.747.534a6.304 6.304 0 00-2.198 1.6c-.64.71-1.099 1.51-1.465 2.4a8.105 8.105 0 000 5.866c.366.89.824 1.69 1.465 2.4 1.282 1.423 3.113 2.134 4.945 2.134a8.142 8.142 0 002.93-.534c.824-.355 1.557-.889 2.106-1.6a10.352 10.352 0 001.373-2.4c.275-.889.458-1.866.458-2.844zM33.365 24.207c-1.181-1.241-2.908-2.66-4.997-3.99l.817-1.596c1.09-2.128 3.453-7.36 2-9.4-.728-.975-2.363-1.507-5.18-1.507-1.998 0-3.997.266-5.996.621a27.85 27.85 0 00-1.453-5.32C17.92 1.33 17.102.355 16.284.089 16.103 0 15.83 0 15.648 0c-1.998 0-5.45 2.571-8.721 6.473C3.383 10.818.93 15.606.203 19.507c-.545 3.281-.272 7.715 4.361 10.73.455.975 1 1.862 1.727 2.57C8.289 34.937 11.378 36 15.285 36c3.725 0 8.45-1.064 12.72-2.926 1.998-.887 3.633-1.862 4.905-2.838 1.363-1.064 2.09-2.128 2.09-3.014 0-.887-.545-1.862-1.635-3.015zM3.202 20.66c-.273 1.685-.364 2.66.454 6.296-1.545-1.774-2.09-4.168-1.545-7.005.636-3.724 2.998-8.158 6.36-12.237a31.24 31.24 0 014.27-4.167c1.272-.976 2.271-1.508 2.907-1.508h.091c.636.266 1.726 2.75 2.544 6.828-3.089.798-5.905 1.862-8.267 3.192C7.199 13.655 5.2 15.517 4.2 17.645a6.996 6.996 0 00-1 3.015zm9.54-5.94c-2 0-3.635.443-4.998 1.24 1.908-1.861 4.634-3.103 6.814-3.99a52.336 52.336 0 013.998-1.24c.272 1.684.363 3.369.363 5.053-2.271-.71-4.36-1.064-6.178-1.064zm-5.997 3.812c1.272-1.419 3.816-1.862 6.087-1.862 1.817 0 3.907.355 6.178 1.153 0 1.418-.182 2.837-.363 4.256-.636 3.901-2.272 8.778-6.814 8.778-1.545 0-4.18-.71-5.36-2.571-1-1.596-1.273-3.281-1.182-4.966-.182-1.153.091-3.37 1.454-4.788zm19.987.71a51.315 51.315 0 00-5.905-2.838c0-2.04-.182-4.079-.454-6.118 1.908-.355 3.816-.621 5.723-.621 2.544 0 3.453.532 3.635.71.272.354.181 2.748-2.18 7.359-.273.532-.546 1.064-.819 1.507zm-5.996-.799a51.414 51.414 0 014.997 2.394 35.8 35.8 0 01-4.815 6.207c-1.09 1.153-2.362 2.128-3.725 2.926 1.544-1.684 2.635-4.256 3.18-7.625.181-1.33.363-2.572.363-3.902zm-7.359 14.542c3.543 0 9.085-2.926 13.991-11.084 1.908 1.242 3.544 2.572 4.634 3.725.908.975 1.09 1.507 1.09 1.596 0 .532-1.817 2.216-5.633 3.99-3.997 1.862-8.45 2.926-12.174 2.926-2.998 0-5.27-.62-6.905-1.95 1.636.531 3.27.797 4.997.797zM6.11 28.906l-.091-.088c.09 0 .09.088.09.088z">
                </path>
            </g>
        </svg>
    </a>
    <?php
        wp_nav_menu( array( 
            'theme_location' => 'main-menu', 
                'items_wrap' => '<nav class="header__nav"><ul>%3$s</ul></nav>',
                'container'=> '')); 
    ?>
    <?php
        wp_nav_menu( array( 
            'theme_location' => 'main-menu', 
                'items_wrap' => '<nav class="header__nav--mobile" id="menuMobile"><div class="btn--close" id="btnCloseMenu"><i class="fas fa-times"></i></div><ul>%3$s</ul></nav>',
                'container'=> '')); 
    ?>
    <div class="header__btnMenu" id="btnMenu">
        <i class="fas fa-bars"></i>
    </div>
</header>