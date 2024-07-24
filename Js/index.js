//Storing all the required classes and ids in an array

const myInfo = [
  ".hobbies ul",
  ".skills ul",
  "#wrk .description",
  ".education .description",
  "#aboutme p",
  ".sub-container3 .lab-item",
];

$(document).ready(hideInfo);

//This function will hide the info

function hideInfo() {
  myInfo.forEach((element) => {
    $(element).slideToggle();
  });
}

// Functionality of the menu button

function showNavLists() {
  $(".lists").css("height", "140px");
}

// Functionality of the close button

function hideNavLists() {
  $(".lists").css("height", "0px");
}

//Functionality of about me section

function showAboutMe() {
  $(myInfo[4]).slideToggle();
}

//Functionality  of the education section
function showEduInfo() {
  $(myInfo[3]).slideToggle();
}

//Functionality  of the working section
function showWorkInfo() {
  $(myInfo[2]).slideToggle();
}

//Functionality  of the skills section
function showSkillInfo() {
  $(myInfo[1]).slideToggle();
}

//Functionality  of the working section
function showHobbiesInfo() {
  $(myInfo[0]).slideToggle();
}

// Showing lab section
function showLabSection() {
  $(myInfo[5]).slideToggle();
}
