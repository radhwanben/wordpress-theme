<div class="container-fluid containerhomeBanner w-100 h-200 p-0">
   <div class="bd-example h-100">
         <div class="carousel-inner h-200">
            <div class="carousel-item active h-200" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center/cover;">
            </div>
          </div>
     </div>
    </div>
        <!-- Title -->

    <div class="container-fluid containerhomeTitle w-100">
            <div class="container-fluid mymaxwidth">
                <h2 style="color: #916239;"><?php the_title(); ?></h2>
            </div>
        </div>


<div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Date/Time -->
        <br>
        <p class="lead">
         
           <?php the_date();?>
      <?php if(has_tag()){
          the_tags();
        }else{
          echo 'no tags here';
        }?>
        <?php comments_number();  ?>
        </p>

        <hr>

        <div> <?php the_content(); ?></div>
        <hr>



      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-6">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <?php  the_category(); ?>
              </div>
            </div>
          </div>
        </div>



      </div>

    </div>
    <!-- /.row -->

  </div>