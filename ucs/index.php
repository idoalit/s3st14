<?php
/**
 * SLiMS Union Catalog server
 *
 * Copyright (C) 2009  Arie Nugraha (dicarve@yahoo.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

require 'ucsysconfig.inc.php';
require 'ucserver.inc.php';

// page title
$page_title = $sysconf['server']['name'].' | '.$sysconf['server']['subname'];
// default library info
$info = __('Web Online Public Access Catalog - Use the search options to find documents quickly');
// total opac result page
$total_pages = 1;
// default header info
$header_info = '';
// HTML metadata
$metadata = '';

// start the output buffering for main content
ob_start();
$metadata = '<meta name="robots" content="noindex, follow">';
include LIB_DIR.'contents/default.inc.php';
// main content grab
$main_content = ob_get_clean();

// template output
require THEMES_BASE_DIR.'default'.DSEP.'index_template.inc.php';
?>
