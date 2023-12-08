var movie_section=document.querySelector("#movies"),
    movies_content=movie_section.querySelector(".movies-content");
var popular=document.querySelector(".swiper"),
    popular_content=popular.querySelector("#popular-content");

    var swiper = new Swiper(".popular-content", {
      slidesPerview:1,
      spaceBetween: 10,
      centeredSlides: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
     
    });
    
    setInterval(()=>
        {
          var xhr=new XMLHttpRequest();
        xhr.open("GET","popular_editing.php",true);
        xhr.onload=()=>{
          if ((xhr.status >= 200) && (xhr.status < 400)){
              var data=xhr.response;
              popular_content.innerHTML=data;
          }
         }
        xhr.send();
        },50
      )
    
      setInterval(()=>
        {
          var xhr=new XMLHttpRequest();
        xhr.open("GET","movies.php",true);
        xhr.onload=()=>{
          if ((xhr.status >= 200) && (xhr.status < 400)){
              var data=xhr.response;
              movies_content.innerHTML=data;
          }
         }
        xhr.send();
        },500
      )
      
      var swiper = new Swiper(".section", {
        slidesPerview:1,
        spaceBetween: 10,
        centeredSlides: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
       
      });