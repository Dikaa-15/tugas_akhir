<?php

require '../keranjang/koneksi.php';

$jenis = mysqli_query($conn, "SELECT * FROM item");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- navbar -->
<section>

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
</section>

      <section>

          <!-- 
                  <nav class=" w-[100%] mt-[-10px] h-96 bg-green-500 grid col-2 col-sm-12">
                      <ul class="sidebar fixed">
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
                      </ul>
                      <ul class="mt[-50px] mb-">
                        <li><a href="#"><img src="../Image/dunx..png" alt="" style="width:120px; height:120px;" class="mt-10 ml"></a></li>
                        <li class="hideOnMobile"><a href="#" class=" font-sans text-white  transition-all duration-300 text-xl">Blog</a></li>
                        <li class="hideOnMobile"><a href="#" class=" font-sans text-white  transition-all duration-300 text-xl">Products</a></li>
                        <li class="hideOnMobile"><a href="#" class=" font-sans text-white  transition-all duration-300 text-xl">About</a></li>
                        <li class="hideOnMobile"><a href="/TUGAS AKHIR/keranjang/keranjang-belanja.php"><img src="..//picture/cart-removebg-preview.png" alt="" class="w-10 h-10 mt-0"></a></li>
                        <li class="hideOnMobile"><img src="..//picture/profil-removebg-preview.png" alt="" class="w-10 h-10 mt-5 ml-16 mr-20"></li>
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
                  <div class="flex justify-around mt-5">
                      <div class="mt-10 col-sm-12">
                          <h1 class="ml-20 mr-20 mb-3 font-bold font-sans pl-10  px-2 py-2 text-white">Running Shoes</h1>
                          <p class="text-zinc-100 font-semibold flex ">Mulai cari sepatu-sepatu yang keren dan menarik <br class="text-center">Cek Sekarang
                          </p>
                          <div class="group">
                              <button class="bg-white font-semibold transition-all duration-300 active:rounded-xl group-hover:scale-110 group-hover:-translate-y-2 px-4 py-2 ml-24 mt-7 shadow-lg shadow-zinc-50/50">Cari Sekarang!</button>
                          </div>
                      </div>
                    <div class="w-64">
                        <img src="..//Image/hero.png" alt="" class="drop-shadow-xl drop-shadow-cyan-300">
                    </div>
                  </div> -->
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#22c55e" fill-opacity="1" d="M0,192L60,170.7C120,149,240,107,360,96C480,85,600,107,720,138.7C840,171,960,213,1080,197.3C1200,181,1320,107,1380,69.3L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>      -->
                       <!-- <script>
                      function showSidebar() {
                        const sidebar = document.querySelector(".sidebar");
                        sidebar.style.display = "flex";
                      }
                      function hideSidebar() {
                        const sidebar = document.querySelector(".sidebar");
                        sidebar.style.display = "none";
                      }
                    </script> -->
      </section>
    
        <!-- Navbar End -->

        <!-- product -->
        <section>
        <h1 class="text-xl font-semibold font-sans ml-28 hover:underline decoration-blue-500 "><a href="">Product</a> ></h1>
         <div class="flex justify-evenly mb-40 mr-2 sm:flex-wrap md:flex-wrap xl:justify-evenly mx-14 mt-28 ">
            <?php foreach($jenis as $data) : ?>
              <div
                  class="w-32 h-96 bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
                  <a href="..//detail/index.php"><img src="../Image/<?= $data["foto"] ?>" alt=""
                          class="h-52 mx-auto rounded-lg sm:w-full"></a>
                  <div class="box-title w-full h-full p-2">
                      <h4 class="text-md text-slate-600 font-bold font-serif"><?= $data["sub_judul"] ?></h4>
                      <h3 class="text-slate-900 text-xl font-semibold py-1"><?= $data["harga"] ?></h3>
                     
              </div>
              </div>
            <?php endforeach; ?>  
     </section>
</body>
</html>