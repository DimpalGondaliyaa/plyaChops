  <div class="row">
    <form class="col s12" method="post" name="addform" id="addform">
      <div class="row">
      
        <div class="input-field col s6">
          <input id="circular_id" type="text" name="circular_id" class="validate">
          <label for="circular_id">circular_id</label>
        </div>

         <div class="input-field col s6">
          <select multiple id="class" name="class[]">
            <option value="" disabled selected>Choose your CLASS</option>
             <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
          </select>
           <label for="class">class</label>
        </div>

        <div class="input-field col s6">
          <select multiple id="division" name="division[]">
            <option value="" disabled selected>Choose your division</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
             <option value="D">D</option>
              <option value="E">E</option>
          </select>
           <label for="division">division</label>
        </div>

        <div class="input-field col s6">
          <input id="circular_name" type="text" class="validate" name="circular_name">
          <label for="circular_name">circular_name</label>
        </div>
        <div class="input-field col s6">
          <input id="circular_title" type="text" class="validate " name="circular_title">
          <label for="circular_title">circular_title</label>
        </div>
        <div class="input-field col s6">
           <input type="text" class="datepicker" name="circular_date">
          <label for="circular_date">circular_date</label>
        </div>
        <div class="input-field col s6">
          <input id="message" type="text" class="validate" name="message">
          <label for="message">message</label>
        </div>
        <div class="input-field col s6">
          <input id="attachment" name="attachment" type="file" class="validate" style="display: none;" >
         <button type="button"  name="attachment" class="btn btn-flat blue white-text " onclick="return $('#attachment').click()">upload file</button>
        </div>
      </div>
    
    </form>
  </div>