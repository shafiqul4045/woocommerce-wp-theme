<div class="sidebar-widget-area">
    <form class="post-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" class="s" id="s">
        <input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'oilbiotic' ); ?>">
    </form>
</div>