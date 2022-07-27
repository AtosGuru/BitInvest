<?php
header ("Content-Type:text/css");
$color = "#ea0117"; // Change your Color Here

function checkhexcolor($color) {
  return preg_match('/^#[a-f0-9]{6}$/i', $color);
}

if( isset( $_GET[ 'color' ] ) AND $_GET[ 'color' ] != '' ) {
  $color = "#" . $_GET[ 'color' ];
}

if( !$color OR !checkhexcolor( $color ) ) {
  $color = "#ea0117";
}

?>


/*---------Color switcher----------*/
.cs {
  position: fixed;
  top: 30%;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
  z-index: 999;
  background: red;
}
.cs.on {
  left: 0 !important;
}
.cs .icon {
  display: inline-block;
  float: right;
  padding: 2px 7px;
  background-color: rgba(45, 52, 61, 0.5);
  color: #FFFFFF;
  padding-left: 7px;
  margin-top: 17px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  cursor: pointer;
  font-size: 30px;
  position: absolute;
  z-index: 999;
}
.cs-main {
  background-color: #2D343D;
  display: inline-block;
  padding: 20px;
  float: left;
}
.cs-main ul {
  list-style-type: none;
  padding: 0;
}
.cs-main ul button {
  width: 40px;
  height: 40px;
  border: none;
  margin: 4px;
  display: inline-block;
}
.cs-main ul button:focus {
  outline: none;
}
.cs-main .cus-row {
  display: block;
}
.cs-main li.cus-row {
  display: block;
  margin: 10px 0;
}
.cs-main ul span {
  margin-left: 10px;
}
.cs-main .title h5 {
  text-align: center;
  color: #FFFFFF;
  text-transform: uppercase;
  font-weight: 900;
  margin-bottom: 20px;
}
.cs-main ul .c1 button {
  background-color: <?php echo $color; ?>;
}
.cs-main ul .c2 button {
  background-color: #663399;
}
.cs-main ul .c3 button {
  background-color: #f15a29;
}
.cs-main ul .c4 button {
  background-color: #01B24A;
}
.cs-main ul .c5 button {
  background-color: #8D44AD;
}
.cs-main ul .c6 button {
  background-color: #FF5353;
}
.cs-main ul .c7 button {
  background-color: #16A086;
}
.cs-main ul .c8 button {
  background-color: #FF4181;
}
.cs-main ul .c9 button {
  background-color: #FF9501;
}
.cs-main ul .c10 button {
  background-color: #10266F;
}
.cs-main ul .c11 button {
  background-color: #BA1C57;
}
.cs-main ul .c12 button {
  background-color: #8CC24A;
}
.color-1 #slider .item.one h1:nth-child(2) .color,
.color-1 #top-bar a:hover,
.color-1 .navbar .nav a:hover,
.color-1 #slider .item.two .welcome .color,
.color-1 #slider .item.two .lists ul li span,
.color-1 .wcu-inner .tab-content ul i,
.color-1 #our-team .social-icon li a,
.color-1 #our-team .social-icon li a:hover,
.color-1 .os-inner .nav .active a,
.color-1 .os-inner .nav a:hover,
.color-1 .os-inner .nav .active a small,
.color-1 .os-inner .nav a:hover small,
.color-1 .os-inner .tab-content .item-main ul span,
.color-1 #counter .item .icon,
.color-1 #blog .item .item-info .author a,
.color-1 #footer .about p a,
.color-1 #footer .about .contact-info a i,
.color-1 #footer .about .contact-info span i,
.color-1 #header.pricing .page-header a:hover,
.color-1 #about-us .about-text p.color,
.color-1 #contact .contact-form .input-group-addon,
.color-1 #contact .contact-info span i,
.color-1 #login span.bottom a,
.color-1 #registration span.bottom a,
.color-1 #forgot span.bottom a,
.color-1 #login .checkbox a,
.color-1 #registration .checkbox a,
.color-1 #forgot .checkbox a,
.color-1 #pricing-2 .order-button .right,
.color-1 #client .owl-carousel .owl-nav .owl-next:hover,
.color-1 .feature-4 .item-inner .icon,
.color-1 #footer .contact-top .icon span,
.color-1 #blog-details .post-header h1,
.color-1 #blog-details .comment-box .comment-user,
.color-1 .navbar .nav li.on > a,
.color-1 #testimonial .item .item-review ul li,
.color-1 #testimonial .item .item-main .quote-icon,
.color-1 .cs-main .title h5 {
  color: <?php echo $color; ?> !important;
}
.color-1 #slider .buttons a.price,
.color-1 #slider .buttons a:hover,
.color-1 #slider .carousel-control:hover,
.color-1 .dc-inner .input-group input[type="submit"],
.color-1 .dc-inner .d-names .item-inner,
.color-1 .title.common h2:after,
.color-1 .title.common h2:before,
.color-1 .os-inner .item span.fa,
.color-1 .os-inner .item a,
.color-1 .os-inner .item:hover,
.color-1 .wcu-inner .nav .active a,
.color-1 #get-host,
.color-1 #our-team .item:hover,
.color-1 .os-inner .tab-content .item-main + a,
.color-1 .os-inner .nav .active a i,
.color-1 .os-inner .nav a:hover i,
.color-1 .os-inner .nav:before,
.color-1 #blog .item .item-text + a,
.color-1 #footer .item.newsletter input[type="submit"],
.color-1 #footer .footer-bottom .links li.live-chat a,
.color-1 #footer .social-icons ul li a:hover,
.color-1 #footer .back-to-top,
.color-1 #blog a.more,
.color-1 .wcu-inner .nav a:focus,
.color-1 .wcu-inner .nav a:active,
.color-1 #pricing-1 .item:hover .price-inner,
.color-1 #pricing-1 .item:hover a,
.color-1 #pricing-3 .item .item-title,
.color-1 #pricing-3 .item.top:before,
.color-1 #pricing-3 .item a,
.color-1 #about-us .about-text a,
.color-1 #contact h3:before,
.color-1 #contact .contact-form input[type="submit"],
.color-1 #contact .contact-info .social-icon li a:hover,
.color-1 #pricing-4 tbody tr td a:hover,
.color-1 #login .title,
.color-1 #registration .title,
.color-1 #forgot .title,
.color-1 #login input[type="submit"],
.color-1 #registration input[type="submit"],
.color-1 #forgot input[type="submit"],
.color-1 #pricing-2 #pricing-slider .ui-slider-range,
.color-1 #pricing-2 .info-item,
.color-1 #pricing-2 .order-button a:hover .right,
.color-1 #pricing-1 .item:hover .item-price:after,
.color-1 .feature-3 .item .caption,
.color-1 .feature-1 .item:hover,
.color-1 #our-team-2 .item:hover,
.color-1 #footer .contact-top a:hover .icon,
.color-1 #blog-details .share-icons li a:hover,
.color-1 #blog-details .follow-icons li a:hover,
.color-1 #blog-details .comment-box h2:before,
.color-1 #blog-details .comment-form h2:before,
.color-1 #blog-details .comment-box .panel-heading,
.color-1 #blog-details .sidebar-item .tag a,
.color-1 #blog-details .comment-form input[type="submit"],
.color-1 #blog-details .sidebar-item h3:before {
  background-color: #2ac445 !important;
}
.color-1 .dc-inner .input-group input[type="submit"]:hover,
.color-1 .os-inner .tab-content .item-main + a:hover,
.color-1 #blog .item .item-text + a:hover,
.color-1 #blog a.more:hover,
.color-1 #footer .item.newsletter input[type="submit"]:hover,
.color-1 #footer .footer-bottom .links li.live-chat a:hover,
.color-1 #footer .back-to-top:hover,
.color-1 #pricing-1 .item .get-btn a:hover,
.color-1 #pricing-3 .item a:hover,
.color-1 #pricing-3 .item .item-price,
.color-1 #about-us .about-text a:hover,
.color-1 #contact .contact-form input[type="submit"]:hover,
.color-1 #login input[type="submit"]:hover,
.color-1 #registration input[type="submit"]:hover,
.color-1 #forgot input[type="submit"]:hover,
.color-1 #pricing-2 #pricing-slider .ui-slider-handle,
.color-1 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #f7931a !important;
}
.color-1 .navbar .nav a:hover,
.color-1 #slider .buttons a.price,
.color-1 #slider .buttons a,
.color-1 #slider .carousel-control,
.color-1 #our-team .social-icon li a,
.color-1 .os-inner .nav a i,
.color-1 #blog .item:hover,
.color-1 #footer .social-icons ul li a,
.color-1 #pricing-1 .item:hover .price-inner,
.color-1 #contact .contact-form input:focus,
.color-1 #contact .contact-form textarea:focus,
.color-1 #login .input-group input:focus,
.color-1 #registration .input-group input:focus,
.color-1 #forgot .input-group input:focus,
.color-1 #pricing-2 .order-button a,
.color-1 #pricing-1 .item:hover,
.color-1 #blog-details .post-body blockquote,
.color-1 #blog-details .share-icons li a:hover,
.color-1 #blog-details .follow-icons li a:hover,
.color-1 #contact .contact-form input[type="submit"],
.color-1 #contact .contact-info .social-icon li a:hover,
.color-1 #footer .item.newsletter .input-group.focus input,
.color-1 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-1 .navbar .nav li.on > a {
  border-color: <?php echo $color; ?> !important;
}
.color-1 .wcu-inner .nav .active a:after {
  border-top-color: <?php echo $color; ?>;
}
.color-1 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(40, 143, 235, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(40, 143, 235, 0.2);
  box-shadow: 0 0 10px 1px rgba(40, 143, 235, 0.2);
}
.color-1 .os-inner .item:hover a,
.color-1 .os-inner .item:hover span {
  background-color: #2f313a !important;
}
.color-1 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-1 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-1 .cs .c1 button {
  border-radius: 50%;
}
.color-1 .navbar .navbar-brand.logo-1,
.color-1 #footer .logo-1 {
  display: block;
}
.color-2 #slider .item.one h1:nth-child(2) .color,
.color-2 #top-bar a:hover,
.color-2 .navbar .nav a:hover,
.color-2 #slider .item.two .welcome .color,
.color-2 #slider .item.two .lists ul li span,
.color-2 .wcu-inner .tab-content ul i,
.color-2 #our-team .social-icon li a,
.color-2 #our-team .social-icon li a:hover,
.color-2 .os-inner .nav .active a,
.color-2 .os-inner .nav a:hover,
.color-2 .os-inner .nav .active a small,
.color-2 .os-inner .nav a:hover small,
.color-2 .os-inner .tab-content .item-main ul span,
.color-2 #counter .item .icon,
.color-2 #blog .item .item-info .author a,
.color-2 #footer .about p a,
.color-2 #footer .about .contact-info a i,
.color-2 #footer .about .contact-info span i,
.color-2 #header.pricing .page-header a:hover,
.color-2 #about-us .about-text p.color,
.color-2 #contact .contact-form .input-group-addon,
.color-2 #contact .contact-info span i,
.color-2 #login span.bottom a,
.color-2 #registration span.bottom a,
.color-2 #forgot span.bottom a,
.color-2 #login .checkbox a,
.color-2 #registration .checkbox a,
.color-2 #forgot .checkbox a,
.color-2 #pricing-2 .order-button .right,
.color-2 #client .owl-carousel .owl-nav .owl-next:hover,
.color-2 .feature-4 .item-inner .icon,
.color-2 #footer .contact-top .icon span,
.color-2 #blog-details .post-header h1,
.color-2 #blog-details .comment-box .comment-user,
.color-2 .navbar .nav li.on > a,
.color-2 #testimonial .item .item-review ul li,
.color-2 #testimonial .item .item-main .quote-icon,
.color-2 .cs-main .title h5 {
  color: #663399 !important;
}
.color-2 #slider .buttons a.price,
.color-2 #slider .buttons a:hover,
.color-2 #slider .carousel-control:hover,
.color-2 .dc-inner .input-group input[type="submit"],
.color-2 .dc-inner .d-names .item-inner,
.color-2 .title.common h2:after,
.color-2 .title.common h2:before,
.color-2 .os-inner .item span.fa,
.color-2 .os-inner .item a,
.color-2 .os-inner .item:hover,
.color-2 .wcu-inner .nav .active a,
.color-2 #get-host,
.color-2 #our-team .item:hover,
.color-2 .os-inner .tab-content .item-main + a,
.color-2 .os-inner .nav .active a i,
.color-2 .os-inner .nav a:hover i,
.color-2 .os-inner .nav:before,
.color-2 #blog .item .item-text + a,
.color-2 #footer .item.newsletter input[type="submit"],
.color-2 #footer .footer-bottom .links li.live-chat a,
.color-2 #footer .social-icons ul li a:hover,
.color-2 #footer .back-to-top,
.color-2 #blog a.more,
.color-2 .wcu-inner .nav a:focus,
.color-2 .wcu-inner .nav a:active,
.color-2 #pricing-1 .item:hover .price-inner,
.color-2 #pricing-1 .item:hover a,
.color-2 #pricing-3 .item .item-title,
.color-2 #pricing-3 .item.top:before,
.color-2 #pricing-3 .item a,
.color-2 #about-us .about-text a,
.color-2 #contact h3:before,
.color-2 #contact .contact-form input[type="submit"],
.color-2 #contact .contact-info .social-icon li a:hover,
.color-2 #pricing-4 tbody tr td a:hover,
.color-2 #login .title,
.color-2 #registration .title,
.color-2 #forgot .title,
.color-2 #login input[type="submit"],
.color-2 #registration input[type="submit"],
.color-2 #forgot input[type="submit"],
.color-2 #pricing-2 #pricing-slider .ui-slider-range,
.color-2 #pricing-2 .info-item,
.color-2 #pricing-2 .order-button a:hover .right,
.color-2 #pricing-1 .item:hover .item-price:after,
.color-2 .feature-3 .item .caption,
.color-2 .feature-1 .item:hover,
.color-2 #our-team-2 .item:hover,
.color-2 #footer .contact-top a:hover .icon,
.color-2 #blog-details .share-icons li a:hover,
.color-2 #blog-details .follow-icons li a:hover,
.color-2 #blog-details .comment-box h2:before,
.color-2 #blog-details .comment-form h2:before,
.color-2 #blog-details .comment-box .panel-heading,
.color-2 #blog-details .sidebar-item .tag a,
.color-2 #blog-details .comment-form input[type="submit"],
.color-2 #blog-details .sidebar-item h3:before {
  background-color: #663399 !important;
}
.color-2 .dc-inner .input-group input[type="submit"]:hover,
.color-2 .os-inner .tab-content .item-main + a:hover,
.color-2 #blog .item .item-text + a:hover,
.color-2 #blog a.more:hover,
.color-2 #footer .item.newsletter input[type="submit"]:hover,
.color-2 #footer .footer-bottom .links li.live-chat a:hover,
.color-2 #footer .back-to-top:hover,
.color-2 #pricing-1 .item .get-btn a:hover,
.color-2 #pricing-3 .item a:hover,
.color-2 #pricing-3 .item .item-price,
.color-2 #about-us .about-text a:hover,
.color-2 #contact .contact-form input[type="submit"]:hover,
.color-2 #login input[type="submit"]:hover,
.color-2 #registration input[type="submit"]:hover,
.color-2 #forgot input[type="submit"]:hover,
.color-2 #pricing-2 #pricing-slider .ui-slider-handle,
.color-2 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #52297a !important;
}
.color-2 .navbar .nav a:hover,
.color-2 #slider .buttons a.price,
.color-2 #slider .buttons a,
.color-2 #slider .carousel-control,
.color-2 #our-team .social-icon li a,
.color-2 .os-inner .nav a i,
.color-2 #blog .item:hover,
.color-2 #footer .social-icons ul li a,
.color-2 #pricing-1 .item:hover .price-inner,
.color-2 #contact .contact-form input:focus,
.color-2 #contact .contact-form textarea:focus,
.color-2 #login .input-group input:focus,
.color-2 #registration .input-group input:focus,
.color-2 #forgot .input-group input:focus,
.color-2 #pricing-2 .order-button a,
.color-2 #pricing-1 .item:hover,
.color-2 #blog-details .post-body blockquote,
.color-2 #blog-details .share-icons li a:hover,
.color-2 #blog-details .follow-icons li a:hover,
.color-2 #contact .contact-form input[type="submit"],
.color-2 #contact .contact-info .social-icon li a:hover,
.color-2 #footer .item.newsletter .input-group.focus input,
.color-2 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-2 .navbar .nav li.on > a {
  border-color: #663399 !important;
}
.color-2 .wcu-inner .nav .active a:after {
  border-top-color: #663399;
}
.color-2 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(102, 51, 153, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(102, 51, 153, 0.2);
  box-shadow: 0 0 10px 1px rgba(102, 51, 153, 0.2);
}
.color-2 .os-inner .item:hover a,
.color-2 .os-inner .item:hover span {
  background-color: #1E223F !important;
}
.color-2 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-2 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-2 .cs .c2 button {
  border-radius: 50%;
}
.color-2 .navbar .navbar-brand.logo-2,
.color-2 #footer .logo-2 {
  display: block;
}
.color-3 #slider .item.one h1:nth-child(2) .color,
.color-3 #top-bar a:hover,
.color-3 .navbar .nav a:hover,
.color-3 #slider .item.two .welcome .color,
.color-3 #slider .item.two .lists ul li span,
.color-3 .wcu-inner .tab-content ul i,
.color-3 #our-team .social-icon li a,
.color-3 #our-team .social-icon li a:hover,
.color-3 .os-inner .nav .active a,
.color-3 .os-inner .nav a:hover,
.color-3 .os-inner .nav .active a small,
.color-3 .os-inner .nav a:hover small,
.color-3 .os-inner .tab-content .item-main ul span,
.color-3 #counter .item .icon,
.color-3 #blog .item .item-info .author a,
.color-3 #footer .about p a,
.color-3 #footer .about .contact-info a i,
.color-3 #footer .about .contact-info span i,
.color-3 #header.pricing .page-header a:hover,
.color-3 #about-us .about-text p.color,
.color-3 #contact .contact-form .input-group-addon,
.color-3 #contact .contact-info span i,
.color-3 #login span.bottom a,
.color-3 #registration span.bottom a,
.color-3 #forgot span.bottom a,
.color-3 #login .checkbox a,
.color-3 #registration .checkbox a,
.color-3 #forgot .checkbox a,
.color-3 #pricing-2 .order-button .right,
.color-3 #client .owl-carousel .owl-nav .owl-next:hover,
.color-3 .feature-4 .item-inner .icon,
.color-3 #footer .contact-top .icon span,
.color-3 #blog-details .post-header h1,
.color-3 #blog-details .comment-box .comment-user,
.color-3 .navbar .nav li.on > a,
.color-3 #testimonial .item .item-review ul li,
.color-3 #testimonial .item .item-main .quote-icon,
.color-3 .cs-main .title h5 {
  color: #f15a29 !important;
}
.color-3 #slider .buttons a.price,
.color-3 #slider .buttons a:hover,
.color-3 #slider .carousel-control:hover,
.color-3 .dc-inner .input-group input[type="submit"],
.color-3 .dc-inner .d-names .item-inner,
.color-3 .title.common h2:after,
.color-3 .title.common h2:before,
.color-3 .os-inner .item span.fa,
.color-3 .os-inner .item a,
.color-3 .os-inner .item:hover,
.color-3 .wcu-inner .nav .active a,
.color-3 #get-host,
.color-3 #our-team .item:hover,
.color-3 .os-inner .tab-content .item-main + a,
.color-3 .os-inner .nav .active a i,
.color-3 .os-inner .nav a:hover i,
.color-3 .os-inner .nav:before,
.color-3 #blog .item .item-text + a,
.color-3 #footer .item.newsletter input[type="submit"],
.color-3 #footer .footer-bottom .links li.live-chat a,
.color-3 #footer .social-icons ul li a:hover,
.color-3 #footer .back-to-top,
.color-3 #blog a.more,
.color-3 .wcu-inner .nav a:focus,
.color-3 .wcu-inner .nav a:active,
.color-3 #pricing-1 .item:hover .price-inner,
.color-3 #pricing-1 .item:hover a,
.color-3 #pricing-3 .item .item-title,
.color-3 #pricing-3 .item.top:before,
.color-3 #pricing-3 .item a,
.color-3 #about-us .about-text a,
.color-3 #contact h3:before,
.color-3 #contact .contact-form input[type="submit"],
.color-3 #contact .contact-info .social-icon li a:hover,
.color-3 #pricing-4 tbody tr td a:hover,
.color-3 #login .title,
.color-3 #registration .title,
.color-3 #forgot .title,
.color-3 #login input[type="submit"],
.color-3 #registration input[type="submit"],
.color-3 #forgot input[type="submit"],
.color-3 #pricing-2 #pricing-slider .ui-slider-range,
.color-3 #pricing-2 .info-item,
.color-3 #pricing-2 .order-button a:hover .right,
.color-3 #pricing-1 .item:hover .item-price:after,
.color-3 .feature-3 .item .caption,
.color-3 .feature-1 .item:hover,
.color-3 #our-team-2 .item:hover,
.color-3 #footer .contact-top a:hover .icon,
.color-3 #blog-details .share-icons li a:hover,
.color-3 #blog-details .follow-icons li a:hover,
.color-3 #blog-details .comment-box h2:before,
.color-3 #blog-details .comment-form h2:before,
.color-3 #blog-details .comment-box .panel-heading,
.color-3 #blog-details .sidebar-item .tag a,
.color-3 #blog-details .comment-form input[type="submit"],
.color-3 #blog-details .sidebar-item h3:before {
  background-color: #f15a29 !important;
}
.color-3 .dc-inner .input-group input[type="submit"]:hover,
.color-3 .os-inner .tab-content .item-main + a:hover,
.color-3 #blog .item .item-text + a:hover,
.color-3 #blog a.more:hover,
.color-3 #footer .item.newsletter input[type="submit"]:hover,
.color-3 #footer .footer-bottom .links li.live-chat a:hover,
.color-3 #footer .back-to-top:hover,
.color-3 #pricing-1 .item .get-btn a:hover,
.color-3 #pricing-3 .item a:hover,
.color-3 #pricing-3 .item .item-price,
.color-3 #about-us .about-text a:hover,
.color-3 #contact .contact-form input[type="submit"]:hover,
.color-3 #login input[type="submit"]:hover,
.color-3 #registration input[type="submit"]:hover,
.color-3 #forgot input[type="submit"]:hover,
.color-3 #pricing-2 #pricing-slider .ui-slider-handle,
.color-3 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #e2430f !important;
}
.color-3 .navbar .nav a:hover,
.color-3 #slider .buttons a.price,
.color-3 #slider .buttons a,
.color-3 #slider .carousel-control,
.color-3 #our-team .social-icon li a,
.color-3 .os-inner .nav a i,
.color-3 #blog .item:hover,
.color-3 #footer .social-icons ul li a,
.color-3 #pricing-1 .item:hover .price-inner,
.color-3 #contact .contact-form input:focus,
.color-3 #contact .contact-form textarea:focus,
.color-3 #login .input-group input:focus,
.color-3 #registration .input-group input:focus,
.color-3 #forgot .input-group input:focus,
.color-3 #pricing-2 .order-button a,
.color-3 #pricing-1 .item:hover,
.color-3 #blog-details .post-body blockquote,
.color-3 #blog-details .share-icons li a:hover,
.color-3 #blog-details .follow-icons li a:hover,
.color-3 #contact .contact-form input[type="submit"],
.color-3 #contact .contact-info .social-icon li a:hover,
.color-3 #footer .item.newsletter .input-group.focus input,
.color-3 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-3 .navbar .nav li.on > a {
  border-color: #f15a29 !important;
}
.color-3 .wcu-inner .nav .active a:after {
  border-top-color: #f15a29;
}
.color-3 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(241, 90, 41, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(241, 90, 41, 0.2);
  box-shadow: 0 0 10px 1px rgba(241, 90, 41, 0.2);
}
.color-3 .os-inner .item:hover a,
.color-3 .os-inner .item:hover span {
  background-color: #2f313a !important;
}
.color-3 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-3 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-3 .cs .c3 button {
  border-radius: 50%;
}
.color-3 .navbar .navbar-brand.logo-3,
.color-3 #footer .logo-3 {
  display: block;
}
.color-4 #slider .item.one h1:nth-child(2) .color,
.color-4 #top-bar a:hover,
.color-4 .navbar .nav a:hover,
.color-4 #slider .item.two .welcome .color,
.color-4 #slider .item.two .lists ul li span,
.color-4 .wcu-inner .tab-content ul i,
.color-4 #our-team .social-icon li a,
.color-4 #our-team .social-icon li a:hover,
.color-4 .os-inner .nav .active a,
.color-4 .os-inner .nav a:hover,
.color-4 .os-inner .nav .active a small,
.color-4 .os-inner .nav a:hover small,
.color-4 .os-inner .tab-content .item-main ul span,
.color-4 #counter .item .icon,
.color-4 #blog .item .item-info .author a,
.color-4 #footer .about p a,
.color-4 #footer .about .contact-info a i,
.color-4 #footer .about .contact-info span i,
.color-4 #header.pricing .page-header a:hover,
.color-4 #about-us .about-text p.color,
.color-4 #contact .contact-form .input-group-addon,
.color-4 #contact .contact-info span i,
.color-4 #login span.bottom a,
.color-4 #registration span.bottom a,
.color-4 #forgot span.bottom a,
.color-4 #login .checkbox a,
.color-4 #registration .checkbox a,
.color-4 #forgot .checkbox a,
.color-4 #pricing-2 .order-button .right,
.color-4 #client .owl-carousel .owl-nav .owl-next:hover,
.color-4 .feature-4 .item-inner .icon,
.color-4 #footer .contact-top .icon span,
.color-4 #blog-details .post-header h1,
.color-4 #blog-details .comment-box .comment-user,
.color-4 .navbar .nav li.on > a,
.color-4 #testimonial .item .item-review ul li,
.color-4 #testimonial .item .item-main .quote-icon,
.color-4 .cs-main .title h5 {
  color: #01B24A !important;
}
.color-4 #slider .buttons a.price,
.color-4 #slider .buttons a:hover,
.color-4 #slider .carousel-control:hover,
.color-4 .dc-inner .input-group input[type="submit"],
.color-4 .dc-inner .d-names .item-inner,
.color-4 .title.common h2:after,
.color-4 .title.common h2:before,
.color-4 .os-inner .item span.fa,
.color-4 .os-inner .item a,
.color-4 .os-inner .item:hover,
.color-4 .wcu-inner .nav .active a,
.color-4 #get-host,
.color-4 #our-team .item:hover,
.color-4 .os-inner .tab-content .item-main + a,
.color-4 .os-inner .nav .active a i,
.color-4 .os-inner .nav a:hover i,
.color-4 .os-inner .nav:before,
.color-4 #blog .item .item-text + a,
.color-4 #footer .item.newsletter input[type="submit"],
.color-4 #footer .footer-bottom .links li.live-chat a,
.color-4 #footer .social-icons ul li a:hover,
.color-4 #footer .back-to-top,
.color-4 #blog a.more,
.color-4 .wcu-inner .nav a:focus,
.color-4 .wcu-inner .nav a:active,
.color-4 #pricing-1 .item:hover .price-inner,
.color-4 #pricing-1 .item:hover a,
.color-4 #pricing-3 .item .item-title,
.color-4 #pricing-3 .item.top:before,
.color-4 #pricing-3 .item a,
.color-4 #about-us .about-text a,
.color-4 #contact h3:before,
.color-4 #contact .contact-form input[type="submit"],
.color-4 #contact .contact-info .social-icon li a:hover,
.color-4 #pricing-4 tbody tr td a:hover,
.color-4 #login .title,
.color-4 #registration .title,
.color-4 #forgot .title,
.color-4 #login input[type="submit"],
.color-4 #registration input[type="submit"],
.color-4 #forgot input[type="submit"],
.color-4 #pricing-2 #pricing-slider .ui-slider-range,
.color-4 #pricing-2 .info-item,
.color-4 #pricing-2 .order-button a:hover .right,
.color-4 #pricing-1 .item:hover .item-price:after,
.color-4 .feature-3 .item .caption,
.color-4 .feature-1 .item:hover,
.color-4 #our-team-2 .item:hover,
.color-4 #footer .contact-top a:hover .icon,
.color-4 #blog-details .share-icons li a:hover,
.color-4 #blog-details .follow-icons li a:hover,
.color-4 #blog-details .comment-box h2:before,
.color-4 #blog-details .comment-form h2:before,
.color-4 #blog-details .comment-box .panel-heading,
.color-4 #blog-details .sidebar-item .tag a,
.color-4 #blog-details .comment-form input[type="submit"],
.color-4 #blog-details .sidebar-item h3:before {
  background-color: #01B24A !important;
}
.color-4 .dc-inner .input-group input[type="submit"]:hover,
.color-4 .os-inner .tab-content .item-main + a:hover,
.color-4 #blog .item .item-text + a:hover,
.color-4 #blog a.more:hover,
.color-4 #footer .item.newsletter input[type="submit"]:hover,
.color-4 #footer .footer-bottom .links li.live-chat a:hover,
.color-4 #footer .back-to-top:hover,
.color-4 #pricing-1 .item .get-btn a:hover,
.color-4 #pricing-3 .item a:hover,
.color-4 #pricing-3 .item .item-price,
.color-4 #about-us .about-text a:hover,
.color-4 #contact .contact-form input[type="submit"]:hover,
.color-4 #login input[type="submit"]:hover,
.color-4 #registration input[type="submit"]:hover,
.color-4 #forgot input[type="submit"]:hover,
.color-4 #pricing-2 #pricing-slider .ui-slider-handle,
.color-4 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #018939 !important;
}
.color-4 .navbar .nav a:hover,
.color-4 #slider .buttons a.price,
.color-4 #slider .buttons a,
.color-4 #slider .carousel-control,
.color-4 #our-team .social-icon li a,
.color-4 .os-inner .nav a i,
.color-4 #blog .item:hover,
.color-4 #footer .social-icons ul li a,
.color-4 #pricing-1 .item:hover .price-inner,
.color-4 #contact .contact-form input:focus,
.color-4 #contact .contact-form textarea:focus,
.color-4 #login .input-group input:focus,
.color-4 #registration .input-group input:focus,
.color-4 #forgot .input-group input:focus,
.color-4 #pricing-2 .order-button a,
.color-4 #pricing-1 .item:hover,
.color-4 #blog-details .post-body blockquote,
.color-4 #blog-details .share-icons li a:hover,
.color-4 #blog-details .follow-icons li a:hover,
.color-4 #contact .contact-form input[type="submit"],
.color-4 #contact .contact-info .social-icon li a:hover,
.color-4 #footer .item.newsletter .input-group.focus input,
.color-4 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-4 .navbar .nav li.on > a {
  border-color: #01B24A !important;
}
.color-4 .wcu-inner .nav .active a:after {
  border-top-color: #01B24A;
}
.color-4 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(1, 178, 74, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(1, 178, 74, 0.2);
  box-shadow: 0 0 10px 1px rgba(1, 178, 74, 0.2);
}
.color-4 .os-inner .item:hover a,
.color-4 .os-inner .item:hover span {
  background-color: #2f313a !important;
}
.color-4 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-4 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-4 .cs .c4 button {
  border-radius: 50%;
}
.color-4 .navbar .navbar-brand.logo-4,
.color-4 #footer .logo-4 {
  display: block;
}
.color-5 #slider .item.one h1:nth-child(2) .color,
.color-5 #top-bar a:hover,
.color-5 .navbar .nav a:hover,
.color-5 #slider .item.two .welcome .color,
.color-5 #slider .item.two .lists ul li span,
.color-5 .wcu-inner .tab-content ul i,
.color-5 #our-team .social-icon li a,
.color-5 #our-team .social-icon li a:hover,
.color-5 .os-inner .nav .active a,
.color-5 .os-inner .nav a:hover,
.color-5 .os-inner .nav .active a small,
.color-5 .os-inner .nav a:hover small,
.color-5 .os-inner .tab-content .item-main ul span,
.color-5 #counter .item .icon,
.color-5 #blog .item .item-info .author a,
.color-5 #footer .about p a,
.color-5 #footer .about .contact-info a i,
.color-5 #footer .about .contact-info span i,
.color-5 #header.pricing .page-header a:hover,
.color-5 #about-us .about-text p.color,
.color-5 #contact .contact-form .input-group-addon,
.color-5 #contact .contact-info span i,
.color-5 #login span.bottom a,
.color-5 #registration span.bottom a,
.color-5 #forgot span.bottom a,
.color-5 #login .checkbox a,
.color-5 #registration .checkbox a,
.color-5 #forgot .checkbox a,
.color-5 #pricing-2 .order-button .right,
.color-5 #client .owl-carousel .owl-nav .owl-next:hover,
.color-5 .feature-4 .item-inner .icon,
.color-5 #footer .contact-top .icon span,
.color-5 #blog-details .post-header h1,
.color-5 #blog-details .comment-box .comment-user,
.color-5 .navbar .nav li.on > a,
.color-5 #testimonial .item .item-review ul li,
.color-5 #testimonial .item .item-main .quote-icon,
.color-5 .cs-main .title h5 {
  color: #8D44AD !important;
}
.color-5 #slider .buttons a.price,
.color-5 #slider .buttons a:hover,
.color-5 #slider .carousel-control:hover,
.color-5 .dc-inner .input-group input[type="submit"],
.color-5 .dc-inner .d-names .item-inner,
.color-5 .title.common h2:after,
.color-5 .title.common h2:before,
.color-5 .os-inner .item span.fa,
.color-5 .os-inner .item a,
.color-5 .os-inner .item:hover,
.color-5 .wcu-inner .nav .active a,
.color-5 #get-host,
.color-5 #our-team .item:hover,
.color-5 .os-inner .tab-content .item-main + a,
.color-5 .os-inner .nav .active a i,
.color-5 .os-inner .nav a:hover i,
.color-5 .os-inner .nav:before,
.color-5 #blog .item .item-text + a,
.color-5 #footer .item.newsletter input[type="submit"],
.color-5 #footer .footer-bottom .links li.live-chat a,
.color-5 #footer .social-icons ul li a:hover,
.color-5 #footer .back-to-top,
.color-5 #blog a.more,
.color-5 .wcu-inner .nav a:focus,
.color-5 .wcu-inner .nav a:active,
.color-5 #pricing-1 .item:hover .price-inner,
.color-5 #pricing-1 .item:hover a,
.color-5 #pricing-3 .item .item-title,
.color-5 #pricing-3 .item.top:before,
.color-5 #pricing-3 .item a,
.color-5 #about-us .about-text a,
.color-5 #contact h3:before,
.color-5 #contact .contact-form input[type="submit"],
.color-5 #contact .contact-info .social-icon li a:hover,
.color-5 #pricing-4 tbody tr td a:hover,
.color-5 #login .title,
.color-5 #registration .title,
.color-5 #forgot .title,
.color-5 #login input[type="submit"],
.color-5 #registration input[type="submit"],
.color-5 #forgot input[type="submit"],
.color-5 #pricing-2 #pricing-slider .ui-slider-range,
.color-5 #pricing-2 .info-item,
.color-5 #pricing-2 .order-button a:hover .right,
.color-5 #pricing-1 .item:hover .item-price:after,
.color-5 .feature-3 .item .caption,
.color-5 .feature-1 .item:hover,
.color-5 #our-team-2 .item:hover,
.color-5 #footer .contact-top a:hover .icon,
.color-5 #blog-details .share-icons li a:hover,
.color-5 #blog-details .follow-icons li a:hover,
.color-5 #blog-details .comment-box h2:before,
.color-5 #blog-details .comment-form h2:before,
.color-5 #blog-details .comment-box .panel-heading,
.color-5 #blog-details .sidebar-item .tag a,
.color-5 #blog-details .comment-form input[type="submit"],
.color-5 #blog-details .sidebar-item h3:before {
  background-color: #8D44AD !important;
}
.color-5 .dc-inner .input-group input[type="submit"]:hover,
.color-5 .os-inner .tab-content .item-main + a:hover,
.color-5 #blog .item .item-text + a:hover,
.color-5 #blog a.more:hover,
.color-5 #footer .item.newsletter input[type="submit"]:hover,
.color-5 #footer .footer-bottom .links li.live-chat a:hover,
.color-5 #footer .back-to-top:hover,
.color-5 #pricing-1 .item .get-btn a:hover,
.color-5 #pricing-3 .item a:hover,
.color-5 #pricing-3 .item .item-price,
.color-5 #about-us .about-text a:hover,
.color-5 #contact .contact-form input[type="submit"]:hover,
.color-5 #login input[type="submit"]:hover,
.color-5 #registration input[type="submit"]:hover,
.color-5 #forgot input[type="submit"]:hover,
.color-5 #pricing-2 #pricing-slider .ui-slider-handle,
.color-5 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #753890 !important;
}
.color-5 .navbar .nav a:hover,
.color-5 #slider .buttons a.price,
.color-5 #slider .buttons a,
.color-5 #slider .carousel-control,
.color-5 #our-team .social-icon li a,
.color-5 .os-inner .nav a i,
.color-5 #blog .item:hover,
.color-5 #footer .social-icons ul li a,
.color-5 #pricing-1 .item:hover .price-inner,
.color-5 #contact .contact-form input:focus,
.color-5 #contact .contact-form textarea:focus,
.color-5 #login .input-group input:focus,
.color-5 #registration .input-group input:focus,
.color-5 #forgot .input-group input:focus,
.color-5 #pricing-2 .order-button a,
.color-5 #pricing-1 .item:hover,
.color-5 #blog-details .post-body blockquote,
.color-5 #blog-details .share-icons li a:hover,
.color-5 #blog-details .follow-icons li a:hover,
.color-5 #contact .contact-form input[type="submit"],
.color-5 #contact .contact-info .social-icon li a:hover,
.color-5 #footer .item.newsletter .input-group.focus input,
.color-5 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-5 .navbar .nav li.on > a {
  border-color: #8D44AD !important;
}
.color-5 .wcu-inner .nav .active a:after {
  border-top-color: #8D44AD;
}
.color-5 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(141, 68, 173, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(141, 68, 173, 0.2);
  box-shadow: 0 0 10px 1px rgba(141, 68, 173, 0.2);
}
.color-5 .os-inner .item:hover a,
.color-5 .os-inner .item:hover span {
  background-color: #2f313a !important;
}
.color-5 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-5 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-5 .cs .c5 button {
  border-radius: 50%;
}
.color-5 .navbar .navbar-brand.logo-5,
.color-5 #footer .logo-5 {
  display: block;
}
.color-6 #slider .item.one h1:nth-child(2) .color,
.color-6 #top-bar a:hover,
.color-6 .navbar .nav a:hover,
.color-6 #slider .item.two .welcome .color,
.color-6 #slider .item.two .lists ul li span,
.color-6 .wcu-inner .tab-content ul i,
.color-6 #our-team .social-icon li a,
.color-6 #our-team .social-icon li a:hover,
.color-6 .os-inner .nav .active a,
.color-6 .os-inner .nav a:hover,
.color-6 .os-inner .nav .active a small,
.color-6 .os-inner .nav a:hover small,
.color-6 .os-inner .tab-content .item-main ul span,
.color-6 #counter .item .icon,
.color-6 #blog .item .item-info .author a,
.color-6 #footer .about p a,
.color-6 #footer .about .contact-info a i,
.color-6 #footer .about .contact-info span i,
.color-6 #header.pricing .page-header a:hover,
.color-6 #about-us .about-text p.color,
.color-6 #contact .contact-form .input-group-addon,
.color-6 #contact .contact-info span i,
.color-6 #login span.bottom a,
.color-6 #registration span.bottom a,
.color-6 #forgot span.bottom a,
.color-6 #login .checkbox a,
.color-6 #registration .checkbox a,
.color-6 #forgot .checkbox a,
.color-6 #pricing-2 .order-button .right,
.color-6 #client .owl-carousel .owl-nav .owl-next:hover,
.color-6 .feature-4 .item-inner .icon,
.color-6 #footer .contact-top .icon span,
.color-6 #blog-details .post-header h1,
.color-6 #blog-details .comment-box .comment-user,
.color-6 .navbar .nav li.on > a,
.color-6 #testimonial .item .item-review ul li,
.color-6 #testimonial .item .item-main .quote-icon,
.color-6 .cs-main .title h5 {
  color: #FF5353 !important;
}
.color-6 #slider .buttons a.price,
.color-6 #slider .buttons a:hover,
.color-6 #slider .carousel-control:hover,
.color-6 .dc-inner .input-group input[type="submit"],
.color-6 .dc-inner .d-names .item-inner,
.color-6 .title.common h2:after,
.color-6 .title.common h2:before,
.color-6 .os-inner .item span.fa,
.color-6 .os-inner .item a,
.color-6 .os-inner .item:hover,
.color-6 .wcu-inner .nav .active a,
.color-6 #get-host,
.color-6 #our-team .item:hover,
.color-6 .os-inner .tab-content .item-main + a,
.color-6 .os-inner .nav .active a i,
.color-6 .os-inner .nav a:hover i,
.color-6 .os-inner .nav:before,
.color-6 #blog .item .item-text + a,
.color-6 #footer .item.newsletter input[type="submit"],
.color-6 #footer .footer-bottom .links li.live-chat a,
.color-6 #footer .social-icons ul li a:hover,
.color-6 #footer .back-to-top,
.color-6 #blog a.more,
.color-6 .wcu-inner .nav a:focus,
.color-6 .wcu-inner .nav a:active,
.color-6 #pricing-1 .item:hover .price-inner,
.color-6 #pricing-1 .item:hover a,
.color-6 #pricing-3 .item .item-title,
.color-6 #pricing-3 .item.top:before,
.color-6 #pricing-3 .item a,
.color-6 #about-us .about-text a,
.color-6 #contact h3:before,
.color-6 #contact .contact-form input[type="submit"],
.color-6 #contact .contact-info .social-icon li a:hover,
.color-6 #pricing-4 tbody tr td a:hover,
.color-6 #login .title,
.color-6 #registration .title,
.color-6 #forgot .title,
.color-6 #login input[type="submit"],
.color-6 #registration input[type="submit"],
.color-6 #forgot input[type="submit"],
.color-6 #pricing-2 #pricing-slider .ui-slider-range,
.color-6 #pricing-2 .info-item,
.color-6 #pricing-2 .order-button a:hover .right,
.color-6 #pricing-1 .item:hover .item-price:after,
.color-6 .feature-3 .item .caption,
.color-6 .feature-1 .item:hover,
.color-6 #our-team-2 .item:hover,
.color-6 #footer .contact-top a:hover .icon,
.color-6 #blog-details .share-icons li a:hover,
.color-6 #blog-details .follow-icons li a:hover,
.color-6 #blog-details .comment-box h2:before,
.color-6 #blog-details .comment-form h2:before,
.color-6 #blog-details .comment-box .panel-heading,
.color-6 #blog-details .sidebar-item .tag a,
.color-6 #blog-details .comment-form input[type="submit"],
.color-6 #blog-details .sidebar-item h3:before {
  background-color: #FF5353 !important;
}
.color-6 .dc-inner .input-group input[type="submit"]:hover,
.color-6 .os-inner .tab-content .item-main + a:hover,
.color-6 #blog .item .item-text + a:hover,
.color-6 #blog a.more:hover,
.color-6 #footer .item.newsletter input[type="submit"]:hover,
.color-6 #footer .footer-bottom .links li.live-chat a:hover,
.color-6 #footer .back-to-top:hover,
.color-6 #pricing-1 .item .get-btn a:hover,
.color-6 #pricing-3 .item a:hover,
.color-6 #pricing-3 .item .item-price,
.color-6 #about-us .about-text a:hover,
.color-6 #contact .contact-form input[type="submit"]:hover,
.color-6 #login input[type="submit"]:hover,
.color-6 #registration input[type="submit"]:hover,
.color-6 #forgot input[type="submit"]:hover,
.color-6 #pricing-2 #pricing-slider .ui-slider-handle,
.color-6 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #ff2a2a !important;
}
.color-6 .navbar .nav a:hover,
.color-6 #slider .buttons a.price,
.color-6 #slider .buttons a,
.color-6 #slider .carousel-control,
.color-6 #our-team .social-icon li a,
.color-6 .os-inner .nav a i,
.color-6 #blog .item:hover,
.color-6 #footer .social-icons ul li a,
.color-6 #pricing-1 .item:hover .price-inner,
.color-6 #contact .contact-form input:focus,
.color-6 #contact .contact-form textarea:focus,
.color-6 #login .input-group input:focus,
.color-6 #registration .input-group input:focus,
.color-6 #forgot .input-group input:focus,
.color-6 #pricing-2 .order-button a,
.color-6 #pricing-1 .item:hover,
.color-6 #blog-details .post-body blockquote,
.color-6 #blog-details .share-icons li a:hover,
.color-6 #blog-details .follow-icons li a:hover,
.color-6 #contact .contact-form input[type="submit"],
.color-6 #contact .contact-info .social-icon li a:hover,
.color-6 #footer .item.newsletter .input-group.focus input,
.color-6 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-6 .navbar .nav li.on > a {
  border-color: #FF5353 !important;
}
.color-6 .wcu-inner .nav .active a:after {
  border-top-color: #FF5353;
}
.color-6 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(255, 83, 83, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(255, 83, 83, 0.2);
  box-shadow: 0 0 10px 1px rgba(255, 83, 83, 0.2);
}
.color-6 .os-inner .item:hover a,
.color-6 .os-inner .item:hover span {
  background-color: #2f313a !important;
}
.color-6 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-6 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-6 .cs .c6 button {
  border-radius: 50%;
}
.color-6 .navbar .navbar-brand.logo-6,
.color-6 #footer .logo-6 {
  display: block;
}
.color-7 #slider .item.one h1:nth-child(2) .color,
.color-7 #top-bar a:hover,
.color-7 .navbar .nav a:hover,
.color-7 #slider .item.two .welcome .color,
.color-7 #slider .item.two .lists ul li span,
.color-7 .wcu-inner .tab-content ul i,
.color-7 #our-team .social-icon li a,
.color-7 #our-team .social-icon li a:hover,
.color-7 .os-inner .nav .active a,
.color-7 .os-inner .nav a:hover,
.color-7 .os-inner .nav .active a small,
.color-7 .os-inner .nav a:hover small,
.color-7 .os-inner .tab-content .item-main ul span,
.color-7 #counter .item .icon,
.color-7 #blog .item .item-info .author a,
.color-7 #footer .about p a,
.color-7 #footer .about .contact-info a i,
.color-7 #footer .about .contact-info span i,
.color-7 #header.pricing .page-header a:hover,
.color-7 #about-us .about-text p.color,
.color-7 #contact .contact-form .input-group-addon,
.color-7 #contact .contact-info span i,
.color-7 #login span.bottom a,
.color-7 #registration span.bottom a,
.color-7 #forgot span.bottom a,
.color-7 #login .checkbox a,
.color-7 #registration .checkbox a,
.color-7 #forgot .checkbox a,
.color-7 #pricing-2 .order-button .right,
.color-7 #client .owl-carousel .owl-nav .owl-next:hover,
.color-7 .feature-4 .item-inner .icon,
.color-7 #footer .contact-top .icon span,
.color-7 #blog-details .post-header h1,
.color-7 #blog-details .comment-box .comment-user,
.color-7 .navbar .nav li.on > a,
.color-7 #testimonial .item .item-review ul li,
.color-7 #testimonial .item .item-main .quote-icon,
.color-7 .cs-main .title h5 {
  color: #16A086 !important;
}
.color-7 #slider .buttons a.price,
.color-7 #slider .buttons a:hover,
.color-7 #slider .carousel-control:hover,
.color-7 .dc-inner .input-group input[type="submit"],
.color-7 .dc-inner .d-names .item-inner,
.color-7 .title.common h2:after,
.color-7 .title.common h2:before,
.color-7 .os-inner .item span.fa,
.color-7 .os-inner .item a,
.color-7 .os-inner .item:hover,
.color-7 .wcu-inner .nav .active a,
.color-7 #get-host,
.color-7 #our-team .item:hover,
.color-7 .os-inner .tab-content .item-main + a,
.color-7 .os-inner .nav .active a i,
.color-7 .os-inner .nav a:hover i,
.color-7 .os-inner .nav:before,
.color-7 #blog .item .item-text + a,
.color-7 #footer .item.newsletter input[type="submit"],
.color-7 #footer .footer-bottom .links li.live-chat a,
.color-7 #footer .social-icons ul li a:hover,
.color-7 #footer .back-to-top,
.color-7 #blog a.more,
.color-7 .wcu-inner .nav a:focus,
.color-7 .wcu-inner .nav a:active,
.color-7 #pricing-1 .item:hover .price-inner,
.color-7 #pricing-1 .item:hover a,
.color-7 #pricing-3 .item .item-title,
.color-7 #pricing-3 .item.top:before,
.color-7 #pricing-3 .item a,
.color-7 #about-us .about-text a,
.color-7 #contact h3:before,
.color-7 #contact .contact-form input[type="submit"],
.color-7 #contact .contact-info .social-icon li a:hover,
.color-7 #pricing-4 tbody tr td a:hover,
.color-7 #login .title,
.color-7 #registration .title,
.color-7 #forgot .title,
.color-7 #login input[type="submit"],
.color-7 #registration input[type="submit"],
.color-7 #forgot input[type="submit"],
.color-7 #pricing-2 #pricing-slider .ui-slider-range,
.color-7 #pricing-2 .info-item,
.color-7 #pricing-2 .order-button a:hover .right,
.color-7 #pricing-1 .item:hover .item-price:after,
.color-7 .feature-3 .item .caption,
.color-7 .feature-1 .item:hover,
.color-7 #our-team-2 .item:hover,
.color-7 #footer .contact-top a:hover .icon,
.color-7 #blog-details .share-icons li a:hover,
.color-7 #blog-details .follow-icons li a:hover,
.color-7 #blog-details .comment-box h2:before,
.color-7 #blog-details .comment-form h2:before,
.color-7 #blog-details .comment-box .panel-heading,
.color-7 #blog-details .sidebar-item .tag a,
.color-7 #blog-details .comment-form input[type="submit"],
.color-7 #blog-details .sidebar-item h3:before {
  background-color: #16A086 !important;
}
.color-7 .dc-inner .input-group input[type="submit"]:hover,
.color-7 .os-inner .tab-content .item-main + a:hover,
.color-7 #blog .item .item-text + a:hover,
.color-7 #blog a.more:hover,
.color-7 #footer .item.newsletter input[type="submit"]:hover,
.color-7 #footer .footer-bottom .links li.live-chat a:hover,
.color-7 #footer .back-to-top:hover,
.color-7 #pricing-1 .item .get-btn a:hover,
.color-7 #pricing-3 .item a:hover,
.color-7 #pricing-3 .item .item-price,
.color-7 #about-us .about-text a:hover,
.color-7 #contact .contact-form input[type="submit"]:hover,
.color-7 #login input[type="submit"]:hover,
.color-7 #registration input[type="submit"]:hover,
.color-7 #forgot input[type="submit"]:hover,
.color-7 #pricing-2 #pricing-slider .ui-slider-handle,
.color-7 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #117c68 !important;
}
.color-7 .navbar .nav a:hover,
.color-7 #slider .buttons a.price,
.color-7 #slider .buttons a,
.color-7 #slider .carousel-control,
.color-7 #our-team .social-icon li a,
.color-7 .os-inner .nav a i,
.color-7 #blog .item:hover,
.color-7 #footer .social-icons ul li a,
.color-7 #pricing-1 .item:hover .price-inner,
.color-7 #contact .contact-form input:focus,
.color-7 #contact .contact-form textarea:focus,
.color-7 #login .input-group input:focus,
.color-7 #registration .input-group input:focus,
.color-7 #forgot .input-group input:focus,
.color-7 #pricing-2 .order-button a,
.color-7 #pricing-1 .item:hover,
.color-7 #blog-details .post-body blockquote,
.color-7 #blog-details .share-icons li a:hover,
.color-7 #blog-details .follow-icons li a:hover,
.color-7 #contact .contact-form input[type="submit"],
.color-7 #contact .contact-info .social-icon li a:hover,
.color-7 #footer .item.newsletter .input-group.focus input,
.color-7 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-7 .navbar .nav li.on > a {
  border-color: #16A086 !important;
}
.color-7 .wcu-inner .nav .active a:after {
  border-top-color: #16A086;
}
.color-7 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(22, 160, 134, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(22, 160, 134, 0.2);
  box-shadow: 0 0 10px 1px rgba(22, 160, 134, 0.2);
}
.color-7 .os-inner .item:hover a,
.color-7 .os-inner .item:hover span {
  background-color: #2f313a !important;
}
.color-7 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-7 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-7 .cs .c7 button {
  border-radius: 50%;
}
.color-7 .navbar .navbar-brand.logo-7,
.color-7 #footer .logo-7 {
  display: block;
}
.color-8 #slider .item.one h1:nth-child(2) .color,
.color-8 #top-bar a:hover,
.color-8 .navbar .nav a:hover,
.color-8 #slider .item.two .welcome .color,
.color-8 #slider .item.two .lists ul li span,
.color-8 .wcu-inner .tab-content ul i,
.color-8 #our-team .social-icon li a,
.color-8 #our-team .social-icon li a:hover,
.color-8 .os-inner .nav .active a,
.color-8 .os-inner .nav a:hover,
.color-8 .os-inner .nav .active a small,
.color-8 .os-inner .nav a:hover small,
.color-8 .os-inner .tab-content .item-main ul span,
.color-8 #counter .item .icon,
.color-8 #blog .item .item-info .author a,
.color-8 #footer .about p a,
.color-8 #footer .about .contact-info a i,
.color-8 #footer .about .contact-info span i,
.color-8 #header.pricing .page-header a:hover,
.color-8 #about-us .about-text p.color,
.color-8 #contact .contact-form .input-group-addon,
.color-8 #contact .contact-info span i,
.color-8 #login span.bottom a,
.color-8 #registration span.bottom a,
.color-8 #forgot span.bottom a,
.color-8 #login .checkbox a,
.color-8 #registration .checkbox a,
.color-8 #forgot .checkbox a,
.color-8 #pricing-2 .order-button .right,
.color-8 #client .owl-carousel .owl-nav .owl-next:hover,
.color-8 .feature-4 .item-inner .icon,
.color-8 #footer .contact-top .icon span,
.color-8 #blog-details .post-header h1,
.color-8 #blog-details .comment-box .comment-user,
.color-8 .navbar .nav li.on > a,
.color-8 #testimonial .item .item-review ul li,
.color-8 #testimonial .item .item-main .quote-icon,
.color-8 .cs-main .title h5 {
  color: #FF4181 !important;
}
.color-8 #slider .buttons a.price,
.color-8 #slider .buttons a:hover,
.color-8 #slider .carousel-control:hover,
.color-8 .dc-inner .input-group input[type="submit"],
.color-8 .dc-inner .d-names .item-inner,
.color-8 .title.common h2:after,
.color-8 .title.common h2:before,
.color-8 .os-inner .item span.fa,
.color-8 .os-inner .item a,
.color-8 .os-inner .item:hover,
.color-8 .wcu-inner .nav .active a,
.color-8 #get-host,
.color-8 #our-team .item:hover,
.color-8 .os-inner .tab-content .item-main + a,
.color-8 .os-inner .nav .active a i,
.color-8 .os-inner .nav a:hover i,
.color-8 .os-inner .nav:before,
.color-8 #blog .item .item-text + a,
.color-8 #footer .item.newsletter input[type="submit"],
.color-8 #footer .footer-bottom .links li.live-chat a,
.color-8 #footer .social-icons ul li a:hover,
.color-8 #footer .back-to-top,
.color-8 #blog a.more,
.color-8 .wcu-inner .nav a:focus,
.color-8 .wcu-inner .nav a:active,
.color-8 #pricing-1 .item:hover .price-inner,
.color-8 #pricing-1 .item:hover a,
.color-8 #pricing-3 .item .item-title,
.color-8 #pricing-3 .item.top:before,
.color-8 #pricing-3 .item a,
.color-8 #about-us .about-text a,
.color-8 #contact h3:before,
.color-8 #contact .contact-form input[type="submit"],
.color-8 #contact .contact-info .social-icon li a:hover,
.color-8 #pricing-4 tbody tr td a:hover,
.color-8 #login .title,
.color-8 #registration .title,
.color-8 #forgot .title,
.color-8 #login input[type="submit"],
.color-8 #registration input[type="submit"],
.color-8 #forgot input[type="submit"],
.color-8 #pricing-2 #pricing-slider .ui-slider-range,
.color-8 #pricing-2 .info-item,
.color-8 #pricing-2 .order-button a:hover .right,
.color-8 #pricing-1 .item:hover .item-price:after,
.color-8 .feature-3 .item .caption,
.color-8 .feature-1 .item:hover,
.color-8 #our-team-2 .item:hover,
.color-8 #footer .contact-top a:hover .icon,
.color-8 #blog-details .share-icons li a:hover,
.color-8 #blog-details .follow-icons li a:hover,
.color-8 #blog-details .comment-box h2:before,
.color-8 #blog-details .comment-form h2:before,
.color-8 #blog-details .comment-box .panel-heading,
.color-8 #blog-details .sidebar-item .tag a,
.color-8 #blog-details .comment-form input[type="submit"],
.color-8 #blog-details .sidebar-item h3:before {
  background-color: #FF4181 !important;
}
.color-8 .dc-inner .input-group input[type="submit"]:hover,
.color-8 .os-inner .tab-content .item-main + a:hover,
.color-8 #blog .item .item-text + a:hover,
.color-8 #blog a.more:hover,
.color-8 #footer .item.newsletter input[type="submit"]:hover,
.color-8 #footer .footer-bottom .links li.live-chat a:hover,
.color-8 #footer .back-to-top:hover,
.color-8 #pricing-1 .item .get-btn a:hover,
.color-8 #pricing-3 .item a:hover,
.color-8 #pricing-3 .item .item-price,
.color-8 #about-us .about-text a:hover,
.color-8 #contact .contact-form input[type="submit"]:hover,
.color-8 #login input[type="submit"]:hover,
.color-8 #registration input[type="submit"]:hover,
.color-8 #forgot input[type="submit"]:hover,
.color-8 #pricing-2 #pricing-slider .ui-slider-handle,
.color-8 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #ff1866 !important;
}
.color-8 .navbar .nav a:hover,
.color-8 #slider .buttons a.price,
.color-8 #slider .buttons a,
.color-8 #slider .carousel-control,
.color-8 #our-team .social-icon li a,
.color-8 .os-inner .nav a i,
.color-8 #blog .item:hover,
.color-8 #footer .social-icons ul li a,
.color-8 #pricing-1 .item:hover .price-inner,
.color-8 #contact .contact-form input:focus,
.color-8 #contact .contact-form textarea:focus,
.color-8 #login .input-group input:focus,
.color-8 #registration .input-group input:focus,
.color-8 #forgot .input-group input:focus,
.color-8 #pricing-2 .order-button a,
.color-8 #pricing-1 .item:hover,
.color-8 #blog-details .post-body blockquote,
.color-8 #blog-details .share-icons li a:hover,
.color-8 #blog-details .follow-icons li a:hover,
.color-8 #contact .contact-form input[type="submit"],
.color-8 #contact .contact-info .social-icon li a:hover,
.color-8 #footer .item.newsletter .input-group.focus input,
.color-8 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-8 .navbar .nav li.on > a {
  border-color: #FF4181 !important;
}
.color-8 .wcu-inner .nav .active a:after {
  border-top-color: #FF4181;
}
.color-8 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(255, 65, 129, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(255, 65, 129, 0.2);
  box-shadow: 0 0 10px 1px rgba(255, 65, 129, 0.2);
}
.color-8 .os-inner .item:hover a,
.color-8 .os-inner .item:hover span {
  background-color: #2f313a !important;
}
.color-8 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-8 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-8 .cs .c8 button {
  border-radius: 50%;
}
.color-8 .navbar .navbar-brand.logo-8,
.color-8 #footer .logo-8 {
  display: block;
}
.color-9 #slider .item.one h1:nth-child(2) .color,
.color-9 #top-bar a:hover,
.color-9 .navbar .nav a:hover,
.color-9 #slider .item.two .welcome .color,
.color-9 #slider .item.two .lists ul li span,
.color-9 .wcu-inner .tab-content ul i,
.color-9 #our-team .social-icon li a,
.color-9 #our-team .social-icon li a:hover,
.color-9 .os-inner .nav .active a,
.color-9 .os-inner .nav a:hover,
.color-9 .os-inner .nav .active a small,
.color-9 .os-inner .nav a:hover small,
.color-9 .os-inner .tab-content .item-main ul span,
.color-9 #counter .item .icon,
.color-9 #blog .item .item-info .author a,
.color-9 #footer .about p a,
.color-9 #footer .about .contact-info a i,
.color-9 #footer .about .contact-info span i,
.color-9 #header.pricing .page-header a:hover,
.color-9 #about-us .about-text p.color,
.color-9 #contact .contact-form .input-group-addon,
.color-9 #contact .contact-info span i,
.color-9 #login span.bottom a,
.color-9 #registration span.bottom a,
.color-9 #forgot span.bottom a,
.color-9 #login .checkbox a,
.color-9 #registration .checkbox a,
.color-9 #forgot .checkbox a,
.color-9 #pricing-2 .order-button .right,
.color-9 #client .owl-carousel .owl-nav .owl-next:hover,
.color-9 .feature-4 .item-inner .icon,
.color-9 #footer .contact-top .icon span,
.color-9 #blog-details .post-header h1,
.color-9 #blog-details .comment-box .comment-user,
.color-9 .navbar .nav li.on > a,
.color-9 #testimonial .item .item-review ul li,
.color-9 #testimonial .item .item-main .quote-icon,
.color-9 .cs-main .title h5 {
  color: #FF9501 !important;
}
.color-9 #slider .buttons a.price,
.color-9 #slider .buttons a:hover,
.color-9 #slider .carousel-control:hover,
.color-9 .dc-inner .input-group input[type="submit"],
.color-9 .dc-inner .d-names .item-inner,
.color-9 .title.common h2:after,
.color-9 .title.common h2:before,
.color-9 .os-inner .item span.fa,
.color-9 .os-inner .item a,
.color-9 .os-inner .item:hover,
.color-9 .wcu-inner .nav .active a,
.color-9 #get-host,
.color-9 #our-team .item:hover,
.color-9 .os-inner .tab-content .item-main + a,
.color-9 .os-inner .nav .active a i,
.color-9 .os-inner .nav a:hover i,
.color-9 .os-inner .nav:before,
.color-9 #blog .item .item-text + a,
.color-9 #footer .item.newsletter input[type="submit"],
.color-9 #footer .footer-bottom .links li.live-chat a,
.color-9 #footer .social-icons ul li a:hover,
.color-9 #footer .back-to-top,
.color-9 #blog a.more,
.color-9 .wcu-inner .nav a:focus,
.color-9 .wcu-inner .nav a:active,
.color-9 #pricing-1 .item:hover .price-inner,
.color-9 #pricing-1 .item:hover a,
.color-9 #pricing-3 .item .item-title,
.color-9 #pricing-3 .item.top:before,
.color-9 #pricing-3 .item a,
.color-9 #about-us .about-text a,
.color-9 #contact h3:before,
.color-9 #contact .contact-form input[type="submit"],
.color-9 #contact .contact-info .social-icon li a:hover,
.color-9 #pricing-4 tbody tr td a:hover,
.color-9 #login .title,
.color-9 #registration .title,
.color-9 #forgot .title,
.color-9 #login input[type="submit"],
.color-9 #registration input[type="submit"],
.color-9 #forgot input[type="submit"],
.color-9 #pricing-2 #pricing-slider .ui-slider-range,
.color-9 #pricing-2 .info-item,
.color-9 #pricing-2 .order-button a:hover .right,
.color-9 #pricing-1 .item:hover .item-price:after,
.color-9 .feature-3 .item .caption,
.color-9 .feature-1 .item:hover,
.color-9 #our-team-2 .item:hover,
.color-9 #footer .contact-top a:hover .icon,
.color-9 #blog-details .share-icons li a:hover,
.color-9 #blog-details .follow-icons li a:hover,
.color-9 #blog-details .comment-box h2:before,
.color-9 #blog-details .comment-form h2:before,
.color-9 #blog-details .comment-box .panel-heading,
.color-9 #blog-details .sidebar-item .tag a,
.color-9 #blog-details .comment-form input[type="submit"],
.color-9 #blog-details .sidebar-item h3:before {
  background-color: #FF9501 !important;
}
.color-9 .dc-inner .input-group input[type="submit"]:hover,
.color-9 .os-inner .tab-content .item-main + a:hover,
.color-9 #blog .item .item-text + a:hover,
.color-9 #blog a.more:hover,
.color-9 #footer .item.newsletter input[type="submit"]:hover,
.color-9 #footer .footer-bottom .links li.live-chat a:hover,
.color-9 #footer .back-to-top:hover,
.color-9 #pricing-1 .item .get-btn a:hover,
.color-9 #pricing-3 .item a:hover,
.color-9 #pricing-3 .item .item-price,
.color-9 #about-us .about-text a:hover,
.color-9 #contact .contact-form input[type="submit"]:hover,
.color-9 #login input[type="submit"]:hover,
.color-9 #registration input[type="submit"]:hover,
.color-9 #forgot input[type="submit"]:hover,
.color-9 #pricing-2 #pricing-slider .ui-slider-handle,
.color-9 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #d77d00 !important;
}
.color-9 .navbar .nav a:hover,
.color-9 #slider .buttons a.price,
.color-9 #slider .buttons a,
.color-9 #slider .carousel-control,
.color-9 #our-team .social-icon li a,
.color-9 .os-inner .nav a i,
.color-9 #blog .item:hover,
.color-9 #footer .social-icons ul li a,
.color-9 #pricing-1 .item:hover .price-inner,
.color-9 #contact .contact-form input:focus,
.color-9 #contact .contact-form textarea:focus,
.color-9 #login .input-group input:focus,
.color-9 #registration .input-group input:focus,
.color-9 #forgot .input-group input:focus,
.color-9 #pricing-2 .order-button a,
.color-9 #pricing-1 .item:hover,
.color-9 #blog-details .post-body blockquote,
.color-9 #blog-details .share-icons li a:hover,
.color-9 #blog-details .follow-icons li a:hover,
.color-9 #contact .contact-form input[type="submit"],
.color-9 #contact .contact-info .social-icon li a:hover,
.color-9 #footer .item.newsletter .input-group.focus input,
.color-9 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-9 .navbar .nav li.on > a {
  border-color: #FF9501 !important;
}
.color-9 .wcu-inner .nav .active a:after {
  border-top-color: #FF9501;
}
.color-9 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(255, 149, 1, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(255, 149, 1, 0.2);
  box-shadow: 0 0 10px 1px rgba(255, 149, 1, 0.2);
}
.color-9 .os-inner .item:hover a,
.color-9 .os-inner .item:hover span {
  background-color: #2f313a !important;
}
.color-9 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-9 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-9 .cs .c9 button {
  border-radius: 50%;
}
.color-9 .navbar .navbar-brand.logo-9,
.color-9 #footer .logo-9 {
  display: block;
}
.color-10 #slider .item.one h1:nth-child(2) .color,
.color-10 #top-bar a:hover,
.color-10 .navbar .nav a:hover,
.color-10 #slider .item.two .welcome .color,
.color-10 #slider .item.two .lists ul li span,
.color-10 .wcu-inner .tab-content ul i,
.color-10 #our-team .social-icon li a,
.color-10 #our-team .social-icon li a:hover,
.color-10 .os-inner .nav .active a,
.color-10 .os-inner .nav a:hover,
.color-10 .os-inner .nav .active a small,
.color-10 .os-inner .nav a:hover small,
.color-10 .os-inner .tab-content .item-main ul span,
.color-10 #counter .item .icon,
.color-10 #blog .item .item-info .author a,
.color-10 #footer .about p a,
.color-10 #footer .about .contact-info a i,
.color-10 #footer .about .contact-info span i,
.color-10 #header.pricing .page-header a:hover,
.color-10 #about-us .about-text p.color,
.color-10 #contact .contact-form .input-group-addon,
.color-10 #contact .contact-info span i,
.color-10 #login span.bottom a,
.color-10 #registration span.bottom a,
.color-10 #forgot span.bottom a,
.color-10 #login .checkbox a,
.color-10 #registration .checkbox a,
.color-10 #forgot .checkbox a,
.color-10 #pricing-2 .order-button .right,
.color-10 #client .owl-carousel .owl-nav .owl-next:hover,
.color-10 .feature-4 .item-inner .icon,
.color-10 #footer .contact-top .icon span,
.color-10 #blog-details .post-header h1,
.color-10 #blog-details .comment-box .comment-user,
.color-10 .navbar .nav li.on > a,
.color-10 #testimonial .item .item-review ul li,
.color-10 #testimonial .item .item-main .quote-icon,
.color-10 .cs-main .title h5 {
  color: #2f313a !important;
}
.color-10 #slider .buttons a.price,
.color-10 #slider .buttons a:hover,
.color-10 #slider .carousel-control:hover,
.color-10 .dc-inner .input-group input[type="submit"],
.color-10 .dc-inner .d-names .item-inner,
.color-10 .title.common h2:after,
.color-10 .title.common h2:before,
.color-10 .os-inner .item span.fa,
.color-10 .os-inner .item a,
.color-10 .os-inner .item:hover,
.color-10 .wcu-inner .nav .active a,
.color-10 #get-host,
.color-10 #our-team .item:hover,
.color-10 .os-inner .tab-content .item-main + a,
.color-10 .os-inner .nav .active a i,
.color-10 .os-inner .nav a:hover i,
.color-10 .os-inner .nav:before,
.color-10 #blog .item .item-text + a,
.color-10 #footer .item.newsletter input[type="submit"],
.color-10 #footer .footer-bottom .links li.live-chat a,
.color-10 #footer .social-icons ul li a:hover,
.color-10 #footer .back-to-top,
.color-10 #blog a.more,
.color-10 .wcu-inner .nav a:focus,
.color-10 .wcu-inner .nav a:active,
.color-10 #pricing-1 .item:hover .price-inner,
.color-10 #pricing-1 .item:hover a,
.color-10 #pricing-3 .item .item-title,
.color-10 #pricing-3 .item.top:before,
.color-10 #pricing-3 .item a,
.color-10 #about-us .about-text a,
.color-10 #contact h3:before,
.color-10 #contact .contact-form input[type="submit"],
.color-10 #contact .contact-info .social-icon li a:hover,
.color-10 #pricing-4 tbody tr td a:hover,
.color-10 #login .title,
.color-10 #registration .title,
.color-10 #forgot .title,
.color-10 #login input[type="submit"],
.color-10 #registration input[type="submit"],
.color-10 #forgot input[type="submit"],
.color-10 #pricing-2 #pricing-slider .ui-slider-range,
.color-10 #pricing-2 .info-item,
.color-10 #pricing-2 .order-button a:hover .right,
.color-10 #pricing-1 .item:hover .item-price:after,
.color-10 .feature-3 .item .caption,
.color-10 .feature-1 .item:hover,
.color-10 #our-team-2 .item:hover,
.color-10 #footer .contact-top a:hover .icon,
.color-10 #blog-details .share-icons li a:hover,
.color-10 #blog-details .follow-icons li a:hover,
.color-10 #blog-details .comment-box h2:before,
.color-10 #blog-details .comment-form h2:before,
.color-10 #blog-details .comment-box .panel-heading,
.color-10 #blog-details .sidebar-item .tag a,
.color-10 #blog-details .comment-form input[type="submit"],
.color-10 #blog-details .sidebar-item h3:before {
  background-color: #10266F !important;
}
.color-10 .dc-inner .input-group input[type="submit"]:hover,
.color-10 .os-inner .tab-content .item-main + a:hover,
.color-10 #blog .item .item-text + a:hover,
.color-10 #blog a.more:hover,
.color-10 #footer .item.newsletter input[type="submit"]:hover,
.color-10 #footer .footer-bottom .links li.live-chat a:hover,
.color-10 #footer .back-to-top:hover,
.color-10 #pricing-1 .item .get-btn a:hover,
.color-10 #pricing-3 .item a:hover,
.color-10 #pricing-3 .item .item-price,
.color-10 #about-us .about-text a:hover,
.color-10 #contact .contact-form input[type="submit"]:hover,
.color-10 #login input[type="submit"]:hover,
.color-10 #registration input[type="submit"]:hover,
.color-10 #forgot input[type="submit"]:hover,
.color-10 #pricing-2 #pricing-slider .ui-slider-handle,
.color-10 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #0b1a4b !important;
}
.color-10 .navbar .nav a:hover,
.color-10 #slider .buttons a.price,
.color-10 #slider .buttons a,
.color-10 #slider .carousel-control,
.color-10 #our-team .social-icon li a,
.color-10 .os-inner .nav a i,
.color-10 #blog .item:hover,
.color-10 #footer .social-icons ul li a,
.color-10 #pricing-1 .item:hover .price-inner,
.color-10 #contact .contact-form input:focus,
.color-10 #contact .contact-form textarea:focus,
.color-10 #login .input-group input:focus,
.color-10 #registration .input-group input:focus,
.color-10 #forgot .input-group input:focus,
.color-10 #pricing-2 .order-button a,
.color-10 #pricing-1 .item:hover,
.color-10 #blog-details .post-body blockquote,
.color-10 #blog-details .share-icons li a:hover,
.color-10 #blog-details .follow-icons li a:hover,
.color-10 #contact .contact-form input[type="submit"],
.color-10 #contact .contact-info .social-icon li a:hover,
.color-10 #footer .item.newsletter .input-group.focus input,
.color-10 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-10 .navbar .nav li.on > a {
  border-color: #10266F !important;
}
.color-10 .wcu-inner .nav .active a:after {
  border-top-color: #10266F;
}
.color-10 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(16, 38, 111, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(16, 38, 111, 0.2);
  box-shadow: 0 0 10px 1px rgba(16, 38, 111, 0.2);
}
.color-10 .os-inner .item:hover a,
.color-10 .os-inner .item:hover span {
  background-color: #1E223F !important;
}
.color-10 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-10 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-10 .cs .c10 button {
  border-radius: 50%;
}
.color-10 .navbar .navbar-brand.logo-10,
.color-10 #footer .logo-10 {
  display: block;
}
.color-11 #slider .item.one h1:nth-child(2) .color,
.color-11 #top-bar a:hover,
.color-11 .navbar .nav a:hover,
.color-11 #slider .item.two .welcome .color,
.color-11 #slider .item.two .lists ul li span,
.color-11 .wcu-inner .tab-content ul i,
.color-11 #our-team .social-icon li a,
.color-11 #our-team .social-icon li a:hover,
.color-11 .os-inner .nav .active a,
.color-11 .os-inner .nav a:hover,
.color-11 .os-inner .nav .active a small,
.color-11 .os-inner .nav a:hover small,
.color-11 .os-inner .tab-content .item-main ul span,
.color-11 #counter .item .icon,
.color-11 #blog .item .item-info .author a,
.color-11 #footer .about p a,
.color-11 #footer .about .contact-info a i,
.color-11 #footer .about .contact-info span i,
.color-11 #header.pricing .page-header a:hover,
.color-11 #about-us .about-text p.color,
.color-11 #contact .contact-form .input-group-addon,
.color-11 #contact .contact-info span i,
.color-11 #login span.bottom a,
.color-11 #registration span.bottom a,
.color-11 #forgot span.bottom a,
.color-11 #login .checkbox a,
.color-11 #registration .checkbox a,
.color-11 #forgot .checkbox a,
.color-11 #pricing-2 .order-button .right,
.color-11 #client .owl-carousel .owl-nav .owl-next:hover,
.color-11 .feature-4 .item-inner .icon,
.color-11 #footer .contact-top .icon span,
.color-11 #blog-details .post-header h1,
.color-11 #blog-details .comment-box .comment-user,
.color-11 .navbar .nav li.on > a,
.color-11 #testimonial .item .item-review ul li,
.color-11 #testimonial .item .item-main .quote-icon,
.color-11 .cs-main .title h5 {
  color: #BA1C57 !important;
}
.color-11 #slider .buttons a.price,
.color-11 #slider .buttons a:hover,
.color-11 #slider .carousel-control:hover,
.color-11 .dc-inner .input-group input[type="submit"],
.color-11 .dc-inner .d-names .item-inner,
.color-11 .title.common h2:after,
.color-11 .title.common h2:before,
.color-11 .os-inner .item span.fa,
.color-11 .os-inner .item a,
.color-11 .os-inner .item:hover,
.color-11 .wcu-inner .nav .active a,
.color-11 #get-host,
.color-11 #our-team .item:hover,
.color-11 .os-inner .tab-content .item-main + a,
.color-11 .os-inner .nav .active a i,
.color-11 .os-inner .nav a:hover i,
.color-11 .os-inner .nav:before,
.color-11 #blog .item .item-text + a,
.color-11 #footer .item.newsletter input[type="submit"],
.color-11 #footer .footer-bottom .links li.live-chat a,
.color-11 #footer .social-icons ul li a:hover,
.color-11 #footer .back-to-top,
.color-11 #blog a.more,
.color-11 .wcu-inner .nav a:focus,
.color-11 .wcu-inner .nav a:active,
.color-11 #pricing-1 .item:hover .price-inner,
.color-11 #pricing-1 .item:hover a,
.color-11 #pricing-3 .item .item-title,
.color-11 #pricing-3 .item.top:before,
.color-11 #pricing-3 .item a,
.color-11 #about-us .about-text a,
.color-11 #contact h3:before,
.color-11 #contact .contact-form input[type="submit"],
.color-11 #contact .contact-info .social-icon li a:hover,
.color-11 #pricing-4 tbody tr td a:hover,
.color-11 #login .title,
.color-11 #registration .title,
.color-11 #forgot .title,
.color-11 #login input[type="submit"],
.color-11 #registration input[type="submit"],
.color-11 #forgot input[type="submit"],
.color-11 #pricing-2 #pricing-slider .ui-slider-range,
.color-11 #pricing-2 .info-item,
.color-11 #pricing-2 .order-button a:hover .right,
.color-11 #pricing-1 .item:hover .item-price:after,
.color-11 .feature-3 .item .caption,
.color-11 .feature-1 .item:hover,
.color-11 #our-team-2 .item:hover,
.color-11 #footer .contact-top a:hover .icon,
.color-11 #blog-details .share-icons li a:hover,
.color-11 #blog-details .follow-icons li a:hover,
.color-11 #blog-details .comment-box h2:before,
.color-11 #blog-details .comment-form h2:before,
.color-11 #blog-details .comment-box .panel-heading,
.color-11 #blog-details .sidebar-item .tag a,
.color-11 #blog-details .comment-form input[type="submit"],
.color-11 #blog-details .sidebar-item h3:before {
  background-color: #BA1C57 !important;
}
.color-11 .dc-inner .input-group input[type="submit"]:hover,
.color-11 .os-inner .tab-content .item-main + a:hover,
.color-11 #blog .item .item-text + a:hover,
.color-11 #blog a.more:hover,
.color-11 #footer .item.newsletter input[type="submit"]:hover,
.color-11 #footer .footer-bottom .links li.live-chat a:hover,
.color-11 #footer .back-to-top:hover,
.color-11 #pricing-1 .item .get-btn a:hover,
.color-11 #pricing-3 .item a:hover,
.color-11 #pricing-3 .item .item-price,
.color-11 #about-us .about-text a:hover,
.color-11 #contact .contact-form input[type="submit"]:hover,
.color-11 #login input[type="submit"]:hover,
.color-11 #registration input[type="submit"]:hover,
.color-11 #forgot input[type="submit"]:hover,
.color-11 #pricing-2 #pricing-slider .ui-slider-handle,
.color-11 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #971746 !important;
}
.color-11 .navbar .nav a:hover,
.color-11 #slider .buttons a.price,
.color-11 #slider .buttons a,
.color-11 #slider .carousel-control,
.color-11 #our-team .social-icon li a,
.color-11 .os-inner .nav a i,
.color-11 #blog .item:hover,
.color-11 #footer .social-icons ul li a,
.color-11 #pricing-1 .item:hover .price-inner,
.color-11 #contact .contact-form input:focus,
.color-11 #contact .contact-form textarea:focus,
.color-11 #login .input-group input:focus,
.color-11 #registration .input-group input:focus,
.color-11 #forgot .input-group input:focus,
.color-11 #pricing-2 .order-button a,
.color-11 #pricing-1 .item:hover,
.color-11 #blog-details .post-body blockquote,
.color-11 #blog-details .share-icons li a:hover,
.color-11 #blog-details .follow-icons li a:hover,
.color-11 #contact .contact-form input[type="submit"],
.color-11 #contact .contact-info .social-icon li a:hover,
.color-11 #footer .item.newsletter .input-group.focus input,
.color-11 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-11 .navbar .nav li.on > a {
  border-color: #BA1C57 !important;
}
.color-11 .wcu-inner .nav .active a:after {
  border-top-color: #BA1C57;
}
.color-11 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(186, 28, 87, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(186, 28, 87, 0.2);
  box-shadow: 0 0 10px 1px rgba(186, 28, 87, 0.2);
}
.color-11 .os-inner .item:hover a,
.color-11 .os-inner .item:hover span {
  background-color: #1E223F !important;
}
.color-11 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-11 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-11 .cs .c11 button {
  border-radius: 50%;
}
.color-11 .navbar .navbar-brand.logo-11,
.color-11 #footer .logo-11 {
  display: block;
}
.color-12 #slider .item.one h1:nth-child(2) .color,
.color-12 #top-bar a:hover,
.color-12 .navbar .nav a:hover,
.color-12 #slider .item.two .welcome .color,
.color-12 #slider .item.two .lists ul li span,
.color-12 .wcu-inner .tab-content ul i,
.color-12 #our-team .social-icon li a,
.color-12 #our-team .social-icon li a:hover,
.color-12 .os-inner .nav .active a,
.color-12 .os-inner .nav a:hover,
.color-12 .os-inner .nav .active a small,
.color-12 .os-inner .nav a:hover small,
.color-12 .os-inner .tab-content .item-main ul span,
.color-12 #counter .item .icon,
.color-12 #blog .item .item-info .author a,
.color-12 #footer .about p a,
.color-12 #footer .about .contact-info a i,
.color-12 #footer .about .contact-info span i,
.color-12 #header.pricing .page-header a:hover,
.color-12 #about-us .about-text p.color,
.color-12 #contact .contact-form .input-group-addon,
.color-12 #contact .contact-info span i,
.color-12 #login span.bottom a,
.color-12 #registration span.bottom a,
.color-12 #forgot span.bottom a,
.color-12 #login .checkbox a,
.color-12 #registration .checkbox a,
.color-12 #forgot .checkbox a,
.color-12 #pricing-2 .order-button .right,
.color-12 #client .owl-carousel .owl-nav .owl-next:hover,
.color-12 .feature-4 .item-inner .icon,
.color-12 #footer .contact-top .icon span,
.color-12 #blog-details .post-header h1,
.color-12 #blog-details .comment-box .comment-user,
.color-12 .navbar .nav li.on > a,
.color-12 #testimonial .item .item-review ul li,
.color-12 #testimonial .item .item-main .quote-icon,
.color-12 .cs-main .title h5 {
  color: #8CC24A !important;
}
.color-12 #slider .buttons a.price,
.color-12 #slider .buttons a:hover,
.color-12 #slider .carousel-control:hover,
.color-12 .dc-inner .input-group input[type="submit"],
.color-12 .dc-inner .d-names .item-inner,
.color-12 .title.common h2:after,
.color-12 .title.common h2:before,
.color-12 .os-inner .item span.fa,
.color-12 .os-inner .item a,
.color-12 .os-inner .item:hover,
.color-12 .wcu-inner .nav .active a,
.color-12 #get-host,
.color-12 #our-team .item:hover,
.color-12 .os-inner .tab-content .item-main + a,
.color-12 .os-inner .nav .active a i,
.color-12 .os-inner .nav a:hover i,
.color-12 .os-inner .nav:before,
.color-12 #blog .item .item-text + a,
.color-12 #footer .item.newsletter input[type="submit"],
.color-12 #footer .footer-bottom .links li.live-chat a,
.color-12 #footer .social-icons ul li a:hover,
.color-12 #footer .back-to-top,
.color-12 #blog a.more,
.color-12 .wcu-inner .nav a:focus,
.color-12 .wcu-inner .nav a:active,
.color-12 #pricing-1 .item:hover .price-inner,
.color-12 #pricing-1 .item:hover a,
.color-12 #pricing-3 .item .item-title,
.color-12 #pricing-3 .item.top:before,
.color-12 #pricing-3 .item a,
.color-12 #about-us .about-text a,
.color-12 #contact h3:before,
.color-12 #contact .contact-form input[type="submit"],
.color-12 #contact .contact-info .social-icon li a:hover,
.color-12 #pricing-4 tbody tr td a:hover,
.color-12 #login .title,
.color-12 #registration .title,
.color-12 #forgot .title,
.color-12 #login input[type="submit"],
.color-12 #registration input[type="submit"],
.color-12 #forgot input[type="submit"],
.color-12 #pricing-2 #pricing-slider .ui-slider-range,
.color-12 #pricing-2 .info-item,
.color-12 #pricing-2 .order-button a:hover .right,
.color-12 #pricing-1 .item:hover .item-price:after,
.color-12 .feature-3 .item .caption,
.color-12 .feature-1 .item:hover,
.color-12 #our-team-2 .item:hover,
.color-12 #footer .contact-top a:hover .icon,
.color-12 #blog-details .share-icons li a:hover,
.color-12 #blog-details .follow-icons li a:hover,
.color-12 #blog-details .comment-box h2:before,
.color-12 #blog-details .comment-form h2:before,
.color-12 #blog-details .comment-box .panel-heading,
.color-12 #blog-details .sidebar-item .tag a,
.color-12 #blog-details .comment-form input[type="submit"],
.color-12 #blog-details .sidebar-item h3:before {
  background-color: #8CC24A !important;
}
.color-12 .dc-inner .input-group input[type="submit"]:hover,
.color-12 .os-inner .tab-content .item-main + a:hover,
.color-12 #blog .item .item-text + a:hover,
.color-12 #blog a.more:hover,
.color-12 #footer .item.newsletter input[type="submit"]:hover,
.color-12 #footer .footer-bottom .links li.live-chat a:hover,
.color-12 #footer .back-to-top:hover,
.color-12 #pricing-1 .item .get-btn a:hover,
.color-12 #pricing-3 .item a:hover,
.color-12 #pricing-3 .item .item-price,
.color-12 #about-us .about-text a:hover,
.color-12 #contact .contact-form input[type="submit"]:hover,
.color-12 #login input[type="submit"]:hover,
.color-12 #registration input[type="submit"]:hover,
.color-12 #forgot input[type="submit"]:hover,
.color-12 #pricing-2 #pricing-slider .ui-slider-handle,
.color-12 #blog-details .comment-form input[type="submit"]:hover {
  background-color: #77aa39 !important;
}
.color-12 .navbar .nav a:hover,
.color-12 #slider .buttons a.price,
.color-12 #slider .buttons a,
.color-12 #slider .carousel-control,
.color-12 #our-team .social-icon li a,
.color-12 .os-inner .nav a i,
.color-12 #blog .item:hover,
.color-12 #footer .social-icons ul li a,
.color-12 #pricing-1 .item:hover .price-inner,
.color-12 #contact .contact-form input:focus,
.color-12 #contact .contact-form textarea:focus,
.color-12 #login .input-group input:focus,
.color-12 #registration .input-group input:focus,
.color-12 #forgot .input-group input:focus,
.color-12 #pricing-2 .order-button a,
.color-12 #pricing-1 .item:hover,
.color-12 #blog-details .post-body blockquote,
.color-12 #blog-details .share-icons li a:hover,
.color-12 #blog-details .follow-icons li a:hover,
.color-12 #contact .contact-form input[type="submit"],
.color-12 #contact .contact-info .social-icon li a:hover,
.color-12 #footer .item.newsletter .input-group.focus input,
.color-12 #footer .item.newsletter .input-group.focus .input-group-addon,
.color-12 .navbar .nav li.on > a {
  border-color: #8CC24A !important;
}
.color-12 .wcu-inner .nav .active a:after {
  border-top-color: #8CC24A;
}
.color-12 #blog .item:hover {
  -webkit-box-shadow: 0 0 10px 1px rgba(140, 194, 74, 0.2);
  -moz-box-shadow: 0 0 10px 1px rgba(140, 194, 74, 0.2);
  box-shadow: 0 0 10px 1px rgba(140, 194, 74, 0.2);
}
.color-12 .os-inner .item:hover a,
.color-12 .os-inner .item:hover span {
  background-color: #1E223F !important;
}
.color-12 #slider .buttons a.price:hover {
  background: transparent !important;
}
.color-12 #footer .contact-top a:hover .icon span {
  color: #FFFFFF !important;
}
.color-12 .cs .c12 button {
  border-radius: 50%;
}
.color-12 .navbar .navbar-brand.logo-12,
.color-12 #footer .logo-12 {
  display: block;
}

.btn-custom{
    background: <?php echo $color; ?>;
    color: #FFF;
    border: 1px solid <?php echo $color; ?>;
    text-transform: uppercase;
}

.btn-custom:hover{
    background: #FFF;
    color: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}

#client .owl-carousel a:hover {
    background-color: <?php echo $color; ?>;