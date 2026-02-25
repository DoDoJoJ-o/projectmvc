<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>กิจกรรม</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'primary-light': '#0b3770',
            'bg-main': '#77a3cc',
            'bg-card': '#84b5ec',
            'bg-outer': '#2C2C2C',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-bg-outer min-h-screen flex flex-col">

  <!-- Browser Window -->
  <div class="bg-bg-main flex flex-col flex-1 w-full">

    <!-- Navbar -->
    <div class="bg-primary-light px-5 py-3 flex items-center justify-between gap-4">

      <!-- Home Icon -->
      <button class="text-white hover:opacity-80 transition flex-shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 9.75L12 3l9 6.75V21a1 1 0 01-1 1H15v-5H9v5H4a1 1 0 01-1-1V9.75z" />
        </svg>
      </button>

      <!-- Search Bar -->
      <div class="flex-1 max-w-md">
        <div class="bg-white rounded-full flex items-center px-4 py-2 gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11A6 6 0 105 11a6 6 0 0012 0z" />
          </svg>
          <input type="text" placeholder="ค้นหา..." class="flex-1 outline-none text-sm text-gray-600 bg-transparent" />
        </div>
      </div>

      <!-- User Icon with Dropdown -->
      <div class="relative flex-shrink-0" id="userMenu">
        <button onclick="toggleDropdown()" class="text-white hover:opacity-80 transition">
          <div class="w-9 h-9 bg-white rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
            </svg>
          </div>
        </button>

        <!-- Dropdown Menu -->
        <div id="dropdown" class="hidden absolute right-0 mt-2 w-44 bg-white rounded-xl shadow-lg z-50 overflow-hidden">
          <ul class="text-sm text-gray-700">
            <li>
              <a href="/templates/Personal_information.php" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                </svg>
                ข้อมูลส่วนตัว
              </a>
            </li>
            <li>
              <a href="/templates/Myevent.php" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 transition">
                กิจกรรมของฉัน
              </a>
            </li>
            <li>
              <a href="/templates/Create_event.php" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 transition">
                สร้างกิจกรรม
              </a>
            </li>
            <li>
              <a href="/templates/Edit_event.php" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 transition">
                แก้ไขกิจกรรม
              </a>
            </li>
            <li>
              <a href="/templates/Joined_event.php" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 transition">
                กิจกรรมที่เข้าร่วม
              </a>
            </li>
            <li>
              <a href="/templates/Request_to_join_event.php" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 transition">
                รายชื่อขอเข้าร่วม
              </a>
            </li>
            <!-- <li>
              <a href="#" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                ตั้งค่า
              </a>
            </li> -->
            <li class="border-t border-gray-100">
              <a href="#" class="flex items-center gap-2 px-4 py-3 hover:bg-red-50 text-red-500 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                ออกจากระบบ
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Page Content -->
    <div class="p-6 flex flex-col flex-1">
      <h1 class="text-center text-xl font-medium text-gray-800 mb-4">กิจกรรม</h1>

      <!-- Content Card -->
      <div class="bg-bg-card rounded-2xl flex-1 w-full">
        <!-- Empty content area -->
      </div>
    </div>

  </div>

  <script>
    function toggleDropdown() {
      document.getElementById('dropdown').classList.toggle('hidden');
    }

    // ปิด dropdown เมื่อคลิกที่อื่น
    document.addEventListener('click', function(e) {
      const menu = document.getElementById('userMenu');
      if (!menu.contains(e.target)) {
        document.getElementById('dropdown').classList.add('hidden');
      }
    });
  </script>

</body>
</html>