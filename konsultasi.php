<?php 
include 'header.php'; 

// Proses sederhana menangkap data saat tombol kirim ditekan
$terkirim = false;
$nama_pengirim = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pengirim = htmlspecialchars($_POST['nama']);
    $terkirim = true;
}
?>

<h2>Formulir Konsultasi & Permintaan Informasi</h2>
<p>Jika Anda memiliki pertanyaan seputar gejala, pemeriksaan, atau edukasi pencegahan penyakit sifilis, silakan isi formulir di bawah ini. Identitas Anda dijaga kerahasiaannya.</p>

<?php if ($terkirim): ?>
    <div class="pesan-sukses">
        <strong>Pesan Berhasil Terkirim!</strong><br>
        Terima kasih Saudara/i <strong><?= $nama_pengirim; ?></strong>. Pertanyaan Anda telah kami terima dan akan segera ditindaklanjuti oleh tim edukasi kesehatan kami melalui email atau nomor telepon yang terdaftar.
    </div>
<?php endif; ?>

<form action="konsultasi.php" method="POST" onsubmit="return validasiFormKonsultasi()">
    <div class="grup-form">
        <label for="nama">Nama Lengkap *</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda">
        <span id="err-nama" class="pesan-error"></span>
    </div>

    <div class="grup-form">
        <label for="email">Alamat Email *</label>
        <input type="text" id="email" name="email" placeholder="Contoh: nama@email.com">
        <span id="err-email" class="pesan-error"></span>
    </div>

    <div class="grup-form">
        <label for="telepon">Nomor Telepon / WhatsApp *</label>
        <input type="text" id="telepon" name="telepon" placeholder="Contoh: 081234567890">
        <span id="err-telepon" class="pesan-error"></span>
    </div>

    <div class="grup-form">
        <label for="pesan">Pertanyaan atau Keluhan *</label>
        <textarea id="pesan" name="pesan" rows="5" placeholder="Tuliskan pertanyaan atau informasi yang ingin Anda ketahui..."></textarea>
        <span id="err-pesan" class="pesan-error"></span>
    </div>

    <button type="submit" class="tombol">Kirim Konsultasi</button>
</form>

<?php include 'footer.php'; ?>
