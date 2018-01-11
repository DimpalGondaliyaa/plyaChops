<form namne="image" id="image" method="post">
	     <div class="input-field col s6">
          <input placeholder="postData" name="postData" id="postData" value="<?php echo $postData; ?>" type="text" class="validate">
        </div>
         <div class="input-field col s6">
         <img src="<?php echo base_url(); ?>html/images/post_images/<?php echo $post_attachment; ?>" width="300">
          <input placeholder="post_attachment"  name="post_attachment" id="post_attachment" value="<?php echo $post_attachment; ?>" type="file" class="validate">
        </div>
        <input type="hidden" data-postid="<?php echo $post_Id;  ?>"  name="postid" value="<?php echo $post_Id; ?>">
</form>