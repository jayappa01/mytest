<link rel="stylesheet" type="text/css" href="{{ asset('public/css/custom.css')}}">
<a href="" class="white" data-toggle="modal" data-target="#video-play-btn">
 <div class="playVideo-perPage">
  <div class="video-play-btn line-height-1">

   <i class="icon-social-youtube "></i>

  </div>
 </div>

</a>

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
     <source id="ppageVideoscr" src="" type="video/mp4">
    </video>
   </div>
  </div>
 </div>
</div>

<script>
$(document).ready(function() {

 var url = $("#ppageVideoscr").attr('src');


 $("#video-play-btn").on('hide.bs.modal', function() {
  $("#ppageVideo").attr('src', '');
  $("#ppageVideoscr").attr('src', '');
 });

 $("#video-play-btn").on('show.bs.modal', function() {
  $("#ppageVideo").attr('src', url);
  $("#ppageVideoscr").attr('src', url);
 });
});
</script>