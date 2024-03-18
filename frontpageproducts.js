
var products = [
    { name: "Nike SB Pigeon Dunks", price: 799.99 },
    { name: "Jordan 1 Low Travis Scott Black Phantom", price: 559.99 },
    { name: "Nike SB Dunk Low Mummy Halloween", price: 335.99 },
    { name: "Jordan 1 Low Travis Scott Reverse Mocha", price: 1099.99 },
    { name: "Jordan 4 Retro White Cement (2016)", price: 449.99 },
    { name: "Nike Everyday Plus Lightweight Crew Socks", price: 13.99 },
    { name: "G-Shock DW-5600BB-1ER - Black", price: 85.99 },
    { name: "Casio G-Shock Bluetooth Watch GBD-200UU-1ER", price: 149.99 },
    { name: "Travis Scott x Air Jordan 1 Low Tiffany", price: 699.99 },
    { name: "CIRCUS MAXIMUS TRAVIS SCOTT", price: 29.99 },
    { name: "Darkbuck® Travis Scott Rapper Oversized T Shirt", price: 29.99 },
    { name: "Nike Air Jordan Travis Scott Flight SS Tee Black", price: 129.99 }
  ];
  
  // Function to display products
  function displayProducts(productArray) {
    productArray.forEach(function(product) {
      console.log("Name: " + product.name + ", Price: " + product.price);
    });
  }
  
  // Call the function to display products
  displayProducts(products);
  
  const fs = require('fs');

// Read the JSON file synchronously (for simplicity)
const jsonData = fs.readFileSync('products.json', 'utf-8');

// Parse the JSON data into an array of products
const products = JSON.parse(jsonData);

// Function to display products
function displayProducts(productsArray) {
  productsArray.forEach(function(product) {
    console.log("Name: " + product.name + ", Price: " + product.price);
  });
}

// Call the function to display products
displayProducts(products);
