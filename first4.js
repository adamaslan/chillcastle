// Import the modules
const puppeteer = require('puppeteer');
const fs = require('fs');

// Define an async function
async function scrape() {
  // Launch a browser and create a page
  const browser = await puppeteer.launch();
  const page = await browser.newPage();

  // Go to the webpage you want to scrape
  await page.goto('https://www.chillcastle.com/first4points');

  // Select the element that contains the text and get its innerText
  const element = await page.$('.post-content');
  const text = await element.evaluate(el => el.innerText);

  // Convert the text to a JSON object
  const data = JSON.parse(text);

  // Write the data to a JSON file
  fs.writeFileSync('data.json', JSON.stringify(data));

  // Close the browser
  await browser.close();
}

// Call the function
scrape();
