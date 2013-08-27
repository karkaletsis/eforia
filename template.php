<?php
/**
 * @package                Joomla.Site
 * @subpackage  Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
        <head >
                <jdoc:include type="head" />
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
               
                <script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
                
                <script src="<?php echo $this->baseurl ?>/templates/beez_20/javascript/jquery.easing.js"></script>
                
                 <script src="<?php echo $this->baseurl ?>/templates/beez_20/javascript/script.js"></script>
                
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez_20/css/style.css" type="text/css"  />
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez_20/css/fonts/stylesheet.css" type="text/css"  />
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez_20/css/fonts2/stylesheet.css" type="text/css"  />
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez_20/css/dinprocond/stylesheet.css" type="text/css"  />
        </head>

        <body >
        
        
        
        <div id='ball'></div>
        
          <div id='wrap'>
            
            <div id='wraptop'></div>
            <div id='wrapmid'>
        
          <div id='top'>
            <div id='logo'></div>
            <div id='menu'><jdoc:include type="modules" name="menu"  style="xhtml" /></div>
            <div id='nextmatch'>
              <div id='coachescorner'></div>
            </div>
            
            
            
              <jdoc:include type="modules" name="banner"  style="xhtml" />
          </div>


    
          <div id='mid' style='padding-left:15px;'>
            
            <!------------------------------------- THE CONTENT ------------------------------------------------->
            <div id="jslidernews2" class="lof-slidecontent" style="width:941px; height:300px;">
              <div class="preload"><div></div></div>
                        
                        
                        <div  class="button-previous">Previous</div>
                                             
                     <!-- MAIN CONTENT --> 
               <jdoc:include type="modules" name="mainslideshow"  style="xhtml" />
              
                          <div class="main-slider-content" style="width:689px; height:300px;">
                            <ul class="sliders-wrap-inner">
                                <li>
                                   <img width="689" src="<?php echo $this->baseurl ?>/images/images/pan2013.jpg" title="Παναθλητικός 2012-2013" >  
                                   <div class='textonpic'>
                                     <span>Παναθλητικός 2012-2013</span>                                     
                                   </div>                                              
                                </li> 
 <li>
                                   <img width="689" src="<?php echo $this->baseurl ?>/images/images/pan2013_2.jpg" title="Παναθλητικός 2012-2013" >  
                                   <div class='textonpic'>
                                     <span>Παναθλητικός 2012-2013</span>                                     
                                   </div>                                              
   <!--                             </li> 
                                <li>
                                   <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/slide1.png" title="Newsflash 2" >  
                                   <div class='textonpic'>
                                     <h3>Νέα εντυπωσιακή εμφάνιση του Παναθλητικού</h3>
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed elit risus. Aenean libero dui, suscipit a porttitor vitae, viverra ac dui. 
                                   </div>         
                                     
                                </li> 
                               <li>
                                  <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/slide2.png" title="Newsflash 1" >           
                                  <div class='textonpic'>
                                     <h3>Νέα εντυπωσιακή εμφάνιση του Παναθλητικού</h3>
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed elit risus. Aenean libero dui, suscipit a porttitor vitae, viverra ac dui. 
                                   </div>       
                                </li> -->
                      <li>
                                  <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/slide4.png" title="Newsflash 1" >           
                                  <div class='textonpic'>
                                     <span>Ομάδα Νεανίδων του Παναθλητικού</span>
                                   </div>       
                                </li> 
                      <li>
                                  <img src="<?php echo $this->baseurl ?>/images/korasides2012/korasides2012-13.jpg" title="Ομάδα Κορασίδων του Παναθλητικού" >           
                                  <div class='textonpic'>
                                     <span>Ομάδα Κορασίδων του Παναθλητικού</span>
                                   </div>       
                                </li> 
                                
                                
                            
                              </ul>    
                        </div>
                    <!-- END MAIN CONTENT --> 
                       <!-- NAVIGATOR -->
                         <div class="navigator-content">
                              <div class="navigator-wrapper">
                                    <ul class="navigator-wrap-inner">
                <li>
                                            <div>
                                                <div class='imagecont'>
                                                  <div>
                                                    <img src="<?php echo $this->baseurl ?>/images/images/pan2013.jpg" title="Παναθλητικός 2012-2013" >  
                                                  </div>
                                                </div>
                                                
                                                <div class='arrow'></div>
                                                
                                                <div class='slidetext'>Παναθλητικός 2012-2013</div>
                                                
                                             </div>    
                                        </li>

                <li>
                                            <div>
                                                <div class='imagecont'>
                                                  <div>
                                                    <img src="<?php echo $this->baseurl ?>/images/images/pan2013_2.jpg" title="Παναθλητικός 2012-2013" >  
                                                  </div>
                                                </div>
                                                
                                                <div class='arrow'></div>
                                                
                                                <div class='slidetext'>Παναθλητικός 2012-2013</div>
                                                
                                             </div>    
                                        </li>

<!--
                                      <li>
                                            <div>
                                                <div class='imagecont'>
                                                  <div>
                                                    <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/slide1.png" title="Newsflash 2" >  
                                                  </div>
                                                </div>
                                                
                                                <div class='arrow'></div>
                                                
                                                <div class='slidetext'>Νέα εντυπωσιακή εμφάνιση του Παναθλητικού</div>
                                                
                                             </div>    
                                        </li>
                                         <li>
                                             <div>
                                                <div class='imagecont'>
                                                  <div>
                                                    <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/slide2.png" title="Newsflash 2" >  
                                                  </div>
                                                </div>
                                                
                                                <div class='arrow'></div>
                                                
                                                <div class='slidetext'>Νέα εντυπωσιακή εμφάνιση του Παναθλητικού</div>
                                             </div>     
                                             
                                             
                                        </li>
-->
                          <li>
                                             <div>
                                                <div class='imagecont'>
                                                  <div>
                                                    <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/slide4.png" title="Newsflash 2" >  
                                                  </div>
                                                </div>
                                                
                                                <div class='arrow'></div>
                                                
                                                <div class='slidetext'>Ομάδα Νεανίδων του Παναθλητικού</div>
                                             </div>     
                                             
                                             
                                        </li>
                                      
                                        <li>
                                             <div>
                                                <div class='imagecont'>
                                                  <div>
                                                    <img src="<?php echo $this->baseurl ?>/images/korasides2012/korasides2012-13.jpg" title="Newsflash 2" >  
                                                  </div>
                                                </div>
                                                
                                                <div class='arrow'></div>
                                                
                                                <div class='slidetext'>Ομάδα Κορασίδων του Παναθλητικού</div>
                                             </div>     
                                             
                                             
                                        </li>
  
                                      
                                    </ul>
                              </div>
               
                         </div> 
                      <!----------------- END OF NAVIGATOR --------------------->
                      <div class="button-next">Next</div>
             
                  <!-- BUTTON PLAY-STOP -->
                      <div class="button-control"><span></span></div>
                      <!-- END OF BUTTON PLAY-STOP -->
                       
             </div> 
            
            <!------------------------------------- END OF THE CONTENT ------------------------------------------------->
            
            
            <div class='m1 m'>
              <div id='news-menu'>
              <jdoc:include type="modules" name="news-menu"  style="xhtml" />
              </div>
              <h2>Χορηγοί</h2>
              <div style=''>
                

                <!-- root element for scrollable -->
                <div class="scrollable vertical">
                
                  <!-- root element for the items -->
                  <div class="items">
                  
                    <div>
                            
                        <div class="item">
                           <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/sp1.jpg" >
                        </div>
                            
                        <div class="item">
                          <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/sp2.jpg" >
                        </div>
                            
                        <div class="item">
                          <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/sp3.jpg" >
                        </div>
                        
                    </div>
                    
                    <div>
                            
                        <div class="item">
                         <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/sp4.jpg" >
                        </div>
                            
                        <div class="item">
                         <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/sp5.jpg" >
                        </div>
                        
                        <div class="item">
                         
                        </div>
                       
                        
                    </div>
                          
                          
                          
                          
                         
                  </div>
                </div>  <!-- end of scrollable -->
                 <div id='minislide'>
              <jdoc:include type="modules" name="minislide"  style="xhtml" />
              </div>
              </div>
            </div>
            
                      <?php
$app = JFactory::getApplication();
$menu = $app->getMenu();
if ($menu->getActive() == $menu->getDefault()) {
  

?>
        

            <div class='m2 m' >
        <!--                  <h2>Επόμενος Αγώνας</h2>
              <div id='nextgame'>
                <jdoc:include type="modules" name="nextgame"  style="xhtml" />
              </div>
            -->              
              <!--<h2>Αποτελέσματα Αγώνων</h2>-->
              <div id='results'>
              <jdoc:include type="modules" name="results"  style="xhtml" />
              </div>
             <!-- <h2>Τελευταία Νέα</h2> -->
           <div id='news'>
              <jdoc:include type="modules" name="news"  style="xhtml" />
              </div>
          <div>
                <jdoc:include type="modules" name="minislide"  style="xhtml"  />
                </div>
            </div>

            <div class='m3 m' >
              <h2>Photo Gallery</h2>
              <div id='gal'>
                <a class="backward">prev</a>
              <div class="images">

                  <!-- first slide -->
                  <div>
                    <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/gal1.jpg" >
                  </div>
                
                  <!-- second slide -->
                  <div>
                   <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/gal2.jpg" >
                  </div>
                
                  <!-- third slide -->
                  <div>
                  <img src="<?php echo $this->baseurl ?>/templates/beez_20/images/gal3.jpg" >
                   </div>
                
                
              </div>
              
              <!-- "next slide" button -->
                <a class="forward">next</a>
                
                <!-- the tabs -->
                <div class="slidetabs">
                  <a href="#"></a>
                  <a href="#"></a>
                  <a href="#"></a>
                </div>
              </div>
                

            </div>
            
            <?php } else {?>
              
              
              
              <div class='m2 m mm' >
              
              
              <jdoc:include type="message" />
                                                        <jdoc:include type="component" />
              
              
            </div>
              
            <?php } ?>
            <div style='clear:both'></div>
            
            
            <div id='horshadow'></div>
            
            <div id='foot'>
              <div class='f f1'>
                
                
                <div id='fbbox'>
                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fplatform&amp;width=400&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color=white&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:161px;" allowTransparency="true"></iframe>
                </div>
              </div>
              <div class='f f2'>
                <div id='contact'>
                  <jdoc:include type="modules" name="contact"  style="xhtml" />
                </div>
              </div>
              <div class='f f3'>
                <a class='fb' href='https://www.facebook.com/panathlitikos'></a>
                <a class='yt'></a>
                <a class='tw' href='https://twitter.com/panathlitikosbc'></a>
              </div>
              <div style='clear:both'></div>
            </div>
          </div>
  
        </div>
            <div id='wrapbottom'></div>
          </div>
          
          
        
        </body>
</html>


<script language="JavaScript">


    
  $(function() {  
    
  
    
     $(".scrollable").scrollable({ vertical: true, circular: true }).autoscroll({ autoplay: true });
    
      $('#ball').css('top',($(document).height()-386)+'px'); 
      
    var buttons = { previous:$('#jslidernews2 .button-previous') ,
            next:$('#jslidernews2 .button-next') };       
    $('#jslidernews2').lofJSidernews( { interval:5000,
                         easing:'easeInOutQuad',
                        duration:1200,
                        auto:true,
                        mainWidth:689,
                        mainHeight:300,
                        navigatorHeight    : 100,
                        navigatorWidth    : 263,
                        maxItemDisplay:3,
                        buttons:buttons } );
                        
    $(".slidetabs").tabs(".images > div", {

    // enable "cross-fading" effect
    effect: 'fade',
    fadeOutSpeed: "slow",

    // start from the beginning after the last tab
    rotate: true

    // use the slideshow plugin. It accepts its own configuration
    }).slideshow({clickable:false,autoplay:true,autopause:false,interval:5000});
   
   
  });
</script>

