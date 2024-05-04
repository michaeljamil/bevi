// Add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelectorAll(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.forEach(section => section.classList.toggle("active"));
};

// Function to toggle menu
function toggleMenu() {
  navigation.classList.toggle("active");
  main.forEach(section => section.classList.toggle("active"));
}

// Add event listeners to navigation links (excluding "Sign Out")
document.querySelectorAll('.navigation a:not([href="index.html"])').forEach(link => {
  link.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default link behavior

      const targetId = this.getAttribute('href');
      const sections = document.querySelectorAll('.main');

      // Hide all sections except the target section
      sections.forEach(section => {
          if (section.id === targetId.slice(1)) {
              section.style.display = 'block';
          } else {
              section.style.display = 'none';
          }
      });
  });
});

// Customer JS //

// Sample customer data (you can replace this with your actual data)
const customers = [
  { id: 1, name: 'John Doe', email: 'john@example.com', username: 'nakahash to', password: 'nakahash din' },
  { id: 2, name: 'Jane Smith', email: 'jane@example.com', username: 'nakahash to', password: 'nakahash din' },
  // Add more customer records as needed
];

// Function to populate the table with customer data
function populateCustomersTable() {
  const tbody = document.querySelector('.customerdetails .manager table tbody');
  tbody.innerHTML = ''; // Clear existing table rows

  customers.forEach(customer => {
      const row = `
          <tr>
              <th scope="row">${customer.id}</th>
              <td>${customer.name}</td>
              <td>${customer.email}</td>
              <td>${customer.username}</td>
              <td>${customer.password}</td>

          </tr>
      `;
      tbody.innerHTML += row;
  });
}

// Call the function to initially populate the table
populateCustomersTable();

// Orders JS //

// Sample order data (you can replace this with your actual data)
const orders = [
  { id: 1, customerid: 2, date: 'March', status: 'Pending', items: 'Frappe', shippingAddress: 'Daraga', total: 1500 },
  // Add more order records as needed
];

// Function to populate the table with order data
function populateOrdersTable() {
  const tbody = document.querySelector('.orderdetails .manager table tbody');
  tbody.innerHTML = ''; // Clear existing table rows

  orders.forEach(order => {
      const row = `
          <tr>
              <th scope="row">${order.id}</th>
              <td>${order.customerid}</td>
              <td>${order.date}</td>
              <td>${order.status}</td>
              <td>${order.items}</td>
              <td>${order.shippingAddress}</td>
              <td>${order.total}</td>
          </tr>
      `;
      tbody.innerHTML += row;
  });
}

// Call the function to initially populate the table
populateOrdersTable();

// Feedback JS //

// Sample feedback data (you can replace this with your actual data)
const feedbacks = [
  { id: 1, customerid: 2, date: 'February', rating: '4/5', comment: 'Very Delicious', product: 'Frappe'},
  // Add more feedback records as needed
];

// Function to populate the table with feedback data
function populateFeedbacksTable() {
  const tbody = document.querySelector('.feedbacksdetail .manager table tbody');
  tbody.innerHTML = ''; // Clear existing table rows

  feedbacks.forEach(feedback => {
      const row = `
          <tr>
              <td>${feedback.id}</td>
              <td>${feedback.customerid}</td>
              <td>${feedback.date}</td>
              <td>${feedback.rating}</td>
              <td>${feedback.comment}</td>
              <td>${feedback.product}</td>
          </tr>
      `;
      tbody.innerHTML += row;
  });
}

// Call the function to initially populate the table
populateFeedbacksTable();

// Admin JS //

// Sample admin data (you can replace this with your actual data)
const adminaccounts = [
  { id: 1, firstName: 'John', lastName: 'Doe', email: 'john.doe@example.com', contactNumber: '1234567890', username: 'johndoe', password: 'password123'},
  // Add more admin records as needed
];

// Function to populate the table with admin data
function populateAdminAccountsTable() {
    const tbody = document.querySelector('.adminaccountsdetail .manager table tbody');
    tbody.innerHTML = ''; // Clear existing table rows

    adminaccounts.forEach(adminaccount => {
        const row = `
            <tr>
                <td>${adminaccount.id}</td>
                <td>${adminaccount.firstName}</td>
                <td>${adminaccount.lastName}</td>
                <td>${adminaccount.email}</td>
                <td>${adminaccount.contactNumber}</td>
                <td>${adminaccount.username}</td>
                <td>${adminaccount.password}</td>
                <td>
                    <button class="update-btn" onclick="updateAdmin(${adminaccount.id})">Update</button>
                    <button class="delete-btn" onclick="deleteAdmin(${adminaccount.id})">Delete</button>
                </td>
            </tr>
        `;
        tbody.innerHTML += row;
    });
}

// Function to update admin account
function updateAdmin(adminId) {
    // Implement update functionality here
    console.log('Update admin with ID:', adminId);
}

// Function to delete admin account
function deleteAdmin(adminId) {
    // Implement delete functionality here
    console.log('Delete admin with ID:', adminId);
}

// Call the function to initially populate the table
populateAdminAccountsTable();
