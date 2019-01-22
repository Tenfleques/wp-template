jQuery.fn.extend({
	navToggler : function(){
		this.click(function(){
			$(this).toggleClass('open');
			$(".ham-container").toggleClass("border border-left-0 border-right-0 border-dark open pr-4");
			$(".left,.ham-title").toggleClass('open');
			$("body").toggleClass("frozen");
		});
	},
	mobileReady : function(){
		this.on("click",".link-goto",function(){
			$("#nav-icon").toggleClass('open');
			$(".ham-container").toggleClass("border border-left-0 border-right-0 border-dark open pr-4");
			$(".left,.ham-title").toggleClass('open');
			$("body").toggleClass("frozen");
		});
	},
	internationaleCtrl : function(){
		var lang = getCookie("lang");
	
		function toggler(){
			const lang = $(this).val();
			setCookie("lang",lang,365);
			console.log(lang);

			$(".lang").addClass("hidden");
			$(".lang").css("visibility","visible");
			$(".lang."+lang).removeClass("hidden");
		}
		if(lang==""){
			lang = this.val();
			setCookie("lang",lang,365);
		}else{
			this.val(lang);
		}
		toggler.apply(this);
		this.on("change",toggler);	
	}
});

$(function(){
	$(".international").internationaleCtrl();
	$("#nav-icon").navToggler();
	$(".sidemenu.left,body").mobileReady();

})