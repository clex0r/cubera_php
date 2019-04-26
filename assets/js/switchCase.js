var image = document.getElementsByClassName('profile')[0];
var activeImg = 0;  
var imageContainer = ['assets/img/mark.jpg','assets/img/mark2.jpg','assets/img/mark3.jpg']; //All images


setInterval(function(){
    if(activeImg >= imageContainer.length -1){
        activeImg = 0;  //if at last img, set back to index 0
    }
    else{
        activeImg++;    //next img
    }
    image.src = imageContainer[activeImg];
},3000);
