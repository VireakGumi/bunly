const image = document.querySelector(".about-us .image img");
console.log(image);

function asset(path) {
    const baseUrl = window.location.origin;
    return `${baseUrl}/${path}`;
}

// Usage example
const imageUrl = asset('images/106176592_3008767946(1).png');
const currentUrl = image.src;
console.log(imageUrl);
function checkScreenSize() {
    if (window.innerWidth >= 768) {
        // Screen window is bigger than 768 pixels
        // Perform actions or execute code specific to this condition
        console.log("Screen window is bigger than 768 pixels");
        image.src = imageUrl
        console.log(image);

    } else {
        // Screen window is equal to or smaller than 768 pixels
        // Perform actions or execute code specific to this condition
        console.log("Screen window is equal to or smaller than 768 pixels");
        image.src = currentUrl;
    }
}

// Call the function to check the screen size
checkScreenSize();
window.addEventListener('resize', checkScreenSize);

