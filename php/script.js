function updateStatus(event, transaksiId) {
    event.preventDefault();

    // Ambil nilai status yang dipilih
    const newStatus = document.querySelector(`#updateStatusForm select[name="new_status"]`).value;

    // Kirim permintaan pembaruan status ke server (gunakan AJAX atau fetch API)
    // Disini kita hanya menampilkan alert sebagai contoh
    alert(`Mengubah status transaksi ${transaksiId} menjadi ${newStatus}`);

    // Redirect pengguna ke halaman yang sesuai
    if (newStatus === 'selesai') {
        window.location.href = '../html/services/agenTelahTiba.php';
    } else {
        window.location.href = '../html/services/agenBerangkat.php';
    }
}