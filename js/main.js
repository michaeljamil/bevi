function togglePasswordVisibility(inputId, formType) {
  var input = document.getElementById(inputId);
  var icon = input.nextElementSibling.querySelector('i');
  if (input.type === 'password') {
      input.type = 'text';
      icon.classList.remove('fa-eye');
      icon.classList.add('fa-eye-slash');
  } else {
      input.type = 'password';
      icon.classList.remove('fa-eye-slash');
      icon.classList.add('fa-eye');
  }
}

// Open the add admin modal
function openAddAdminModal() {
  var modal = document.getElementById("addAdminModal");
  modal.style.display = "block";
}

// Close the add admin modal
function closeAddAdminModal() {
  var modal = document.getElementById("addAdminModal");
  modal.style.display = "none";
}

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
              <td>
                    <button class="order-complete" onclick="orderComplete(${order.id})">Order Completed</button>
                    <button class="order-return" onclick="orderReturn(${order.id})">Order Cancelled</button>
              </td>
          </tr>
      `;
      tbody.innerHTML += row;
  });
}

// Call the function to initially populate the table
populateOrdersTable();



// Feedback JS //

// Sample feedback data (you can replace this with your actual data)
/*const feedbacks = [
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
*/
// Admin JS //

// // Sample admin data (you can replace this with your actual data)
// const adminaccounts = [
//   { id: 1, firstName: 'John', lastName: 'Doe', email: 'john.doe@example.com', contactNumber: '1234567890', username: 'johndoe', password: 'password123'},
//   // Add more admin records as needed
// ];

// // Function to populate the table with admin data
// function populateAdminAccountsTable() {
//     const tbody = document.querySelector('.adminaccountsdetail .manager table tbody');
//     tbody.innerHTML = ''; // Clear existing table rows

//     adminaccounts.forEach(adminaccount => {
//         const row = `
//             <tr>
//                 <td>${adminaccount.id}</td>
//                 <td>${adminaccount.firstName}</td>
//                 <td>${adminaccount.lastName}</td>
//                 <td>${adminaccount.email}</td>
//                 <td>${adminaccount.contactNumber}</td>
//                 <td>${adminaccount.username}</td>
//                 <td>${adminaccount.password}</td>
//                 <td>
//                     <button class="update-btn" onclick="updateAdmin(${adminaccount.id})">Update</button>
//                     <button class="delete-btn" onclick="deleteAdmin(${adminaccount.id})">Delete</button>
//                 </td>
//             </tr>
//         `;
//         tbody.innerHTML += row;
//     });
// }

// // Function to update admin account
// function updateAdmin(adminId) {
//     // Implement update functionality here
//     console.log('Update admin with ID:', adminId);
// }

// // Function to delete admin account
// function deleteAdmin(adminId) {
//     // Implement delete functionality here
//     console.log('Delete admin with ID:', adminId);
// }

// // Call the function to initially populate the table
// populateAdminAccountsTable();
function openUpdateAdminModal(adminId, firstName, lastName, email, phone, username, password) {
  document.getElementById('updateAdminId').value = adminId;
  document.getElementById('updateFirstName').value = firstName;
  document.getElementById('updateLastName').value = lastName;
  document.getElementById('updateEmail').value = email;
  document.getElementById('updateContactNumber').value = phone;
  document.getElementById('updateUsername').value = username;
  document.getElementById('updatePassword').value = password;
  document.getElementById('updateAdminModal').style.display = 'block';
}

function closeUpdateAdminModal() {
  document.getElementById('updateAdminModal').style.display = 'none';
}

function deleteAdmin(adminId) {
  if (confirm("Are you sure you want to delete this admin?")) {
      window.location.href = "delAdmin.php?admin_id=" + adminId;
  }
}
//Admin search
function searchAdmin() {
  // Get the input element and the search query
  var input = document.getElementById("searchInput");
  var filter = input.value.toUpperCase();
  
  // Get all table rows
  var rows = document.querySelectorAll(".striped-table tbody tr");

  // Loop through all table rows, hide those that don't match the search query
  rows.forEach(function(row) {
    var cells = row.getElementsByTagName("td");
    var found = false;
    for (var i = 0; i < cells.length; i++) {
      var cell = cells[i];
      if (cell) {
        var txtValue = cell.textContent || cell.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          found = true;
          break;
        }
      }
    }
    // Toggle row display based on whether it matches the search query
    row.style.display = found ? "" : "none";
  });
}
function searchCustomer() {
  // Get the input element and the search query
  var input = document.getElementById("searchInput");
  var filter = input.value.toUpperCase();
  
  // Get all table rows
  var rows = document.querySelectorAll(".striped-table tbody tr");

  // Loop through all table rows, hide those that don't match the search query
  rows.forEach(function(row) {
    var cells = row.getElementsByTagName("td");
    var found = false;
    for (var i = 0; i < cells.length; i++) {
      var cell = cells[i];
      if (cell) {
        var txtValue = cell.textContent || cell.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          found = true;
          break;
        }
      }
    }
    // Toggle row display based on whether it matches the search query
    row.style.display = found ? "" : "none";
  });
}




