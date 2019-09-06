<div class="o-site-slider">
<div class="bg1-slider"></div>
<div class="bg2"></div>

<?php
  $sql="select * from running where id='1'";
  $result=mysql_query($sql);
  $data_running=mysql_fetch_assoc($result);
?>
 <div class="container"> <h1 style="margin-top: -65px;color:#fff;margin-bottom: -34px;"><marquee><?php echo $data_running['isi']; ?></marquee></h1>
    <div class="slider-wrap">
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.0.9 auto mode -->
	<div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.9">

<ul>
	<!-- SLIDE  -->
	<?php
		$sql=mysql_query("select * from slide");
		while($data_slide=mysql_fetch_assoc($sql)){
	?>
	<li data-index="rs-21" data-transition="fade" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="joimg/slide/<?php echo $data_slide['gambar']; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-description="">
		<!-- MAIN IMAGE -->
		<img src="joimg/slide/<?php echo $data_slide['gambar']; ?>"  alt=""  width="720" height="369" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina">
		<!-- LAYERS -->
	</li>
	<?php
	}
	?>
	<!-- SLIDE  END-->
</ul>
<div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(0, 0, 0, 0.15);"></div>	</div>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss=".tp-caption.large_bg_black,.large_bg_black{font-size:40px;line-height:40px;font-weight:800;font-family:\"Open Sans\";color:rgb(255,255,255);text-decoration:none;background-color:rgb(0,0,0);padding:10px 20px 15px;border-width:0px;border-color:rgb(255,214,88);border-style:none}.tp-caption.Fashion-BigDisplay,.Fashion-BigDisplay{color:rgba(0,0,0,1.00);font-size:60px;line-height:60px;font-weight:900;font-style:normal;font-family:Raleway;padding:0px 0px 0px 0px;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0px 0px 0px 0px;letter-spacing:2px}";
				if(htmlDiv) {
					htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
				}
				else{
					var htmlDiv = document.createElement("div");
					htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
					document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
				}
			</script>
		<script type="text/javascript">
						/******************************************
				-	PREPARE PLACEHOLDER FOR SLIDER	-
			******************************************/

			var setREVStartSize=function(){
				try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
					e.c = jQuery('#rev_slider_1_1');
					e.gridwidth = [1170];
					e.gridheight = [600];

					e.sliderLayout = "auto";
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};


			setREVStartSize();
			function revslider_showDoubleJqueryError(sliderID) {
					var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
					errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
					errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
					errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
					errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>"
						jQuery(sliderID).show().html(errorMessage);
				}
						var tpj=jQuery;

			var revapi1;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_1_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_1_1");
				}else{
					revapi1 = tpj("#rev_slider_1_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"https://bimbel-ic.com/site/wp-content/plugins/revslider/public/assets/js/",
						sliderLayout:"auto",
						dottedOverlay:"none",
						delay:5000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							onHoverStop:"on",
							touch:{
								touchenabled:"on",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"gyges",
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:30,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:30,
									v_offset:0
								}
							}
							,
							bullets: {
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								style:"hebe",
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:30,
								v_offset:30,
								space:5,
								tmp:'<span class="tp-bullet-image"></span>'
							}
						},
						gridwidth:1170,
						gridheight:600,
						lazyType:"none",
						parallax: {
							type:"mouse",
							origo:"slidercenter",
							speed:2000,
							levels:[2,3,4,5,6,7,12,16,10,50],
						},
						shadow:0,
						spinner:"spinner3",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		</script>
		<script>
					var htmlDivCss = '	#rev_slider_1_1_wrapper .tp-loader.spinner3 div { background-color: #FFFFFF !important; } ';
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}
					else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
					</script>
					<script>
			/*		var htmlDivCss = unescape("%0A.hebe.tp-bullets%20%7B%0A%7D%0A.hebe.tp-bullets%3Abefore%20%7B%0A%20%20content%3A%22%20%22%3B%0A%20%20position%3Aabsolute%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20background%3Atransparent%3B%0A%20%20padding%3A10px%3B%0A%20%20margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%20%20box-sizing%3Acontent-box%3B%0A%7D%0A%0A.hebe%20.tp-bullet%20%7B%0A%20%20width%3A3px%3B%0A%20%20height%3A3px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20background%3A%23fff%3B%20%20%0A%20%20cursor%3A%20pointer%3B%0A%20%20border%3A5px%20solid%20%23222%3B%0A%20%20border-radius%3A50%25%3B%0A%20%20box-sizing%3Acontent-box%3B%0A%20%20-webkit-perspective%3A400%3B%0A%20%20perspective%3A400%3B%0A%20%20-webkit-transform%3AtranslateZ%280.01px%29%3B%0A%20%20transform%3AtranslateZ%280.01px%29%3B%0A%20%20%20transition%3Aall%200.3s%3B%0A%7D%0A.hebe%20.tp-bullet%3Ahover%2C%0A.hebe%20.tp-bullet.selected%20%7B%0A%20%20background%3A%23222%3B%0A%20%20border-color%3A%23fff%3B%0A%7D%0A%0A.hebe%20.tp-bullet-image%20%7B%0A%20%20position%3Aabsolute%3B%0A%20%20top%3A-90px%3B%20left%3A-40px%3B%0A%20%20width%3A70px%3B%0A%20%20height%3A70px%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%20background-size%3Acover%3B%0A%20%20visibility%3Ahidden%3B%0A%20%20opacity%3A0%3B%0A%20%20transition%3Aall%200.3s%3B%0A%20%20-webkit-transform-style%3Aflat%3B%0A%20%20transform-style%3Aflat%3B%0A%20%20perspective%3A600%3B%0A%20%20-webkit-perspective%3A600%3B%0A%20%20transform%3A%20scale%280%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%3B%0A%20%20transform-origin%3A50%25%20100%25%3B%0A%20%20-webkit-transform-origin%3A50%25%20100%25%3B%0Aborder-radius%3A6px%3B%0A%20%20%0A%20%20%0A%7D%0A.hebe%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20display%3Ablock%3B%0A%20%20opacity%3A1%3B%0A%20%20transform%3A%20scale%281%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%3B%0A%20%20visibility%3Avisible%3B%0A%20%20%20%20%7D%0A.hebe%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}
					else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}*/
				  </script>
				</div><!-- END REVOLUTION SLIDER --></div>
  </div>
