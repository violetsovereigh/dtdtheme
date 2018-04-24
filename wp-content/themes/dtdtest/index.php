
<?php get_header(); ?>

    <div class="container" style="background-color:#F7F7F7;">
        <?php 
        //開始接受'Work'post type
        $args = array( 'post_type' => 'work', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    
    <div class="row carousel-row">
    
      <div id="mycarousel" class="carousel slide " data-ride="carousel">
        <div id="indicators-set" class="carousel-indicators">
          
        </div>
        

        <div class="carousel-inner">
          <div class="carousel-item active">
              <img id="carousel-item-img" class="d-block w-100" src="<?php echo get_theme_file_uri('/img/01.jpg') ?>" alt="First slide">
            
          </div>
          <div class="carousel-item">
            <img id="carousel-item-img" class="d-block w-100" src="<?php echo get_theme_file_uri('/img/02.png') ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
          <img id="carousel-item-img" class="d-block w-100" src="<?php echo get_theme_file_uri('/img/03.png') ?>" alt="Third slide">
          </div>
        </div>
 
      </div>
      </div>
      
 <div class="row club justify-content-md-center">
 <div class="col"></div>
    <div id="club-title" class="col" style="text-align:left;">畫匣子</div>
    <div id="club-content" class="col">
      <ul id="club-content-ul">
        <li id="club-content-li">社課時間:每學期</li>
        <li id="club-content-li">社課地點</li>
        <li id="club-content-li">簡單介紹</li>
      </ul> 
      
    </div>
    
</div> 

<div class="row justify-content-md-center">
    
     <?php
    //開始接受卡片輸入
    //Get the images ids from the post_metadata
    $images = acf_photo_gallery('club-gallery', $post->ID);
    //Check if return array has anything in it
    if( count($images) ):
        //Cool, we got some data so now let's loop over it
        foreach($images as $image):
            $ti_count=1;
            $id = $image['id']; // The attachment id of the media
            $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
?>


    <div class="card bg-light mb-3" style="width: 18rem;">
        <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
            <img class="card-img-top" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
        <?php if( !empty($url) ){ ?></a><?php } ?>
        <div class="card-body">
            <p class="card-text"><p class="card-title"><?php echo $title;?></p><p><?php echo $caption; ?></p></p>
        </div>
    </div>
    
<?php endforeach;endif; ?>
</div>
<?php
    endwhile;
        ?>  


      
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
    
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/test.js"></script> -->
    <?php get_footer(); ?>
  
