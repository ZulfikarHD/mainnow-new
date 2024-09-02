<template>
  <div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-6">Explore Venues</h1>

    <!-- Search Bar -->
    <div class="mb-6">
      <input
        v-model="searchQuery"
        @input="searchVenues"
        type="text"
        placeholder="Search by location, venue, or sport"
        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
      />
    </div>

    <!-- Venues List -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div
        v-for="venue in filteredVenues"
        :key="venue.id"
        class="bg-white p-6 rounded-lg shadow-lg"
      >
        <img
          :src="venue.image"
          alt="Venue Image"
          class="w-full h-48 object-cover rounded-lg mb-4"
        />
        <h2 class="text-xl font-bold mb-2">{{ venue.name }}</h2>
        <p class="text-gray-600 mb-4">{{ venue.location }}</p>
        <inertia-link
          :href="`/venues/${venue.id}`"
          class="text-indigo-500 hover:underline"
          >View Details</inertia-link
        >
      </div>
    </div>

    <!-- Personalized Section -->
    <div class="mt-12">
      <h2 class="text-2xl font-semibold mb-4">Your Upcoming Bookings</h2>
      <ul>
        <li v-for="booking in upcomingBookings" :key="booking.id" class="mb-4">
          <p class="text-gray-800">
            {{ booking.venue.name }} - {{ booking.date }}
          </p>
          <inertia-link
            :href="`/bookings/${booking.id}`"
            class="text-indigo-500 hover:underline"
            >View Booking</inertia-link
          >
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from "vue";

const searchQuery = ref("");
const venues = ref([
  // Sample data, replace with actual data from the backend
  {
    id: 1,
    name: "Central Park",
    location: "New York, NY",
    image: "/images/central-park.jpg",
  },
  {
    id: 2,
    name: "Golden Gate Park",
    location: "San Francisco, CA",
    image: "/images/golden-gate-park.jpg",
  },
  // More venues...
]);
const upcomingBookings = ref([
  // Sample data, replace with actual data from the backend
  { id: 1, venue: { name: "Central Park" }, date: "2024-09-15" },
  { id: 2, venue: { name: "Golden Gate Park" }, date: "2024-09-20" },
  // More bookings...
]);

const filteredVenues = computed(() => {
  if (searchQuery.value) {
    return venues.value.filter(
      (venue) =>
        venue.name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
        venue.location.toLowerCase().includes(searchQuery.value.toLowerCase())
    );
  }
  return venues.value;
});

function searchVenues() {
  // Implement search logic or API call here if needed
}
</script>
