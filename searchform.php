<form method="GET" action="<?php site_url(); ?>">
	<input class="search_input" type="text" name="s" placeholder="Digite sua busca" value="<?php the_search_query(); ?>" />
	<input class="search_submit" type="submit" value="Pesquisar" />
</form>