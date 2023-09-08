		<footer>
			<section>
				<p class='social'>
					<?php if( get_option( 'social_whatsapp' ) ) { ?>
						<a href='<?php echo get_option( 'social_whatsapp' ); ?>' target="_blank" >
							<i class="fa-brands fa-whatsapp"></i>
						</a>
					<?php } ?>
					<?php if( get_option( 'social_instagram' ) ) { ?>
						<a href='https://www.instagram.com/<?php echo get_option( 'social_instagram' ); ?>' target="_blank" >
							<i class="fa-brands fa-instagram"></i>
						</a>
					<?php } ?>
					<?php if( get_option( 'social_email' ) ) { ?>
						<a href='mailto:<?php echo get_option( 'social_email' ); ?>' target="_blank" >
							<i class="fa-solid fa-at"></i>
						</a>
					<?php } ?>
				</p>
			</section>
		</footer>
	</main>
</body>
<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/d435be3cbe.js" crossorigin="anonymous"></script>
</html>
