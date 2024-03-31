$(document).ready(function () {
  $(".tombolTambahData").on("click", function () {
    $("#judulmodal").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Save Data");
  });
  $(".tombolUbahData").on("click", function () {
    $("#judulmodal").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/php-mvc-example/public/mahasiswa/ubah"
    );
    const id = $(this).data("id");
    // console.log(id);
    $.ajax({
      url: "http://localhost/php-mvc-example/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "JSON",
      success: function (data) {
        // console.log(data);
        // console.log(typeof data);
        // console.log(data.id);
        // console.log(data["username"]);
        // console.log(data.email);
        // console.log(data.jurusan);
        $("#username").val(data.username);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
