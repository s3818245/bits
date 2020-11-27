function showTabs(content) {
    for (i = 0; i < 4; i++) {
        document.getElementsByClassName("tabContent")[i].style.display = "none";
    }
    document.getElementById(content).style.display = "block";
    
}

function votePost(post){
    var iconType = post.search("-up");

    var iconClicked = document.getElementById(post);
    var clickedValue = iconClicked.getAttribute("value");
    var clickedVoteCount = parseInt(iconClicked.innerHTML);

    if(iconType>0){
        var iconNotClicked = document.getElementById(post.replace("-up", "-down"));
    }else{
        var iconNotClicked = document.getElementById(post.replace("-down", "-up"))
    }

    var notClickedValue = iconNotClicked.getAttribute("value");
    var notClickedVoteCount = parseInt(iconNotClicked.innerHTML);

    if(clickedValue=="0" && notClickedValue=="0"){
        iconClicked.style.color = "#3f51b5";
        iconClicked.setAttribute("value","1");

        iconClicked.innerHTML = " "+ (clickedVoteCount+1);

        console.log(iconClicked.getAttribute("value"))
    }
    else if(clickedValue=="1" && notClickedValue=="0"){
        iconClicked.style.color = "";
        iconClicked.setAttribute("value","0");

        iconClicked.innerHTML = " "+ (clickedVoteCount-1);

        console.log(iconClicked.getAttribute("value"))
    }
    else if(clickedValue=="0" && notClickedValue == "1"){
        iconClicked.style.color = "#3f51b5";
        iconClicked.setAttribute("value","1");

        iconClicked.innerHTML = " "+ (clickedVoteCount+1);

        iconNotClicked.style.color = "";
        iconNotClicked.setAttribute("value","0");

        iconNotClicked.innerHTML = " "+ (notClickedVoteCount-1);
    }

}

function setRating(id){
    var star = document.getElementsByClassName("star");
    var new_rating = id.replace("star", "");
    var old_rating = document.getElementById("user-rating").value;

    for(i=0; i<star.length; i++){
        star[i].style.color = "gray";
    }

    if(new_rating!=old_rating){
        for(i=0; i<new_rating; i++){
            star[i].style.color = "#3f51b5";
        }
    }else{
        new_rating = 0;
    }

    document.getElementById("user-rating").setAttribute("value", new_rating);

    console.log(document.getElementById("user-rating").value);
}

function ageSlider(){
    const
  range = document.getElementById('range'),
  rangeV = document.getElementById('rangeV'),
  setValue = ()=>{
    const
      newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
      newPosition = 10 - (newValue * 0.2);
    rangeV.innerHTML = `<span>${range.value}</span>`;
    rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
  };
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);
}

function editImageModal(buttonId){
    var imageChanged = document.getElementById(buttonId).getAttribute("value");
    var title = document.getElementById("editImageModalTitle");
    var file = document.getElementById("imageFile");

    title.innerHTML = "Select image for " + imageChanged;

    file.name = imageChanged;

}

// jQuery

$(document).on("dblclick", "#jquerytest", function(){

    var current = $(this).text();
    $("#jquerytest").html('<textarea class="form-control" id="newcont" rows="5">'+current+'</textarea>');
    $("#newcont").focus();
    
    $("#newcont").focus(function() {
        console.log('in');
    }).blur(function() {
         var newcont = $("#newcont").val();
         $("#jquerytest").text(newcont);
    });

})