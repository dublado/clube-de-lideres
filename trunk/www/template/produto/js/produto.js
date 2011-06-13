		$(document).ready(function() {
		
			//When page loads...
			$(".tab_content").hide(); //Hide all content
			$("ul.tabs li:first").addClass("active").show(); //Activate first tab
			$(".tab_content:first").show(); //Show first tab content

			//On Click Event
			$("ul.tabs li").click(function() {

				$("ul.tabs li").removeClass("active"); //Remove any "active" class
				$(this).addClass("active"); //Add "active" class to selected tab
				$(".tab_content").hide(); //Hide all tab content

				var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
				$(activeTab).show(); //Fade in the active ID content
				return false;
			});

				// Load the classic theme
				Galleria.loadTheme('template/produto/js/galleria.classic.js');

				// Initialize Galleria
				// run galleria and add some options
				$('#galleria').galleria({
					height: 490,
					image_crop: false, // crop all images to fit
					thumb_crop: true, // crop all thumbnails to fit
					transition: 'fade', // crossfade photos
					transition_speed: 700, // slow down the crossfade
					data_config: function(img) {
						// will extract and return image captions from the source:
						return  {
							title: $(img).parent().next('strong').html(),
							description: $(img).parent().next('strong').next().html()
						};
					},
					extend: function() {
						this.bind(Galleria.IMAGE, function(e) {
							// bind a click event to the active image
							$(e.imageTarget).css('cursor','pointer').click(this.proxy(function() {
								// open the image in a lightbox
								this.openLightbox();
							}));
						});
					}
				});


		});

