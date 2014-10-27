
$("#news_send").click(function() {
							   
var email=$("#news_email").val();							   
if(!validEmail(email))
{
$("#news_email").addClass("errors");
}else{
$("#news_email").removeClass("errors");
$("#mail_msg").load("newsletter_mail.php?email="+email);
}						   
							   
});