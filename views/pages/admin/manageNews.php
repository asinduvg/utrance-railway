<style>
/* 
.textinput {
    float: left;
    width: 100%;
    min-height: 75px;
    outline: none;
    resize: none;
    border: 1px solid grey;
    border-style: none;
    border-color: Transparent;
    overflow: auto;
    outline: none;
} */
.newsimage {
    float: left;
    width: 100%;
    min-height: 75px;
    outline: none;
    resize: none;
    border: 1px solid grey;
    border-style: none;
    border-color: Transparent;
    overflow: auto;
    outline: none;
}
</style>
<?php include_once '../views/components/backButton.php';?>
<div class="dashboard">
    <?php include_once '../views/layouts/adminSideNav.php';?>
    <div class="dash-content__container">
      <div class="dash-content">
        <div class="heading-secondary margin-b-m margin-t-m">
          <p class="center-text">Manage News</p>
        </div>

<<<<<<< HEAD
        <form action="/manage-news" method="POST" >
=======
        <form action="" method="POST" enctype="multipart/form-data">
>>>>>>> master
          <fieldset class="margin-b-xs">
            <legend class="topic-greyed topic-greyed--dark padding-xxs">News Type</legend>
            <div class="flex-row-sa-center margin-tb-s">
              <div>
                  <label for="train_schedule">Train Schedule</label>
                  <input type="radio" value="train_schedule" name="details_type" id="train_schedule" checked>
              </div>
              <div>
                  <label for="ticket_price">Ticket Price</label>
                  <input type="radio" value="ticket_price" name="details_type" id="ticket_price" >
              </div>
              <div>
                  <label for="other">Other</label>
                  <input type="radio" value="other" name="details_type" id="other" >
              </div>
            </div>                   
          </fieldset>
             
          <fieldset class="margin-b-xs">
            <legend class="topic-greyed topic-greyed--dark padding-xxs">News</legend>
            <div class="flex-col-sa-center margin-tb-s">
              <div class="dash-content__input width-full padding-lr-s">
                <input type="text" name="news_headline" class="form__input" placeholder="Headline" required>
              </div>
              <textarea class="textinput" rows="10" cols="60" name="detail" placeholder=" Enter the news here..." required></textarea>
            </div>
          </fieldset>

          <fieldset class="margin-b-xs">
            <legend class="topic-greyed topic-greyed--dark padding-xxs">Image</legend>   
            <div class="">
<<<<<<< HEAD
              <img 
                src="/public/img/pages/admin/train.jpg"
=======
            <!-- <img id="output" width="500" height="360"/> -->
           
              <img id="output"
                src="../../../../utrance-railway/public/img/NewsImages/newtrain.jpeg"
>>>>>>> master
                alt="news-picutre"
                class="newsimage"
                width="500" height="360"
              />
              <div class="errorclass" style= "color:red; margin:10px; font-weight: bold;"><?php if (isset($error)) {echo $error;}?></div>
                <input
                type="file"
                name="photo"
                accept="image/*"
                 
                id="photo"
                onchange="loadFile(event)"
              />
             
              <!-- class="form__upload" -->
              <!-- <label for="photo" class="btn-square-upload margin-b-s">Choose Photo</label> -->
            </div>
          </fieldset>

          <button class="btn btn-round-blue margin-b-l margin-t-s" type="submit">Post</button>

        </form>
      </div>
          
    </div>
        </div>
      </div>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);

 
};
</script>