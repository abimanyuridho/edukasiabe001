function validasiFormKonsultasi() {
    // Mengambil nilai dari input form
    var nama = document.getElementById("nama").value.trim();
    var email = document.getElementById("email").value.trim();
    var telepon = document.getElementById("telepon").value.trim();
    var pesan = document.getElementById("pesan").value.trim();

    // Reset teks error sebelumnya
    document.getElementById("err-nama").innerText = "";
    document.getElementById("err-email").innerText = "";
    document.getElementById("err-telepon").innerText = "";
    document.getElementById("err-pesan").innerText = "";

    var valid = true;

    // 1. Validasi Nama
    if (nama === "") {
        document.getElementById("err-nama").innerText = "Nama lengkap wajib diisi.";
        valid = false;
    } else if (nama.length < 3) {
        document.getElementById("err-nama").innerText = "Nama minimal terdiri dari 3 karakter.";
        valid = false;
    }

    // 2. Validasi Email
    if (email === "") {
        document.getElementById("err-email").innerText = "Alamat email wajib diisi.";
        valid = false;
    } else if (email.indexOf("@") === -1 || email.indexOf(".") === -1) {
        document.getElementById("err-email").innerText = "Format email tidak valid (harus mengandung @ dan titik).";
        valid = false;
    }

    // 3. Validasi Nomor Telepon
    if (telepon === "") {
        document.getElementById("err-telepon").innerText = "Nomor telepon/WhatsApp wajib diisi.";
        valid = false;
    } else if (isNaN(telepon)) {
        document.getElementById("err-telepon").innerText = "Nomor telepon hanya boleh berisi angka.";
        valid = false;
    } else if (telepon.length < 10 || telepon.length > 14) {
        document.getElementById("err-telepon").innerText = "Nomor telepon harus antara 10 sampai 14 digit.";
        valid = false;
    }

    // 4. Validasi Pesan
    if (pesan === "") {
        document.getElementById("err-pesan").innerText = "Silakan tuliskan keluhan atau pertanyaan Anda.";
        valid = false;
    } else if (pesan.length < 10) {
        document.getElementById("err-pesan").innerText = "Pesan terlalu singkat, minimal 10 karakter.";
        valid = false;
    }

    // Jika semua valid, tampilkan konfirmasi
    if (valid) {
        alert("Terima kasih " + nama + ", data konsultasi Anda sedang dikirim.");
    }

    return valid;
}
