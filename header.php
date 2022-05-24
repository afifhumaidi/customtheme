<?php
/**
 * Contains the header
 **/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

    <?php wp_head()?>
</head>
<body <?php body_class()?>>

<div class="header d-flex justify-content-around align-items-center">

    <div class="header__logo">LOGO</div><!-- /.header__logo -->

    <div class="menu">
        <ul class="menu__list">
            <li>Find a Property</li>
            <li>Share Stories</li>
            <li>Rental Guides</li>
            <li>Download Mobile App</li>
        </ul>
    </div><!-- /.menu -->

    <div class="header__button">

        <div class="btn header__button_header">Become A Host</div>

        <div class="btn header__button_auth">

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H19C19.2652 0 19.5196 0.105357 19.7071 0.292893C19.8946 0.48043 20 0.734784 20 1C20 1.26522 19.8946 1.51957 19.7071 1.70711C19.5196 1.89464 19.2652 2 19 2H1C0.734784 2 0.48043 1.89464 0.292893 1.70711C0.105357 1.51957 0 1.26522 0 1Z" fill="#484848"/>
                <path d="M0 7.03198C0 6.76677 0.105357 6.51241 0.292893 6.32488C0.48043 6.13734 0.734784 6.03198 1 6.03198H19C19.2652 6.03198 19.5196 6.13734 19.7071 6.32488C19.8946 6.51241 20 6.76677 20 7.03198C20 7.2972 19.8946 7.55155 19.7071 7.73909C19.5196 7.92663 19.2652 8.03198 19 8.03198H1C0.734784 8.03198 0.48043 7.92663 0.292893 7.73909C0.105357 7.55155 0 7.2972 0 7.03198Z" fill="#484848"/>
                <path d="M1 12.064C0.734784 12.064 0.48043 12.1693 0.292893 12.3569C0.105357 12.5444 0 12.7987 0 13.064C0 13.3292 0.105357 13.5835 0.292893 13.7711C0.48043 13.9586 0.734784 14.064 1 14.064H19C19.2652 14.064 19.5196 13.9586 19.7071 13.7711C19.8946 13.5835 20 13.3292 20 13.064C20 12.7987 19.8946 12.5444 19.7071 12.3569C19.5196 12.1693 19.2652 12.064 19 12.064H1Z" fill="#484848"/>
            </svg>
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.9994 0.666748C9.06085 0.666748 0.666016 9.06158 0.666016 19.0001C0.666016 28.9386 9.06085 37.3334 18.9994 37.3334C28.9379 37.3334 37.3327 28.9386 37.3327 19.0001C37.3327 9.06158 28.9379 0.666748 18.9994 0.666748ZM18.9994 9.83342C22.1655 9.83342 24.4994 12.1654 24.4994 15.3334C24.4994 18.5014 22.1655 20.8334 18.9994 20.8334C15.835 20.8334 13.4994 18.5014 13.4994 15.3334C13.4994 12.1654 15.835 9.83342 18.9994 9.83342ZM9.63835 27.7487C11.2829 25.3287 14.0255 23.7154 17.166 23.7154H20.8327C23.975 23.7154 26.7159 25.3287 28.3604 27.7487C26.0174 30.2567 22.6935 31.8334 18.9994 31.8334C15.3052 31.8334 11.9814 30.2567 9.63835 27.7487Z" fill="#C2C6CC"/>
            </svg>

        </div>

    </div><!-- /.header__button -->

</div><!-- /.header -->