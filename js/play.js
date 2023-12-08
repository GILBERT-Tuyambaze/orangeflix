    var cont=document.getElementById("video-container");
    var btn=document.getElementById("play-movie");
    var movie=document.getElementById("myvideo");
    var remove=document.getElementById("close");

    btn.onclick=function(){
        cont.style.display="block";
        movie.play();
    }
    
    remove.onclick=function(){
        console.log("hello");
        movie.pause();
        cont.style.display="none";
    }
    