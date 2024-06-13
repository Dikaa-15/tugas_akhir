const menuToggle = document.querySelector('.menu-toogle input');
const nav = document.querySelector('nav ul, button');

menuToggle.addEventListener('click', function(){
    nav.classList.toggle('slide');
})

console.log('ok');


/// ambil element yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');


/// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function(){
    alert('ok');
});