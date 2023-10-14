// document.getElementById("portfolioForm").addEventListener("submit", function(event) {
//     event.preventDefault();
  
//     // Get input values
//     const coinName = document.getElementById("coinName").value;
//     const quantity = parseFloat(document.getElementById("quantity").value);
//     const price = parseFloat(document.getElementById("price").value);
  
//     // Calculate total value
//     const totalValue = quantity * price;
  
//     // Create portfolio item element
//     const portfolioItem = document.createElement("li");
//     portfolioItem.textContent = `${coinName} - Quantity: ${quantity} - Price: $${price.toFixed(2)} - Total Value: $${totalValue.toFixed(2)}`;
  
//     // Append portfolio item to the list
//     document.getElementById("portfolioList").appendChild(portfolioItem);
  
//     // Reset form inputs
//     document.getElementById("coinName").value="";
//     // document.getElementById("coinName").style.color= "red";
//     document.getElementById("quantity").value = "";
//     document.getElementById("price").value = "";
//   });



  // Sample data for coins and transactions
let coins = [
  // { symbol: "BTC", quantity: 2 },
  // { symbol: "ETH", quantity: 5 },
  // { symbol: "LTC", quantity: 10 }
];

let transactions = [
  // { type: "Buy", symbol: "BTC", quantity: 2 },
  // { type: "Sell", symbol: "ETH", quantity: 3 },
  // { type: "Buy", symbol: "LTC", quantity: 5 }
];
// document.getElementById("buy-form").addEventListener("submit", function (event) {
//   event.preventDefault();

  

//   const coinName = document.getElementById("buy-coin").value;
//   const quantity =parseFloat(document.getElementById("buy-quantity").value); 
//   const price = parseFloat(document.getElementById("p").value);
//   const totalValue = quantity * price;




//   const portfolioItem = document.createElement("li");
//   portfolioItem.textContent = `${coinName} -Quantity: ${quantity} - Price: $${price.toFixed(2)} - Total Value: $${totalValue.toFixed(2)}`;

//   document.getElementById("transaction-list").appendChild(portfolioItem);

//   document.getElementById("buy-coin").value="";
//   document.getElementById("buy-quantity").value="";
//   document.getElementById("p").value = "";

  
// })



// document.getElementById("sell-form").addEventListener("submit", function (event) {
//   event.preventDefault();

  

//   const coinName1 = document.getElementById("sell-coin").value;
//   const quantity1 =parseFloat(document.getElementById("sell-quantity").value); 
//   const price1 = parseFloat(document.getElementById("x").value);
//   const totalValue1 = quantity1 * price1;




//   const portfolioItem1 = document.createElement("li");
//   portfolioItem1.textContent = `${coinName1} -Quantity: ${quantity1} - Price: $${price1.toFixed(2)} - Total Value: $${totalValue1.toFixed(2)}`;

//   document.getElementById("transaction-list").appendChild(portfolioItem1);

//   document.getElementById("sell-coin").value="";
//   document.getElementById("sell-quantity").value="";
//   document.getElementById("x").value = "";

  
// })




// const coinName = document.getElementById("buy-coin").value;
// const quantity =parseFloat(document.getElementById("buy-quantity").value); 
// const price = parseFloat(document.getElementById("p").value);
// const totalValue = quantity * price;


























// Function to display coins in the portfolio
// function displayCoins() {
//   // const coinList = document.getElementById("coin-list");
//   // coinList.innerHTML = "";

//   coins.forEach(coin => {
//     // const coinItem = document.createElement("div");
//     // coinItem.textContent = `${coinName} -Quantity: ${quantity} - Price: $${price.toFixed(2)} - Total Value: $${totalValue.toFixed(2)}`
//     // coinItem.textContent = `${coin.symbol}: ${coin.quantity}`;
//     // coinList.appendChild(coinItem);
//   });
// }

// Function to display transaction history
function displayTransactions() {
  const transactionList = document.getElementById("transaction-list");
  transactionList.innerHTML = "";
  
  // const price = parseFloat(document.getElementById("p").value);
  // const totalValue = quantity * price;
  transactions.forEach(transaction => {
    const transactionItem = document.createElement("li");
    transactionItem.textContent = `${transaction.type} - ${transaction.symbol}: ${transaction.quantity}: ${transaction.price}`;
    transactionList.appendChild(transactionItem);
  });
}

// Function to handle buy form submission
function handleBuy(e) {
  e.preventDefault();
  
  const buyCoinInput = document.getElementById("buy-coin");
  const buyQuantityInput = document.getElementById("buy-quantity");
  const buyPriceInput = document.getElementById("p")
  // const price = parseFloat(document.getElementById("x").value);
  // const totalValue = quantity * price;

  // const totalValue = buyQuantityInput * price;
  // const buyPriceInput = document.getElementById("p");

  const symbol = buyCoinInput.value.toUpperCase();
  const quantity = parseFloat(buyQuantityInput.value);
  // const price = parseFloat(document.getElementById("p").value);
  const price = parseFloat(buyPriceInput.value);
  const totalValue = quantity * price;
  if (symbol && quantity) {
    coins.push({ symbol, quantity });
    transactions.push({ type: "Buy", symbol, quantity,  price, totalValue });

    buyCoinInput.value = "";
    buyQuantityInput.value = "";
    buyPriceInput.value= "";
    // totalValue.value= "";


    // displayCoins();
    displayTransactions();
  }
}

// Function to handle sell form submission
function handleSell(e) {
  e.preventDefault();

  const sellCoinInput = document.getElementById("sell-coin");
  const sellQuantityInput = document.getElementById("sell-quantity");
  const sellPrice1Input = document.getElementById("x");

  const symbol = sellCoinInput.value.toUpperCase();
  const quantity = parseFloat(sellQuantityInput.value);
  const price = parseFloat(sellPrice1Input.value);

  if (symbol && quantity) {
    const coinIndex = coins.findIndex(coin => coin.symbol === symbol);

    if (coinIndex !== -1 && coins[coinIndex].quantity >= quantity) {
      coins[coinIndex].quantity -= quantity;
      transactions.push({ type: "Sell", symbol, quantity, price });

      sellCoinInput.value = "";
      sellQuantityInput.value = "";
      sellPrice1Input.value= "";

      // displayCoins();
      displayTransactions();
    } else {
      alert("Insufficient quantity of coins to sell!");
    }
  }
}

// Add event listeners to the forms
document.getElementById("buy-form").addEventListener("submit", handleBuy);
document.getElementById("sell-form").addEventListener("submit", handleSell);

// Initial display of coins and transactions
displayCoins();
displayTransactions();
  
