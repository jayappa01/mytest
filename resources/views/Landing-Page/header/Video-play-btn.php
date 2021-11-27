<style>
.playVideo-perPage {
 z-index: 2 !important;
 right: 5px !important;
 top: 75px !important;
 position: fixed;

}

.playVideo-perPage .video-play-btn {
 border-radius: 6px;
 padding-left: 3px;
 padding-right: 3px;
 width: 34px;
 height: 26px;
 font-size: 27px;
 background-color: rgba(255, 0, 0, 0.5);
 color: white;
}

.playVideo-perPage:hover .video-play-btn {
 background-color: red;
}
</style>
<a href="" class="white" data-toggle="modal" data-target="#video-play-btn">
 <div class="playVideo-perPage">
  <div class="video-play-btn line-height-1">

   <i class="icon-social-youtube "></i>

  </div>
 </div>

</a>

<!-- Modal -->

<div class="modal fade" id="video-play-btn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
 aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content ">
   <div class="modal-header " style="background-color: rgba(0,0,0,0.8) !important; color:white !important;">
    <h5 class="modal-title text-white">Modal title</h5>
    <button type="button" class="btn btn-sm btn-outline-light font-small-3" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
   </div>
   <div class="modal-body p-0">
    <video id="ppageVideo" width="100%" height="auto" controls>
     <source id="ppageVideoscr" src="<?php echo $play_video_4page; ?>" type="video/mp4">
    </video>
   </div>
  </div>
 </div>
</div>

<script>
$(document).ready(function() {
 /* Get iframe src attribute value i.e. YouTube video url
 and store it in a variable */
 var url = $("#ppageVideoscr").attr('src');

 /* Assign empty url value to the iframe src attribute when
 modal hide, which stop the video playing */
 $("#video-play-btn").on('hide.bs.modal', function() {
  $("#ppageVideo").attr('src', '');
  $("#ppageVideoscr").attr('src', '');
 });

 /* Assign the initially stored url back to the iframe src
 attribute when modal is displayed again */
 $("#video-play-btn").on('show.bs.modal', function() {
  $("#ppageVideo").attr('src', url);
  $("#ppageVideoscr").attr('src', url);
 });
});
</script>