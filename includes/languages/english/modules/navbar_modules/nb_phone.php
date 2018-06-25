<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_NAVBAR_PHONE_TITLE', 'Phone'); 
  define('MODULE_NAVBAR_PHONE_DESCRIPTION', 'Show Phone Number on Navbar.');
  
  define('MODULE_NAVBAR_CONTACT_US', '<i class="fa fa-phone"></i> CALL US: %s');
  define('MODULE_NAVBAR_PHONE_PUBLIC_TEXT', '<li class="navbar-text"><span class="hidden-sm">' . sprintf(MODULE_NAVBAR_CONTACT_US, STORE_PHONE) . '</span></li>');