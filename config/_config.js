let lang = "la";
$("#english").hide();
function _change(e) {
  localStorage.setItem("storageKey", e); //save into local storage
  window.location.reload();
}
function _getLanguage() {
  var lg = localStorage.getItem("storageKey"); //get value from local storage
  lang = lg;
}

_getLanguage();

// set language
if (lang == "en") {
  $(".language").html("Language");
  $("#laos").hide();
  $("#english").show();
  // menu_Bar
  $(".home").html("Home");
  $(".about").html("About Us");
  $(".our_business").html("Our business");
  $(".subsidiaries").html("Subsidiaries");
  $(".partner").html("Partners");
  $(".news").html("News");
  $(".contact").html("Contact");
  $(".shopping").html('Shop');
  // button text
  $(".readmore").html("Read More...");

  // set language text
  $("#la").html("Laos");
  $("#en").html("English");

  // new page
  $(".news_introl").html("News");
  $(".news_detail").html("News Details");
  // title
  $(".recent_posts").html("Recent Posts");
  $(".category").html("Categorys");
  $(".archive").html("Archive");

  // partner page 
  $('.partners').html('Our Partners')
  $('.partner_detail').html('Partners Detail')
  $(".vision").html("Vision and Mission of the Company");
  $(".whate_we_do").html("What We Do");


  // contact page
  $(".homes").html("Home");
  $(".contact_detail").html("Contact Details");
  $(".comment").html("Comments");
  $(".user_name").html("First name And Last name");
  $(".phone").html("Phone Number");
  $(".tel").html("Tel");
  $(".email").html("Email");
  $(".address").html("Address");
  $(".send_messege").html("Send");

  // footer
  $(".company_address").html("Company Address");
  $(".expenced").html("Experienced Technicians");
  $(".contacts").html("Contact Us");
  $(".follow_us").html("Follow Us");
  $(".service").html("Our Services");
  $(".working").html("Working Hours");
  $(".work_detail").html("Our company works 6 days a week, Sunday is a weekly holiday, there is also a traditional annual holiday.");
  $(".monday-friday").html("Monday-Friday: ");
  $(".suterday").html("Saturday: ");
  $(".sunday").html("Sunday: ");
  $(".holiday").html("Holidays");
  $(".coppyright").html("Copyright © 2020 Duangchaleun Group");
}
