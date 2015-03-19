<?php
/**
 * Make WP SEO Metabox Priority Low
 */
add_filter( 'wpseo_metabox_prio', function() { return 'low';});