<?php 
     require_once("./controllers/Menu.php");
     $choco = new Choco();
?>

<!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Menus</h2>
                              <h4>Tea Time &amp; Dining</h4>
                         </div>
                    </div>
               <?php foreach ($choco->menus as $choc): ?>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                    
                         <div class="menu-thumb">
                              <a href="#" class="image-popup" title="American Breakfast">
                                   <img src="<?= $choc->src; ?>" class="img-responsive" alt="<?= $choc->alt; ?>">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3><?= $choc->name; ?></h3>
                                             <p>Tomato / Eggs / Sausage</p>
                                        </div>
                                        <div class="menu-price">
                                             <span><?= $choc->price; ?></span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    
                    </div>
               <?php endforeach; ?>
                    

               </div>
          </div>
     </section>