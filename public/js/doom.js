$(function(){
    $(".app").draggable({handle: ".title"});
 });

$(function(){
	$(".app").on("click", function(e){
		$(".on_top").removeClass("on_top");
		$(this).addClass("on_top");
	});
});

$(function(){
	$(".app .cross").on("click", function(){
		$(this).parent().parent().hide();
	});
});

$(function(){
	var on_top = function(id){
		$(".on_top").removeClass("on_top");
		$(id).addClass("on_top");
	}

	$(".setting_icon").on("click", function(){
		$("#setting").show();
		$("#launcher").hide();
	});

	$(".launcher_icon").on("click", function(){
		$("#launcher").show();
	});
	$(".color_game_icon").on("click", function(){
		$("#color_game").show().click();
		$("#launcher").hide();
	});
	$(".drum_icon").on("click", function(){
		$("#drumkit").show().click();
		$("#launcher").hide();
	});
	$(".mole_icon").on("click", function(){
		$("#mole_game").show().click();
		$("#launcher").hide();
	});
	$(".drawing_icon").on("click", function(){
		$("#drawing").show().click();
		$("#launcher").hide();
	});
	$(".calculator_icon").on("click", function(){
			$("#calculator").show().click();
			$("#launcher").hide();
	});
});

