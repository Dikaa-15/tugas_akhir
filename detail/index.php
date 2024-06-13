<!-- <?php

// require '..//function.php';

// if(isset($_POST["tambah"])){
//     if(tambah($_POST) > 0 ){
//         echo "
//         <script type='text/javascript'>
//         alert('Data produk berhasil ditambahlkan');
//         window.location = 'index.php'
//         </script>"
//         ;
//     }else{
//         echo "
//         <script type='text/javascript'>
//         alert('Data produk gagal ditambahlkan');
//         window.location = 'index.php'
//         </script>";
//     }
// }






?> -->



<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dunx.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"rel="stylesheet">
    <link rel="icon" type="png" href="..//Image/logo.jpg" class="rounded-[50%]">
    <style>
        
*{
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 400;
}
body{
  min-height: 100vh;
  background: url('laptop.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
nav{
  background-color: white;
  box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
}
nav ul{
  width: 100%;
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
}
nav li{
  height: 75px;
}
nav a{
  height: 100%;
  padding: 0 60px;
  text-decoration: none;
  display: flex;
  align-items: center;
  color: black;
}
nav a:hover{
  background-color: #f0f0f0;
}
nav li:first-child{
  margin-right: auto;
}
.sidebar{
  position: fixed;
  top: 0; 
  right: 0;
  height: 25vh;
  width: 250px;
  background-color: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(12px);
  box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
  list-style: none;
  display: none;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.sidebar li{
  width: 100%;
}
.sidebar a{
  width: 100%;
}
.menu-button{
  display: none;
}
@media(max-width: 800px){
  .hideOnMobile{
    display: none;
  }
  .menu-button{
    display: block;
  }
}
@media(max-width: 400px){
  .sidebar{
    width: 100%;
  }
}
    </style>
</head>

<body>
   
    <nav class="fixed top-0 w-[100%] shadow-xl">
        <ul class="sidebar">
          <li onclick="hideSidebar()">
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                height="26"
                viewBox="0 96 960 960"
                width="26"
              >
                <path
                  d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"
                /></svg
            ></a>
          </li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Cart</a></li>
          <li><a href="#">Login</a></li>
        </ul>
        <ul>
          <li><a href="#"><img src="..//Image/dunx..png" alt="" style="width:100px; height:100px;"></a></li>
          <li class="hideOnMobile"><a href="..//landingpage/landing-page.php" class="hover:text-green-500">Home</a></li>
          <li class="hideOnMobile"><a href="#" class="hover:text-green-500">Products</a></li>
          <li class="hideOnMobile"><a href="#" class="hover:text-green-500">About</a></li>
          <li class="hideOnMobile"><img src="..//picture/shopping-cart.png" alt="" class="w-8 h-8 mt-5"></li>
          <li class="hideOnMobile"><img src="..//Image/account_circle_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" class="w-10 h-10 mt-5 ml-16 mr-20"></li>
          <li class="menu-button" onclick="showSidebar()">
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                height="26"
                viewBox="0 96 960 960"
                width="26"
              >
                <path
                  d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"
                /></svg
            ></a>
          </li>
        </ul>
      </nav>
  
      <script>
        function showSidebar() {
          const sidebar = document.querySelector(".sidebar");
          sidebar.style.display = "flex";
        }
        function hideSidebar() {
          const sidebar = document.querySelector(".sidebar");
          sidebar.style.display = "none";
        }
      </script>


    <div class="container flex w-[800px] mx-auto mt-28 sm:flex-wrap md:flex-nowrap xl:flex-nowrap ">
        <!--gambar produk-->
        <div class="shadow-sm mr-10 -ml-28">
            <div class=" flex sm:flex-wrap sm:w-96 sm:ml-28 xl:w-48 xl:h-52 ">
                <img src="..//Image/running_shoes.png" alt="" class="w-auto mr-10">
            </div>

        </div>
        <div>
            <!--detail-->
            <div class="container mb-5 sm:w-full flex sm:flex-wrap sm:mt-5 sm:ml-10">
                <h1
                    class="font-bold text-black text-2xl sm:text-red-500 md:text-black selection:text-white selection:bg-green-500">
                    SEPATU BASKET KYRIE 7 WEATHERMAN GREEN ORIGINAL CQ9327-300</h1>
                <div class="flex mt-3">
                    <h3 class="mr-4">terjual <span class="text-gray-500">10</span></h3>
                    <img src="..//picture/star.png" alt="" class="w-5 h-5 mr-2 cursor-not-allowed">
                    <p class="mr-2">4</p>
                    <p class="text-gray-500">(15 rating)</p>
                </div>
                <h1 class="mt-6 text-3xl font-bold mb-10 sm:mt-20 sm:-ml-52">Rp195.000</h1>
                <hr class=" bg-gray-500mr-10">

                <h1
                    class="mt-5 text-1xl font-bold sm:mt-[-20px] sm:mr-[400px] selection:text-white selection:bg-green-500">
                    ukuran sepatu</h1>
                <div class="flex justify-evenly mt-5 mr-24 ">
                    <button
                        class="border rounded-lg px-3 py-2 hover:border-green-500 cursor-pointer xl:mr-3 active:border-solid active:border-green-600 focus:outline-none focus:border-green-500">36</button>
                    <button
                        class="border rounded-lg px-3 py-2 hover:border-green-500 cursor-pointer xl:mr-3 active:border-solid active:border-green-600 focus:outline-none focus:border-green-500">37</button>
                    <button
                        class="border rounded-lg px-3 py-2 hover:border-green-500 cursor-pointer xl:mr-3 active:border-solid active:border-green-600 focus:outline-none focus:border-green-500">38</button>
                    <button
                        class="border rounded-lg px-3 py-2 hover:border-green-500 cursor-pointer xl:mr-3 active:border-solid active:border-green-600 focus:outline-none focus:border-green-500">39</button>
                    <button
                        class="border rounded-lg px-3 py-2 hover:border-green-500 cursor-pointer xl:mr-3 active:border-solid active:border-green-600 focus:outline-none focus:border-green-500">40</button>
                    <button
                        class="border rounded-lg px-3 py-2 hover:border-green-500 cursor-pointer xl:mr-3 active:border-solid active:border-green-600 focus:outline-none focus:border-green-500">41</button>
                    <button
                        class="border rounded-lg px-3 py-2 hover:border-green-500 cursor-pointer xl:mr-3 active:border-solid active:border-green-600 focus:outline-none focus:border-green-500">42</button>
                    <button
                        class="border rounded-lg px-3 py-2 hover:border-green-500 cursor-pointer xl:mr-3 active:border-solid active:border-green-600 focus:outline-none focus:border-green-500">43</button>
                </div>

                <div class="flex mt-10">
                    <div
                        class="flex border border-green-500 mr-5 px-4 py-2 cursor-pointer sm:px-2 sm:py-1 transition hover:scale-110 hover:rounded-lg duration-300">
                        <a href=""><img src="..//picture/shopping-cart.png" alt=""
                                class="w-[18px] h-[18px] mr-3 mt-"></a>
                        <a href="/TUGAS AKHIR/keranjang/tambah.php">Masukan keranjang</a>
                    </div>

                    <div
                        class="bg-green-500 text-white px-16 py-2 cursor-pointer sm:px-6 sm:py-1 transition hover:scale-110 hover:duration-300 hover:rounded-lg duration-300">
                        beli sekarang</div>

                </div>
            </div>

        </div>
    </div>
    <hr>
    <!-- component -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <hr class="mb-10">
    <footer class="flex sm:flex-wrap md:flex-nowrap">
        <div class="bg-green-500 w-[500px] 2xl:w-full lg:w-full xl:w-full sm:w-full md:w-full">
            <img src="..//Image/logo.jpg" alt="" class="w-30 h-20 rounded-full ml-10 mt-20">
            <h3 class="ml-10 mt-5 text-white">Our startup must provide easy access and user-friendly <br> interface and
                will accept criticism &
                suggestions.</h3>
            <div class="flex ml-10 mt-5 text-white">
                <img src="..//picture/telephone.png" alt="" class="'w-5 h-5 bg-transparent">
                <p class="ml-3 mt-[-3px]">0895 3960 83939</p>
            </div>
            <div class="flex ml-10 mt-3 text-white mb-64">
                <img src="..//picture/mail.png" alt="" class="'w-5 h-5">
                <p class="ml-3 mt-[-3px]">dwiezy1509@gmail.com</p>
            </div>
        </div>
        <div class="bg-zinc-100 2xl:w-full xl:w-full sm:w-full md:w-full lg:w-full">
            <h1 class="mt-28 text-2xl font-bold ml-10">Addres</h1>
            <h3 class="ml-10 mt-10 text-gray-500">Jl. Abdul Muis No.44 1, RT.1/RW.8, Petojo Sel., Kecamatan Gambir, <br>
                Kota Jakarta Pusat, Daerah Khusus
                Ibukota Jakarta 10160</h3>
            <div class="flex ml-10 mt-5 text-gray-500">
                <img src="..//picture/calendar.png" alt="" class="'w-5 h-5">
                <p class="ml-3 mt-[-3px]">Open Monday-Saturday</p>
            </div>
            <div class="flex ml-10 mt-3 text-gray-500">
                <img src="..//picture/clock.png" alt="" class="'w-5 h-5">
                <p class="ml-3 mt-[-3px]">09:00 AM - 16:00 PM</p>
            </div>
        </div>
        <div class="bg-zinc-100 w-72 2xl:w-full xl:w-full sm:w-full md:w-full lg:w-full">
            <h1 class="mt-28 text-2xl font-bold ml-10">Contact US</h1>
            <div class="flex">
                <img src="..//picture/facebook.png" alt="" class="'w-8 h-8 ml-10 mt-12 cursor-pointer">
                <a href="https://www.instagram.com/duxx.sneakers?utm_source=qr&igsh=bDg4b2VwZW4ybDN4"><img
                        src="..//picture/instagram.png" alt="" class="'w-8 h-8 ml-10 mt-12 cursor-pointer"></a>
                <img src="..//picture/youtube.png" alt="" class="'w-8 h-8 ml-10 mt-12 cursor-pointer">
            </div>


        </div>
    </footer>

</body>
</html>