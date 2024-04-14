$(document).ready(function() {
    $("#tanggal_mulai, #tanggal_selesai").change(function() {
        var tanggal_mulai = $("#tanggal_mulai").val();
        var tanggal_selesai = $("#tanggal_selesai").val();

        if (tanggal_mulai > tanggal_selesai) {
            alert("Tanggal mulai tidak boleh lebih besar dari tanggal selesai!");
        }
    });
});

$(document).ready(function() {
    $("#leaveForm").submit(function(event) {
        var nimValue = $("#nim").val();

        if (!(/^\d+$/.test(nimValue)) || nimValue.length !== 10) {
            alert("NIM harus terdiri dari 10 angka.");
            event.preventDefault();
        }
    });
});
