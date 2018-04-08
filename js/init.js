/*
	Developer: Vitor Oliveira da silva	
*/
$(document).ready(function(){


    $("#iconeFile").click(function () {
      $("input[type='file']").trigger('click');
    });

    $('input[type="file"]').on('change', function() {
      var val = $(this).val();
      $(this).siblings('span').text(val);
    });

	function myFunction(id) {
		    var x = document.getElementById(id);
		    if (x.className.indexOf("w3-show") == -1) {
		        x.className += " w3-show";
		        x.previousElementSibling.className += " w3-theme-d1";
		    } else { 
		        x.className = x.className.replace("w3-show", "");
		        x.previousElementSibling.className = 
		        x.previousElementSibling.className.replace(" w3-theme-d1", "");
		    }
	}

		// Used to toggle the menu on smaller screens when clicking on the menu button
	function openNav() {
		    var x = document.getElementById("navDemo");
		    if (x.className.indexOf("w3-show") == -1) {
		        x.className += " w3-show";
		    } else { 
		        x.className = x.className.replace(" w3-show", "");
		    }
	}
});

	skel.init({
		prefix: 'css/style',
		resetCSS: true,
		boxModel: 'border',
		grid: {
			gutters: 50
		},
		breakpoints: {
			'mobile': {
				range: '-480',
				lockViewport: true,
				containers: 'fluid',
				grid: {
					collapse: true,
					gutters: 10
				}
			},
			'desktop': {
				range: '481-',
				containers: 1200
			},
			'1000px': {
				range: '481-1200',
				containers: 960
			}
		}
	}, {
		panels: {
			panels: {
				navPanel: {
					breakpoints: 'mobile',
					position: 'left',
					style: 'reveal',
					size: '80%',
					html: '<div data-action="navList" data-args="nav"></div>'
				}
			},
			overlays: {
				titleBar: {
					breakpoints: 'mobile',
					position: 'top-left',
					height: 70,
					width: '100%',
					html: '<span class="toggle" data-action="togglePanel" data-args="navPanel"></span>' +
	 '<span class="title" data-action="copyHTML" data-args="logo"></span>'
				}
			}
		}
		
	});