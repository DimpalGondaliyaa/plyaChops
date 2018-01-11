<div class="container-fullwidth">
  <div class="row">
    <div class="col s12 m4">
       <div class="registerBox">
           <div class="login-img">
                <img src="<?php  echo base_url();?>html/images/login.png">
          </div>
            <div class="title">
            <h5>sign up</h5>
          </div>
           <div class="login-panel">
            <div class="login-card">
             Enter your interest to create your account:
            </div>
           </div>
          
           <div class="row">
     <form class="col s12" name="hobbyform" id="hobbyform" method='post' enctype="multipart/form-data">
      <div class="row">
         <div class="input-field col s12">
            <select name="hobby[]" multiple id="hobby" multiple>
              <option value="" disabled selected>Choose your option</option>
              <option value="event">event</option>
              <option value="movies">movies</option>
              <option value="entertainment">entertainment</option>
               <option value="education">education</option>
                <option value="marketing">marketing</option>
                 <option value="politics">politics</option>
                  <option value="food and drink">food and drink</option>
                   <option value="brands">brands</option>
                    <option value="business">business</option>
                     <option value="travelling">travelling</option>
                      <option value="gaming">gaming</option>
                       <option value="relationship">relationship</option>
                        <option value="surveys">surveys</option>
               </select>
            <label>Select Your Interest</label>
          </div>
          <div class="input-field col s12">
          <input placeholder="Interest" id="hobby" name="hobby[]" type="text" class="validate">
          <label for="hobby">other</label>
        </div>
        
        <div class="col s12 input-field done-btn-cols" style="text-align: center;">
           <a class="waves-effect waves-light btn hobbiedata hobb-btn">Done</a>
        
        </div>
      </div>
    </form>
  </div>
  </div>
    </div>
     <div class="col s12 m8">
        <div class="parallax-container login-parallax">
      <div class="parallax"><img src="<?php  echo base_url();?>html/images/bg4.jpg"></div>
      <div class="right-side-title"> 
          play <span class="chops">chops</span><br>
          <span class="bold-text">make money doing fun stuff</span>
      </div>
    </div>
        
     </div>

  </div>
</div>






<!-- <div class="register-area">
	<div class="main">
		<div class="registerBox">
      <div class="title">
      <h5>hobbie details</h5>
    </div>
    
			 <div class="row">
    <form class="col s12" name="hobbyform" id="hobbyform" method='post' enctype="multipart/form-data">
      <div class="row">
         
        <div class="input-field col s12 m6">
          <input id="Favourite_TV_Shows" name="Favourite_TV_Shows" type="text" class="validate">
          <label for="Favourite_TV_Shows">Favourite TV Shows</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="Favourite_Music_Bands_Artists" name="Favourite_Music_Bands_Artists" type="text" class="validate">
          <label for="Favourite_Music_Bands_Artists">Favourite Music Bands Artists</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="FavouriteBooks" name="FavouriteBooks" type="text" class="validate">
          <label for="FavouriteBooks">Favourite Books</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="FavouriteWriters" name="FavouriteWriters" maxlength="10" type="text" class="validate">
          <label for="FavouriteWriters">Favourite Writers</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="FavouriteMovies" name="FavouriteMovies" type="text" class="validate">
          <label for="FavouriteMovies">Favourite Movies</label>
        </div>

         <div class="input-field col s12 m6">
        <input id="FavouriteGames" name="FavouriteGames" type="text" class="validate">
          <label for="FavouriteGames">Favourite Games</label>
        </div>

          <div class="input-field col s12 m12">
        <input id="OtherInterests" name="OtherInterests" type="text" class="validate">
          <label for="OtherInterests">Other Interests</label>
        </div>

        <div class="col s12 input-field done-btn-cols">
        <a class="waves-effect waves-light btn hobbiedata">Done</a>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
 -->