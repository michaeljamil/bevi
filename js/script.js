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

//Checkout

        document.getElementById('checkoutForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get the form values
            const name = document.getElementById('nameInput').value;
            const address = document.getElementById('addressInput').value;
            const email = document.getElementById('emailInput').value;
            const phone = document.getElementById('phoneInput').value;
            const zip = document.getElementById('zipInput').value;
            const paymentMethod = document.getElementById('paymentMethod').value;

            // Simple validation (just checking if the fields are filled)
            if (!name || !address || !email || !phone || !zip || !paymentMethod) {
                alert('Please fill in all the fields.');
                return;
            }

            // Here you can add more complex validation if needed

            // Placeholder function to simulate order placement
            function placeOrder() {
                alert('Order placed successfully!');
                // You can add more actions here, like sending the data to a server
            }

            placeOrder();
        });