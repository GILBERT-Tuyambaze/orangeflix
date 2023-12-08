var inbox=document.getElementById("div");
var selected=document.getElementById("selected_out");
var selectedOutword=document.getElementById("selectedoutword");
var form=document.querySelector(".popular-add .field"),
    submit=form.querySelector("#submit12");

    form.onsubmit=(e)=>{
      e.preventDefault();
    }

    submit.onclick=()=>{
      var xhr=new XMLHttpRequest();
      xhr.open("POST","add_to_popular.php",true);
      xhr.onload=()=>{
        if ((xhr.status >= 200) && (xhr.status < 400)){
          var data=xhr.response;
          console.log(data);
          if(data == 'sucess'){
            window.location.assign('movievel-home.php')
          }
        }
      }
      form=new FormData(form);
      xhr.send(form);
    }


{
  var xhr=new XMLHttpRequest();
xhr.open("GET","popular.php",true);
xhr.onload=()=>{
  if ((xhr.status >= 200) && (xhr.status < 400)){
      var data=xhr.response;
      inbox.innerHTML=data;
  }
 }
xhr.send();
}

  setInterval(()=>{
    var form=document.querySelector("#new_field"),
chk=form.querySelectorAll("#chk");

let x=chk.length;
let count=0;
let i=0;

for(i;i<x;i++){
    if(chk[i].checked === true){
        count++;
    }
}
selected.innerHTML=count;
if(count > 3){
  selected.style.color="red";
  selectedOutword.innerHTML="   please select only 10 movies";
  selectedOutword.style.color="red";
  submit.style.display="none";

}
else if(count <=3 && count > 0){
  submit.style.display="block";
  selectedOutword.innerHTML=" | 10 movies have been selected ";
  selectedOutword.style.color="white";
  
}
else{
  selected.style.color="white";
  selectedOutword.innerHTML=" ";
  submit.style.display="none";
  selectedOutword.innerHTML=" try to select 10 movies  ";
  selectedOutword.style.color="#000";
}
},
500)