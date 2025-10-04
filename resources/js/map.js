/**
 * SmilePoint Clinic Map Integration
 * Uses Leaflet.js with OpenStreetMap for displaying clinic location
 */

class SmilePointMap {
    constructor() {
        this.coordinates = [42.631575549879265, 23.373991186507048];
        this.clinicInfo = {
            name: 'SmilePoint Dental Clinic',
            address: '91 Aleksandar Malinov blvd., parter<br>Mladost 4, Sofia 1715',
            phone: '089 367 47 08',
            email: 'office@smilepoint.bg'
        };
    }

    /**
     * Initialize the map on the specified container
     * @param {string} containerId - The ID of the container element
     */
    init(containerId) {
        if (!document.getElementById(containerId)) {
            console.error(`Map container ${containerId} not found`);
            return;
        }

        // Initialize the map
        this.map = L.map(containerId).setView(this.coordinates, 16);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(this.map);

        // Add custom marker
        this.addCustomMarker();
    }

    /**
     * Create and add the custom marker with popup
     */
    addCustomMarker() {
        // Custom icon configuration
        const customIcon = L.icon({
            iconUrl: '/images/smilepoint_map-pin.webp',
            iconSize: [48, 48],
            iconAnchor: [24, 48],
            popupAnchor: [0, -48]
        });

        // Create marker
        const marker = L.marker(this.coordinates, {icon: customIcon}).addTo(this.map);

        // Create popup content
        const popupContent = this.createPopupContent();
        marker.bindPopup(popupContent);
    }

    /**
     * Generate the HTML content for the marker popup
     * @returns {string} HTML content for the popup
     */
    createPopupContent() {
        const directionsUrl = `https://www.google.com/maps/dir/?api=1&destination=${this.coordinates[0]},${this.coordinates[1]}`;

        return `
            <div class="p-3">
                <h3 class="font-semibold text-lg mb-2">${this.clinicInfo.name}</h3>
                <p class="text-sm text-gray-600 mb-2">${this.clinicInfo.address}</p>
                <p class="text-sm text-gray-600 mb-2">📞 ${this.clinicInfo.phone}</p>
                <p class="text-sm text-gray-600">✉️ ${this.clinicInfo.email}</p>
                <a href="${directionsUrl}" 
                   target="_blank" 
                   class="inline-block mt-2 px-3 py-1 bg-blue-500 text-white text-xs rounded hover:bg-blue-600">
                   Get Directions
                </a>
            </div>
        `;
    }
}

// Global function to initialize the map (can be called from anywhere)
window.initSmilePointMap = function (containerId = 'smilepoint-map') {
    const mapInstance = new SmilePointMap();
    mapInstance.init(containerId);
};

// Auto-initialize if the container exists when script loads
document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('smilepoint-map')) {
        window.initSmilePointMap();
    }
});