"use strict";

// SHOW MODAL (PC VERSION)

$(function () {
  $("#modalbtn").click(function () {
    $("#modal").css("display", "block");
    $(".modal_bg").css("display", "block");
  });
  $("#close").click(function () {
    $("#modal").css("display", "none");
    $(".modal_bg").css("display", "none");
  });
});

// SHOW MODAL (MOBILE VERSION)

$(function () {
  $("#mobile_modalbtn").click(function () {
    $("#mobilemodal").css("display", "block");
    $(".mobilemodal_bg").css("display", "block");
    $(".mobilemodal_wrapper").css("display", "block");
  });
  $("#closemobile").click(function () {
    $("#mobile_modal").css("display", "none");
    $(".mobilemodal_bg").css("display", "none");
    $(".mobilemodal_wrapper").css("display", "none");
  });
});

// CHANGE COLOR OF CHECKBOXES (PC)

//動的なidをつける
let contentname = "content";
let firstcirclename = "firstcircle";
let option1 = document.getElementsByClassName("content_op");
let circle1 = document.getElementsByClassName("circle_content");

for (let i = 0; i <= 2; i++) {
  //id追加
  option1[i].setAttribute("id", contentname + i);
  circle1[i].setAttribute("id", firstcirclename + i);
}

for (let i = 0; i <= 2; i++) {
  let contentbox = document.getElementById(`content${i}`);
  let firstcircles = document.getElementById(`firstcircle${i}`);
  contentbox.addEventListener("click", function () {
    contentbox.classList.toggle("option_clicked");
    firstcircles.classList.toggle("circle_clicked");
  });
}

let langname = "lang";
let secondcirclename = "secondcircle";
let option2 = document.getElementsByClassName("lang_op");
let circle2 = document.getElementsByClassName("circle_lang");

for (let i = 0; i <= 7; i++) {
  //id追加
  option2[i].setAttribute("id", langname + i);
  circle2[i].setAttribute("id", secondcirclename + i);
}

for (let i = 0; i <= 7; i++) {
  let langbox = document.getElementById(`lang${i}`);
  let secondcircles = document.getElementById(`secondcircle${i}`);
  langbox.addEventListener("click", function () {
    langbox.classList.toggle("option_clicked");
    secondcircles.classList.toggle("circle_clicked");
  });
}

// DATE

$("#datepicker").datepicker();

// LOADING (PC)

let bottom = document.getElementById("bottom_btn");

bottom.addEventListener("click", function () {
  let loader = document.getElementById("loader");
  let hideleft = document.getElementById("modal_left");
  let hideright = document.getElementById("modal_right");
  let hidebottom = document.getElementById("modal_bottom");
  loader.style.display = "block";
  hideleft.style.display = "none";
  hideright.style.display = "none";
  hidebottom.style.display = "none";
});

$("#bottom_btn").click(function () {
  setTimeout(function () {
    $("#complete").css("display", "block");
    $("#loader").css("display", "none");
  }, 2000);
});

// LOADING (MOBILE)

let kiroku = document.getElementById("mobile_modalbtn2");

kiroku.addEventListener("click", function () {
  let loadermobile = document.getElementById("loader_mobile");
  let hidecontent = document.getElementById("mobilemodal_wrapper");
  loadermobile.style.display = "block";
  hidecontent.style.display = "none";
});

// setTimeout(function() {
//   let loadermobile = document.getElementById('loader_mobile');
//   loadermobile.style.display = "none";
//   let complete = document.getElementById('complete_mobile');
//   complete.style.display = "block";
//  }, 5000);

$("#mobile_modalbtn2").click(function () {
  setTimeout(function () {
    $("#complete_mobile").css("display", "block");
    $("#loader_mobile").css("display", "none");
  }, 2000);
});

// CHANGE COLOR OF CHECKBOXES (MOBILE)

//動的なidをつける
let mobilecontentname = "mobilecontent";
let mobilefirstcirclename = "mobilefirstcircle";
let mobileoption1 = document.getElementsByClassName("mobilecontent_op");
let mobilecircle1 = document.getElementsByClassName("mobilecircle_content");

for (let i = 0; i <= 2; i++) {
  //id追加
  mobileoption1[i].setAttribute("id", mobilecontentname + i);
  mobilecircle1[i].setAttribute("id", mobilefirstcirclename + i);
}

for (let i = 0; i <= 2; i++) {
  let mobilecontentbox = document.getElementById(`mobilecontent${i}`);
  let mobilefirstcircles = document.getElementById(`mobilefirstcircle${i}`);
  mobilecontentbox.addEventListener("click", function () {
    mobilecontentbox.classList.toggle("option_clicked");
    mobilefirstcircles.classList.toggle("circle_clicked");
  });
}

let mobilelangname = "mobilelang";
let mobilesecondcirclename = "mobilesecondcircle";
let mobileoption2 = document.getElementsByClassName("mobilelang_op");
let mobilecircle2 = document.getElementsByClassName("mobilecircle_lang");

for (let i = 0; i <= 7; i++) {
  //id追加
  mobileoption2[i].setAttribute("id", mobilelangname + i);
  mobilecircle2[i].setAttribute("id", mobilesecondcirclename + i);
}

for (let i = 0; i <= 7; i++) {
  let mobilelangbox = document.getElementById(`mobilelang${i}`);
  let mobilesecondcircles = document.getElementById(`mobilesecondcircle${i}`);
  mobilelangbox.addEventListener("click", function () {
    mobilelangbox.classList.toggle("option_clicked");
    mobilesecondcircles.classList.toggle("circle_clicked");
  });
}

let twittercircle = document.getElementById("twitter_circle");
twittercircle.addEventListener("click", function () {
  twittercircle.classList.toggle("twitter_circle_checked");
});


// TWITTER

function GetTweet(str, code) {
  var text_all = document.getElementById("tweetBox");
  var input_data = text_all.value.replace(/\r?\n/g, "%0D%0A");
  TWEET.innerHTML =
    '<a class="twitter_button" href="https://twitter.com/intent/tweet?text=' +
    input_data +
    '" target="_blank">Twitterにシェアする</a>';
}

let seperate = document.getElementById("Hello");