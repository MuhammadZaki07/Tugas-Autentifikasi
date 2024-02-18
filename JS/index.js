//UNPAS
function SettingForm() {
  var nama = document.getElementById("nama").value;
  var password = document.getElementById("password").value;
  var error_input = document.getElementById("error_input");
  var inputbtn = document.querySelector(".btn");

  //ini untuk memeriksa apakah input nama nya ksong
  if (nama.trim() === "") {
    error_input.innerText = "nama tidak boleh kosong Mas";
    return false; // Menahan pengiriman formulir jika input tidak valid
  }

  // ini untuk Memeriksa apakah input password nya kosong
  if (password.trim() === "") {
    error_input.innerText = "password tidak boleh kosong Mas";
    return false; // menonaktifkan/menahan pengiriman form jika input tidak di isii
  }

  // ini Mengosongkan pesan error jika inputnya benarr
  error_input.innerText = "";
  // ini Mengizinkan pengiriman jika inputnya valid
  return true;
}

// Memanggil fungsi updateButtonState() setiap kali ada perubahan pada input
document.getElementById("nama").addEventListener("input", updateButtonState);
document
  .getElementById("password")
  .addEventListener("input", updateButtonState);

// Fungsi untuk memperbarui status tombol
function updateButtonState() {
  var nama = document.getElementById("nama").value;
  var password = document.getElementById("password").value;
  var inputbtn = document.querySelector(".btn");

  // Mengaktifkan tombol dan mengubah tampilan jika kedua input telah ada isisnya
  if (nama.trim() !== "" && password.trim() !== "") {
    inputbtn.removeAttribute("disabled");
    inputbtn.style.backgroundColor = "green";
    inputbtn.style.cursor = "pointer";
  } else {
    // Menonaktifkan tombol dan mengubah tampilan jika salah satu input / kedua input kosong
    inputbtn.setAttribute("disabled", "disabled");
    inputbtn.style.backgroundColor = "#95b685";
    inputbtn.style.Color = "white";
    inputbtn.style.cursor = "not-allowed";
  }
}
function text_login() {
  alert("Apaaa Pencet Pencettt !!!!!!");
}
