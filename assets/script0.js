/* fct° Timer */

//init chrono
var m = 0;
var s = 0;

function startTime(){
  var chrono = document.getElementById("timer");
  //var timer = setInterval(function(){ myTimer() }, 500);

  var timer = setInterval(function(){ myChrono() }, 1000);

  function myTimer() {
      var d = new Date();
      var m = d.getMinutes();
      var s = d.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      chrono.innerHTML =  m + " : " + s;

      // arret du timer
      if(m == 10){
        clearInterval(timer);
      }
  }

  function myChrono(){
    s++;
    if(s>59){
      m++;
      s=0;
    }
    //add style
    if(m > 6){
      chrono.style.color = "crimson";
    }else if (m > 4) {
      chrono.style.color = "orange";
    }
    mm = checkTime(m);
    ss = checkTime(s);
    chrono.innerHTML =  mm + " : " + ss;
  }

}
/*

    */

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

//Variables nav Progress
nav = document.getElementById("navbarSupportedContent");
nbreItems = nav.getElementsByTagName("LI").length;
var step = 0;


function loadQuiz(url, cFunction) {
  url = "quiz_box/"+url;
  console.log(url);
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this, url);
    }
  };
  xhttp.open("GET", url, true);
  //repType pour transfert XMLDoc
  xhttp.responseType = 'document';
  xhttp.send();
}

function loadQuestion(xhttp, url) {
  var xmlDoc = xhttp.responseXML;
  var qBox = xmlDoc.getElementsByClassName("question")[0];
  var box_quiz = document.getElementById("box_quiz");
  var old_qbox = document.getElementsByClassName("question")[0];
  //box_quiz.innerHTML = "";
  box_quiz.removeChild(old_qbox);
  box_quiz.appendChild(qBox);

  /* progress_barre */
  step = step + 1;
  progressBar(step);

  /* fct° curseur */
  if(url.includes("curseur")){
    curseurValue(qBox);
  }

  /* fct° drag&drop */
  if(url.includes("d&d") || url.includes("ord_lst")){
    dragDrop(qBox, url);
  }
  /* fuction imgCheck */
  if(url.includes("img_btn")){
    imgCheck(qBox);
  }

}//end loadQuestion


/*************** Function ***************/
/* progressBar */
function progressBar(step){
  step = step *10;
  var prog = document.getElementById("prog");
  var progWidth = step.toString()+"%";
  prog.style.width = progWidth;
  console.log(prog.style.width);
  prog.setAttribute("aria-valuenow", step)
  console.log(prog.getAttribute("aria-valuenow"));
  prog.innerHTML = step+"%";
  console.log(prog.innerHTML);
}

/* fct° curseur */
function curseurValue(qBox){
  /* add txt value for type range */
  var curseur = qBox.querySelector('#crs');
  var count = qBox.querySelector('.crs_count');

  count.textContent = curseur.value;

  curseur.oninput = function() {
    count.textContent = curseur.value;
  }
}//end curseur

/* fct° drag&drop */
function dragDrop(qBox, url){
  var options = qBox.getElementsByClassName('draggable_span');
  if(url.includes("d&d")){
    // tab reponse
    var span_contenu = [];
    span_contenu.push("usager");
    span_contenu.push("cohabiter");
    span_contenu.push("respect");
    span_contenu.push("partie");
    span_contenu.push("circuler");
    span_contenu.push("valorise");
    span_contenu.push("ignore");
    span_contenu.push("observer");
  }
  if(url.includes("ord_lst")){
    // tab reponse
    var span_contenu = [];
    span_contenu.push("observer dans son rétroviseur intérieur");
    span_contenu.push("observer dans son rétroviseur extérieur droit");
    span_contenu.push(" observer son angle mort droit");
    span_contenu.push("mettre son clignotant");
    span_contenu.push("s'arrêter pour laisser passer le cycliste");
    span_contenu.push("tourner une fois le cycliste passé");
  }


  //Add response & start drag&drop
  for (i=0; i<options.length; i++){
    options[i].innerHTML = span_contenu[i];
    options[i].addEventListener("dragstart", function(event){
    event.dataTransfer.setData("text/plain", event.target.id);
    });
  }

  /* Drag & drop function */
  //add an style event when drag start & stop.. dragenter / dragleave
  /* events fired on the draggable target */
  document.addEventListener("dragend", function( event ) {
      // add transparency
      //event.target.style.opacity = .5;
  }, false);

  /* events fired on the drop targets */
  document.addEventListener("dragover", function( event ) {
    // prevent default to allow drop
    event.preventDefault();
  }, false);
  document.addEventListener("dragenter", function( event ) {
      // highlight potential drop target when the draggable element enters it
      if ( event.target.className == "droparea" ) {
          event.target.style.background = "lightgray";
      }
  }, false);
  document.addEventListener("dragleave", function( event ) {
      // reset background of potential drop target when the draggable element leaves it
      if ( event.target.className == "droparea" ) {
          event.target.style.background = "";
      }
  }, false);
  document.addEventListener("drop", function( event ) {
        // prevent default action (open as link for some elements)
        event.preventDefault();
        // move dragged elmt to the selected drop target
        if ( event.target.className == "droparea" ) {
            event.target.style.background = "";
            var data = event.dataTransfer.getData("text");
            event.target.value = document.getElementById(data).innerHTML;
        }
    }, false);

/*********** LISTE ORDONNEE ***********/
    if(url.includes("ord_lst")){
      document.addEventListener("drop", function( event ) {
            // prevent default action (open as link for some elements)
            event.preventDefault();
            // move dragged elmt to the selected drop target
            if ( event.target.className == "droparea" ) {
                event.target.style.background = "";
                var data = event.dataTransfer.getData("text"); //id drag span
                var list_items = document.getElementsByClassName("draggable_span");
                var drop_span = event.target.querySelector("span"); // drop span
                var save_data = drop_span.innerHTML;

                //recup position elmt drag & drop
                for(i=0; i<list_items.length; i++){
                  //select id elemt drop -> position puis switch items...
                  if(list_items[i].getAttribute("id") == drop_span.getAttribute("id")){
                    /*data = document.getElementById(data).innerHTML;
                    //event.target.innerHTML = document.getElementById(data).innerHTML;
                    for(j=i; j<list_items.length; j++){
                      console.log(data);
                      console.log(drop_span);
                      list_items[j].innerHTML = data;
                      data = save_data;
                      if(j+1 != list_items.length){
                        save_data = list_items[j+1].innerHTML;
                      }*/
                      console.log("drop : "+i);
                      var dp = i;
                    }
                    if(list_items[i].getAttribute("id") == data){
                      console.log(("drag : "+i));
                      var dg = i;
                      data = document.getElementById(data).innerHTML;
                    }
                }
                /*for(i=0; i<Math.abs(dg-dp); i++){
                  //i contient nbre itération
                  //suivant move top - down
                  if(dp>dg){

                  }else{

                  }
                  list_items[i+dp].innerHTML = data;
                  data = save_data;
                }*/

                //event.target.value = document.getElementById(data).innerHTML;
            }
        }, false);
    }
}//end drag&drop

/* fuction Img_btn */
function imgCheck(qBox){
  var img_select = qBox.getElementsByTagName("img");
  var q_type = qBox.getAttribute("id");

  for(i=0; i<img_select.length; i++){
    img_select[i].addEventListener("click", function(ev){
      //Si QRU -> on toogle borders
      if(q_type.includes("qru")){
        for(i=0; i<img_select.length; i++){
          img_select[i].style.border = null;
        }
        //add border select
        ev.target.style.border = "3px solid cyan";
      }
      //Si QRM -> on retire border au click
      if(q_type.includes("qrm")){
        if(ev.target.style.border){
          ev.target.style.border = null;
        }else{
          //add border select
          ev.target.style.border = "3px solid cyan";
        }
      }
    });
  }
}
