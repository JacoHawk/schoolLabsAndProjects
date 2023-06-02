var i = 0; // Image starting point
var images = [];
var time = 2000; // Image changes every x000 seconds

// Array of images
images[0] = 'Assets/Images/cat.jpeg';
images[1] = 'Assets/Images/clouds.jpeg';
images[2] = 'Assets/Images/deer.jpeg';
images[3] = 'Assets/Images/island.jpeg';
images[4] = 'Assets/Images/mountain.jpeg';

// Change image function
function changeImg(){
    if(i < images.length -1){
        i++;
    } else {
        i = 0;
    }

    document.slide.src = images[i];
}

// this sets the function to execute however often we'd like
var interval = setInterval(changeImg, time);

function back(){
    // if i is 0, it will move to the end of the array
    if(i === 0){
        i = images.length -1;
    } else {
        // if i is not 0, it will move backwards one in the array
        i = i-1;
    }

    // This ensures the image will stay on the screen for the entire 2 seconds
    document.slide.src = images[i];
    clearInterval(interval);
    interval = setInterval(changeImg, time);
}

function forward(){
    // if i is on the last array point, it will move to the beginning
    if(i === images.length -1){
        i = 0;
    } else {
        // if i is not on the last array point, it will add 1 to the current array point
        i++;
    }
    
    document.slide.src = images[i];
    clearInterval(interval)
    interval = setInterval(changeImg, time)
}


// Start slideshow on page load
window.onload = changeImg;