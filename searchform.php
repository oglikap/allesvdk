<form id="searchform" class="bs-search" method="get" action="<?php echo home_url('/'); ?>">
    <input class="bs-search__input" type="text" class="search-field" name="s" placeholder="Zoek" value="<?php the_search_query(); ?>">
    <input class="bs-search__icon" type="submit"  uk-icon="search">
</form>
