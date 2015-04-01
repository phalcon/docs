
$(document).ready(function() {
	$("#versions").change(function() {
		var docsUrl = $(this).val();
		window.location.href = docsUrl;
	});
	var n = 1;
	$("div#methods p").each(function() {
		if (n%2 == 0) {
			$(this).addClass("method-desc");
		} else {
			var text = this.innerHTML;
			text = text.replace("public ", "<span class='modifier'>public</span> ");
			text = text.replace("protected ", "<span class='modifier'>protected</span> ");
			text = text.replace("final ", "<span class='modifier'>final</span> ");
			text = text.replace("static ", "<span class='modifier'>static</span> ");
			text = text.replace("inherited from", "<span class='inherited'>inherited from</span> ");
			this.innerHTML = text;
		};
		n++;
	});
});