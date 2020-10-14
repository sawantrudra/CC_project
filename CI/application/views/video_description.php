

<div class="col">
<div class="row" style="margin-top:10px;">
    <div class="col-1.5" >
    <button class="btn btn-simple btn-round btn-neutral" 
     onclick="like_dislike_video_fn()" id="like_btn" data-toggle="tooltip" data-placement="bottom" title="Add to Favourites">
    <i class="tim-icons icon-heart-2" id="like_icon"  style = "<?php if($liked){ echo 'color: #FF0000;';}?>font-size:20px ;"></i></button>
    <div class="w-1"></div>
    </div>
    <div class="col-1.5" >
    <button class="btn btn-simple btn-round btn-neutral" data-toggle="tooltip" data-placement="bottom" title="Add a Comment">
    <i class="tim-icons icon-chat-33" style="font-size:20px ;"></i></button>
    </div>
    <div class="col-1.5" >
    <button class="btn btn-simple btn-round btn-neutral" data-toggle="tooltip" data-placement="bottom" title="Get Sharable Link">
    <i class="tim-icons icon-link-72" style="font-size:20px ;"></i></button>
    </div>
  
    <div class="col-1.5" >
    <button class="btn btn-simple btn-round btn-neutral" data-toggle="tooltip" data-placement="bottom" title="Download Video">
    <i class="tim-icons icon-cloud-download-93" style="font-size:20px ;"></i></button>

    </div>
    
</div>
    <div class="row">
    <div class="col"  style="margin-top:30px;">
        <h2>Title : <?php echo $title ?> </h2>
    </div>
    </div>
    
    <div class="row">
        <div class="col-3" style="display:inline;" >
            <button type="button" class="btn btn-simple btn-neutral">
                Views <span class="badge badge-pill badge-default" style="display:inline;">4</span>
            </button>
        </div>
        <div class="col-3" style="display:inline;">
            <button type="button" class="btn btn-simple btn-neutral" >
                Likes <span class="badge badge-pill badge-default" style="display:inline;"><?php echo $likes ?></span>
            </button>
        </div>
        <div class="col-3" style="display:inline;">
            <button type="button" class="btn btn-simple btn-neutral">
                Comments<span class="badge badge-pill badge-default" style="display:inline;">4</span>
            </button>
        </div>
    </div>
    <div class="row">
    <div class="col"  style="margin-top:20px;">
        <p>Description: </br><?php echo $description ?></p>
    </div>
    </div>
</div>


</div>
</div>

<script>
    var liked = <?php echo $liked;?>;
function like_dislike_video_fn() {
  if(liked){
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        if(this.responseText){
            document.getElementById("like_icon").style.color="#FFFFFF";
            liked = 0;
        }
      
    }
  }
  xmlhttp.open("GET","<?php echo base_url() ?>video_player/dislike_video/<?php echo $id ?>",true);
  xmlhttp.send();
  }else{
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp1=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp1.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        if(this.responseText){
            document.getElementById("like_icon").style.color="#FF0000";
            liked = 1;
        }
      
    }
  }
  xmlhttp1.open("GET","<?php echo base_url() ?>video_player/like_video/<?php echo $id ?>",true);
  xmlhttp1.send();
  } 
}
</script>