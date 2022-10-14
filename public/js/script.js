$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#formModalLabel').html('Tambah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Tambah Data')


    })
    $('.tampilModalUbah').on('click', function () {
        $('#formModalLabel').html('Ubah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Ubah Data')
        $('.modal-body form').attr('action', 'http://localhost/mvcphp/public/mahasiswa/ubah')


        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/mvcphp/public/mahasiswa/getubah',
            data: { id: id }, // id yang sebelah kiri nama adalah data yang di kirimkan, dan yang sbelah kanan isi datanya
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        })

    })

})