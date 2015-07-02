
<script type="text/javascript">
	<!--Initializ Google Map -->
  	function initialize() {
    var mapOptions = {
      	center: new google.maps.LatLng(33.765449 , -89.792118),
      	zoom: 7
    };
    var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);
  	}
  	google.maps.event.addDomListener(window, 'load', initialize);
  
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
</script>