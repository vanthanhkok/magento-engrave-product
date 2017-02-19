function openMyPopup(url) {
    document.getElementById('popupEngrave').style.display = 'block';
    var content = document.getElementById('contentHtml');
    content.innerHTML ='';
    content.innerHTML = '<img class="previewEngrave" src="'+url+'"/>';
}

function closePopup() {
    var content = document.getElementById('contentHtml');
    content.innerHTML ='';
    document.getElementById('popupEngrave').style.display = 'none';
}