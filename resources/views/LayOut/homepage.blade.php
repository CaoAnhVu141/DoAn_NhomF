<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <header id="header" class="header fixed-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="https://www.facebook.com/HackerPLK.OffCiryLife?mibextid=ZbWKwL">Longkhanh.Developer@TDC.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+84 0777 888 333</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding">

            <di class="container position-relative d-flex align-items-center justify-content-between">
                <a href="home" class="logo d-flex align-items-center">
                    <h1 class="">Mini Shop</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li class="dropdown has-dropdown"><a href="#"><span>?</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Danh Mục Chi Tiết Sản Phẩm</a></li>
                                <li class="dropdown has-dropdown"><a href="#"><span>Danh Mục Sản Phẩm</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Danh Mục User</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li>
                        <li class="megamenu has-dropdown me-3"><a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="#">Column 1 link 1</a>
                                    <a href="#">Column 1 link 2</a>
                                    <a href="#">Column 1 link 3</a>
                                </li>
                                <li>
                                    <a href="#">Column 2 link 1</a>
                                    <a href="#">Column 2 link 2</a>
                                    <a href="#">Column 3 link 3</a>
                                </li>
                                <li>
                                    <a href="#">Column 3 link 1</a>
                                    <a href="#">Column 3 link 2</a>
                                    <a href="#">Column 3 link 3</a>
                                </li>
                                <li>
                                    <a href="#">Column 4 link 1</a>
                                    <a href="#">Column 4 link 2</a>
                                    <a href="#">Column 4 link 3</a>
                                </li>
                                <li>
                                    <a href="#">Column 5 link 1</a>
                                    <a href="#">Column 5 link 2</a>
                                    <a href="#">Column 5 link 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown has-dropdown"><i class="bi bi-chevron-down mt-5"><img src=""  class="img-fluid ms-5" alt="Tôi"></i></a>
                            <ul>
                                <li><a href="#">Setting</a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#">-----------</a></li>
                                <li><a href="#">Đăng Xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </di>
        </div>

    </header>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>




















<style>
:root {
    --default-font: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --heading-font: "Raleway", sans-serif;
    --nav-font: "Poppins", sans-serif;
  }
  
  /* Global Colors */
  :root {
    --background-color: #ffffff;
    --background-color-rgb: 255, 255, 255;
    --default-color: #444444;
    --default-color-rgb: 68, 68, 68;
    --heading-color: #191919;
    --heading-color-rgb: 25, 25, 25;
    --accent-color: #cc1616;
    --accent-color-rgb: 204, 22, 22;
    --contrast-color: #ffffff;
    --contrast-color-rgb: 255, 255, 255;
  }
  
  /* Nav Menu Colors */
  :root {
    --nav-color: #ffffff;
    --nav-hover-color: #cc1616;
    --nav-dropdown-color: #212529;
    --nav-dropdown-hover-color: #cc1616;
    --nav-dropdown-background-color: #ffffff;
  }
  
  /* Smooth scroll */
  :root {
    scroll-behavior: smooth;
  }
  
  /*--------------------------------------------------------------
  # General
  --------------------------------------------------------------*/
  body {
    color: var(--default-color);
    background-color: var(--background-color);
    font-family: var(--default-font);
  }
  
  a {
    color: var(--accent-color);
    text-decoration: none;
    transition: 0.3s;
  }
  
  a:hover {
    color: rgba(var(--accent-color-rgb), 0.75);
    text-decoration: none;
  }
  
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    color: var(--heading-color);
    font-family: var(--heading-font);
  }
  
  /*--------------------------------------------------------------
  # Global Header
  --------------------------------------------------------------*/
  .header {
    --background-color: #242424;
    --default-color: #ffffff;
    --default-color-rgb: 255, 255, 255;
    --heading-color: #ffffff;
    --heading-color: #ffffff;
    --heading-color-rgb: 255, 255, 255;
    --contrast-color: #ffffff;
    color: var(--default-color);
    transition: all 0.5s;
    z-index: 997;
    background-color: var(--background-color);
  }
  
  .header .topbar {
    background-color: var(--background-color);
    height: 40px;
    padding: 0;
    font-size: 14px;
    transition: all 0.5s;
  }
  
  .header .topbar .contact-info i {
    font-style: normal;
    color: var(--accent-color);
  }
  
  .header .topbar .contact-info i a,
  .header .topbar .contact-info i span {
    padding-left: 5px;
    color: var(--default-color);
  }
  
  @media (max-width: 575px) {
  
    .header .topbar .contact-info i a,
    .header .topbar .contact-info i span {
      font-size: 13px;
    }
  }
  
  .header .topbar .contact-info i a {
    line-height: 0;
    transition: 0.3s;
  }
  
  .header .topbar .contact-info i a:hover {
    color: var(--contrast-color);
    text-decoration: underline;
  }
  
  .header .topbar .social-links a {
    color: rgba(var(--default-color-rgb), 0.6);
    line-height: 0;
    transition: 0.3s;
    margin-left: 20px;
  }
  
  .header .topbar .social-links a:hover {
    color: var(--accent-color);
  }
  
  .header .branding {
    background-color: rgba(var(--default-color-rgb), 0.05);
  }
  
  .header .logo {
    line-height: 1;
  }
  
  .header .logo img {
    max-height: 36px;
    margin-right: 8px;
  }
  
  .header .logo h1 {
    font-size: 30px;
    margin: 0;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--heading-color);
  }
  
  /*--------------------------------------------------------------
  # Navigation Menu
  --------------------------------------------------------------*/
  /* Desktop Navigation */
  @media (min-width: 1200px) {
    .navmenu {
      padding: 0;
    }
  
    .navmenu ul {
      margin: 0;
      padding: 0;
      display: flex;
      list-style: none;
      align-items: center;
    }
  
    .navmenu li {
      position: relative;
    }
  
    .navmenu a,
    .navmenu a:focus {
      color: var(--nav-color);
      padding: 20px 15px;
      margin-left: 2px;
      font-size: 16px;
      font-family: var(--nav-font);
      font-weight: 400;
      display: flex;
      align-items: center;
      justify-content: space-between;
      white-space: nowrap;
      transition: 0.3s;
    }
  
    .navmenu a i,
    .navmenu a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
      transition: 0.3s;
    }
  
    .navmenu li:hover>a,
    .navmenu .active,
    .navmenu .active:focus {
      color: var(--contrast-color);
      background-color: var(--nav-hover-color);
    }
  
    .navmenu .dropdown ul {
      margin: 0;
      padding: 0;
      background: var(--nav-dropdown-background-color);
      display: block;
      position: absolute;
      visibility: hidden;
      left: 2px;
      top: 130%;
      opacity: 0;
      transition: 0.3s;
      z-index: 99;
      box-shadow: 0px 0px 30px rgba(var(--default-color-rgb), 0.15);
    }
  
    .navmenu .dropdown ul li {
      min-width: 200px;
    }
  
    .navmenu .dropdown ul a {
      padding: 10px 20px;
      margin: 0;
      font-size: 15px;
      text-transform: none;
      color: var(--nav-dropdown-color);
    }
  
    .navmenu .dropdown ul a i {
      font-size: 12px;
    }
  
    .navmenu .dropdown ul a:hover,
    .navmenu .dropdown ul .active:hover,
    .navmenu .dropdown ul li:hover>a {
      color: var(--contrast-color);
      background-color: var(--nav-hover-color);
    }
  
    .navmenu .dropdown:hover>ul {
      opacity: 1;
      top: 100%;
      visibility: visible;
    }
  
    .navmenu .dropdown .dropdown ul {
      top: 0;
      left: -90%;
      visibility: hidden;
    }
  
    .navmenu .dropdown .dropdown:hover>ul {
      opacity: 1;
      top: 0;
      left: -100%;
      visibility: visible;
    }
  
    .navmenu .megamenu {
      position: static;
    }
  
    .navmenu .megamenu ul {
      margin: 0;
      padding: 10px;
      background: var(--nav-dropdown-background-color);
      box-shadow: 0px 0px 20px rgba(var(--default-color-rgb), 0.1);
      display: block;
      position: absolute;
      top: 130%;
      left: 0;
      right: 0;
      visibility: hidden;
      opacity: 0;
      display: flex;
      transition: 0.3s;
      z-index: 99;
    }
  
    .navmenu .megamenu ul li {
      flex: 1;
    }
  
    .navmenu .megamenu ul li a,
    .navmenu .megamenu ul li:hover>a {
      font-size: 15px;
      padding: 10px 20px;
      color: var(--nav-dropdown-color);
      background-color: var(--contrast-color);
    }
  
    .navmenu .megamenu ul li a:hover,
    .navmenu .megamenu ul li .active,
    .navmenu .megamenu ul li .active:hover {
      color: var(--contrast-color);
      background-color: var(--nav-hover-color);
    }
  
    .navmenu .megamenu:hover>ul {
      opacity: 1;
      top: 100%;
      visibility: visible;
    }
  
    .navmenu .dd-box-shadow {
      box-shadow: 0px 0px 30px rgba(var(--default-color-rgb), 0.15);
    }
  }
  
  /* Mobile Navigation */
  @media (max-width: 1199px) {
    .mobile-nav-toggle {
      color: var(--nav-color);
      font-size: 28px;
      line-height: 0;
      margin-right: 10px;
      cursor: pointer;
      transition: color 0.3s;
    }
  
    .navmenu {
      padding: 0;
      z-index: 9997;
    }
  
    .navmenu ul {
      display: none;
      position: absolute;
      inset: 60px 20px 20px 20px;
      padding: 10px 0;
      margin: 0;
      border-radius: 6px;
      background-color: var(--nav-dropdown-background-color);
      overflow-y: auto;
      transition: 0.3s;
      z-index: 9998;
      box-shadow: 0px 0px 30px rgba(var(--default-color-rgb), 0.1);
    }
  
    .navmenu a,
    .navmenu a:focus {
      color: var(--nav-dropdown-color);
      padding: 10px 20px;
      font-family: var(--nav-font);
      font-size: 17px;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: space-between;
      white-space: nowrap;
      transition: 0.3s;
    }
  
    .navmenu a i,
    .navmenu a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      transition: 0.3s;
      background-color: rgba(var(--accent-color-rgb), 0.1);
    }
  
    .navmenu a i:hover,
    .navmenu a:focus i:hover {
      background-color: var(--accent-color);
      color: var(--contrast-color);
    }
  
    .navmenu a:hover,
    .navmenu .active,
    .navmenu .active:focus {
      color: var(--nav-dropdown-hover-color);
    }
  
    .navmenu .active i,
    .navmenu .active:focus i {
      background-color: var(--accent-color);
      color: var(--contrast-color);
      transform: rotate(180deg);
    }
  
    .navmenu .dropdown ul,
    .navmenu .megamenu ul {
      position: static;
      display: none;
      z-index: 99;
      padding: 10px 0;
      margin: 10px 20px;
      background-color: var(--nav-dropdown-background-color);
      transition: all 0.5s ease-in-out;
    }
  
    .navmenu .dropdown ul ul,
    .navmenu .megamenu ul ul {
      background-color: rgba(33, 37, 41, 0.1);
    }
  
    .navmenu .dropdown>.dropdown-active,
    .navmenu .megamenu>.dropdown-active {
      display: block;
      background-color: rgba(33, 37, 41, 0.03);
    }
  
    .mobile-nav-active {
      overflow: hidden;
    }
  
    .mobile-nav-active .mobile-nav-toggle {
      color: #fff;
      position: absolute;
      font-size: 32px;
      top: 15px;
      right: 15px;
      margin-right: 0;
      z-index: 9999;
    }
  
    .mobile-nav-active .navmenu {
      position: fixed;
      overflow: hidden;
      inset: 0;
      background: rgba(33, 37, 41, 0.8);
      transition: 0.3s;
    }
  
    .mobile-nav-active .navmenu>ul {
      display: block;
    }
  }
  
  /*--------------------------------------------------------------
  # Global Footer
  --------------------------------------------------------------*/
  .footer {
    --background-color: #0c0c0c;
    --default-color: #ffffff;
    --default-color-rgb: 255, 255, 255;
    --heading-color: #f9f9f9;
    --heading-color: #f9f9f9;
    --heading-color-rgb: 249, 249, 249;
    color: var(--default-color);
    background-color: var(--background-color);
    font-size: 14px;
    padding-bottom: 50px;
    position: relative;
  }
  
  .footer .footer-top {
    padding-top: 50px;
    border-top: 1px solid rgba(var(--default-color-rgb), 0.1);
  }
  
  .footer .footer-about {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: rgba(var(--default-color-rgb), 0.05);
    border-top: 4px solid var(--accent-color);
    padding: 30px 20px;
  }
  
  .footer .footer-about .logo {
    margin-bottom: 5px;
    letter-spacing: 1px;
    font-family: var(--heading-font);
    color: var(--heading-color);
    font-size: 36px;
    padding: 0;
    font-weight: 700;
  }
  
  .footer .footer-about p {
    font-size: 14px;
    text-align: center;
    font-family: var(--heading-font);
  }
  
  .footer .social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid rgba(var(--default-color-rgb), 0.5);
    font-size: 16px;
    color: rgba(var(--default-color-rgb), 0.7);
    margin-right: 10px;
    transition: 0.3s;
  }
  
  .footer .social-links a:hover {
    color: var(--accent-color);
    border-color: var(--accent-color);
  }
  
  .footer h4 {
    font-size: 16px;
    font-weight: bold;
    position: relative;
    padding-bottom: 12px;
  }
  
  .footer .footer-links {
    margin-bottom: 30px;
  }
  
  .footer .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .footer .footer-links ul i {
    padding-right: 2px;
    font-size: 12px;
    line-height: 0;
  }
  
  .footer .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }
  
  .footer .footer-links ul li:first-child {
    padding-top: 0;
  }
  
  .footer .footer-links ul a {
    color: rgba(var(--default-color-rgb), 0.7);
    display: inline-block;
    line-height: 1;
  }
  
  .footer .footer-links ul a:hover {
    color: var(--accent-color);
  }
  
  .footer .footer-contact p {
    margin-bottom: 5px;
  }
  
  .footer .footer-newsletter .newsletter-form {
    margin-top: 30px;
    padding: 6px 8px;
    position: relative;
    border-radius: 0;
    border: 1px solid rgba(var(--default-color-rgb), 0.2);
    display: flex;
    background-color: var(--background-color);
    transition: 0.3s;
  }
  
  .footer .footer-newsletter .newsletter-form:focus-within {
    border-color: var(--accent-color);
  }
  
  .footer .footer-newsletter .newsletter-form input[type=email] {
    border: 0;
    padding: 4px;
    width: 100%;
    background-color: var(--background-color);
    color: var(--default-color);
  }
  
  .footer .footer-newsletter .newsletter-form input[type=email]:focus-visible {
    outline: none;
  }
  
  .footer .footer-newsletter .newsletter-form input[type=submit] {
    border: 0;
    font-size: 16px;
    padding: 0 20px;
    margin: -8px -9px -8px 0;
    background: var(--accent-color);
    color: var(--contrast-color);
    transition: 0.3s;
    border-radius: 0;
  }
  
  .footer .footer-newsletter .newsletter-form input[type=submit]:hover {
    background: rgba(var(--accent-color-rgb), 0.8);
  }
  
  .footer .footer-newsletter .error-message {
    display: none;
    background: #df1529;
    color: #ffffff;
    text-align: left;
    padding: 15px;
    margin-top: 10px;
    font-weight: 600;
    border-radius: 4px;
  }
  
  .footer .footer-newsletter .sent-message {
    display: none;
    color: #ffffff;
    background: #059652;
    text-align: center;
    padding: 15px;
    margin-top: 10px;
    font-weight: 600;
    border-radius: 4px;
  }
  
  .footer .footer-newsletter .loading {
    display: none;
    background: var(--background-color);
    text-align: center;
    padding: 15px;
    margin-top: 10px;
  }
  
  .footer .footer-newsletter .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid var(--accent-color);
    border-top-color: var(--background-color);
    animation: subscription-loading 1s linear infinite;
  }
  
  @keyframes subscription-loading {
    0% {
      transform: rotate(0deg);
    }
  
    100% {
      transform: rotate(360deg);
    }
  }
  
  .footer .copyright {
    padding-top: 25px;
    padding-bottom: 25px;
    border-top: 1px solid rgba(var(--default-color-rgb), 0.1);
  }
  
  .footer .copyright p {
    margin-bottom: 0;
  }
  
  .footer .credits {
    margin-top: 6px;
    font-size: 13px;
  }
  
  /*--------------------------------------------------------------
  # Scroll Top Button
  --------------------------------------------------------------*/
  .scroll-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 99999;
    background-color: var(--accent-color);
    width: 40px;
    height: 40px;
    transition: all 0.4s;
  }
  
  .scroll-top i {
    font-size: 24px;
    color: var(--contrast-color);
    line-height: 0;
  }
  
  .scroll-top:hover {
    background-color: rgba(var(--accent-color-rgb), 0.8);
    color: var(--contrast-color);
  }
  
  .scroll-top.active {
    visibility: visible;
    opacity: 1;
  }
  
  /*--------------------------------------------------------------
  # Disable aos animation delay on mobile devices
  --------------------------------------------------------------*/
  @media screen and (max-width: 768px) {
    [data-aos-delay] {
      transition-delay: 0 !important;
    }
  }
  
  /*--------------------------------------------------------------
  # Global Page Titles & Breadcrumbs
  --------------------------------------------------------------*/
  .page-title {
    --background-color: #0c0c0c;
    --default-color: var(--contrast-color);
    --default-color-rgb: var(--contrast-color-rgb);
    --heading-color: var(--contrast-color);
    --accent-color: var(--contrast-color);
    color: var(--default-color);
    background-color: var(--background-color);
    padding: 20px 0;
    position: relative;
  }
  
  .page-title h1 {
    font-size: 28px;
    font-weight: 700;
    margin: 0;
  }
  
  .page-title .breadcrumbs ol {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding: 0 0 10px 0;
    margin: 0;
    font-size: 14px;
  }
  
  .page-title .breadcrumbs ol li+li {
    padding-left: 10px;
  }
  
  .page-title .breadcrumbs ol li+li::before {
    content: "/";
    display: inline-block;
    padding-right: 10px;
    color: rgba(var(--default-color-rgb), 0.3);
  }
  
  /*--------------------------------------------------------------
  # Global Sections
  --------------------------------------------------------------*/
  section,
  .section {
    color: var(--default-color);
    background-color: var(--background-color);
    padding: 60px 0;
    scroll-margin-top: 100px;
    overflow: clip;
  }
  
  @media (max-width: 1199px) {
  
    section,
    .section {
      scroll-margin-top: 66px;
    }
  }
  
  /*--------------------------------------------------------------
  # Global Section Titles
  --------------------------------------------------------------*/
  .section-title {
    text-align: center;
    padding: 30px 0;
    margin-bottom: 30px;
    position: relative;
  }
  
  .section-title h2 {
    font-size: 32px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding-bottom: 0;
    position: relative;
    z-index: 2;
  }
  
  .section-title span {
    position: absolute;
    top: 4px;
    color: rgba(var(--heading-color-rgb), 0.05);
    left: 0;
    right: 0;
    z-index: 1;
    font-weight: 700;
    font-size: 52px;
    text-transform: uppercase;
    line-height: 1;
  }
  
  .section-title p {
    margin-bottom: 0;
    position: relative;
    z-index: 2;
  }
  
  @media (max-width: 575px) {
    .section-title h2 {
      font-size: 28px;
      margin-bottom: 15px;
    }
  
    .section-title span {
      font-size: 38px;
    }
  }
  
  /*--------------------------------------------------------------
  # Hero Section
  --------------------------------------------------------------*/
  .hero {
    --default-color: #ffffff;
    --default-color-rgb: 255, 255, 255;
    --background-color-rgb: 0, 0, 0;
    --heading-color: #ffffff;
    --heading-color-rgb: 169, 167, 167;
    width: 100%;
    min-height: 100vh;
    position: relative;
    padding: 160px 0 100px 0;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .hero img {
    position: absolute;
    inset: 0;
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
  }
  
  .hero:before {
    content: "";
    background: rgba(var(--background-color-rgb), 0.7);
    position: absolute;
    inset: 0;
    z-index: 2;
  }
  
  .hero .container {
    position: relative;
    z-index: 3;
  }
  
  .hero h2 {
    margin: 0;
    font-size: 48px;
    text-transform: uppercase;
    font-weight: 700;
  }
  
  .hero p {
    margin: 10px 0 0 0;
    font-size: 24px;
    color: var(--heading-color);
  }
  
  .hero .btn-get-started {
    color: var(--default-color);
    font-weight: 400;
    font-size: 15px;
    display: inline-block;
    padding: 8px 30px;
    margin: 30px 0 0 0;
    transition: 0.5s;
    text-transform: uppercase;
    border: 2px solid rgba(var(--default-color-rgb), 0.8);
  }
  
  .hero .btn-get-started:hover {
    color: var(--contrast-color);
    background: var(--accent-color);
    border-color: var(--accent-color);
  }
  
  @media (max-width: 768px) {
    .hero h2 {
      font-size: 32px;
    }
  
    .hero p {
      font-size: 18px;
    }
  }
  
  /*--------------------------------------------------------------
  # About Section
  --------------------------------------------------------------*/
  .about .content h3 {
    font-size: 2rem;
    font-weight: 700;
  }
  
  .about .content ul {
    list-style: none;
    padding: 0;
  }
  
  .about .content ul li {
    padding-bottom: 10px;
  }
  
  .about .content ul i {
    font-size: 1.25rem;
    margin-right: 4px;
    color: var(--accent-color);
  }
  
  .about .content p:last-child {
    margin-bottom: 0;
  }
  
  .about .content .read-more {
    background: var(--accent-color);
    color: var(--contrast-color);
    font-family: var(--heading-font);
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    padding: 12px 30px;
    transition: 0.3s;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }
  
  .about .content .read-more i {
    font-size: 18px;
    margin-left: 5px;
    line-height: 0;
    transition: 0.3s;
  }
  
  .about .content .read-more:hover {
    background: rgba(var(--accent-color-rgb), 0.8);
    padding-right: 25px;
  }
  
  .about .content .read-more:hover i {
    margin-left: 10px;
  }
  
  /*--------------------------------------------------------------
  # Cards Section
  --------------------------------------------------------------*/
  .cards .card {
    background-color: var(--background-color);
    color: var(--default-color);
    border: 1px solid rgba(var(--default-color-rgb), 0.1);
    padding: 40px;
    margin: -1px;
    border-radius: 0;
  }
  
  .cards .card span {
    display: block;
    font-size: 24px;
    font-weight: 400;
    color: var(--accent-color);
  }
  
  .cards .card h4 {
    color: rgba(var(--heading-color-rgb), 0.8);
    font-size: 24px;
    font-weight: 600;
    padding: 0;
    margin: 20px 0;
  }
  
  .cards .card p {
    color: rgba(var(--default-color-rgb), 0.6);
    font-size: 15px;
    margin: 0;
    padding: 0;
  }
  
  /*--------------------------------------------------------------
  # Clients Section
  --------------------------------------------------------------*/
  .clients {
    --background-color: rgba(var(--default-color-rgb), .05);
    padding: 15px 0;
  }
  
  .clients .swiper {
    padding: 10px 0;
  }
  
  .clients .swiper-wrapper {
    height: auto;
  }
  
  .clients .swiper-slide img {
    transition: 0.3s;
  }
  
  .clients .swiper-slide img:hover {
    transform: scale(1.1);
  }
  
  /*--------------------------------------------------------------
  # Services Section
  --------------------------------------------------------------*/
  .services .service-item {
    text-align: center;
    border: 1px solid rgba(var(--default-color-rgb), 0.15);
    padding: 80px 20px;
    transition: all ease-in-out 0.3s;
    height: 100%;
  }
  
  .services .service-item .icon {
    margin: 0 auto;
    width: 64px;
    height: 64px;
    background: var(--accent-color);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    transition: 0.3s;
    transform-style: preserve-3d;
  }
  
  .services .service-item .icon i {
    color: var(--contrast-color);
    font-size: 28px;
    transition: ease-in-out 0.3s;
  }
  
  .services .service-item .icon::before {
    position: absolute;
    content: "";
    left: -8px;
    top: -8px;
    height: 100%;
    width: 100%;
    background: rgba(var(--accent-color-rgb), 0.2);
    transition: all 0.3s ease-out 0s;
    transform: translateZ(-1px);
  }
  
  .services .service-item h3 {
    font-weight: 700;
    margin: 10px 0 15px 0;
    font-size: 22px;
  }
  
  .services .service-item p {
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }
  
  .services .service-item:hover {
    background: var(--accent-color);
    border-color: var(--accent-color);
  }
  
  .services .service-item:hover .icon {
    background: var(--contrast-color);
  }
  
  .services .service-item:hover .icon i {
    color: var(--accent-color);
  }
  
  .services .service-item:hover .icon::before {
    background: rgba(var(--background-color-rgb), 0.3);
  }
  
  .services .service-item:hover h3,
  .services .service-item:hover p {
    color: var(--contrast-color);
  }
  
  /*--------------------------------------------------------------
  # Call To Action Section
  --------------------------------------------------------------*/
  .call-to-action {
    --default-color: #ffffff;
    --background-color-rgb: 0, 0, 0;
    --contrast-color: #ffffff;
    padding: 120px 0;
    position: relative;
    clip-path: inset(0);
  }
  
  .call-to-action img {
    position: fixed;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
  }
  
  .call-to-action:before {
    content: "";
    background: rgba(var(--background-color-rgb), 0.5);
    position: absolute;
    inset: 0;
    z-index: 2;
  }
  
  .call-to-action .container {
    position: relative;
    z-index: 3;
  }
  
  .call-to-action h3 {
    font-size: 28px;
    font-weight: 700;
    color: var(--default-color);
  }
  
  .call-to-action p {
    color: var(--default-color);
  }
  
  .call-to-action .cta-btn {
    font-family: var(--heading-font);
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 12px 40px;
    border-radius: 5px;
    transition: 0.5s;
    margin: 10px;
    border: 2px solid var(--contrast-color);
    color: var(--contrast-color);
  }
  
  .call-to-action .cta-btn:hover {
    background: var(--accent-color);
    border: 2px solid var(--accent-color);
  }
  
  /*--------------------------------------------------------------
  # Portfolio Section
  --------------------------------------------------------------*/
  .portfolio .portfolio-filters {
    padding: 0;
    margin: 0 auto 20px auto;
    list-style: none;
    text-align: center;
  }
  
  .portfolio .portfolio-filters li {
    cursor: pointer;
    display: inline-block;
    padding: 8px 20px 10px 20px;
    margin: 0;
    font-size: 15px;
    font-weight: 500;
    line-height: 1;
    margin-bottom: 5px;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
    font-family: var(--heading-font);
  }
  
  .portfolio .portfolio-filters li:hover,
  .portfolio .portfolio-filters li.filter-active {
    color: var(--contrast-color);
    background-color: var(--accent-color);
  }
  
  .portfolio .portfolio-filters li:first-child {
    margin-left: 0;
  }
  
  .portfolio .portfolio-filters li:last-child {
    margin-right: 0;
  }
  
  @media (max-width: 575px) {
    .portfolio .portfolio-filters li {
      font-size: 14px;
      margin: 0 0 10px 0;
    }
  }
  
  .portfolio .portfolio-item {
    position: relative;
    overflow: hidden;
  }
  
  .portfolio .portfolio-item .portfolio-info {
    opacity: 0;
    position: absolute;
    left: 12px;
    right: 12px;
    bottom: -100%;
    z-index: 3;
    transition: all ease-in-out 0.5s;
    background: rgba(var(--background-color-rgb), 0.9);
    padding: 15px;
  }
  
  .portfolio .portfolio-item .portfolio-info h4 {
    font-size: 18px;
    font-weight: 600;
    padding-right: 50px;
  }
  
  .portfolio .portfolio-item .portfolio-info p {
    color: rgba(var(--default-color-rgb), 0.7);
    font-size: 14px;
    margin-bottom: 0;
    padding-right: 50px;
  }
  
  .portfolio .portfolio-item .portfolio-info .preview-link,
  .portfolio .portfolio-item .portfolio-info .details-link {
    position: absolute;
    right: 50px;
    font-size: 24px;
    top: calc(50% - 14px);
    color: rgba(var(--default-color-rgb), 0.7);
    transition: 0.3s;
    line-height: 0;
  }
  
  .portfolio .portfolio-item .portfolio-info .preview-link:hover,
  .portfolio .portfolio-item .portfolio-info .details-link:hover {
    color: var(--accent-color);
  }
  
  .portfolio .portfolio-item .portfolio-info .details-link {
    right: 14px;
    font-size: 28px;
  }
  
  .portfolio .portfolio-item:hover .portfolio-info {
    opacity: 1;
    bottom: 0;
  }
  
  /*--------------------------------------------------------------
  # Pricing Section
  --------------------------------------------------------------*/
  .pricing .pricing-item {
    padding: 60px 40px;
    box-shadow: 0 3px 20px -2px rgba(var(--default-color-rgb), 0.1);
    height: 100%;
    position: relative;
  }
  
  .pricing h3 {
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 20px;
  }
  
  .pricing h4 {
    font-size: 48px;
    color: var(--accent-color);
    font-family: var(--heading-font);
    font-weight: 400;
  }
  
  .pricing h4 sup {
    font-size: 28px;
  }
  
  .pricing h4 span {
    color: rgba(var(--default-color-rgb), 0.4);
    font-size: 18px;
  }
  
  .pricing ul {
    padding: 20px 0;
    list-style: none;
    color: rgba(var(--default-color-rgb), 0.7);
    text-align: left;
    line-height: 20px;
  }
  
  .pricing ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }
  
  .pricing ul i {
    color: #059652;
    font-size: 24px;
    padding-right: 3px;
  }
  
  .pricing ul .na {
    color: rgba(var(--default-color-rgb), 0.4);
  }
  
  .pricing ul .na i {
    color: rgba(var(--default-color-rgb), 0.4);
  }
  
  .pricing ul .na span {
    text-decoration: line-through;
  }
  
  .pricing .buy-btn {
    color: rgba(var(--default-color-rgb), 0.6);
    background-color: var(--background-color);
    display: inline-block;
    padding: 8px 35px 10px 35px;
    border-radius: 4px;
    border: 1px solid rgba(var(--default-color-rgb), 0.4);
    transition: none;
    font-size: 16px;
    font-weight: 500;
    font-family: var(--heading-font);
    transition: 0.3s;
  }
  
  .pricing .buy-btn:hover {
    background: var(--accent-color);
    border-color: var(--accent-color);
    color: var(--contrast-color);
  }
  
  .pricing .featured {
    z-index: 10;
  }
  
  .pricing .featured .pricing-item {
    background: var(--accent-color);
  }
  
  @media (min-width: 992px) {
    .pricing .featured .pricing-item {
      transform: scale(1.02, 1.1);
    }
  }
  
  .pricing .featured h3,
  .pricing .featured h4,
  .pricing .featured h4 span,
  .pricing .featured ul,
  .pricing .featured ul .na,
  .pricing .featured ul i,
  .pricing .featured ul .na i {
    color: var(--contrast-color);
  }
  
  .pricing .featured .buy-btn {
    background: var(--accent-color);
    color: var(--contrast-color);
    border-color: var(--contrast-color);
  }
  
  .pricing .featured .buy-btn:hover {
    background: rgba(var(--background-color-rgb), 0.08);
  }
  
  /*--------------------------------------------------------------
  # Team Section
  --------------------------------------------------------------*/
  .team .member {
    border: 1px solid rgba(var(--default-color-rgb), 0.1);
    text-align: center;
    margin-bottom: 20px;
  }
  
  .team .member img {
    border-radius: 50%;
    max-width: 60%;
    margin: 30px 0;
  }
  
  .team .member .member-content {
    padding: 0 20px 30px 20px;
  }
  
  .team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
  }
  
  .team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
    color: rgba(var(--default-color-rgb), 0.8);
  }
  
  .team .member p {
    padding-top: 10px;
    font-size: 14px;
    font-style: italic;
    color: rgba(var(--default-color-rgb), 0.6);
  }
  
  .team .member .social {
    margin-top: 15px;
  }
  
  .team .member .social a {
    color: rgba(var(--default-color-rgb), 0.4);
    transition: 0.3s;
  }
  
  .team .member .social a:hover {
    color: var(--accent-color);
  }
  
  .team .member .social i {
    font-size: 18px;
    margin: 0 2px;
  }
  
  /*--------------------------------------------------------------
  # Contact Section
  --------------------------------------------------------------*/
  .contact .info-item {
    padding: 20px 0 30px 0;
    box-shadow: 0px 0px 20px rgba(var(--default-color-rgb), 0.1);
  }
  
  .contact .info-item i {
    color: var(--accent-color);
    width: 56px;
    height: 56px;
    font-size: 24px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease-in-out;
    border-radius: 50%;
    border: 2px dotted rgba(var(--accent-color-rgb), 0.6);
  }
  
  .contact .info-item h3 {
    font-size: 18px;
    font-weight: 700;
    margin: 10px 0;
  }
  
  .contact .info-item p {
    padding: 0;
    margin-bottom: 0;
    font-size: 14px;
  }
  
  .contact .php-email-form {
    height: 100%;
    padding: 30px;
    box-shadow: 0px 0px 20px rgba(var(--default-color-rgb), 0.1);
  }
  
  @media (max-width: 575px) {
    .contact .php-email-form {
      padding: 20px;
    }
  }
  
  .contact .php-email-form .error-message {
    display: none;
    background: #df1529;
    color: #ffffff;
    text-align: left;
    padding: 15px;
    margin-bottom: 24px;
    font-weight: 600;
  }
  
  .contact .php-email-form .sent-message {
    display: none;
    color: #ffffff;
    background: #059652;
    text-align: center;
    padding: 15px;
    margin-bottom: 24px;
    font-weight: 600;
  }
  
  .contact .php-email-form .loading {
    display: none;
    background: var(--background-color);
    text-align: center;
    padding: 15px;
    margin-bottom: 24px;
  }
  
  .contact .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid var(--accent-color);
    border-top-color: var(--background-color);
    animation: animate-loading 1s linear infinite;
  }
  
  .contact .php-email-form input[type=text],
  .contact .php-email-form input[type=email],
  .contact .php-email-form textarea {
    font-size: 14px;
    padding: 10px 15px;
    box-shadow: none;
    border-radius: 0;
    color: var(--default-color);
    background-color: rgba(var(--background-color-rgb), 0.5);
    border-color: rgba(var(--default-color-rgb), 0.2);
  }
  
  .contact .php-email-form input[type=text]:focus,
  .contact .php-email-form input[type=email]:focus,
  .contact .php-email-form textarea:focus {
    border-color: var(--accent-color);
  }
  
  .contact .php-email-form input[type=text]::placeholder,
  .contact .php-email-form input[type=email]::placeholder,
  .contact .php-email-form textarea::placeholder {
    color: rgba(var(--default-color-rgb), 0.3);
  }
  
  .contact .php-email-form button[type=submit] {
    color: var(--contrast-color);
    background: var(--accent-color);
    border: 0;
    padding: 8px 30px 10px 30px;
    transition: 0.4s;
    border-radius: 0;
  }
  
  .contact .php-email-form button[type=submit]:hover {
    background: rgba(var(--accent-color-rgb), 0.8);
  }
  
  @keyframes animate-loading {
    0% {
      transform: rotate(0deg);
    }
  
    100% {
      transform: rotate(360deg);
    }
  }
  
  /*--------------------------------------------------------------
  # Portfolio Details Section
  --------------------------------------------------------------*/
  .portfolio-details .portfolio-details-slider img {
    width: 100%;
  }
  
  .portfolio-details .portfolio-details-slider .swiper-pagination {
    margin-top: 20px;
    position: relative;
  }
  
  .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: rgba(var(--default-color-rgb), 0.15);
    opacity: 1;
  }
  
  .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
    background-color: var(--accent-color);
  }
  
  .portfolio-details .portfolio-info {
    padding: 30px;
    box-shadow: 0px 0 30px rgba(var(--default-color-rgb), 0.1);
  }
  
  .portfolio-details .portfolio-info h3 {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(var(--default-color-rgb), 0.15);
  }
  
  .portfolio-details .portfolio-info ul {
    list-style: none;
    padding: 0;
    font-size: 15px;
  }
  
  .portfolio-details .portfolio-info ul li+li {
    margin-top: 10px;
  }
  
  .portfolio-details .portfolio-description {
    padding-top: 30px;
  }
  
  .portfolio-details .portfolio-description h2 {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 20px;
  }
  
  .portfolio-details .portfolio-description p {
    padding: 0;
    color: rgba(var(--default-color-rgb), 0.7);
  }
  
  /*--------------------------------------------------------------
  # Starter Section Section
  --------------------------------------------------------------*/
</style>