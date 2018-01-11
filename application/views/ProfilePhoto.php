<?php  $this->load->view("ProfileHeader"); ?>


<div class="container-fullwidth">
    <div class="media-container">
       <div class="row">
<?php foreach ($postRow as $key => $value) {   ?>
<?php if($value['post_attachment']>0) {?>
<div class="col s12 m3">        
    <div class="post-img-box">
        <div class="img-box">
            <div class="pro-img">
               <img class="materialboxed comment-img" data-caption="A picture of a way with a group of trees in a park" width="250" src="<?php echo base_url(); ?>html/images/post_images/<?php echo $value['post_attachment']; ?> ">
            </div>
            <div class="comment-area">
                <div class="row">

                   <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-heart red-text" aria-hidden="true"></i>
                             <div class="totla-comment red-text">
                                21
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-comment blue-text" aria-hidden="true"></i>
                             <div class="totla-comment blue-text">
                                12
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-share" aria-hidden="true"></i>
                             <div class="totla-comment">
                                share
                             </div>
                        </div>
                     </div>    
                 </div>
            </div>
         </div>
      </div>
</div>
<?php } else { ?> <?php } ?>
<?php } ?>
<!-- 
<div class="col s12 m3">        
    <div class="post-img-box">
        <div class="img-box">
            <div class="pro-img">
               <img class="materialboxed comment-img" data-caption="A picture of a way with a group of trees in a park" width="250" src="<?php echo base_url(); ?>html/images/profile_photo/img1.jpeg">
            </div>
            <div class="comment-area">
                <div class="row">
                   <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-heart red-text" aria-hidden="true"></i>
                             <div class="totla-comment red-text">
                                21
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-comment blue-text" aria-hidden="true"></i>
                             <div class="totla-comment blue-text">
                                12
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-share" aria-hidden="true"></i>
                             <div class="totla-comment">
                                share
                             </div>
                        </div>
                     </div>    
                 </div>
            </div>
         </div>
      </div>
</div>


<div class="col s12 m3">        
    <div class="post-img-box">
        <div class="img-box">
            <div class="pro-img">
               <img class="materialboxed comment-img" data-caption="A picture of a way with a group of trees in a park" width="250" src="<?php echo base_url(); ?>html/images/profile_photo/img1.jpeg">
            </div>
            <div class="comment-area">
                <div class="row">
                   <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-heart red-text" aria-hidden="true"></i>
                             <div class="totla-comment red-text">
                                21
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-comment blue-text" aria-hidden="true"></i>
                             <div class="totla-comment blue-text">
                                12
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-share" aria-hidden="true"></i>
                             <div class="totla-comment">
                                share
                             </div>
                        </div>
                     </div>    
                 </div>
            </div>
         </div>
      </div>
</div>


<div class="col s12 m3">        
    <div class="post-img-box">
        <div class="img-box">
            <div class="pro-img">
               <img class="materialboxed comment-img" data-caption="A picture of a way with a group of trees in a park" width="250" src="<?php echo base_url(); ?>html/images/profile_photo/img1.jpeg">
            </div>
            <div class="comment-area">
                <div class="row">
                   <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-heart red-text" aria-hidden="true"></i>
                             <div class="totla-comment red-text">
                                21
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-comment blue-text" aria-hidden="true"></i>
                             <div class="totla-comment blue-text">
                                12
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-share" aria-hidden="true"></i>
                             <div class="totla-comment">
                                share
                             </div>
                        </div>
                     </div>    
                 </div>
            </div>
         </div>
      </div>
</div>


<div class="col s12 m3">        
    <div class="post-img-box">
        <div class="img-box">
            <div class="pro-img">
               <img class="materialboxed comment-img" data-caption="A picture of a way with a group of trees in a park" width="250" src="<?php echo base_url(); ?>html/images/profile_photo/img1.jpeg">
            </div>
            <div class="comment-area">
                <div class="row">
                   <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-heart red-text" aria-hidden="true"></i>
                             <div class="totla-comment red-text">
                                21
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-comment blue-text" aria-hidden="true"></i>
                             <div class="totla-comment blue-text">
                                12
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-share" aria-hidden="true"></i>
                             <div class="totla-comment">
                                share
                             </div>
                        </div>
                     </div>    
                 </div>
            </div>
         </div>
      </div>
</div>


<div class="col s12 m3">        
    <div class="post-img-box">
        <div class="img-box">
            <div class="pro-img">
               <img class="materialboxed comment-img" data-caption="A picture of a way with a group of trees in a park" width="250" src="<?php echo base_url(); ?>html/images/profile_photo/img1.jpeg">
            </div>
            <div class="comment-area">
                <div class="row">
                   <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-heart red-text" aria-hidden="true"></i>
                             <div class="totla-comment red-text">
                                21
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-comment blue-text" aria-hidden="true"></i>
                             <div class="totla-comment blue-text">
                                12
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-share" aria-hidden="true"></i>
                             <div class="totla-comment">
                                share
                             </div>
                        </div>
                     </div>    
                 </div>
            </div>
         </div>
      </div>
</div>


<div class="col s12 m3">        
    <div class="post-img-box">
        <div class="img-box">
            <div class="pro-img">
               <img class="materialboxed comment-img" data-caption="A picture of a way with a group of trees in a park" width="250" src="<?php echo base_url(); ?>html/images/profile_photo/img1.jpeg">
            </div>
            <div class="comment-area">
                <div class="row">
                   <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-heart red-text" aria-hidden="true"></i>
                             <div class="totla-comment red-text">
                                21
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-comment blue-text" aria-hidden="true"></i>
                             <div class="totla-comment blue-text">
                                12
                             </div>
                        </div>
                   </div>
                    <div class="col s4 m4">
                       <div class="comment-icon">
                         <i class="fa fa-share" aria-hidden="true"></i>
                             <div class="totla-comment">
                                share
                             </div>
                        </div>
                     </div>    
                 </div>
            </div>
         </div>
      </div>
</div>


 -->



</div></div></div>


     








