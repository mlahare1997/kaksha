$('#search_menu_box').focus(function(event) {
$('.Ap_course_sub_list').fadeIn();
$('#search_menu').hide();
$('#close_btn').show();

});
$('#close_btn').click(function(event) {
$('.Ap_course_sub_list').fadeOut();
$('#close_btn').hide();			
$('#search_menu').show();
});
$(".ti-fullscreen").on("click", function toggleFullScreen() {
if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
if (document.documentElement.requestFullScreen) {
document.documentElement.requestFullScreen();
} else if (document.documentElement.mozRequestFullScreen) {
document.documentElement.mozRequestFullScreen();
} else if (document.documentElement.webkitRequestFullScreen) {
document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
} else if (document.documentElement.msRequestFullscreen) {
document.documentElement.msRequestFullscreen();
}
} else {
if (document.cancelFullScreen) {
document.cancelFullScreen();
} else if (document.mozCancelFullScreen) {
document.mozCancelFullScreen();
} else if (document.webkitCancelFullScreen) {
document.webkitCancelFullScreen();
} else if (document.msExitFullscreen) {
document.msExitFullscreen();
}
}
})
$('#All-courses-drop').click(function(event) {
$('#User-Drop-Menu,#Quiz-drop').slideUp('fast');
$('#Ac-Drop-Menu').slideToggle('fast');
});
$('#User-drop').click(function(event) {
$('#Ac-Drop-Menu,#Quiz-drop').slideUp('fast');
$('#User-Drop-Menu').slideToggle('fast');
});
$('#Quiz-drop').click(function(event) {
$('#Ac-Drop-Menu,#User-Drop-Menu').slideUp('fast');
$('#Quiz-Drop-Menu').slideToggle('fast');
});
$('#Toggle-Tab-1').click(function(event) {
$('.Course-Part-2,.Course-Part-3,.Course-Part-4').fadeOut();
$('.Course-Part-1').fadeIn();
$('#Toggle-Tab-1').css('border', '1px solid #ddd');
$('#Toggle-Tab-2,#Toggle-Tab-3,#Toggle-Tab-4').css('border', 'none');
});
$('#Toggle-Tab-2').click(function(event) {
$('.Course-Part-1,.Course-Part-3,.Course-Part-4').fadeOut();
$('.Course-Part-2').fadeIn();
$('#Toggle-Tab-2').css('border', '1px solid #ddd');
$('#Toggle-Tab-1,#Toggle-Tab-3,#Toggle-Tab-4').css('border', 'none');

});
$('#Toggle-Tab-3').click(function(event) {
$('.Course-Part-2,.Course-Part-1,.Course-Part-4').fadeOut();
$('.Course-Part-3').fadeIn();
$('#Toggle-Tab-3').css('border', '1px solid #ddd');
$('#Toggle-Tab-2,#Toggle-Tab-1,#Toggle-Tab-4').css('border', 'none');

});
$('#Toggle-Tab-4').click(function(event) {
$('.Course-Part-2,.Course-Part-3,.Course-Part-1').fadeOut();
$('.Course-Part-4').fadeIn();
$('#Toggle-Tab-4').css('border', '1px solid #ddd');
$('#Toggle-Tab-2,#Toggle-Tab-3,#Toggle-Tab-1').css('border', 'none');

});
$('.slide_menu_btn').click(function(event) {
$('.Side-Bar').show();
});
$('.close_slide_btn').click(function(event) {
$('.Side-Bar').hide();
});