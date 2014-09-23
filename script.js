$(document).on('ready', function(){
	$('#roulette_form').on('submit', function(event){
		site_url = getUrl();
		event.preventDefault();
		var selected = $("input:radio[name='roulette-option']:checked").val();
		header = $('#result');
		if (!selected) {
		   alert('Du har inte valt ut ett nummer');
		} else {
		  $.ajax({ url: site_url + '/roulette.php',
		         type: 'post',
		         data: {action: 'getRandom', number: selected},
		         success: function(output) {
		                      output == 1 ? header.text('BOM!') : header.text('Du klarade dig');
		                  }
				});
		}
	});
});

function getUrl(){
	pathArray = window.location.href.split( '/' );
	protocol = pathArray[0];
	host = pathArray[2];
	return protocol + '//' + host;
}