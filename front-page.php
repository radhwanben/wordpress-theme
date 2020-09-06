<?php
   get_header();
   
   ?>
<div class="container-fluid containerhomeBanner w-100 h-100 p-0">
   <div class="bd-example h-100">
      <div id="welcome" class="carousel slide h-100" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#welcome" data-slide-to="0" class="active"></li>
            <li data-target="#welcome" data-slide-to="1"></li>
            <li data-target="#welcome" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner h-100">
            <div class="carousel-item active h-100" style="background: url('https://www.ajieledition.tn//upload/postlaunch/bannn.png') no-repeat center center/cover;">
               <div class="container-fluid myminwidth h-100">
                  <p class="text-left">
                     &nbsp;<br />
                     <span>&nbsp;</span>
                  </p>
               </div>
            </div>
            <div class="carousel-item h-100" style="background: url('https://www.ajieledition.tn//upload/postlaunch/bann.jpg') no-repeat center center/cover;">
               <div class="container-fluid myminwidth h-100">
                  <p class="text-left">
                     Valorisez vos manuscrits<br />
                     <span>Faites publier votre livre</span>
                  </p>
               </div>
            </div>
            <div class="carousel-item h-100" style="background: url('https://www.ajieledition.tn//upload/postlaunch/ban.jpg') no-repeat center center/cover;">
               <div class="container-fluid myminwidth h-100">
                  <p class="text-left">
                     promouvoir <span>Nos auteurs</span><br />
                     au-delà des frontières
                  </p>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#welcome" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#welcome" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
   </div>
</div>
<div class="container-fluid containerhomeTitle w-100">
   <div class="container-fluid mymaxwidth">
      <h1><?php echo get_bloginfo('name') ?></h1>
   </div>
</div>
<div class="container-fluid containerhomeBlocW w-100">
   <div class="container-fluid mymaxwidth">
      <div class="row">
         <div class="col-12 text-center">
            Fondée par une équipe d’experts en management, AED s'est spécialisée<br />
            dans les publications essentiellement dédiées au business et au management pour accompagner les entreprises<br />
            dans leur gestion courante et leur offrant des supports, en papier ou numériques...<br />
            <a href="#">Lire plus</a>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid containerhomeTitle w-100">
   <div class="container-fluid mymaxwidth">
      <h2 style="color: #916239;">Nouveautés</h2>
   </div>
</div>

<?php 
   $args = array(
      'post_type' =>'post'
   );
   $post_query = new WP_Query($args);
   if($post_query->have_posts() ) { 
      while($post_query->have_posts() ) { 
            $post_query->the_post(); 
?>

<div class="col-12 col-md-6 text-center">
			
			<div class="container-fluid News-ITEM">
				
				<div class="row">
					<div class="col-12 col-lg-6 p-0">
						<img src="<?php the_post_thumbnail_url(); ?>" class="w-100">
						<div class="newsloop"></div>
					</div>
					<div class="col-12 col-lg-6 text-justify newsitemcontent">
						<a href="<?php the_permalink(); ?>" ><span><?php the_title(); ?></span></a>
						<div><?php the_excerpt();  ?></div>
						<a href="<?php the_permalink(); ?>" target="_blank">Lire plus</a>
					</div>
				</div>

			</div>

		</div>
      <?php  
         } //endif
      } //endwhile
      previous_posts_link();
      next_posts_link();

   get_footer();
   
   ?>