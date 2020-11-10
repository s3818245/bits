function showTabs(content) {
    for (i = 0; i < 4; i++) {
        document.getElementsByClassName("tabContent")[i].style.display = "none";
    }
    document.getElementById(content).style.display = "block";
    
}