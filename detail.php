<!-- chi tiết sản phẩm -->
		<?php 
session_start();
require_once("admin/include/conn.php");

 ?>
 <div class="container">
 <div class="row">
    <?php 
    $id=$_GET["id"];
    $sql_chitiet = "SELECT * FROM song,singer,genre Where song.singer_id=singer.singer_id and song.genre_id=genre.genre_id and song.song_id={$id}";
    $query_chitiet= mysqli_query($conn,$sql_chitiet);
   while ($row=mysqli_fetch_assoc($query_chitiet)) {
     ?>
        <div class="col-md-6" style=" text-align: left;">
        <h2 class="song_name">Name Of Music: <?php echo $row['song_name'] ?></h2>
        <div class="col-md-5">
          <img src="img/<?php echo $row['song_img']?>" style="width: 600px;height: 500px" >
        </div>
        <p style="color: red;padding-left: 20px;"> Price: <?php echo $row['song_price']; ?></p>
          <audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="width: 250px">
          <source src="song/<?php echo $row['song_mp3'] ?>" type="audio/mpeg">
          </audio>
 
          <br>

          <br>
          <form method="POST" action="cart.php"> 
            <input type="number" name="sl" value="1" min="1" max="1" style="display: none;"> 
            <input type="hidden" name="id" value="<?=$id?>">
            <button type="submit" name="button-buy" class="button-buy"><i class="fas fa-cart-plus"></i>  Add to cart</button>
          </form>
          <script type="text/javascript">
            function myAudio(event){
              if(event.currentTime >60){
                event.currentTime=0;
                event.pause();
                alert ("Sign in to continue!");
              }
            }
          </script>
        <br>
        <br>
        <div style="border-bottom: 1px solid black"></div>
        <br>
        <p>
          Basic song info:
        </p>
        <h4>Singer: <?php echo $row["singer_name"]; ?></h4>
        <h5>Genre: <?php echo $row["genre_name"]; ?></h5>
       
       
        </div>
        
        <?php
         }
    	?>
     </div>
     </div>