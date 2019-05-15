
<!-- Footer -->
<footer style="background-color:#FFFFFF;">
  <div class="container" >
    <div class="row">

      <div class="col-sm-8 col-sm-offset-2">
        <div class="footer-border"></div>
    <br/>
        <p style="color:#000000;" align="center">Christopher Wayo Ayabam Foundation &copy;2018. All rights reserved</p>
      </div>

    </div>
  </div>
  </footer>
<!--==============================footer=================================-->

<script src="<?php echo base_url("resources/js/jquery.hoverdir.js");?>"></script>
<script>
$(document).ready(function() {
$('.iosSlider').iosSlider({
desktopClickDrag: true,
snapToChildren: true,
navSlideSelector: '.sliderContainer .slideSelectors .item',
onSlideComplete: slideComplete,
onSliderLoaded: sliderLoaded,
onSlideChange: slideChange,
scrollbar: false,
autoSlide: true,
autoSlideTimer: 3300,
infiniteSlider: true
});
});
function slideChange(args) {
$('.sliderContainer .slideSelectors .item').removeClass('selected');
$('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
}
function slideComplete(args) {
if(!args.slideChanged) return false;
$(args.sliderObject).find('.text1, .text2').attr('style', '');
$(args.currentSlideObject).find('.text1').animate({
right: '100px',
opacity: '0.72'
}, 400, 'easeOutQuint');
$(args.currentSlideObject).find('.text2').delay(200).animate({
right: '70px',
opacity: '0.72'
}, 400, 'easeOutQuint');
}
function sliderLoaded(args) {
$(args.sliderObject).find('.text1, .text2').attr('style', '');
$(args.currentSlideObject).find('.text1').animate({
right: '100px',
opacity: '0.72'
}, 400, 'easeOutQuint');
$(args.currentSlideObject).find('.text2').delay(200).animate({
right: '70px',
opacity: '0.72'
}, 400, 'easeOutQuint');
slideChange(args);
}
$(function() {
  $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
});
</script>





<!-- sweetalert function -->

<script>
$(document).on("click", "#delete", function(e){
e.preventDefault();
var link =$(this).attr("href");
  swal({
    title:"Are you sure you want to delete?",
    text: "Once Delete, this will be permanently Deleted",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete)=>{
    if (willDelete){
        window.location.href = link;
      }
      else{
        swal("Safe Data!");
      }
    });
  });
</script>



<!-- header toastr function -->
<script>
@if(Session::has('messege'))
var type="{{Session::get('alert-type','info')}}"
switch(type){
case 'info':
toastr.info("{{Session::get('messege')}}");
break;
case 'success':
toastr.success("{{Session::get('messege')}}");
break;
case 'warning':
toastr.warning("{{Session::get('messege')}}");
break;
case 'error':
toastr.error("{{Session::get('messege')}}");
break;
}
@endif
</script>
