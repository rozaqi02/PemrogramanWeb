$(document).ready(function() {
    $('#upload-form').submit(function(e){  // Fungsi dijalankan saat ada formulir dengan ID "upload-form"
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,

            success: function(response){  // Fungsi dieksekusi aoabila permintaan berhasil
                $('#status').html(response);
            },

            error: function() {  // Fungsi dieksekusi jika ada kesalahan
                $('#status').html('Terjadi kesalahan saat mengunggah file.'); // Menampilkan pesan kesalahan
            }
        });
    });
});