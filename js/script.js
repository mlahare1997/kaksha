/* RFL AND NAV AND FORGETLINK CONETCTUS JS  */
$('#login-btn,#login_page_link').click(function(){
$('.register-main-content').fadeOut();
$('.Forget_pass-main-content').fadeOut();
$('.login-main-content').fadeIn();
});
$('#login-close-btn').click(function() {
$('.login-main-content').fadeOut();
});
$('#register-btn,#create_account_link').click(function(){
$('.login-main-content').fadeOut();
$('.register-main-content').fadeIn();
});
$('#register-close-btn').click(function() {
$('.register-main-content').fadeOut();
});
$('#forget_link').click(function(event) {
$('.Forget_pass-main-content').fadeIn();
$('.login-main-content').fadeOut();
});
$('#forget-close-btn').click(function(event) {
$('.Forget_pass-main-content').fadeOut();
});
$('#Mega-Link').click(function(event) {
$('.Mega-Box').fadeToggle('fast');
});
$('.Menu-Icon').click(function(event) {
$('.Mobile-Nav').slideDown('fast');
});
$('.Close-Icon').click(function(event) {
$('.Mobile-Nav').slideUp('fast');
});
$('.carousel-section,.header-top,.header-search').click(function(event) {
$('.Mega-Box,.Mobile-Nav').hide();
});
$('#feedback_link').click(function(event) {
var height = $(document).height();
$(window).scrollTop(height);
});
$('#show_review').click(function(event) {
$(window).scrollTop(2200);
});
$('#rate_us').click(function(event) {
$(window).scrollTop(2850);
});
/* HEADER_SEARCH.PHP SEARCH LIST JS */
$('#search_box').focus(function(event) {
$('.course_list').fadeIn('slow');
$('.search_btn').hide();
$('.close_list').show();
});
$('.close_list').click(function(e){
$('.course_list').fadeOut('slow');
$('.close_list').hide();
$('.search_btn').show();
});
$('#search_box').keyup(function(event) {
var search_term = $('#search_box').val();
$.ajax({
url : 'search_course.php',
type : 'POST',
data : {search_term:search_term},
success : function(data){
$('.ul_tag').html(data);
}
});
});
/* MY_COURES.PHP TOGGLE TAB */
$('#Toggle-Tab-5').click(function(event) {
$('.detail_box2,.detail_box3').fadeOut(10);
$('.detail_box1').fadeIn(10);
$('#Toggle-Tab-5').css('border', '1px solid #ddd');
$('#Toggle-Tab-6,#Toggle-Tab-7').css('border', 'none');
});
$('#Toggle-Tab-6').click(function(event) {
$('.detail_box1,.detail_box3').fadeOut(10);
$('.detail_box2').fadeIn(10);
$('#Toggle-Tab-6').css('border', '1px solid #ddd');
$('#Toggle-Tab-5,#Toggle-Tab-7').css('border', 'none');
					});
/* Review Js */
$(document).ready(function() {
load_Data();
function load_Data(){
$.ajax({
url : 'select_review.php',
type : 'POST',
success : function(data){
$('.owl_caoursel').html(data);
} 
});
}
$('.alert').hide();
/*  SIGNUP AND SIGNIN FORM VALIDATION   */
// Validate Username 
$('#usercheck').hide(); 
$('#emailcheck').hide(); 
$('#passwordcheck').hide(); 
$('#c_passwordcheck').hide();
$('#checkbox_check').hide();
var usernameError = true; 
var emailError = true; 
var passwordError = true; 
var c_passwordError = true; 
var checkboxError = true; 
$('#usernames').focusout(function () { 
validateUsername(); 
}); 
$('#email').focusout(function () { 
validateEmail(); 
}); 
$('#password').focusout(function () { 
validatePassword(); 
});
$('#c_password').focusout(function () { 
validatec_Password(); 
});
$('.checkbox').focusout(function () { 
validateCheckbox(); 
});				     
/*       Validate Username          */ 
function validateUsername() { 
var usernameValue = $('#usernames').val();
if (usernameValue.length == 0) {
$('#usernames').css('border-bottom', 'none');
$('#usernames').css('border-bottom', '2px solid #FD0000');
$('#usercheck').show();
$('#usercheck').html("**All Fields Are Required"); 
usernameError = false;
return false;
}  
else if((usernameValue.length < 3)||  
(usernameValue.length > 100)) {
$('#usernames').css('border-bottom', 'none');
$('#usernames').css('border-bottom', '2px solid #FD0000');
$('#usercheck').show(); 
$('#usercheck').html("**length of username must be between 3 and 10"); 
usernameError = false;
return false; 
}  
else { 
$('#usercheck').hide();
$('#usernames').css('border-bottom', '2px solid #34F054');
usernameError = true;
return true;
} 
}
/*       Validate Email       */ 
function validateEmail() { 
var emailValue = $('#email').val();
var parttern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
if (emailValue.length == 0) {
$('#emailcheck').show();
$('#email').css('border-bottom', '2px solid #FD0000');
$('#emailcheck').html("**All Fields Are Required");
emailError = false;
return false;
}
else if (parttern.test(emailValue)) {
$('#emailcheck').hide();
$('#email').css('border-bottom', '2px solid #34F054');
emailError = true;
return true;
}  
else { 
$('#emailcheck').show();
$('#email').css('border-bottom', '2px solid #FD0000');
$('#emailcheck').html("**Please enter valid Email id");
emailError = false;
return false;
} 
}	
/*       Validate Password          */			 	
function validatePassword() {
var passValue = $('#password').val();
if (passValue.length <8) {
$('#passwordcheck').show();
$('#password').css('border-bottom', '2px solid #FD0000');
$('#passwordcheck').html("**Password Must be 8 Character");
passwordError = false;
return false;
}else{
$('#passwordcheck').hide();
$('#password').css('border-bottom', '2px solid #34F054'); 
passwordError = true;
return true;
}
}
/*       Validate Password          */
function validatec_Password() {
var passValue = $('#password').val();
var c_passwordValue = $('#c_password').val();
if ((c_passwordValue != passValue) || (c_passwordValue.length == 0)) {
$('#c_passwordcheck').show();
$('#c_password').css('border-bottom', '2px solid #FD0000');
$('#c_passwordcheck').html("**Password Did not Match");
c_passwordError = false;
return false;
}
else{
$('#c_passwordcheck').hide();
$('#c_password').css('border-bottom', '2px solid #34F054'); 
c_passwordError = true;
return true;	
}
}	
/*       Validate Checkbox          */
function  validateCheckbox() {
if ($('.checkbox').prop("checked") == false) {
$('#checkbox_check').show();
$('#checkbox_check').html("**All Fields Are Required");
checkboxError = false;
return true;
}else{
checkboxError = true;
return true;
}
}
$('.register').click(function () { 
validateUsername();
validateEmail();
validatePassword(); 
validatec_Password(); 
validateCheckbox();
if ((usernameError == true) && (emailError == true) &&(passwordError == true) &&(c_passwordError == true) && (checkboxError == true)) { 
return true; 
} else {
alert('All Fields Are Required'); 
return false; 
} 
});
/* SIGNIN VALIDATION */ 
$('#login_emailcheck').hide();
$('#login_passwordcheck').hide();
$('#login_checkbox_check').hide();
var login_emailError = true; 
var login_passwordError = true; 
var login_checkboxError = true; 
$('#login_email').focusout(function () { 
validateloginEmail(); 
});
$('#login_password').focusout(function () { 
validateloginPassword(); 
});
$('.login_checkbox').focusout(function () { 
validateloginCheckbox(); 
});
/* Email Validate */
function validateloginEmail() { 
var emailValue = $('#login_email').val();
var parttern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
if (emailValue.length == 0) {
$('#login_emailcheck').show();
$('#login_email').css('border-bottom', '2px solid #FD0000');
$('#login_emailcheck').html("**All Fields Are Required");
login_emailError = false;
return false;
}
else if (parttern.test(emailValue)) {
$('#login_emailcheck').hide();
$('#login_email').css('border-bottom', '2px solid #34F054');
login_emailError = true;
return true;
}  
else { 
$('#login_emailcheck').show();
$('#login_email').css('border-bottom', '2px solid #FD0000');
$('#login_emailcheck').html("**Please enter valid Email id");
login_emailError = false;
return false;
} 
}
/*      Validate Password       */
function validateloginPassword() {
var passValue = $('#login_password').val();
if (passValue.length <8) {
$('#login_passwordcheck').show();
$('#login_password').css('border-bottom', '2px solid #FD0000');
$('#login_passwordcheck').html("**Password Must be 8 Character");
login_passwordError = false;
return false;
}else{
$('#login_passwordcheck').hide();
$('#login_password').css('border-bottom', '2px solid #34F054'); 
login_passwordError = true;
return true;
}
}
/*       Validate Checkbox          */
function  validateloginCheckbox() {
if ($('.login_checkbox').prop("checked") == false) {
$('#login_checkbox_check').show();
$('#login_checkbox_check').html("**All Fields Are Required");
login_checkboxError = false;
return true;
}else{
login_checkboxError = true;
return true;
}
}
$('.login').click(function () { 
validateloginEmail();
validateloginPassword();
validateloginCheckbox();
if ((login_emailError == true) && (login_passwordError == true)) { 
return true; 
} else {
alert('All Fields Are Required'); 
return false; 
} 
});
$(document).ready(function() {
$('.owl-carousel').owlCarousel({
items : 2,
margin : 40,
loop : true,
nav : true,
autoplay : true,
autoplayTimeout : 5000,
autoplaySpeed : 1000,
smartSpeed : 500,
slideTransition : 'ease-in-out',
responsive:{
0:{
items:1,
nav:true
},
467:{
items:1,
nav:false
},
850:{
items:2,
nav:true,
}
}
});
$('.owl_main,button.owl-prev,button.owl-next').mouseenter(function(event) {
$('button.owl-prev,button.owl-next').css('visibility', 'visible');
});
// $('.owl_main,button.owl-prev,button.owl-next').mouseleave(function(event) {
// 	$('button.owl-prev,button.owl-next').css('visibility', 'hidden');
// });
})
$('#rating_1').change(function(event) {
if($(this).prop('checked')){
$('#rating_icon_1').css('color', '#ED6636');
$('#rating_count').val(2);
}else{
$('#rating_count').val(1);
$('#rating_4,#rating_3,#rating_2,#rating_1').prop('checked', false);
$('#rating_icon_4,#rating_icon_3,#rating_icon_2,#rating_icon_1').css('color', '#dbdfe0');
}
});
$('#rating_2').change(function(event) {
if($(this).prop('checked')){
$('#rating_count').val(3);
$('#rating_icon_1,#rating_icon_2').css('color', '#ED6636');
$('#rating_1').prop('checked', true);
}else{
$('#rating_count').val(2);
$('#rating_4,#rating_3').prop('checked', false);
$('#rating_icon_4,#rating_icon_3,#rating_icon_2').css('color', '#dbdfe0');
}
});
$('#rating_3').change(function(event) {
if($(this).prop('checked')){
$('#rating_count').val(4);
$('#rating_icon_1,#rating_icon_2,#rating_icon_3').css('color', '#ED6636');
$('#rating_1,#rating_2').prop('checked', true);
}else{
$('#rating_count').val(3);
$('#rating_4').prop('checked', false);
$('#rating_icon_4,#rating_icon_3').css('color', '#dbdfe0');
}
});
$('#rating_4').change(function(event) {
if($(this).prop('checked')){
$('#rating_count').val(5);
$('#rating_icon_1,#rating_icon_2,#rating_icon_3,#rating_icon_4').css('color', '#ED6636');
$('#rating_1,#rating_2,#rating_3').prop('checked', true);
}else{
$('#rating_count').val(4);
$('#rating_icon_4').css('color', '#dbdfe0');
}
});
$(document).on('click', '#send_review', function(event) {
event.preventDefault();
var review_uname = $('.review_uname').val();
var review_email = $('.review_email').val();
var review_msg = $('.review_msg').val();
var rating_count = $('#rating_count').val();
$.ajax({
url : 'send_review.php',
type : 'POST',
data : {review_uname:review_uname,review_msg:review_msg,review_email:review_email,rating_count:rating_count},
success : function(data){
alert('Thanks ,Your Review Reches To Us...');
$('#review_form').trigger('reset');
window.location = 'index.php';
}
});
load_Data();
});
/*        MYPROFILE.PHP                */
$(document).on('click', '#send_feedback_ft', function(event) {
event.preventDefault();
var feedback_id = $('#f_id').val();
var feedback_email = $('#f_email').val();
var feedback_msg = $('#msgForm').val();
if (feedback_msg.length != 0) {
$.ajax({
url : 'feedback_send.php',
type : 'POST',
data : {feedback_id:feedback_id,feedback_email:feedback_email,feedback_msg:feedback_msg},
success : function(data){
if (data == 1) {
alert('Thank You For Feedback Us...');
$('#f_form').trigger('reset');
}else{
return false;
}

}
});
}else{
alert('You Can not Send Empty Feedback...');
}
});
$('#my_profile').click(function(event) {
$('.my_profile_main1').slideDown(1);
$('.my_profile_main2,.my_profile_main3,.my_profile_main4').hide(1);
$('#my_profile').css('background', '#4b6c90');
$('#my_course,#change_password,#feedback').css('background', '#2F4F73');
});
$('#my_course').click(function(event) {
$('.my_profile_main2').slideDown(1);
$('.my_profile_main2').css('display', 'flex');
$('.my_profile_main1,.my_profile_main3,.my_profile_main4').hide(1);
$('#my_course').css('background', '#4b6c90');
$('#my_profile,#change_password,#feedback').css('background', '#2F4F73');
});
$('#change_password').click(function(event) {
$('.my_profile_main3').slideDown(1);
$('.my_profile_main3').css('display', 'flex');
$('.my_profile_main1,.my_profile_main2,.my_profile_main4').hide(1);
$('#change_password').css('background', '#4b6c90');
$('#my_course,#my_profile,#feedback').css('background', '#2F4F73');
});
$('#feedback').click(function(event) {
$('.my_profile_main4').slideDown(1);
$('.my_profile_main4').css('display', 'flex');
$('.my_profile_main1,.my_profile_main2,.my_profile_main3').hide(1);
$('#feedback').css('background', '#4b6c90');
$('#my_course,#change_password,#my_profile').css('background', '#2F4F73');
});
});
