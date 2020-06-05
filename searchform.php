<form id="searchform" class="bs-search" method="get" action="<?php echo home_url('/'); ?>">
    <input class="bs-search__input search-field js-search-trigger" type="text" name="s" placeholder="Zoek" value="<?php the_search_query(); ?>">
    <span class="bs-search__icon"  uk-icon="search"></span>
</form>
