(function() {
    "use strict";
    console.log("From main");

    var lightBoxMain = document.querySelectorAll('.itemImage1');
    




 
function video(){
    document.getElementById('myVideo').src="video/Teaser_Trailer.webm"+this.id+".mp4";
}




  
    function lightBoxOpen() {
        console.log("From lightBoxOpen");
    }

    function openlightBox(evt) {
        console.log("From openLightbox");
        //debugger;
        //window.scrollTo(0, 0);
        document.body.style.overflow = "hidden";

        let lightbox = document.querySelector('.lightbox');
        lightbox.style.display = 'block';

        let lightboxImg = lightbox.querySelector('img');
        let lightboxClose = lightbox.querySelector('.close-lightbox');
        let lightboxDesc = lightbox.querySelector('p');


        if (evt.target.id == ".contain1") {
            lightboxImg.src = "img/hex-movie.png";
            lightboxDesc.innerHTML = "TEST";
        }else if (evt.target.id == "itemImage2") {
            lightboxImg.src = "img/fan_hex.png";
            lightboxDesc.innerHTML = "TEST";
    }
 

        lightboxClose.addEventListener('click', closeLightbox, false);
    }

    function closeLightbox() {
        document.body.style.overflow = "auto";

        let lightbox = document.querySelector('.lightbox');
        let lightboxImg = lightbox.querySelector('.img');
        let lightboxDesc = lightbox.querySelector('p');

        lightbox.style.display = "";
        lightboxImg.src = "";
        lightboxDesc.innerHTML = "";
    }

    lightBoxMain.forEach(function(element,index) {
        element.addEventListener('click', openlightBox, false);
    });
})();