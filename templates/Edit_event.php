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
              <a href="/templates/Request_to_join.php" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 transition">
                รายชื่อขอเข้าร่วม
              </a>
            </li>
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
      <h1 class="text-center text-xl font-medium text-gray-800 mb-4">แก้ไขกิจกรรม</h1>

      <!-- Content Card -->
      <div class="bg-bg-card rounded-2xl w-full p-6 mb-2">
        <div class="flex flex-col items-center gap-5">

          <!-- กรอบอัพรูป -->
          <div
            class="w-full max-w-md h-56 border-4 border-dashed border-white/60 rounded-2xl flex flex-col items-center justify-center cursor-pointer hover:bg-white/20 transition bg-white/10"
            onclick="document.getElementById('imageInput').click()"
            id="uploadBox"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white/70 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5V19a2 2 0 002 2h14a2 2 0 002-2v-2.5M16 10l-4-4m0 0L8 10m4-4v12" />
            </svg>
            <p class="text-white/80 text-sm font-medium">คลิกเพื่ออัพโหลดรูปภาพ</p>
            <p class="text-white/50 text-xs mt-1">PNG, JPG ขนาดไม่เกิน 5MB</p>
            <input type="file" id="imageInput" accept="image/*" class="hidden" onchange="previewImage(event)" />
          </div>

          <!-- Preview รูป -->
          <img id="previewImg" class="hidden w-full max-w-md h-56 object-cover rounded-2xl shadow-md cursor-pointer" onclick="document.getElementById('imageInput').click()" />

          <!-- ฟอร์ม -->
          <div class="w-full max-w-md flex flex-col gap-4">

            <!-- ชื่อกิจกรรม -->
            <div>
              <label class="block text-white font-medium mb-1 text-sm">ชื่อกิจกรรม</label>
              <input
                type="text"
                placeholder="กรอกชื่อกิจกรรม..."
                class="w-full px-4 py-3 rounded-xl outline-none text-gray-700 text-sm bg-white shadow-sm focus:ring-2 focus:ring-white/60 transition"
              />
            </div>

            <!-- รายละเอียดกิจกรรม -->
            <div>
              <label class="block text-white font-medium mb-1 text-sm">รายละเอียดกิจกรรม</label>
              <textarea
                placeholder="อธิบายรายละเอียดกิจกรรม..."
                rows="3"
                class="w-full px-4 py-3 rounded-xl outline-none text-gray-700 text-sm bg-white shadow-sm focus:ring-2 focus:ring-white/60 transition resize-none"
              ></textarea>
            </div>

            <!-- วันที่และเวลา -->
            <div class="grid grid-cols-2 gap-3">
              <div>
                <label class="block text-white font-medium mb-1 text-sm">วันที่</label>
                <input
                  type="date"
                  class="w-full px-4 py-3 rounded-xl outline-none text-gray-700 text-sm bg-white shadow-sm focus:ring-2 focus:ring-white/60 transition"
                />
              </div>
              <div>
                <label class="block text-white font-medium mb-1 text-sm">เวลา</label>
                <input
                  type="time"
                  class="w-full px-4 py-3 rounded-xl outline-none text-gray-700 text-sm bg-white shadow-sm focus:ring-2 focus:ring-white/60 transition"
                />
              </div>
            </div>

            <!-- สถานที่
            <div>
              <label class="block text-white font-medium mb-1 text-sm">สถานที่</label>
              <input
                type="text"
                placeholder="กรอกสถานที่จัดกิจกรรม..."
                class="w-full px-4 py-3 rounded-xl outline-none text-gray-700 text-sm bg-white shadow-sm focus:ring-2 focus:ring-white/60 transition"
              />
            </div> -->

            <!-- ปุ่มบันทึก -->
            <button
              onclick="saveEvent()" 
              class="w-full py-3 bg-primary-light text-white font-semibold rounded-xl hover:opacity-90 active:scale-95 transition shadow-md"
            >
              บันทึกกิจกรรม
            </button>
          <!-- code  onclick="saveEvent()"  หรือcode ด้านบนcodeนี้ไปอยู่ใน routesนะ--> 
          </div>
        </div>
      </div>
    </div>

  </div>

  <script>
    function toggleDropdown() {
      document.getElementById('dropdown').classList.toggle('hidden');
    }

    document.addEventListener('click', function(e) {
      const menu = document.getElementById('userMenu');
      if (!menu.contains(e.target)) {
        document.getElementById('dropdown').classList.add('hidden');
      }
    });

    function previewImage(event) {
      const file = event.target.files[0];
      if (!file) return;
      const reader = new FileReader();
      reader.onload = function(e) {
        const preview = document.getElementById('previewImg');
        const uploadBox = document.getElementById('uploadBox');
        preview.src = e.target.result;
        preview.classList.remove('hidden');
        uploadBox.classList.add('hidden');
      };
      reader.readAsDataURL(file);
    }

    // function saveEvent() {
    //   alert('บันทึกกิจกรรมเรียบร้อย!'); ควรไปอยู้ให้ route ที่จะบันทึกข้อมูลจริงๆ ไม่ใช่แค่ alert
    // }
  </script>

</body>
</html>