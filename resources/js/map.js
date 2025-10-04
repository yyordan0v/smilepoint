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
     * Create and add the custom marker with styled popup
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

        // Create popup content with Flux styling
        const popupContent = this.createPopupContent();
        marker.bindPopup(popupContent, {
            maxWidth: 320,
            minWidth: 280,
            className: 'custom-popup'
        });
    }

    /**
     * Generate the HTML content for the marker popup with Flux styling
     * @returns {string} HTML content for the popup
     */
    createPopupContent() {
        const directionsUrl = `https://www.google.com/maps/dir/?api=1&destination=${this.coordinates[0]},${this.coordinates[1]}`;

        return `
            <div class="p-4 w-full space-y-4">
                <h3 class="text-lg font-semibold text-zinc-900">${this.clinicInfo.name}</h3>
                <div class="space-y-2">
                    <div>
                        <p class="text-sm text-zinc-600 !m-0">91 Aleksandar Malinov blvd., parter Mladost 4, Sofia 1715</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-zinc-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <p class="text-sm text-zinc-600 !m-0">${this.clinicInfo.phone}</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-zinc-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <p class="text-sm text-zinc-600 !m-0">${this.clinicInfo.email}</p>
                    </div>
                </div>
                <a href="${directionsUrl}" 
                   target="_blank" 
                   class="inline-flex items-center gap-2 px-4 py-2.5 text-sm !font-bold !text-white bg-zinc-900 rounded-lg hover:bg-zinc-800 transition-colors shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                      <path fill-rule="evenodd" d="M5.37 2.257a1.25 1.25 0 0 1 1.214-.054l3.378 1.69 2.133-1.313A1.25 1.25 0 0 1 14 3.644v7.326c0 .434-.225.837-.595 1.065l-2.775 1.708a1.25 1.25 0 0 1-1.214.053l-3.378-1.689-2.133 1.313A1.25 1.25 0 0 1 2 12.354V5.029c0-.434.225-.837.595-1.064L5.37 2.257ZM6 4a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-4.5A.75.75 0 0 1 6 4Zm4.75 2.75a.75.75 0 0 0-1.5 0v4.5a.75.75 0 0 0 1.5 0v-4.5Z" clip-rule="evenodd" />
                    </svg>
                    <span>
                        Get Directions
                    </span>
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