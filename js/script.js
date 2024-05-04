/* login */

const container = document.getElementById('login-container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});


// Function to open the feedback modal
function openFeedbackModal() {
    var modal = document.getElementById('feedbackModal');
    modal.style.display = "block";
}

// Function to close the feedback modal
function closeFeedbackModal() {
    var modal = document.getElementById('feedbackModal');
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    var modal = document.getElementById('feedbackModal');
    if (event.target == modal) {
        closeFeedbackModal();
    }
}


/* for mobile view */
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

document.querySelectorAll('.image-slider img').forEach(images =>{
    images.onclick = () =>{
        var src = images.getAttribute('src');
        document.querySelector('.main-home-image').src = src;
    };
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop : true,
    grabCursor: true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
    },
});

// Menu Form
    const popup = document.getElementById('popup');
    const showPopupButton = document.getElementById('showPopup');

    showPopupButton.addEventListener('click', () => {
        popup.style.display = 'flex';
    });

    function closePopup() {
        popup.style.display = 'none';
    }

    const form = document.getElementById('orderForm');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        const orderDetails = {};
        formData.forEach((value, key) => {
            orderDetails[key] = value;
        });
        alert('Order placed successfully!\n' + JSON.stringify(orderDetails, null, 2));
        closePopup();
    });
// Pre Made Themes Image Slider

const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

// Function to open the feedback popup
function openFeedbackPopup() {
    var popup = document.getElementById("feedbackPopup");
    popup.style.display = "block";
    document.body.style.overflow = 'hidden'; // Disable scrolling when the popup is open
}

// Function to close the feedback popup
function closeFeedbackPopup() {
    var popup = document.getElementById("feedbackPopup");
    popup.style.display = "none";
    document.body.style.overflow = ''; // Enable scrolling when the popup is closed
}

/// Event listener to open the popup when "Give Feedback" button is clicked
document.querySelector('.review-btn').addEventListener('click', function(event) {
    event.preventDefault();
    openFeedbackPopup();
});


// Event listener to close the popup when the close button is clicked
document.querySelector('.close-btn').addEventListener('click', function(event) {
    event.preventDefault();
    closeFeedbackPopup();
});

// Event listener to close the popup when anywhere outside the popup is clicked
window.addEventListener('click', function(event) {
    var popup = document.getElementById("feedbackPopup");
    if (event.target == popup) {
        closeFeedbackPopup();
    }
});