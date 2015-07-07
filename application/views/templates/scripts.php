
<script type="text/javascript">
	<!-- Initialize Google Map -->

//  	function initialize() {
//    var mapOptions = {
//      	center: new google.maps.LatLng(33.765449 , -89.792118),
//      	zoom: 7
//    };
//    var map = new google.maps.Map(document.getElementById("map-canvas"),
//        mapOptions);
//  	}
//  	google.maps.event.addDomListener(window, 'load', initialize);
  
  	function clearNeedsAssessment(){
		$('input:checkbox[name="question1"]').prop('checked', false);
		$('input:radio[name="question2"]').prop('checked', false);
		$('input:radio[name="question3"]').prop('checked', false);
		$('input:checkbox[name="question4"]').prop('checked', false);
		$('input:checkbox[name="question5"]').prop('checked', false);
		$('input:radio[name="question6"]').prop('checked', false);
		$('input:radio[name="question7"]').prop('checked', false);
		$('input:checkbox[name="question8"]').prop('checked', false);
		$('input:checkbox[name="question9"]').prop('checked', false);
		$('input:radio[name="question10"]').prop('checked', false);
		$('input:radio[name="question11"]').prop('checked', false);
		$('input:checkbox[name="question12"]').prop('checked', false);
	}
	
	
  	$(document).ready(function() {
        App.init();
        App.pageCalendar();
        App.dataTables();
        App.dashboard();

//        function fixPosMainNav(){
//            $('#main-nav').addClass("main-nav-fixed");
//        };
//        function unfixPosMainNav(){
//            $('#main-nav').removeClass("main-nav-fixed");
//        };
//
//        function fixPosFormToolBar(){
//            if ($('.form-toolbar').length > 0 ) {
//                $('.form-toolbar').addClass("form-toolbar-fixed");
//            }
//        };
//        function unfixPosFormToolBar(){
//            if ($('.form-toolbar').length > 0 ) {
//                $('.form-toolbar').removeClass("form-toolbar-fixed");
//            }
//        };
//
//
//        var mainNavTopPos = $('#main-nav').position();
//        var bodyScrollTop = 50;
//        var speed = 200;
//
//        (function(){
//            if ($('body').scrollTop() > bodyScrollTop ) {
//                $('#main-nav').css({
//                    top: "-" + mainNavTopPos.top + "px"
//                });
//                $('body').attr("isHidden", "true");
//            }
//        })();
//
//        $(window).on('scroll resize', function(){
//            if ($('body').scrollTop() > bodyScrollTop ) {
//                fixPosMainNav()
//                fixPosFormToolBar();
//            } else if ($('body').scrollTop() <= bodyScrollTop && $('body').attr('isHidden')){
//                unfixPosMainNav()
//                unfixPosFormToolBar();
//            }
//        });

//        $("#head-nav").on("mouseover", function(){
//            var timer;
//
//            if (timer) {
//                clearTimeout(timer); //cancel the previous timer.
//                timer = null;
//            };
//            timer = setTimeout(function(){
//                if ($('body').scrollTop() > bodyScrollTop && $('body').attr('isHidden')){
//                    $('#main-nav').animate({
//                        top: mainNavTopPos.top + "px"
//                    },speed);
//                    $('body').removeAttr("isHidden");
//                }
//            }, 500);
//
//        });
//
//
//        $("#head-nav").on("mouseout", function(){
//            if ($("#tab-nav:hover").length == 0){
//                var timer = null;
//                if (timer) {
//                    clearTimeout(timer); //cancel the previous timer.
//                    timer = null;
//                };
//                timer = setTimeout(function(){
//                    if ($('body').scrollTop() > bodyScrollTop){
//                        $('#main-nav').animate({
//                            top: "-" + mainNavTopPos.top + "px"
//                        },speed);
//                        $('body').attr("isHidden", "true");
//                    }
//                }, 500);
//
//            }
//        });
//        $("#tab-nav").on("mouseout", function(){
//            if ($("#main-nav:hover").length == 0){
//                var timer = null;
//                if (timer) {
//                    clearTimeout(timer); //cancel the previous timer.
//                    timer = null;
//                };
//                timer = setTimeout(function(){
//                    if ($('body').scrollTop() > bodyScrollTop ){
//                        $('#main-nav').animate({
//                            top: "-" + mainNavTopPos.top + "px"
//                        },speed);
//                        $('body').attr("isHidden", "true");
//                    }
//                }, 500);
//
//            }
//        });


        $('.breadcrumb li').each(function(){
            $(this).not(':has(a:visible)').hide();
        });
		
		<!-- Initialize Bootstrap Multiselect by: (http://davidstutz.github.io/bootstrap-multiselect/#getting-started) -->
    	$('.js-multiselect').multiselect({
      		buttonClass: 'btn btn-default form-control',
			buttonWidth: false,
			buttonContainer: '<div class="btn-group" style="width:100%"/>',
			enableFiltering: true,
			filterPlaceholder: 'Search',
			numberDisplayed: 0,
			maxHeight: 300
   		});
		
		$('button.multiselect');
				
		$("#needsassessmentwizard").bootstrapWizard({'tabClass': 'nav nav-tabs'});
				
		$('#create_provideraccount_wizard li.next a').click(function() {
			$('#wizard-sidenav').find('li.disabled').first().removeClass('disabled');
			var disabledSteps = $('#wizard-sidenav').find('li.disabled').length;
			if (disabledSteps == 0) {
				$('#createprovideraccount-submit').removeClass('disabled');
			}
		});
		
		$('#needsassessmentwizard li.next a').click(function() {
			$('#wizard-sidenav').find('li.disabled').first().removeClass('disabled');
			var disabledSteps = $('#wizard-sidenav').find('li.disabled').length;
			if (disabledSteps == 0) {
				$('#assessmentwizardsubmitbutton').removeClass('disabled');
			}
		});
		
		$('#newneedsassessment, #createprovideraccount').click(function(){
			clearNeedsAssessment();
			$('#wizard-sidenav').find('li:not(:first-child)').addClass('disabled');
			$('#wizard-sidenav').find('a').first().click();
			$('#assessmentwizardsubmitbutton').addClass('disabled');			
		});
		
		$("#create_provideraccount_wizard").bootstrapWizard();
		
		
		<!-- Modal for Create Provider Account Wizard -->
		$('li.next a').click(function() {
			var disabledSteps = $('#wizard-sidenav').find('li.disabled').length;
			if (disabledSteps == 0) {
				$('#createprovideraccount-submit').removeClass('disabled');
			}
		});
	});


    //Toggle Form Lock/Unlock

    function checkFormEditability(form){
        if ($(form).is(".form-disabled")) {
            $(form).find("input").each(function(){
                if ($(this).is("[type=radio]") || $(this).is("[type=checkbox]")) {
                    $(this).attr("disabled", "disabled")
                } else {
                    $(this).attr("readonly", "readonly")
                };
            });
            $(form).find("textarea").each(function(){
                $(this).attr("disabled", "disabled");
            });
            $(form).find("select").each(function(){
                $(this).attr("disabled", "disabled");
            });
        } else if ($(form).is(".form-enabled")) {
            $(form).find("input").each(function(){
                if ($(this).is("[type=radio]") || $(this).is("[type=checkbox]")) {
                    $(this).removeAttr("disabled", "disabled")
                } else {
                    $(this).removeAttr("readonly", "readonly")
                };
            });
            $(form).find("textarea").each(function(){
                $(this).removeAttr("disabled", "disabled");
            });
            $(form).find("select").each(function(){
                $(this).removeAttr("disabled", "disabled");
            });
        }
    }
    $(document).ready(function(){
        checkFormEditability("form");
        $("[data-trigger-form-lock]").on("click", function(){
            var targetForm = $(this).data("trigger-form-lock");
            $(this).parent("li").first().addClass("active");
            $(this).parent("li").first().siblings().removeClass("active");
            $(targetForm).removeClass("form-enabled");
            $(targetForm).addClass("form-disabled");
            checkFormEditability(targetForm);
        })
        $("[data-trigger-form-unlock]").on("click", function(){
            var targetForm = $(this).data("trigger-form-unlock");
            $(this).parent("li").first().addClass("active");
            $(this).parent("li").first().siblings().removeClass("active");
            $(targetForm).removeClass("form-disabled");
            $(targetForm).addClass("form-enabled");
            checkFormEditability(targetForm);
        })

        $("a[href=#]").on("click", function(){
            return false;
        })
    });
</script>