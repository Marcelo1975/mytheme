<?php
if(post_password_required()){
	return;
}
if(have_comments()){
	foreach ($comments as $comment) {
		?>
		<div class="comments">
			<div class="comments_foto">
				<?php echo get_avatar($comment, 60); ?>
			</div>
			<div class="comments_area">
				<strong><?php comment_author(); ?></strong> - <?php comment_date(); ?><br/>
				<?php comment_text(); ?>
			</div>
		</div>
		<?php
	}
	the_comments_pagination();
}
comment_form(array(
	'comment_field' => 'Comentário: <textarea name="comment" class="comment"></textarea><br/>',
	'fields' => array(
		'author' => 'Nome: <input type="text" name="author" placeholder="Digite seu nome" class="input_comment"/><br/>',
		'email' => 'E-mail: <input type="email" name="email" placeholder="Digite seu e-mail" class="input_comment" /><br/>',
		'url' => 'Site: <input type="text" name="url" placeholder="Digite seu site" class="input_comment"/><br/><br/>'
	),
	'class_submit' => 'botao',
	'label_submit' => 'Enviar Comentário',
	'title_reply' => 'Deixe seu comentário'
));
?>