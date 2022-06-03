<html lang="en" data-ng-app="website"
      style="--aktok-main-accent:#095d99; --aktok-main-accent-rgb:9, 93, 153; --aktok-chat-bubble:#cedfeb; --aktok-accent-bg-text:#FFF; --aktok-main-text:#3b3b3b;">
<head>
    <style type="text/css">@charset "UTF-8";
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Just To Canada</title>

    <!-- Favicon -->
    <link rel="icon"
          href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAXJJREFUOE9jZMAJQpk17fSUrh+qvQ1S8p+BgfGDg6k+iC1w4PRFRrAQAwMjsn5956b9MP7//wzMjIz/lRkYGG8FM9wXT/5/Q5WL4S8LVP49E+P/XP69p5eiGwA2FRnMvjRZUlVX8RoDA4MgmtR7gX2nhAkaMO/OggdKyiIKWH36778hQQPm3lnAoKwsgj2kiDFg6pU5DBoaYgzMzEzohhDnBZABAgIcDJKS/H+ZmBiZiQ7EX7//MDhYqjNEL6gE62H7zaDzRkyszVKCsR5fNMJj4fefPwz2FlAD/v//B4nz/0yM/xgcrN48OQjzD8FABHkBGfz//3+H7avHnmQb8O/PXxe7t0/3km7Av/8R8+SdEpIe7C6wefPsJvEGXJ4VzMDA1MbA8P99tk7qjYv76hKRvUQwDLr2TuURFP3HK/j69fsQp6YZeA0Amazn1DSbkZFBBWqLOgMDA9y5ILGLe+sccboAPanpOTarX9pfi2IAuhoAtpOeOf02YIAAAAAASUVORK5CYII="
          type="image/x-icon" hrefbak="images/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.min.css" media="all">
    <link rel="stylesheet" href="vendors/owl_carousel/owl.theme.min.css" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">

    <link rel="stylesheet" href="mt-includes/css/assets.min513c.css?_build=1633339793">
    <link rel="stylesheet" href="mt-demo/93200/93283/mt-content/assets/stylesdd7d.css?_build=1632936756"
          id="moto-website-style">
    <script type="text/javascript" async=""
            src="https://www.gstatic.com/recaptcha/releases/81cz2KigKZoE-gRplogO8692/recaptcha__en.js"
            crossorigin="anonymous"
            integrity="sha384-ChoQTNOOzOCXO6DTby1mHaC5TIg752BzBXFlYVusgc3aPsuwXbyFTr/fXAQAm2Yp"></script>
    <script src="mt-includes/js/website.assets.minc8df.js?_build=1632918612" type="text/javascript"
            data-cfasync="false"></script>

    <script src="mt-includes/js/website.min7b53.js?_build=1632918598" type="text/javascript"
            data-cfasync="false"></script>


    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
    <style>@import "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap";

        .chat-container[_ngcontent-sqp-c17] {
            color: var(--aktok-main-text)
        }

        div[_ngcontent-sqp-c17], p[_ngcontent-sqp-c17], a[_ngcontent-sqp-c17], li[_ngcontent-sqp-c17], textarea[_ngcontent-sqp-c17] {
            font-family: Montserrat, sans-serif;
            margin-block-start: 0;
            margin-block-end: 0
        }</style>
    <style>@charset "UTF-8";
        body[_ngcontent-sqp-c17]::-webkit-scrollbar {
            display: none;
            width: 8px
        }

        @media (max-width: 600px) {
            body[_ngcontent-sqp-c17]::-webkit-scrollbar {
                width: 4px
            }
        }

        body[_ngcontent-sqp-c17]::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, .2)
        }

        body[_ngcontent-sqp-c17]::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, .3)
        }

        #awsc-overlay[_ngcontent-sqp-c17] {
            position: fixed;
            inset: 0;
            background: #00000050
        }

        .chat-container.chat-popup[_ngcontent-sqp-c17] .chat-wrapper[_ngcontent-sqp-c17] {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .showAsPopup[_ngcontent-sqp-c17]:after {
            font-family: Segoe UI Symbol !important;
            content: "\29c9";
            font-size: 14px;
            margin-right: 5px;
            cursor: pointer
        }

        .chat-wrapper[_ngcontent-sqp-c17] {
            position: fixed;
            bottom: 82px;
            right: 24px;
            overscroll-behavior: contain;
            z-index: 100000;
            width: 400px;
            min-width: 400px;
            max-width: calc(100% - 24px);
            height: 75vH;
            min-height: 400px;
            max-height: 700px;
            color: var(--aktok-main-text) !important;
            background: #FFF;
            box-shadow: 0 12px 44px #0003;
            border-radius: 8px
        }

        @media (max-width: 600px) {
            .chat-wrapper[_ngcontent-sqp-c17] {
                right: 0;
                top: 0;
                bottom: 0;
                width: 90%;
                min-width: 90%;
                max-width: 90%;
                min-height: auto;
                max-height: 100vh;
                height: 90vH;
                box-sizing: border-box;
                border-radius: 0;
                padding-bottom: 20px
            }
        }

        .chat-box[_ngcontent-sqp-c17] {
            width: 100%;
            height: 100%;
            position: absolute;
            inset: 0
        }

        .chat-container.chat-container__focused[_ngcontent-sqp-c17] .chat-wrapper[_ngcontent-sqp-c17] {
            right: 38px
        }

        @media (max-width: 600px) {
            .chat-container.chat-container__focused[_ngcontent-sqp-c17] .chat-wrapper[_ngcontent-sqp-c17] {
                right: 0
            }
        }

        .chat-container.chat-container__focused[_ngcontent-sqp-c17] .chat-button {
            right: 38px
        }

        .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header {
            height: 88px
        }

        .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-button-close {
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: center
        }

        .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-button-close span {
            display: block;
            line-height: 1
        }

        .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-header-text {
            height: 64px;
            justify-content: flex-end
        }

        @media (max-width: 600px) {
            .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-header-text {
                padding: 15px 15px 0;
                height: auto
            }
        }

        .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-header-text .chat-header-title {
            font-size: 18px !important;
            margin-bottom: 12px !important;
            font-weight: 600
        }

        @media (max-width: 600px) {
            .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-header-text .chat-header-title {
                font-size: 18px !important
            }
        }

        .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-header-text .chat-header-subtitle {
            display: none
        }

        @media (max-width: 600px) {
            .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-header-text .chat-header-subtitle {
                font-size: 13px !important
            }
        }

        .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-header-info {
            padding: 12px 16px
        }

        @media (max-width: 600px) {
            .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-header-info {
                padding: 5px
            }
        }

        .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-networkstatus, .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-privacy, .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-assistant-request, .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-session {
            top: 128px
        }

        @media (max-width: 600px) {
            .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-networkstatus, .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-privacy, .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-assistant-request, .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-session {
                top: 107px
            }
        }

        .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-header .chat-actions .chat-menu-dropdown {
            top: 47px
        }

        .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-filed {
            top: 128px
        }

        @media (max-width: 600px) {
            .chat-container.chat-header__collapsed[_ngcontent-sqp-c17] .chat-filed {
                top: 107px
            }
        }

        .chat-footer[_ngcontent-sqp-c17] {
            position: absolute;
            font-size: 9px;
            line-height: 30px;
            font-weight: 700;
            text-align: center;
            color: #8c959c !important;
            bottom: 0;
            left: 0;
            right: 0
        }

        @media (max-width: 600px) {
            .chat-footer[_ngcontent-sqp-c17] {
                line-height: 20px
            }
        }

        .chat-footer[_ngcontent-sqp-c17] a[_ngcontent-sqp-c17] {
            color: var(--aktok-main-accent) !important;
            text-transform: uppercase;
            text-decoration: none
        }

        .chat-inner[_ngcontent-sqp-c17] {
            padding: 12px;
            position: relative;
            top: 0;
            height: calc(100% - 24px)
        }

        .chat-inner[_ngcontent-sqp-c17] .clear[_ngcontent-sqp-c17] {
            clear: both
        }

        .chat-inner[_ngcontent-sqp-c17] .chat-message[_ngcontent-sqp-c17] {
            opacity: 0
        }

        .chat-inner[_ngcontent-sqp-c17] .aktok-btn-prev[_ngcontent-sqp-c17] {
            display: block;
            padding: 4px 20px;
            margin: 5px auto;
            height: auto;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 700;
            font-size: 10px;
            line-height: 1.5;
            letter-spacing: .04em;
            text-transform: uppercase;
            background-color: #fff;
            border: 1px solid var(--aktok-main-accent)
        }

        .chat-inner[_ngcontent-sqp-c17] .aktok-btn-prev[_ngcontent-sqp-c17]:hover {
            background-color: rgba(var(--aktok-main-accent-rgb), .12)
        }

        .chat-box-footer[_ngcontent-sqp-c17] {
            color: #fff !important;
            height: 50px
        }

        .chat-processing[_ngcontent-sqp-c17] {
            position: absolute;
            bottom: 84px;
            left: 20px;
            right: 27px;
            text-align: center;
            font-size: 11px;
            z-index: 99;
            background: rgba(0, 0, 0, .2);
            border-radius: 5px;
            padding: 4px
        }

        .chat-processing.chat-error[_ngcontent-sqp-c17] {
            background: rgba(145, 0, 0, .6);
            color: #fff
        }</style>
    <style>.chat-message-date[_ngcontent-sqp-c17] {
            position: absolute;
            bottom: 22px;
            right: 10px
        }

        .chat-message-date[_ngcontent-sqp-c17] span[_ngcontent-sqp-c17] {
            border-radius: 2px;
            padding: 3px;
            font-size: 10px;
            font-style: normal;
            font-weight: 600;
            color: #07263f66 !important
        }

        .chat-message-date[_ngcontent-sqp-c17] .material-icons[_ngcontent-sqp-c17] {
            font-size: 14px;
            position: relative;
            top: 3px
        }

        .chat-message-date[_ngcontent-sqp-c17] .material-icons[_ngcontent-sqp-c17] svg[_ngcontent-sqp-c17] {
            fill: #07263f66
        }

        .chat-message[_ngcontent-sqp-c17] {
            transition: all .5s;
            position: relative;
            clear: both;
            padding: 0 0 15px 50px
        }

        .chat-message--hidden[_ngcontent-sqp-c17] {
            display: none
        }

        .chat-message[_ngcontent-sqp-c17] a[_ngcontent-sqp-c17] {
            color: #00f !important
        }

        .chat-message[_ngcontent-sqp-c17] a {
            color: #00f !important
        }

        .chat-message[_ngcontent-sqp-c17]:hover .msg-like-container[_ngcontent-sqp-c17] {
            opacity: 1
        }

        .chat-message[_ngcontent-sqp-c17] img[_ngcontent-sqp-c17] {
            position: absolute;
            bottom: 15px;
            left: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden
        }

        .chat-message[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] {
            font-size: 12px;
            line-height: 16px;
            font-weight: 400;
            position: relative;
            padding: 15px 15px 44px;
            box-shadow: 0 1px 1px #0000001a;
            width: 100%;
            -ms-word-break: break-word;
            word-break: break-word;
            white-space: pre-wrap;
            background: #ffffff;
            box-sizing: border-box
        }

        .chat-message[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] a {
            color: #0010ca !important
        }

        .chat-message[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] span[_ngcontent-sqp-c17] a[_ngcontent-sqp-c17] {
            color: #00f !important
        }

        .chat-message[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17] {
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
            bottom: 0;
            border-color: transparent transparent transparent #ffffff;
            box-shadow: 0 1px 1px #0000001a
        }

        .chat-message[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17]:after {
            content: "";
            position: absolute;
            width: 7px;
            height: 7px;
            z-index: 2;
            border-color: #fff
        }

        .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] {
            position: absolute;
            z-index: 999;
            bottom: 5px;
            left: 10px;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-content: flex-start;
            align-items: center;
            opacity: 0
        }

        .chat-message[_ngcontent-sqp-c17] .msg-like-container.active[_ngcontent-sqp-c17] {
            opacity: 1
        }

        .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote[_ngcontent-sqp-c17] {
            padding: 0;
            margin: 0 4px 0 0;
            width: 24px;
            height: 24px;
            line-height: 24px;
            text-align: center;
            color: #bec6cd !important;
            cursor: pointer;
            border-radius: 50%;
            background: #f3f2f2;
            display: flex;
            align-content: center;
            justify-content: center;
            align-items: center
        }

        .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote[_ngcontent-sqp-c17] .material-icons[_ngcontent-sqp-c17] {
            display: block;
            line-height: 1
        }

        .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote[_ngcontent-sqp-c17] .material-icons[_ngcontent-sqp-c17] svg[_ngcontent-sqp-c17] {
            fill: #07263f66
        }

        .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote[_ngcontent-sqp-c17]:hover, .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote.like-up[_ngcontent-sqp-c17], .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote.like-down[_ngcontent-sqp-c17] {
            background: var(--aktok-chat-bubble);
            box-shadow: 0 1px 2px rgba(var(--aktok-main-accent-rgb), .7)
        }

        .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote.like-up[_ngcontent-sqp-c17] {
            color: #09d261 !important
        }

        .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote.like-up[_ngcontent-sqp-c17] .material-icons[_ngcontent-sqp-c17] svg[_ngcontent-sqp-c17] {
            fill: #09d261
        }

        .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote.like-down[_ngcontent-sqp-c17] {
            color: #ef4236 !important
        }

        .chat-message[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote.like-down[_ngcontent-sqp-c17] .material-icons[_ngcontent-sqp-c17] svg[_ngcontent-sqp-c17] {
            fill: #ef4236
        }

        .chat-message[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-sent[_ngcontent-sqp-c17], .chat-message[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-delivered[_ngcontent-sqp-c17] {
            display: none
        }

        .chat-message.chat-message-sent[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] {
            border-radius: 6px 6px 0;
            background: var(--aktok-chat-bubble)
        }

        .chat-message.chat-message-sent[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17] {
            border-width: 7px 0 0 7px;
            right: -7px;
            border-color: transparent transparent transparent var(--aktok-chat-bubble)
        }

        .chat-message.chat-message-sent[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17]:after {
            right: 0;
            bottom: 0;
            border-color: var(--aktok-chat-bubble)
        }

        .chat-message.chat-message-sent[_ngcontent-sqp-c17] .msg-like-container[_ngcontent-sqp-c17] .msg-vote[_ngcontent-sqp-c17] {
            background: #ffffff
        }

        .chat-message.chat-message-sent[_ngcontent-sqp-c17] .chat-message-date[_ngcontent-sqp-c17] {
            right: 60px
        }

        .chat-message.chat-message-sent[_ngcontent-sqp-c17], .chat-message.me--seen[_ngcontent-sqp-c17] {
            padding: 0 50px 15px 0
        }

        .chat-message.chat-message-sent[_ngcontent-sqp-c17] img[_ngcontent-sqp-c17], .chat-message.me--seen[_ngcontent-sqp-c17] img[_ngcontent-sqp-c17] {
            right: 0;
            left: auto
        }

        .chat-message.chat-message-sent[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17], .chat-message.me--seen[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] {
            border-radius: 5px 5px 0
        }

        .chat-message.chat-message-sent[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17], .chat-message.me--seen[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17] {
            left: auto;
            right: -5px
        }

        .chat-message.chat-message-sent--send[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-sent[_ngcontent-sqp-c17], .chat-message.me--seen--send[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-sent[_ngcontent-sqp-c17] {
            display: block
        }

        .chat-message.chat-message-sent--send[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-delivered[_ngcontent-sqp-c17], .chat-message.me--seen--send[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-delivered[_ngcontent-sqp-c17], .chat-message.chat-message-sent--delivered[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-sent[_ngcontent-sqp-c17], .chat-message.me--seen--delivered[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-sent[_ngcontent-sqp-c17] {
            display: none
        }

        .chat-message.chat-message-sent--delivered[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-delivered[_ngcontent-sqp-c17], .chat-message.me--seen--delivered[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-delivered[_ngcontent-sqp-c17] {
            display: block
        }

        .chat-message.chat-message-sent.msg-medium[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17], .chat-message.me--seen.msg-medium[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] {
            padding-bottom: 15px
        }

        .chat-message.chat-message-sent.msg-small[_ngcontent-sqp-c17], .chat-message.me--seen.msg-small[_ngcontent-sqp-c17] {
            padding: 0 47px 6px 42%
        }

        .chat-message.chat-message-sent.msg-small[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17], .chat-message.me--seen.msg-small[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] {
            padding-bottom: 15px
        }

        .chat-message.chat-message-received[_ngcontent-sqp-c17], .chat-message.msg-bot[_ngcontent-sqp-c17], .chat-message.msg-operator[_ngcontent-sqp-c17] {
            transition: all .2s
        }

        .chat-message.chat-message-received.chat-incoming-unseen[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17], .chat-message.msg-bot.chat-incoming-unseen[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17], .chat-message.msg-operator.chat-incoming-unseen[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] {
            background-color: rgba(var(--aktok-main-accent-rgb), .08)
        }

        .chat-message.chat-message-received.chat-incoming-unseen[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17], .chat-message.msg-bot.chat-incoming-unseen[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17], .chat-message.msg-operator.chat-incoming-unseen[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17] {
            border-color: transparent transparent rgba(var(--aktok-main-accent-rgb), .08) transparent
        }

        .chat-message.chat-message-received.chat-incoming-highlight[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17], .chat-message.msg-bot.chat-incoming-highlight[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17], .chat-message.msg-operator.chat-incoming-highlight[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] {
            background-color: rgba(var(--aktok-main-accent-rgb), .16)
        }

        .chat-message.chat-message-received.chat-incoming-highlight[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17], .chat-message.msg-bot.chat-incoming-highlight[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17], .chat-message.msg-operator.chat-incoming-highlight[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17] {
            border-color: transparent transparent rgba(var(--aktok-main-accent-rgb), .16) transparent
        }

        .chat-message.chat-message-received--seen[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-sent[_ngcontent-sqp-c17], .chat-message.msg-bot--seen[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-sent[_ngcontent-sqp-c17], .chat-message.msg-operator--seen[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-sent[_ngcontent-sqp-c17] {
            display: none
        }

        .chat-message.chat-message-received--seen[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-delivered[_ngcontent-sqp-c17], .chat-message.msg-bot--seen[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-delivered[_ngcontent-sqp-c17], .chat-message.msg-operator--seen[_ngcontent-sqp-c17] .aktokwsc__chat-msgstate[_ngcontent-sqp-c17] .msg-delivered[_ngcontent-sqp-c17] {
            display: block
        }

        .chat-message.chat-message-received[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17], .chat-message.msg-bot[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17], .chat-message.msg-operator[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] {
            border-radius: 6px 6px 6px 0
        }

        .chat-message.chat-message-received[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17], .chat-message.msg-bot[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17], .chat-message.msg-operator[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17] {
            border-color: transparent transparent #ffffff transparent;
            border-width: 0 0 7px 7px;
            left: -7px
        }

        .chat-message.chat-message-received[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17]:after, .chat-message.msg-bot[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17]:after, .chat-message.msg-operator[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .corner[_ngcontent-sqp-c17]:after {
            right: 0;
            top: 0
        }

        .chat-message.chat-message-received[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .aktokwsc__chat-msg-time-state-row[_ngcontent-sqp-c17], .chat-message.msg-bot[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .aktokwsc__chat-msg-time-state-row[_ngcontent-sqp-c17], .chat-message.msg-operator[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .aktokwsc__chat-msg-time-state-row[_ngcontent-sqp-c17] {
            width: calc(100% - 80px)
        }

        .chat-message.msg-action[_ngcontent-sqp-c17] {
            margin-top: 12px
        }

        .chat-message.msg-action[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] {
            padding: 10px;
            width: auto;
            display: inline-block;
            border-radius: 18px
        }

        .chat-message.msg-action[_ngcontent-sqp-c17] .bubble[_ngcontent-sqp-c17] .bubble-inner[_ngcontent-sqp-c17] {
            display: flex
        }

        .chat-message.msg-action[_ngcontent-sqp-c17] .aktokwsc__typing-block[_ngcontent-sqp-c17] {
            align-items: center;
            display: flex;
            height: 14px;
            margin-left: 8px;
            margin-right: 8px;
            position: relative;
            top: 5px
        }

        .chat-message.msg-action[_ngcontent-sqp-c17] .aktokwsc__typing-dot[_ngcontent-sqp-c17] {
            animation: mercuryTypingAnimation 1.5s infinite ease-in-out;
            border-radius: 4px;
            display: inline-block;
            height: 4px;
            margin-right: 4px;
            width: 4px
        }

        @keyframes mercuryTypingAnimation {
            0% {
                transform: translateY(0)
            }
            28% {
                transform: translateY(-3px)
            }
            44% {
                transform: translateY(0)
            }
        }

        .chat-message.msg-action[_ngcontent-sqp-c17] .aktokwsc__typing-dot[_ngcontent-sqp-c17]:nth-child(1) {
            animation-delay: .2s
        }

        .chat-message.msg-action[_ngcontent-sqp-c17] .aktokwsc__typing-dot[_ngcontent-sqp-c17]:nth-child(2) {
            animation-delay: .3s
        }

        .chat-message.msg-action[_ngcontent-sqp-c17] .aktokwsc__typing-dot[_ngcontent-sqp-c17]:nth-child(3) {
            animation-delay: .4s
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-btn[_ngcontent-sqp-c17] {
            display: inline-block;
            padding: 4px 20px;
            margin-top: 5px;
            margin-right: 5px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 700;
            font-size: 10px;
            letter-spacing: .04em;
            text-transform: uppercase;
            background-color: #fff;
            border: 1px solid var(--aktok-main-accent)
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-btn[_ngcontent-sqp-c17]:hover {
            background-color: rgba(var(--aktok-main-accent-rgb), .12)
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-btn--disabled[_ngcontent-sqp-c17], .chat-message[_ngcontent-sqp-c17] .aktok-btn[_ngcontent-sqp-c17]:disabled {
            background-color: #fff;
            cursor: not-allowed
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-btn--mydisabled[_ngcontent-sqp-c17] {
            opacity: .5;
            cursor: not-allowed
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-btn--link[_ngcontent-sqp-c17] {
            border: none;
            background: none !important
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-btn--link[_ngcontent-sqp-c17]:hover {
            text-decoration: underline
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-btn--skip[_ngcontent-sqp-c17] {
            border: none;
            background: none !important;
            font-weight: 300;
            font-size: 70%
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-btn--skip[_ngcontent-sqp-c17]:hover {
            text-decoration: underline
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] {
            padding: 8px;
            border: 2px dashed;
            border-radius: 6px;
            margin: 5px auto;
            text-align: center;
            font-size: 12px
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload.hidden[_ngcontent-sqp-c17], .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] [type=file][_ngcontent-sqp-c17] {
            display: none
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] .button[_ngcontent-sqp-c17] {
            border-radius: 4px;
            cursor: pointer;
            padding: 4px 8px
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] .aktok-upload-form.hidden[_ngcontent-sqp-c17], .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] .aktok-upload-selected.hidden[_ngcontent-sqp-c17] {
            display: none
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] progress[_ngcontent-sqp-c17] {
            display: block;
            width: 150px;
            margin: 2em auto;
            padding: 4px;
            border: 0 none;
            border-radius: 14px
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] progress.hidden[_ngcontent-sqp-c17] {
            display: none
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] progress[_ngcontent-sqp-c17]::-moz-progress-bar {
            border-radius: 12px
        }

        @media screen and (-webkit-min-device-pixel-ratio: 0) {
            .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] progress[_ngcontent-sqp-c17] {
                height: 25px
            }
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] progress[_ngcontent-sqp-c17]::-webkit-progress-bar {
            background: transparent
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload[_ngcontent-sqp-c17] progress[_ngcontent-sqp-c17]::-webkit-progress-value {
            border-radius: 12px
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload-result[_ngcontent-sqp-c17] {
            border: 2px dashed;
            border-radius: 6px;
            padding: 8px;
            margin: 5px auto;
            text-align: center;
            font-size: 12px
        }

        .chat-message[_ngcontent-sqp-c17] .aktok-upload-result.hidden[_ngcontent-sqp-c17] {
            display: none
        }

        .chat-message.chat-system-message[_ngcontent-sqp-c17] {
            padding: 0 0 15px
        }

        .chat-message.chat-system-message[_ngcontent-sqp-c17] .chat-message-container[_ngcontent-sqp-c17] .chat-message-text[_ngcontent-sqp-c17] {
            font-size: 60%;
            position: relative;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-content: center;
            align-items: center;
            width: auto;
            background: none;
            margin: 0;
            padding: 10px 0
        }

        .chat-message.chat-system-message[_ngcontent-sqp-c17] .chat-message-container[_ngcontent-sqp-c17] .chat-message-text[_ngcontent-sqp-c17]:before, .chat-message.chat-system-message[_ngcontent-sqp-c17] .chat-message-container[_ngcontent-sqp-c17] .chat-message-text[_ngcontent-sqp-c17]:after {
            content: "";
            position: absolute;
            right: 0;
            left: 0;
            width: 100%;
            height: 1px;
            border: 0;
            background: #fafafa;
            background: linear-gradient(to right, #fafafa 0%, #d7d7d7 20%, #d7d7d7 80%, #d7d7d7 80%, #fafafa 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#fafafa", endColorstr="#fafafa", GradientType=1)
        }

        .chat-message.chat-system-message[_ngcontent-sqp-c17] .chat-message-container[_ngcontent-sqp-c17] .chat-message-text[_ngcontent-sqp-c17]:before {
            top: 0
        }

        .chat-message.chat-system-message[_ngcontent-sqp-c17] .chat-message-container[_ngcontent-sqp-c17] .chat-message-text[_ngcontent-sqp-c17]:after {
            bottom: 0
        }

        .chat-message.chat-system-message[_ngcontent-sqp-c17] .chat-message-date[_ngcontent-sqp-c17] {
            position: static;
            margin-left: 20px;
            padding-top: 0;
            padding-bottom: 0
        }</style>
    <style>.chat-filed[_ngcontent-sqp-c17] {
            position: absolute;
            z-index: 1;
            inset: 165px 15px 80px;
            overscroll-behavior: contain;
            -ms-overflow-y: scroll;
            overflow-y: scroll;
            -ms-overflow-x: hidden;
            overflow-x: hidden;
            background: #F2F2F2;
            border-bottom: 2px solid var(--aktok-main-accent) !important;
            box-shadow: 0 2px 4px #0000001a
        }

        .chat-filed[_ngcontent-sqp-c17]::-webkit-scrollbar {
            display: none;
            width: 8px
        }

        @media (max-width: 600px) {
            .chat-filed[_ngcontent-sqp-c17]::-webkit-scrollbar {
                width: 4px
            }
        }

        .chat-filed[_ngcontent-sqp-c17]::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, .2)
        }

        .chat-filed[_ngcontent-sqp-c17]::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, .3)
        }

        @media (max-width: 600px) {
            .chat-filed[_ngcontent-sqp-c17] {
                left: 7px;
                right: 7px;
                bottom: 70px
            }
        }

        .chat-filed.scrolled-down[_ngcontent-sqp-c17] .chat-inner[_ngcontent-sqp-c17] .chat-message[_ngcontent-sqp-c17] {
            opacity: 1
        }

        .chat-filed.scrolled-down[_ngcontent-sqp-c17]::-webkit-scrollbar {
            display: block
        }</style>
</head>
<body id="home">


<!-- Preloader -->
<!--<div class="preloader"></div> -->


<!--<a href="get-appointment.php" class="  btn-fix"><i class="fa-edit fa"></i> Get Appointment</a> -->

<!-- Header_Area -->
<nav class="navbar navbar-default header_aera affix-top" id="main_navbar"><!-- Top Header_Area -->
    <div class="top_header_area">
        <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="tel:9055860440"><i class="fa fa-phone"></i> 905.586.0440 </a></li>
                <li><a href="mailto:info@just2canada.ca"><i class="fa fa-envelope"></i> info@just2canada.ca</a></li>
            </ul>
            <a href="https://iccrc-crcic.ca/" target="_blank" rel="noopener">
                <img class="iccrc alignnone wp-image-1601 size-full top-icc" src="images/iccrc.png" alt="" width="300"
                     height="50"></a>
            <a href="skilled-worker-assessment.php" class="btn navbar-right" data-animation="animated fadeInUp">Skilled
                Worker Assessment </a>
            <a href="business-immigration-assessment.php" class="btn navbar-right" data-animation="animated fadeInUp">Business
                Assessment </a>
            <div class="link-fixed">
                <!-- Calendly inline widget begin -->

                <div class="calendly-inline-widget"
                     data-url="https://calendly.com/anoolal/book-an-appointment-by-phone-with-anoo-lal"
                     style="position: relative;min-width:320px;height:480px;" data-processed="true">
                    <div class="calendly-spinner">
                        <div class="calendly-bounce1"></div>
                        <div class="calendly-bounce2"></div>
                        <div class="calendly-bounce3"></div>
                    </div>
                    <iframe
                        src="https://calendly.com/anoolal/book-an-appointment-by-phone-with-anoo-lal?embed_domain=just2canada.ca&amp;embed_type=Inline"
                        width="100%" height="100%" frameborder="0"></iframe>
                </div>

                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"
                        async=""></script>

                <!-- Calendly inline widget end -->
            </div>
            <!-- <ul class="nav navbar-nav navbar-right social_nav">
                 <li><a href="https://www.facebook.com/Just2Canada" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                 <li><a href="https://twitter.com/Just2Canada" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                 <li><a href="https://www.instagram.com/just2canada/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/just2canada" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                 <li><a href="https://just2canada.ca/skilled-worker-assessment-questionnaire/#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                 <li><a href="https://api.whatsapp.com/send?phone=+19055860440" target="_blank"><i class="fa-whatsapp fa" aria-hidden="true"></i></a></li>
             </ul> -->
        </div>
    </div>
    <!-- End Top Header_Area -->
    <div class="container">
        <!-- searchForm -->
        <div class="searchForm">
            <form action="#" class="row m0">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="search" name="search" class="form-control" placeholder="Type &amp; Hit Enter">
                    <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                </div>
            </form>
        </div><!-- End searchForm -->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-md-3 p0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" class="img-fluid"></a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="col-md-9 p0">
            <div class="collapse navbar-collapse" id="min_navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="js-scroll-trigger active" href="about-us.html">About Us</a>


                    </li>


                    <li>
                        <a class="js-scroll-trigger" href="personal-immigration.html">SKILLED WORKERS IMMIGRATION</a>
                    </li>

                    <li><a href="business-immigration.html">Business Immigration</a></li>

                    <!--<li><a href="contact-us.php">Contact Us</a></li> -->

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container -->
</nav>
<!-- End Header_Area -->
