let menu = document.querySelector(".toggle");
const nav = document.querySelectorAll("nav");
const left = document.querySelector(".left");

menu.addEventListener("click", () => {
  nav.forEach((el) => {
    if (el.style.display === "none") {
      el.style.setProperty("display", "block");
      // or: el.style.display = "block";
    } else {
      el.style.setProperty("display", "none");
      // or: el.style.display = "none";
    }
  });
});

var img = document.getElementById('img');

var slides=['web_img/slider/unity.webp','web_img/slider/js.jpeg','web_img/slider/node.jpeg', 'web_img/slider/oops.jpg','web_img/slider/css.png', 'web_img/slider/php.jpeg', 'web_img/slider/py.jpeg'];

var Start=0;

function slider(){
    if(Start<slides.length){
        Start=Start+1;
    }
    else{
        Start=1;
    }
    console.log(img);
    img.innerHTML = "<img src="+slides[Start-1]+">";
   
}
setInterval(slider,2000);

const home=document.querySelector("#ac5");
const books=document.querySelector(".act_in2");
const books_sub=document.querySelector(".act_in3");
const new_lo=document.querySelector(".act_in4");
const admin_log=document.querySelector(".act_in5");

home.addEventListener('click' , ()=>{

  home.classList.add("toggle1");
})