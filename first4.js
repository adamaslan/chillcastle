// Import the modules
const puppeteer = require('puppeteer');
const fs = require('fs');

// Define an async function
async function scrape() {
  // Launch a browser and create a page
  const browser = await puppeteer.launch();
  const page = await browser.newPage();

  // Define an array of URLs to scrape
  const urls = [
    'https://www.chillcastle.com/first4points',
    'https://www.chillcastle.com/thenextpoints',
    'https://www.chillcastle.com/42pointsofidealsandterrors',
    'https://www.chillcastle.com/next42points',
    'https://www.chillcastle.com/25points-woops'
  ];

  // Loop over the URLs
  for (let url of urls) {
    // Go to the webpage you want to scrape
    await page.goto(url);

    // Select the element that contains the text and get its innerText
    const body = await page.$('body');
    const text = await body.evaluate(el => el.innerText);

    // Append the text to the data.json file
    fs.appendFileSync('data2.json', text + '\n');
  }

  // Close the browser
  await browser.close();
}

// Call the function
scrape();



// // Import the modules
// const puppeteer = require('puppeteer');
// const fs = require('fs');

// // Define an async function
// async function scrape() {
//   // Launch a browser and create a page
//   const browser = await puppeteer.launch();
//   const page = await browser.newPage();

//   // Go to the webpage you want to scrape
//   await page.goto('https://www.chillcastle.com/first4points');

//   // Select the element that contains the text and get its innerText
//   const body = await page.$('body');
//   const text = await body.evaluate(el => el.innerText);

//   // Convert the text to a JSON object
//  //  const data = JSON.parse(text);

//   // Write the data to a JSON file
//   // fs.writeFileSync('data.json', JSON.stringify(data));

//   fs.writeFileSync('data.json', text);

//   // Close the browser
//   await browser.close();
// }

// // Call the function
// scrape();
