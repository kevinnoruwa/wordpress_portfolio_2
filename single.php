<?php

// Template name: Signle project template

 get_header()


?>

<?php

?>




<section id="portfolio-projects">
      <div class="container">
      <h1><?php echo $name; ?></h1>
        <div class="project-image">
          <div class="img" style='background: url("<?php echo $image_properties[url]; ?>");'></div>
        </div>
        <h1><?php echo $name; ?></h1>
        <div class="info">
          <div class="buttons">
            <a href="<?php echo $project_url ?>"><i class="fas fa-desktop"></i> View Project</a>
            <a href="<?php echo $github_url ?>"><i class="fas fa-code"></i> View Code</a>
          </div>
        </div>
        
        <?php echo $description ?>
        
        <div class="technologies">
          <h3>Technologies</h3>

          <div class="icons">
            <div class="icon">
              <img src="<?php echo   $tech_icon_1 ?>">
            </div>
            <div class="icon">
              <img src="<?php echo   $tech_icon_2?>">
            </div>
            <div class="icon">
              <img src="<?php echo $tech_icon_3 ?>">
            </div>
            <div class="icon">
              <img src="<?php echo $tech_icon_4 ?>">
            </div>
          </div>
        </div>
        <div class="video">
          <h3>Video Walkthrough</h3>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $youtube_url ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </section>

<?php
    get_footer(); 
 
 ?>