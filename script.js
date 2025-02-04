//login
function login() {
    const name = document.getElementById('name').value.trim();
    //const id = document.getElementById('id').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const message = document.getElementById('message');

    // Basic validation
    if (name === "" || email === "" || password === "") {
        message.textContent = "All fields are required!";
        message.style.color = "red";
        return;
    }

    if (!validateEmail(email)) {
        message.textContent = "Please enter a valid email address!";
        message.style.color = "red";
        return;
    }

    // If validation passes, send data to PHP
    const formData = new FormData();
    formData.append('name', name);
    //formData.append('id', id);
    formData.append('email', email);
    formData.append('password', password);

    fetch('login1.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        message.textContent = data;
        message.style.color = "green";
    })
    .catch(error => {
        message.textContent = "An error occurred. Please try again.";
        message.style.color = "red";
    });
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}

//signup
function signup() {
  var username = document.getElementById("signup-username").value;
  var email = document.getElementById("signup-email").value;
  var password = document.getElementById("signup-password").value;
  var confirmPassword = document.getElementById("confirm-password").value;

  if (username == "" || email == "" || password == "" || confirmPassword == "") {
      alert("All fields are required.");
      return;
  }

  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  if (!email.match(emailPattern)) {
      alert("Please enter a valid email address.");
      return;
  }

  if (password.length < 6) {
      alert("Password must be at least 6 characters long.");
      return;
  }

  if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return;
  }

  alert("Account created successfully!");

  window.location.href = "index.php"; 
}

let cart = [];

// Redirect to Features page after login/signup
document.getElementById("login-link")?.addEventListener("click", () => {
    window.location.href = "features.html";
});

document.getElementById("signup-link")?.addEventListener("click", () => {
    window.location.href = "features.html";
});

// Show Subcategories
function showSubCategories(category) {
    const subcategoryData = {
        frozen: ["Frozen Vegetables", "Ice Cream", "Frozen Pizza"],
        dairy: ["Milk", "Cheese", "Butter"],
        drinks: ["Juices", "Soda", "Energy Drinks"],
        meat: ["Chicken", "Beef", "Fish"],
        beans: ["Lentils", "Chickpeas", "Black Beans"]
    };

    const subcategorySection = document.getElementById("subcategory-section");
    const subcategoryGrid = document.getElementById("subcategory-grid");

    subcategoryGrid.innerHTML = ""; // Clear existing subcategories
    subcategoryData[category].forEach(item => {
        const div = document.createElement("div");
        div.className = "subcategory";
        div.textContent = item;
        div.onclick = () => addToCart(item);
        subcategoryGrid.appendChild(div);
    });

    subcategorySection.style.display = "block";
}

// Add to Cart
function addToCart(item) {
    cart.push(item);
    alert(`${item} added to cart!`);
    document.getElementById("cart-link").style.display = "inline"; // Show cart link
}

// Display Cart Items
function displayCart() {
    const cartItems = document.getElementById("cart-items");
    cartItems.innerHTML = cart.map(item => `<li>${item}</li>`).join("");
}

// Checkout
function checkout() {
    alert("Proceeding to checkout!");
    cart = []; // Clear cart
    window.location.href = "index.html";
}

// Call displayCart if on cart page
if (document.title === "Cart") {
    displayCart();
}

/*let cart = [];

function addToCart(item) {
    cart.push(item);
    alert(`${item} has been added to your cart!`);
    localStorage.setItem('cart', JSON.stringify(cart)); // Save cart in local storage
}

// Retrieve and display cart items
function displayCart() {
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    const cartContainer = document.getElementById('cart-items');
    cartContainer.innerHTML = cartItems.map(item => `<li>${item}</li>`).join('');
}*/

// Add to Cart Functionality
function addToCart(itemName) {
    alert(`${itemName} has been added to your cart!`);
}
