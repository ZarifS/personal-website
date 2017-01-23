$(document).ready(function(){
	setBindings();
});

function setBindings(){

	if($(window).width()<767){
		$("nav a").click(function(e){
			e.preventDefault();
			//this.className +=" active";
			var sectionID=e.currentTarget.id +"Section";
			$('html, body').animate({
	           scrollTop: $("#"+sectionID).offset().top-250
	         }, 1000);
		});
	}
	else{
		$("nav a").click(function(e){
			e.preventDefault();
			//this.className +=" active";
			var sectionID=e.currentTarget.id +"Section";
			$('html, body').animate({
	           scrollTop: $("#"+sectionID).offset().top-50
	         }, 1000);
		});
	}                                                                 
}