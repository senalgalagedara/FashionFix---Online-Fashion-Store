
/*function toggleParagraph(id){
    var paragraph = document.getElementById(id);
    if(paragraph.style.display === "none"){
        paragraph.style.display = "block";
    }else{
        paragraph.style.display ="none";
    }
}*/

/*function toggleContent(id, btn) {
    var content = document.getElementById(id);
    
    if (content.classList.contains('open')) {
        content.classList.remove('open');
        btn.classList.remove('open');
    } else {
        content.classList.add('open');
        btn.classList.add('open');
    }
}*/

function toggleContent(id, button) {
    var content = document.getElementById(id);

    if (content.style.maxHeight) {
        content.style.maxHeight = null;
        button.classList.remove('open'); 
    } else {
        content.style.maxHeight = content.scrollHeight + "px"; 
        button.classList.add('open'); 
    }
}