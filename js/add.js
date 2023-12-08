var form=document.querySelector(".movie-add .field"),
    submit=form.querySelector("#submit"),
    error=form.querySelector(".error");
    

 
    form.onsubmit=(e)=>{
        e.preventDefault();
    }
  submit.onclick=function(){
    var xhr=new XMLHttpRequest();
    xhr.open("POST","add.php",true);
    setInterval(xhr.onload=()=>{
     if ((xhr.status >= 200) && (xhr.status < 400)){
         var data=xhr.response;
         console.log(data);
         error.innerHTML=data;
         error.classList.add("add");
     }
    },50)
    form=new FormData(form);
    xhr.send(form);
 }