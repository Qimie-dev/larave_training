<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RoomBook - Discussion Room Booking</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/[email protected]/dist/cdn.min.js" defer></script>
<script src="https://unpkg.com/[email protected]/dist/umd/lucide.min.js"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'ui-sans-serif', 'system-ui'],
        },
        colors: {
          navy: {
            950: '#0a1128',
            900: '#0f1a3c',
            800: '#152352',
          }
        }
      }
    }
  }
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  body { font-family: 'Inter', sans-serif; }
  .card-shadow { box-shadow: 0 4px 24px -4px rgba(15, 26, 60, 0.08), 0 2px 8px -2px rgba(15, 26, 60, 0.06); }
  .card-shadow-lg { box-shadow: 0 20px 50px -12px rgba(15, 26, 60, 0.18); }
</style>
</head>
<body class="bg-white text-slate-800 antialiased">

<!-- NAVBAR -->
<header x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.scrollY > 10)"
  :class="scrolled ? 'shadow-sm bg-white/90 backdrop-blur-md' : 'bg-white/70 backdrop-blur-md'"
  class="sticky top-0 z-50 border-b border-slate-100 transition-all duration-300">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="flex items-center justify-between h-18 py-3">
      <a href="#home" class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-navy-900 to-blue-700 flex items-center justify-center">
          <i data-lucide="calendar-check" class="w-5 h-5 text-white"></i>
        </div>
        <div class="leading-tight">
          <p class="text-base font-bold text-navy-900">RoomBook</p>
          <p class="text-[11px] text-slate-500 -mt-0.5">Discussion Room Booking</p>
        </div>
      </a>

      <nav class="hidden md:flex items-center gap-9 text-sm font-medium text-slate-600">
        <a href="#home" class="hover:text-navy-900 transition-colors duration-200">Home</a>
        <a href="#rooms" class="hover:text-navy-900 transition-colors duration-200">Rooms</a>
        <a href="#schedule" class="hover:text-navy-900 transition-colors duration-200">Schedule</a>
        <a href="#how-it-works" class="hover:text-navy-900 transition-colors duration-200">How It Works</a>
      </nav>

      <div class="hidden md:block">
        <a href="#search" class="inline-flex items-center gap-2 bg-navy-900 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition-colors duration-200">
          <i data-lucide="plus-circle" class="w-4 h-4"></i>
          Book a Room
        </a>
      </div>

      <button @click="open = !open" class="md:hidden text-slate-700">
        <i data-lucide="menu" x-show="!open" class="w-6 h-6"></i>
        <i data-lucide="x" x-show="open" x-cloak class="w-6 h-6"></i>
      </button>
    </div>

    <div x-show="open" x-cloak x-transition class="md:hidden pb-5 pt-1 border-t border-slate-100">
      <div class="flex flex-col gap-1 text-sm font-medium text-slate-600 pt-3">
        <a href="#home" @click="open=false" class="py-2.5 px-2 rounded-lg hover:bg-slate-50">Home</a>
        <a href="#rooms" @click="open=false" class="py-2.5 px-2 rounded-lg hover:bg-slate-50">Rooms</a>
        <a href="#schedule" @click="open=false" class="py-2.5 px-2 rounded-lg hover:bg-slate-50">Schedule</a>
        <a href="#how-it-works" @click="open=false" class="py-2.5 px-2 rounded-lg hover:bg-slate-50">How It Works</a>
        <a href="#search" @click="open=false" class="mt-2 inline-flex items-center justify-center gap-2 bg-navy-900 text-white text-sm font-semibold px-5 py-3 rounded-lg">
          Book a Room
        </a>
      </div>
    </div>
  </div>
</header>

<!-- HERO -->
<section id="home" class="relative overflow-hidden bg-gradient-to-b from-slate-50 to-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-24">
    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <div>
        <span class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1.5 rounded-full">
          <i data-lucide="sparkles" class="w-3.5 h-3.5"></i>
          Campus Room Booking, Simplified
        </span>

        <h1 class="mt-6 text-4xl sm:text-5xl lg:text-[3.4rem] font-extrabold text-navy-900 leading-[1.1] tracking-tight">
          Find a Room.<br>Book Your Space.
        </h1>

        <p class="mt-5 text-base sm:text-lg text-slate-600 max-w-lg leading-relaxed">
          Search discussion rooms across campus, check real-time availability, and secure your slot in seconds — all in one place.
        </p>

        <div class="mt-8 flex flex-col sm:flex-row gap-3">
          <a href="#search" class="inline-flex items-center justify-center gap-2 bg-navy-900 hover:bg-blue-800 text-white font-semibold px-6 py-3.5 rounded-xl transition-colors duration-200 card-shadow">
            <i data-lucide="calendar-plus" class="w-4 h-4"></i>
            Book a Room
          </a>
          <a href="#schedule" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-navy-900 font-semibold px-6 py-3.5 rounded-xl border border-slate-200 transition-colors duration-200">
            <i data-lucide="calendar-days" class="w-4 h-4"></i>
            View Schedule
          </a>
        </div>

        <div class="mt-10 flex items-center gap-8">
          <div>
            <p class="text-2xl font-bold text-navy-900">24</p>
            <p class="text-xs text-slate-500 mt-0.5">Rooms Available</p>
          </div>
          <div class="w-px h-9 bg-slate-200"></div>
          <div>
            <p class="text-2xl font-bold text-navy-900">3</p>
            <p class="text-xs text-slate-500 mt-0.5">Buildings Covered</p>
          </div>
          <div class="w-px h-9 bg-slate-200"></div>
          <div>
            <p class="text-2xl font-bold text-navy-900">Live</p>
            <p class="text-xs text-slate-500 mt-0.5">Availability</p>
          </div>
        </div>
      </div>

      <!-- HERO MOCKUP -->
      <div class="relative">
        <div class="absolute -top-8 -right-6 w-64 h-64 bg-blue-100 rounded-full blur-3xl opacity-50"></div>

        <div class="relative bg-white rounded-2xl card-shadow-lg border border-slate-100 p-6 max-w-sm ml-auto">
          <div class="flex items-center justify-between">
            <div>
              <p class="font-bold text-navy-900">Discussion Room 02</p>
              <p class="text-xs text-slate-500 mt-0.5">Level 2 &middot; Capacity: 8</p>
            </div>
            <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center shrink-0">
              <i data-lucide="door-open" class="w-5 h-5 text-blue-700"></i>
            </div>
          </div>

          <div class="mt-5 pt-5 border-t border-slate-100">
            <p class="text-xs font-semibold text-slate-400 uppercase tracking-wide mb-3">Today</p>

            <div class="space-y-2.5">
              <div class="flex items-center justify-between bg-slate-50 rounded-lg px-3.5 py-2.5">
                <span class="text-sm text-slate-600">10:00 AM - 12:00 PM</span>
                <span class="text-xs font-semibold text-rose-600 bg-rose-50 px-2.5 py-1 rounded-md">Booked</span>
              </div>
              <div class="flex items-center justify-between bg-emerald-50/60 rounded-lg px-3.5 py-2.5">
                <span class="text-sm text-slate-700">12:00 PM - 02:00 PM</span>
                <span class="text-xs font-semibold text-emerald-700 bg-emerald-100 px-2.5 py-1 rounded-md">Available</span>
              </div>
              <div class="flex items-center justify-between bg-emerald-50/60 rounded-lg px-3.5 py-2.5">
                <span class="text-sm text-slate-700">02:00 PM - 04:00 PM</span>
                <span class="text-xs font-semibold text-emerald-700 bg-emerald-100 px-2.5 py-1 rounded-md">Available</span>
              </div>
            </div>
          </div>

          <button class="mt-5 w-full bg-navy-900 hover:bg-blue-800 text-white text-sm font-semibold py-3 rounded-xl transition-colors duration-200">
            Book This Room
          </button>
        </div>

        <div class="absolute -bottom-6 -left-6 bg-white rounded-xl card-shadow border border-slate-100 px-4 py-3 hidden sm:flex items-center gap-3">
          <div class="w-9 h-9 rounded-lg bg-indigo-50 flex items-center justify-center">
            <i data-lucide="check-circle-2" class="w-4.5 h-4.5 text-indigo-600"></i>
          </div>
          <div>
            <p class="text-xs font-semibold text-navy-900">Booking Confirmed</p>
            <p class="text-[11px] text-slate-500">Meeting Room A</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- QUICK AVAILABILITY / SEARCH -->
<section id="search" class="max-w-7xl mx-auto px-6 lg:px-8 -mt-2 lg:-mt-6 relative z-10 pb-4">
  <div class="bg-white rounded-2xl card-shadow-lg border border-slate-100 p-6 sm:p-8">
    <div class="flex items-center gap-2.5 mb-6">
      <div class="w-9 h-9 rounded-lg bg-blue-50 flex items-center justify-center">
        <i data-lucide="search" class="w-4.5 h-4.5 text-blue-700"></i>
      </div>
      <h2 class="text-lg font-bold text-navy-900">Check Room Availability</h2>
    </div>

    <form class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
      <div class="lg:col-span-1">
        <label class="block text-xs font-semibold text-slate-500 mb-1.5">Date</label>
        <input type="date" class="w-full border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600">
      </div>
      <div class="lg:col-span-1">
        <label class="block text-xs font-semibold text-slate-500 mb-1.5">Start Time</label>
        <input type="time" class="w-full border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600">
      </div>
      <div class="lg:col-span-1">
        <label class="block text-xs font-semibold text-slate-500 mb-1.5">End Time</label>
        <input type="time" class="w-full border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600">
      </div>
      <div class="lg:col-span-1">
        <label class="block text-xs font-semibold text-slate-500 mb-1.5">Participants</label>
        <input type="number" min="1" placeholder="e.g. 6" class="w-full border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm text-slate-700 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600">
      </div>
      <div class="lg:col-span-1 flex items-end">
        <button type="submit" class="w-full inline-flex items-center justify-center gap-2 bg-navy-900 hover:bg-blue-800 text-white text-sm font-semibold px-4 py-2.5 rounded-lg transition-colors duration-200">
          <i data-lucide="search" class="w-4 h-4"></i>
          Check Availability
        </button>
      </div>
    </form>
  </div>
</section>

<!-- AVAILABLE ROOMS -->
<section id="rooms" class="max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">
  <div class="max-w-xl mb-12">
    <span class="text-xs font-semibold text-blue-700 uppercase tracking-wide">Rooms</span>
    <h2 class="mt-2 text-3xl font-extrabold text-navy-900 tracking-tight">Available Rooms</h2>
    <p class="mt-3 text-slate-600 leading-relaxed">Browse rooms across campus with real-time capacity and facility information.</p>
  </div>

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="group bg-white border border-slate-100 rounded-2xl p-6 card-shadow hover:card-shadow-lg transition-shadow duration-300">
      <div class="flex items-start justify-between">
        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
          <i data-lucide="door-open" class="w-5.5 h-5.5 text-blue-700"></i>
        </div>
        <span class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full">Available</span>
      </div>
      <h3 class="mt-5 font-bold text-navy-900 text-lg">Discussion Room 01</h3>
      <p class="text-sm text-slate-500 mt-1 flex items-center gap-1.5">
        <i data-lucide="map-pin" class="w-3.5 h-3.5"></i> Level 1
      </p>
      <p class="text-sm text-slate-500 mt-1 flex items-center gap-1.5">
        <i data-lucide="users" class="w-3.5 h-3.5"></i> Capacity 6
      </p>
      <div class="mt-4 flex flex-wrap gap-2">
        <span class="text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 px-2.5 py-1 rounded-md">Whiteboard</span>
        <span class="text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 px-2.5 py-1 rounded-md">Display</span>
      </div>
      <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-navy-900 group-hover:text-blue-700 transition-colors duration-200">
        View Room <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>

    <div class="group bg-white border border-slate-100 rounded-2xl p-6 card-shadow hover:card-shadow-lg transition-shadow duration-300">
      <div class="flex items-start justify-between">
        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
          <i data-lucide="tv" class="w-5.5 h-5.5 text-blue-700"></i>
        </div>
        <span class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full">Available</span>
      </div>
      <h3 class="mt-5 font-bold text-navy-900 text-lg">Discussion Room 02</h3>
      <p class="text-sm text-slate-500 mt-1 flex items-center gap-1.5">
        <i data-lucide="map-pin" class="w-3.5 h-3.5"></i> Level 2
      </p>
      <p class="text-sm text-slate-500 mt-1 flex items-center gap-1.5">
        <i data-lucide="users" class="w-3.5 h-3.5"></i> Capacity 8
      </p>
      <div class="mt-4 flex flex-wrap gap-2">
        <span class="text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 px-2.5 py-1 rounded-md">Smart TV</span>
        <span class="text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 px-2.5 py-1 rounded-md">Whiteboard</span>
      </div>
      <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-navy-900 group-hover:text-blue-700 transition-colors duration-200">
        View Room <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>

    <div class="group bg-white border border-slate-100 rounded-2xl p-6 card-shadow hover:card-shadow-lg transition-shadow duration-300">
      <div class="flex items-start justify-between">
        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
          <i data-lucide="presentation" class="w-5.5 h-5.5 text-blue-700"></i>
        </div>
        <span class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full">Available</span>
      </div>
      <h3 class="mt-5 font-bold text-navy-900 text-lg">Meeting Room A</h3>
      <p class="text-sm text-slate-500 mt-1 flex items-center gap-1.5">
        <i data-lucide="map-pin" class="w-3.5 h-3.5"></i> Level 3
      </p>
      <p class="text-sm text-slate-500 mt-1 flex items-center gap-1.5">
        <i data-lucide="users" class="w-3.5 h-3.5"></i> Capacity 12
      </p>
      <div class="mt-4 flex flex-wrap gap-2">
        <span class="text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 px-2.5 py-1 rounded-md">Projector</span>
        <span class="text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 px-2.5 py-1 rounded-md">Video Conference</span>
      </div>
      <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-navy-900 group-hover:text-blue-700 transition-colors duration-200">
        View Room <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>

  </div>
</section>

<!-- SCHEDULE / CALENDAR PREVIEW -->
<section id="schedule" class="bg-slate-50 border-y border-slate-100">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <span class="text-xs font-semibold text-blue-700 uppercase tracking-wide">Schedule</span>
        <h2 class="mt-2 text-3xl font-extrabold text-navy-900 tracking-tight">See the Week at a Glance</h2>
        <p class="mt-3 text-slate-600 leading-relaxed max-w-md">
          A clear weekly view of every booking, so you always know which rooms are free and when.
        </p>
        <a href="#" class="mt-7 inline-flex items-center gap-2 bg-navy-900 hover:bg-blue-800 text-white font-semibold px-5 py-3 rounded-xl transition-colors duration-200">
          <i data-lucide="calendar-days" class="w-4 h-4"></i>
          View Full Schedule
        </a>
      </div>

      <div class="bg-white rounded-2xl card-shadow-lg border border-slate-100 p-5 sm:p-6">
        <div class="grid grid-cols-5 gap-2 text-center mb-4">
          <div class="text-xs font-semibold text-slate-400">Mon</div>
          <div class="text-xs font-semibold text-slate-400">Tue</div>
          <div class="text-xs font-semibold text-slate-400">Wed</div>
          <div class="text-xs font-semibold text-slate-400">Thu</div>
          <div class="text-xs font-semibold text-slate-400">Fri</div>
        </div>
        <div class="grid grid-cols-5 gap-2">
          <div class="space-y-2">
            <div class="bg-blue-50 border border-blue-100 rounded-lg px-2 py-2">
              <p class="text-[11px] font-semibold text-blue-700">10:00</p>
              <p class="text-[11px] text-slate-600 leading-tight">Discussion Room 01</p>
            </div>
          </div>
          <div class="space-y-2">
            <div class="h-16 border border-dashed border-slate-100 rounded-lg"></div>
          </div>
          <div class="space-y-2">
            <div class="bg-indigo-50 border border-indigo-100 rounded-lg px-2 py-2">
              <p class="text-[11px] font-semibold text-indigo-700">14:00</p>
              <p class="text-[11px] text-slate-600 leading-tight">Meeting Room A</p>
            </div>
          </div>
          <div class="space-y-2">
            <div class="bg-blue-50 border border-blue-100 rounded-lg px-2 py-2">
              <p class="text-[11px] font-semibold text-blue-700">09:00</p>
              <p class="text-[11px] text-slate-600 leading-tight">Discussion Room 02</p>
            </div>
          </div>
          <div class="space-y-2">
            <div class="h-16 border border-dashed border-slate-100 rounded-lg"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section id="how-it-works" class="max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">
  <div class="max-w-xl mb-14">
    <span class="text-xs font-semibold text-blue-700 uppercase tracking-wide">How It Works</span>
    <h2 class="mt-2 text-3xl font-extrabold text-navy-900 tracking-tight">Book in Three Simple Steps</h2>
  </div>

  <div class="grid sm:grid-cols-3 gap-8">
    <div class="relative">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-11 h-11 rounded-xl bg-navy-900 text-white flex items-center justify-center font-bold text-sm">1</div>
        <i data-lucide="door-open" class="w-6 h-6 text-blue-700"></i>
      </div>
      <h3 class="font-bold text-navy-900 text-lg">Choose a Room</h3>
      <p class="text-sm text-slate-600 mt-1.5">Browse rooms by location and capacity.</p>
    </div>
    <div class="relative">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-11 h-11 rounded-xl bg-navy-900 text-white flex items-center justify-center font-bold text-sm">2</div>
        <i data-lucide="clock" class="w-6 h-6 text-blue-700"></i>
      </div>
      <h3 class="font-bold text-navy-900 text-lg">Select Date &amp; Time</h3>
      <p class="text-sm text-slate-600 mt-1.5">Pick a slot that fits your schedule.</p>
    </div>
    <div class="relative">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-11 h-11 rounded-xl bg-navy-900 text-white flex items-center justify-center font-bold text-sm">3</div>
        <i data-lucide="check-circle-2" class="w-6 h-6 text-blue-700"></i>
      </div>
      <h3 class="font-bold text-navy-900 text-lg">Confirm Booking</h3>
      <p class="text-sm text-slate-600 mt-1.5">Get instant confirmation and details.</p>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="bg-navy-950 text-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <div>
        <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center mb-4">
          <i data-lucide="radar" class="w-5 h-5 text-cyan-400"></i>
        </div>
        <h3 class="font-semibold text-white">Real-time Availability</h3>
        <p class="text-sm text-slate-400 mt-1.5">Always see up-to-date room status.</p>
      </div>
      <div>
        <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center mb-4">
          <i data-lucide="mouse-pointer-click" class="w-5 h-5 text-cyan-400"></i>
        </div>
        <h3 class="font-semibold text-white">Easy Booking</h3>
        <p class="text-sm text-slate-400 mt-1.5">Reserve a room in just a few clicks.</p>
      </div>
      <div>
        <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center mb-4">
          <i data-lucide="calendar-range" class="w-5 h-5 text-cyan-400"></i>
        </div>
        <h3 class="font-semibold text-white">Clear Schedule</h3>
        <p class="text-sm text-slate-400 mt-1.5">View bookings across the week at a glance.</p>
      </div>
      <div>
        <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center mb-4">
          <i data-lucide="info" class="w-5 h-5 text-cyan-400"></i>
        </div>
        <h3 class="font-semibold text-white">Room Information</h3>
        <p class="text-sm text-slate-400 mt-1.5">Capacity and facilities before you book.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-24">
  <div class="bg-gradient-to-br from-navy-900 to-blue-800 rounded-3xl px-8 sm:px-14 py-14 sm:py-16 text-center card-shadow-lg">
    <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Need a space for your next discussion?</h2>
    <p class="mt-3 text-blue-100 max-w-md mx-auto">Check room availability now and secure your spot in seconds.</p>
    <a href="#search" class="mt-8 inline-flex items-center gap-2 bg-white text-navy-900 font-semibold px-7 py-3.5 rounded-xl hover:bg-blue-50 transition-colors duration-200">
      <i data-lucide="search" class="w-4 h-4"></i>
      Find a Room
    </a>
  </div>
</section>

<!-- FOOTER -->
<footer class="border-t border-slate-100">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-navy-900 to-blue-700 flex items-center justify-center">
          <i data-lucide="calendar-check" class="w-4.5 h-4.5 text-white"></i>
        </div>
        <div>
          <p class="text-sm font-bold text-navy-900">RoomBook</p>
          <p class="text-xs text-slate-500">Discussion Room Booking System</p>
        </div>
      </div>

      <div class="flex gap-6 text-sm text-slate-500">
        <a href="#rooms" class="hover:text-navy-900 transition-colors duration-200">Rooms</a>
        <a href="#schedule" class="hover:text-navy-900 transition-colors duration-200">Schedule</a>
        <a href="#how-it-works" class="hover:text-navy-900 transition-colors duration-200">Booking Guide</a>
      </div>
    </div>

    <div class="mt-8 pt-6 border-t border-slate-100 text-xs text-slate-400">
      &copy; 2026 RoomBook. All rights reserved.
    </div>
  </div>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    lucide.createIcons();
  });
</script>

</body>
</html>