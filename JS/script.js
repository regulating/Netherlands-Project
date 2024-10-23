// Function to calculate the carbon footprint
function calculateCarbonFootprint(energyUsage, transportMiles) {
    const carbonFromEnergy = energyUsage * 0.000233; // tons per kWh
    const carbonFromTransport = transportMiles * 0.0004; // tons per mile
    return (carbonFromEnergy + carbonFromTransport).toFixed(4); // Return footprint rounded to 4 decimal places
  }
  
  // Function to display the latest result and previous calculations
  function displayResults() {
    const latestResult = localStorage.getItem('latestCalculation');
    const previousResults = JSON.parse(localStorage.getItem('previousCalculations')) || [];
  
    // Display the latest result
    document.getElementById('latestResult').innerHTML = latestResult
      ? latestResult
      : "No calculation has been performed yet.";
  
    // Display previous results
    const previousResultsContainer = document.getElementById('previousResults');
    previousResultsContainer.innerHTML = ""; // Clear previous results
  
    if (previousResults.length > 0) {
      previousResults.forEach((result, index) => {
        const resultDiv = document.createElement('p');
        resultDiv.textContent = `#${index + 1} - Energy: ${result.energy} kWh, Transport: ${result.miles} miles, Carbon Footprint: ${result.footprint} tons CO2`;
        previousResultsContainer.appendChild(resultDiv);
      });
    } else {
      previousResultsContainer.innerHTML = "No previous calculations.";
    }
  }
  
  // Handle form submission
  document.getElementById('carbonForm').addEventListener('submit', function (event) {
    event.preventDefault();
  
    const energyUsage = document.getElementById('energyUsage').value;
    const transportMiles = document.getElementById('transportMiles').value;
  
    // Calculate the carbon footprint
    const carbonFootprint = calculateCarbonFootprint(energyUsage, transportMiles);
  
    // Display the latest result
    const latestResultString = `Energy: ${energyUsage} kWh, Transport: ${transportMiles} miles, Carbon Footprint: ${carbonFootprint} tons CO2`;
    localStorage.setItem('latestCalculation', latestResultString);
  
    // Store the result in localStorage for previous results
    const previousResults = JSON.parse(localStorage.getItem('previousCalculations')) || [];
    previousResults.push({
      energy: energyUsage,
      miles: transportMiles,
      footprint: carbonFootprint
    });
    localStorage.setItem('previousCalculations', JSON.stringify(previousResults));
  
    // Update the displayed results
    displayResults();
  });
  
  // Load previous results on page load
  document.addEventListener('DOMContentLoaded', displayResults);
  