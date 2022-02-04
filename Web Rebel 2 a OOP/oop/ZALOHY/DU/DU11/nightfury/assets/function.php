<?php

function set_nav_page_selected($page)
{
    $page = ($_GET['page'] == $page ) ? 'class="selected"' : "";
    return $page;
}