// Wendy's Store Locator JavaScript

// Sample location data - in a real application, this would come from an API
const wendysLocations = [
    {
        id: 1,
        name: "Wendy's - Times Square",
        address: "1657 Broadway, New York, NY 10019",
        phone: "(212) 302-7442",
        coordinates: { lat: 40.7617, lng: -73.9845 },
        distance: 0.3,
        rating: 4.2,
        hours: {
            monday: "6:00 AM - 12:00 AM",
            tuesday: "6:00 AM - 12:00 AM",
            wednesday: "6:00 AM - 12:00 AM",
            thursday: "6:00 AM - 12:00 AM",
            friday: "6:00 AM - 1:00 AM",
            saturday: "6:00 AM - 1:00 AM",
            sunday: "7:00 AM - 11:00 PM"
        },
        services: ["Drive-Thru", "Dine-In", "Mobile Order", "Delivery", "Breakfast"],
        popular: true,
        image: "https://images.pexels.com/photos/2253643/pexels-photo-2253643.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1"
    },
    {
        id: 2,
        name: "Wendy's - Union Square",
        address: "20 E 14th St, New York, NY 10003",
        phone: "(212) 627-0292",
        coordinates: { lat: 40.7352, lng: -73.9911 },
        distance: 1.2,
        rating: 4.0,
        hours: {
            monday: "6:30 AM - 11:00 PM",
            tuesday: "6:30 AM - 11:00 PM",
            wednesday: "6:30 AM - 11:00 PM",
            thursday: "6:30 AM - 11:00 PM",
            friday: "6:30 AM - 12:00 AM",
            saturday: "7:00 AM - 12:00 AM",
            sunday: "7:00 AM - 10:00 PM"
        },
        services: ["Dine-In", "Mobile Order", "Delivery", "Breakfast", "24/7"],
        popular: true,
        image: "https://images.pexels.com/photos/2454533/pexels-photo-2454533.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1"
    },
    {
        id: 3,
        name: "Wendy's - Midtown East",
        address: "771 Lexington Ave, New York, NY 10065",
        phone: "(212) 759-6924",
        coordinates: { lat: 40.7641, lng: -73.9666 },
        distance: 1.8,
        rating: 4.5,
        hours: {
            monday: "7:00 AM - 10:00 PM",
            tuesday: "7:00 AM - 10:00 PM",
            wednesday: "7:00 AM - 10:00 PM",
            thursday: "7:00 AM - 10:00 PM",
            friday: "7:00 AM - 11:00 PM",
            saturday: "8:00 AM - 11:00 PM",
            sunday: "8:00 AM - 10:00 PM"
        },
        services: ["Drive-Thru", "Dine-In", "Mobile Order", "Delivery", "Breakfast"],
        popular: true,
        image: "https://images.pexels.com/photos/2087748/pexels-photo-2087748.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1"
    },
    {
        id: 4,
        name: "Wendy's - Downtown Brooklyn",
        address: "425 Fulton St, Brooklyn, NY 11201",
        phone: "(718) 625-9871",
        coordinates: { lat: 40.6917, lng: -73.9855 },
        distance: 2.5,
        rating: 3.9,
        hours: {
            monday: "6:00 AM - 11:00 PM",
            tuesday: "6:00 AM - 11:00 PM",
            wednesday: "6:00 AM - 11:00 PM",
            thursday: "6:00 AM - 11:00 PM",
            friday: "6:00 AM - 12:00 AM",
            saturday: "7:00 AM - 12:00 AM",
            sunday: "7:00 AM - 10:00 PM"
        },
        services: ["Drive-Thru", "Dine-In", "Mobile Order", "Delivery"],
        popular: false,
        image: "https://images.pexels.com/photos/1307698/pexels-photo-1307698.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1"
    },
    {
        id: 5,
        name: "Wendy's - Harlem",
        address: "300 W 125th St, New York, NY 10027",
        phone: "(212) 865-7851",
        coordinates: { lat: 40.8099, lng: -73.9506 },
        distance: 3.7,
        rating: 4.1,
        hours: {
            monday: "7:00 AM - 10:00 PM",
            tuesday: "7:00 AM - 10:00 PM",
            wednesday: "7:00 AM - 10:00 PM",
            thursday: "7:00 AM - 10:00 PM",
            friday: "7:00 AM - 11:00 PM",
            saturday: "8:00 AM - 11:00 PM",
            sunday: "8:00 AM - 10:00 PM"
        },
        services: ["Drive-Thru", "Dine-In", "Mobile Order", "Breakfast"],
        popular: false,
        image: "https://images.pexels.com/photos/2087748/pexels-photo-2087748.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1"
    },
    {
        id: 6,
        name: "Wendy's - Queens Center",
        address: "90-15 Queens Blvd, Elmhurst, NY 11373",
        phone: "(718) 271-3623",
        coordinates: { lat: 40.7368, lng: -73.8701 },
        distance: 5.2,
        rating: 4.3,
        hours: {
            monday: "7:00 AM - 11:00 PM",
            tuesday: "7:00 AM - 11:00 PM",
            wednesday: "7:00 AM - 11:00 PM",
            thursday: "7:00 AM - 11:00 PM",
            friday: "7:00 AM - 12:00 AM",
            saturday: "7:00 AM - 12:00 AM",
            sunday: "8:00 AM - 10:00 PM"
        },
        services: ["Drive-Thru", "Dine-In", "Mobile Order", "Delivery", "Breakfast"],
        popular: true,
        image: "https://images.pexels.com/photos/2253643/pexels-photo-2253643.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1"
    },
    {
        id: 7,
        name: "Wendy's - Bronx Terminal",
        address: "2501 Grand Concourse, Bronx, NY 10468",
        phone: "(718) 563-5300",
        coordinates: { lat: 40.8636, lng: -73.8985 },
        distance: 6.8,
        rating: 3.8,
        hours: {
            monday: "7:00 AM - 10:00 PM",
            tuesday: "7:00 AM - 10:00 PM",
            wednesday: "7:00 AM - 10:00 PM",
            thursday: "7:00 AM - 10:00 PM",
            friday: "7:00 AM - 11:00 PM",
            saturday: "8:00 AM - 11:00 PM",
            sunday: "8:00 AM - 10:00 PM"
        },
        services: ["Drive-Thru", "Dine-In", "Mobile Order"],
        popular: false,
        image: "https://images.pexels.com/photos/1307698/pexels-photo-1307698.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1"
    },
    {
        id: 8,
        name: "Wendy's - Staten Island Mall",
        address: "2655 Richmond Ave, Staten Island, NY 10314",
        phone: "(718) 494-9336",
        coordinates: { lat: 40.5827, lng: -74.1665 },
        distance: 12.4,
        rating: 4.4,
        hours: {
            monday: "10:00 AM - 9:00 PM",
            tuesday: "10:00 AM - 9:00 PM",
            wednesday: "10:00 AM - 9:00 PM",
            thursday: "10:00 AM - 9:00 PM",
            friday: "10:00 AM - 10:00 PM",
            saturday: "10:00 AM - 10:00 PM",
            sunday: "11:00 AM - 7:00 PM"
        },
        services: ["Dine-In", "Mobile Order", "Delivery"],
        popular: false,
        image: "https://images.pexels.com/photos/2454533/pexels-photo-2454533.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1"
    },
    {
        id: 9,
        name: "Wendy's - Jersey City",
        address: "75 Christopher Columbus Dr, Jersey City, NJ 07302",
        phone: "(201) 332-2933",
        coordinates: { lat: 40.7177, lng: -74.0431 },
        distance: 4.1,
        rating: 4.2,
        hours: {
            monday: "6:30 AM - 11:00 PM",
            tuesday: "6:30 AM - 11:00 PM",
            wednesday: "6:30 AM - 11:00 PM",
            thursday: "6:30 AM - 11:00 PM",
            friday: "6:30 AM - 12:00 AM",
            saturday: "7:00 AM - 12:00 AM",
            sunday: "7:00 AM - 10:00 PM"
        },
        services: ["Drive-Thru", "Dine-In", "Mobile Order", "Delivery", "Breakfast"],
        popular: true,
        image: "https://images.pexels.com/photos/2253643/pexels-photo-2253643.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1"
    }
];

// Initialize the page
document.addEventListener('DOMContentLoaded', function() {
    // Load popular locations
    loadPopularLocations();
    
    // Set up event listeners
    document.getElementById('location-search').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            searchLocations();
        }
    });
    
    document.getElementById('sort-options').addEventListener('change', function() {
        sortLocations(this.value);
    });
});

// Load popular locations
function loadPopularLocations() {
    const popularLocationsGrid = document.getElementById('popular-locations-grid');
    const popularLocations = wendysLocations.filter(location => location.popular);
    
    popularLocationsGrid.innerHTML = '';
    
    popularLocations.forEach(location => {
        popularLocationsGrid.appendChild(createLocationCard(location));
    });
}

// Search for locations
function searchLocations() {
    const searchInput = document.getElementById('location-search').value.trim().toLowerCase();
    const searchResults = document.getElementById('search-results');
    const popularLocations = document.getElementById('popular-locations');
    const locationsList = document.getElementById('locations-list');
    
    // Show search results section, hide popular locations
    searchResults.classList.remove('hidden');
    popularLocations.classList.add('hidden');
    
    // Filter locations based on search input
    let filteredLocations = wendysLocations;
    
    if (searchInput) {
        filteredLocations = wendysLocations.filter(location => 
            location.name.toLowerCase().includes(searchInput) ||
            location.address.toLowerCase().includes(searchInput)
        );
    }
    
    // Display results
    displaySearchResults(filteredLocations);
}

// Get current location
function getCurrentLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function(position) {
                // In a real app, you would use the coordinates to find nearby locations
                // For this demo, we'll just show all locations sorted by the predefined distance
                const searchResults = document.getElementById('search-results');
                const popularLocations = document.getElementById('popular-locations');
                
                searchResults.classList.remove('hidden');
                popularLocations.classList.add('hidden');
                
                displaySearchResults(wendysLocations);
                sortLocations('distance');
                document.getElementById('sort-options').value = 'distance';
            },
            function(error) {
                alert('Unable to get your location. Please try searching by address instead.');
                console.error('Geolocation error:', error);
            }
        );
    } else {
        alert('Geolocation is not supported by your browser. Please try searching by address instead.');
    }
}

// Display search results
function displaySearchResults(locations) {
    const locationsList = document.getElementById('locations-list');
    locationsList.innerHTML = '';
    
    if (locations.length === 0) {
        locationsList.innerHTML = `
            <div class="text-center py-8">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No locations found</h3>
                <p class="text-gray-500">Try a different search term or browse our popular locations.</p>
                <button onclick="showPopularLocations()" class="mt-4 bg-wendy-red hover:bg-wendy-dark-red text-white px-6 py-2 rounded-lg font-medium transition-colors duration-200">
                    View Popular Locations
                </button>
            </div>
        `;
        return;
    }
    
    locations.forEach(location => {
        locationsList.appendChild(createDetailedLocationCard(location));
    });
}

// Create a location card for popular locations
function createLocationCard(location) {
    const card = document.createElement('div');
    card.className = 'bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden';
    
    card.innerHTML = `
        <div class="relative">
            <img src="${location.image}" alt="${location.name}" class="w-full h-48 object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                <h3 class="text-white font-bold text-lg">${location.name}</h3>
            </div>
        </div>
        <div class="p-4">
            <p class="text-gray-600 text-sm mb-3">${location.address}</p>
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    <span class="text-gray-700">${location.rating}</span>
                </div>
                <button onclick="showLocationDetails(${location.id})" class="text-wendy-red hover:text-wendy-dark-red font-medium text-sm flex items-center">
                    View Details
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    `;
    
    return card;
}

// Create a detailed location card for search results
function createDetailedLocationCard(location) {
    const card = document.createElement('div');
    card.className = 'bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden';
    
    // Create services badges
    const servicesBadges = location.services.map(service => 
        `<span class="bg-red-100 text-wendy-red px-2 py-1 rounded-full text-xs font-medium">${service}</span>`
    ).join('');
    
    // Get today's hours
    const days = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
    const today = days[new Date().getDay()];
    const todayHours = location.hours[today];
    
    card.innerHTML = `
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="md:col-span-1">
                <img src="${location.image}" alt="${location.name}" class="w-full h-full object-cover md:h-64 rounded-t-lg md:rounded-l-lg md:rounded-t-none">
            </div>
            <div class="p-4 md:col-span-2">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-xl text-gray-900">${location.name}</h3>
                    <div class="flex items-center bg-gray-100 px-2 py-1 rounded-lg">
                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <span class="text-gray-700 font-medium">${location.rating}</span>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="flex items-start mb-2">
                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-600">${location.address}</p>
                    </div>
                    <div class="flex items-start mb-2">
                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <p class="text-gray-600">${location.phone}</p>
                    </div>
                    <div class="flex items-start mb-2">
                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <p class="text-gray-600">Today: <span class="font-medium">${todayHours}</span></p>
                            <button onclick="toggleHoursDropdown(${location.id})" class="text-wendy-red text-sm hover:underline mt-1 flex items-center">
                                See all hours
                                <svg id="hours-arrow-${location.id}" class="w-4 h-4 ml-1 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="hours-dropdown-${location.id}" class="hidden mt-2 bg-gray-50 rounded-lg p-3 text-sm">
                                <div class="grid grid-cols-2 gap-2">
                                    <div>
                                        <p class="text-gray-700"><span class="font-medium">Monday:</span> ${location.hours.monday}</p>
                                        <p class="text-gray-700"><span class="font-medium">Tuesday:</span> ${location.hours.tuesday}</p>
                                        <p class="text-gray-700"><span class="font-medium">Wednesday:</span> ${location.hours.wednesday}</p>
                                        <p class="text-gray-700"><span class="font-medium">Thursday:</span> ${location.hours.thursday}</p>
                                    </div>
                                    <div>
                                        <p class="text-gray-700"><span class="font-medium">Friday:</span> ${location.hours.friday}</p>
                                        <p class="text-gray-700"><span class="font-medium">Saturday:</span> ${location.hours.saturday}</p>
                                        <p class="text-gray-700"><span class="font-medium">Sunday:</span> ${location.hours.sunday}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <p class="text-gray-600">Distance: <span class="font-medium">${location.distance} miles</span></p>
                    </div>
                </div>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    ${servicesBadges}
                </div>
                
                <div class="flex flex-wrap gap-3 mt-4">
                    <a href="https://maps.google.com/?q=${encodeURIComponent(location.address)}" target="_blank" class="bg-wendy-red hover:bg-wendy-dark-red text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                        </svg>
                        Directions
                    </a>
                    <a href="tel:${location.phone}" class="border border-wendy-red text-wendy-red hover:bg-wendy-red hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Call
                    </a>
                    <button onclick="showLocationDetails(${location.id})" class="border border-gray-300 text-gray-700 hover:border-gray-400 hover:text-gray-900 px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        More Info
                    </button>
                </div>
            </div>
        </div>
    `;
    
    return card;
}

// Toggle hours dropdown
function toggleHoursDropdown(locationId) {
    const dropdown = document.getElementById(`hours-dropdown-${locationId}`);
    const arrow = document.getElementById(`hours-arrow-${locationId}`);
    
    dropdown.classList.toggle('hidden');
    arrow.classList.toggle('rotate-180');
}

// Show location details
function showLocationDetails(locationId) {
    const location = wendysLocations.find(loc => loc.id === locationId);
    
    if (!location) return;
    
    // In a real app, you would navigate to a detailed page or show a modal
    // For this demo, we'll create a simple modal
    
    // Create modal if it doesn't exist
    let modal = document.getElementById('location-modal');
    if (!modal) {
        modal = document.createElement('div');
        modal.id = 'location-modal';
        modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4';
        document.body.appendChild(modal);
    }
    
    // Create services badges
    const servicesBadges = location.services.map(service => 
        `<span class="bg-red-100 text-wendy-red px-2 py-1 rounded-full text-xs font-medium">${service}</span>`
    ).join('');
    
    // Populate modal content
    modal.innerHTML = `
        <div class="bg-white rounded-lg shadow-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="relative">
                <img src="${location.image}" alt="${location.name}" class="w-full h-64 object-cover">
                <button onclick="closeModal()" class="absolute top-4 right-4 bg-black bg-opacity-50 hover:bg-opacity-70 text-white rounded-full p-2 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-6">
                    <h2 class="text-white text-2xl font-bold">${location.name}</h2>
                </div>
            </div>
            
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="flex items-center bg-gray-100 px-3 py-1 rounded-lg">
                        <svg class="w-5 h-5 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <span class="text-gray-700 font-medium">${location.rating} Rating</span>
                    </div>
                    <div class="ml-4 text-gray-600">
                        <span class="font-medium">${location.distance} miles</span> away
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Contact Information</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-wendy-red mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <p class="text-gray-700 font-medium">Address:</p>
                                    <p class="text-gray-600">${location.address}</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-wendy-red mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <div>
                                    <p class="text-gray-700 font-medium">Phone:</p>
                                    <p class="text-gray-600">${location.phone}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Hours of Operation</h3>
                        <div class="space-y-1 text-sm">
                            <p class="flex justify-between">
                                <span class="font-medium text-gray-700">Monday:</span>
                                <span class="text-gray-600">${location.hours.monday}</span>
                            </p>
                            <p class="flex justify-between">
                                <span class="font-medium text-gray-700">Tuesday:</span>
                                <span class="text-gray-600">${location.hours.tuesday}</span>
                            </p>
                            <p class="flex justify-between">
                                <span class="font-medium text-gray-700">Wednesday:</span>
                                <span class="text-gray-600">${location.hours.wednesday}</span>
                            </p>
                            <p class="flex justify-between">
                                <span class="font-medium text-gray-700">Thursday:</span>
                                <span class="text-gray-600">${location.hours.thursday}</span>
                            </p>
                            <p class="flex justify-between">
                                <span class="font-medium text-gray-700">Friday:</span>
                                <span class="text-gray-600">${location.hours.friday}</span>
                            </p>
                            <p class="flex justify-between">
                                <span class="font-medium text-gray-700">Saturday:</span>
                                <span class="text-gray-600">${location.hours.saturday}</span>
                            </p>
                            <p class="flex justify-between">
                                <span class="font-medium text-gray-700">Sunday:</span>
                                <span class="text-gray-600">${location.hours.sunday}</span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Available Services</h3>
                    <div class="flex flex-wrap gap-2">
                        ${servicesBadges}
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <a href="https://maps.google.com/?q=${encodeURIComponent(location.address)}" target="_blank" class="bg-wendy-red hover:bg-wendy-dark-red text-white py-3 px-6 rounded-lg font-semibold transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                        </svg>
                        Get Directions
                    </a>
                    <a href="tel:${location.phone}" class="border-2 border-wendy-red text-wendy-red hover:bg-wendy-red hover:text-white py-3 px-6 rounded-lg font-semibold transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Call Restaurant
                    </a>
                </div>
            </div>
        </div>
    `;
    
    // Show modal
    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
}

// Close modal
function closeModal() {
    const modal = document.getElementById('location-modal');
    if (modal) {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
}

// Show popular locations
function showPopularLocations() {
    const searchResults = document.getElementById('search-results');
    const popularLocations = document.getElementById('popular-locations');
    
    searchResults.classList.add('hidden');
    popularLocations.classList.remove('hidden');
}

// Sort locations
function sortLocations(sortBy) {
    const locationsList = document.getElementById('locations-list');
    const locations = Array.from(locationsList.children);
    
    // Get the current displayed locations
    const displayedLocationIds = locations.map(card => {
        // Extract the location ID from the "More Info" button's onclick attribute
        const moreInfoButton = card.querySelector('button[onclick^="showLocationDetails"]');
        const onclickAttr = moreInfoButton.getAttribute('onclick');
        return parseInt(onclickAttr.match(/\d+/)[0]);
    });
    
    // Get the corresponding location objects
    const displayedLocations = wendysLocations.filter(loc => displayedLocationIds.includes(loc.id));
    
    // Sort the locations
    let sortedLocations;
    switch(sortBy) {
        case 'distance':
            sortedLocations = displayedLocations.sort((a, b) => a.distance - b.distance);
            break;
        case 'name':
            sortedLocations = displayedLocations.sort((a, b) => a.name.localeCompare(b.name));
            break;
        case 'rating':
            sortedLocations = displayedLocations.sort((a, b) => b.rating - a.rating);
            break;
        default:
            sortedLocations = displayedLocations;
    }
    
    // Display the sorted locations
    displaySearchResults(sortedLocations);
}