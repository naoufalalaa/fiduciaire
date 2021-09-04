<?php
include './components/headers/head.php';
include './controllers/user/home.php'
?>
<div align="center" class="uk-secondary uk-padding-small">
    <button class="uk-button uk-button-danger"><small>Announcements !</small></button> <small>Get ready for a brand new Adventure on our website!</small>
</div>
<?php
include './components/navbar/navbar.php';
include './components/navbar/mobile.php'
?>


    <div class="uk-position-relative uk-box-shadow-xlarge uk-visible-toggle uk-light" tabindex="-1"  uk-slideshow="autoplay: true;min-height: 300; max-height: 400">

        <ul class="uk-slideshow-items">
            <li> 
                <img src="./assets/img/p4.jpg" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left uk-position-small uk-text-left">
                    <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Heading</h2>
                    <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Lorem ipsum dolor sit amet.</p>
                </div>
            </li>
            <li>
                <img src="./assets/img/p2.jpg" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-center uk-position-small uk-text-center">
                    <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Heading</h2>
                    <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Lorem ipsum dolor sit amet.</p>
                </div>
            </li>
            <li>
                <img src="./assets/img/p3.jpg" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-center uk-position-small uk-text-center">
                    <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Heading</h2>
                    <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Lorem ipsum dolor sit amet.</p>
                </div>
            </li>
        </ul>
    
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    
    </div>

    <div align="center">
        <div class="uk-flex-center uk-width-5-6 uk-margin-large-top">
            <h3 class="uk-text-left">Notre plateforme en chiffres : </h3>
            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center" uk-grid="parallax : 150px" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">
                <div>
                    <div class="uk-card uk-box-shadow-medium uk-padding-large uk-box-shadow-hover-xlarge uk-card-secondary uk-card-body">
                        <div class="uk-padding-small uk-position-top-left">    
                            <h3>01 .</h3>
                        </div>
                        <div>
                            <h3>+<?=$nbrENT?></h3>
                        </div>
                        <div class="uk-padding-small uk-text-right uk-position-bottom-right">
                            <h6>Entreprises</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-box-shadow-medium uk-padding-large uk-box-shadow-hover-xlarge uk-card-secondary uk-card-body">
                        <div class="uk-padding-small uk-position-top-left">    
                            <h3>02 .</h3>
                        </div>
                        <div>
                            <h3>+<?=$nbrFIDU ?></h3>
                        </div>
                        <div class="uk-padding-small uk-text-right uk-position-bottom-right">
                            <h6>Fiduciaires</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-box-shadow-medium uk-padding-large uk-box-shadow-hover-xlarge uk-card-secondary uk-card-body">
                        <div class="uk-padding-small uk-position-top-left">    
                            <h3>03 .</h3>
                        </div>
                        <div>
                            <h3>+<?=$nbrFIDU+$nbrENT?></h3>
                        </div>
                        <div class="uk-padding-small uk-text-right uk-position-bottom-right">
                            <h6>Total utilisateurs</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div align="center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f44646e6" fill-opacity="1" d="M0,224L1440,160L1440,320L0,320Z"></path></svg>
            <div class="uk-theme " uk-slider>

                <div class="uk-position-relative uk-visible-toggle uk-light uk-width-5-6" tabindex="-1">
            
                    <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                        <li>
                            <div>
                                <div class="uk-card uk-card-default uk-box-shadow-medium">
                                    <div class="uk-card-media-top uk-cover-container uk-height-small">
                                        <img src="./assets/img/06.jpg" uk-cover alt="">
                                    </div>
                                    <div class="uk-card-body uk-text-left">
                                        <h3 class="uk-card-title">Media Top</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="uk-card uk-card-default uk-box-shadow-medium">
                                <div class="uk-card-media-top uk-cover-container uk-height-small">
                                    <img src="./assets/img/SL-031821-41530-15.jpg" uk-cover alt="">
                                </div>
                                <div class="uk-card-body uk-text-left">
                                    <h3 class="uk-card-title">Media Top</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="uk-card uk-card-default uk-box-shadow-medium">
                                <div class="uk-card-media-top uk-cover-container uk-height-small">
                                    <img src="./assets/img/21201373.jpg" uk-cover alt="">
                                </div>
                                <div class="uk-card-body uk-text-left">
                                    <h3 class="uk-card-title">Media Top</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="uk-card uk-card-default uk-box-shadow-medium">
                                <div class="uk-card-media-top uk-cover-container uk-height-small">
                                    <img src="./assets/img/dark.jpg" uk-cover alt="">
                                </div>
                                <div class="uk-card-body uk-text-left">
                                    <h3 class="uk-card-title">Media Top</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                    <a style="color: black;" class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a style="color: black;" class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>
            </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f44646e6" fill-opacity="1" d="M0,224L1440,160L1440,0L0,0Z"></path></svg>
    </div>
    

<?php
include './components/headers/footer.php'
?>