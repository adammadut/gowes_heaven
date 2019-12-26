var status;
// start form tambah

var save_method; //for save method string
var table;
var base_url = "http://localhost/gowes-heaven/";
$(document).ready(function () {
    $('#dataTable').DataTable();
});

function editForm() {

}

// tampil modal
$('#formModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title');
    var idparent = document.getElementById('idparent');
    console.log(idparent.childElementCount);

    console.log('ini tanpa tanda seru' + document.getElementById('idparent').hasChildNodes());
    console.log('ini ditambah tanda seru' + !(document.getElementById('idparent').hasChildNodes()));

    if (title == 'Edit Produk') {
        var form = document.getElementById('form');
        form.setAttribute('action', base_url + 'admin/edit/' + button.data('idproduk'));
        $('#idproduk').val(button.data('idproduk'));
        $('#nama').val(button.data('nama'));
        $('#kategori').val(button.data('kategori'));
        $('#deskripsi').val(button.data('deskripsi'));
        $('#harga').val(button.data('harga'));
        document.getElementById('image').setAttribute('value', base_url + button.data('gambar'));
        // $('#image').setAttribute('value', 'abcd');
        $('#image').next('.custom-file-label').html(button.data('gambar'));
        $('#btnSave').html('Simpan');
    } else {
        console.log('masuk remove child nih');
        var idform = document.getElementById('idproduk');
        idform.parentNode.removeChild(idform);
    }

    console.log(idparent.childElementCount);
    var modal = $(this);
    modal.find('.modal-title').text(title);
});

$('#formModal').on('hidden.bs.modal', function () {
    var idparent = document.getElementById('idparent');
    if (idparent.childElementCount == 0) {
        console.log('masuk sini slur, has child true');
        var para = document.createElement('input');
        para.setAttribute('name', 'id');
        para.setAttribute('hidden', true);
        para.setAttribute('id', 'idproduk');
        idparent.appendChild(para);
    } else {
        console.log('masuk else pas tambah child, has child false');
    }
});

// ganti 'choose file....' di upload gambar
$('#image').on('change', function () {
    //get the file name
    var fileName = $(this).val();
    var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(cleanFileName);
});

function validasiKategori() {
    var sel = document.getElementById("kategori");
    var opt = sel.selectedIndex;
    var inputKategori = document.getElementById("inputKategori");

    if (opt == 0) {
        inputKategori.style.display = "block";
    } else {
        inputKategori.style.display = "none";
    }
};

function validasiHarga() {
    var harga = document.getElementById("harga").value;
    var inputHarga = document.getElementById("inputHarga");
    var btnSave = document.getElementById("btnSave");
    if (isNaN(harga)) {
        inputHarga.style.display = "block";
        btnSave.setAttribute('disabled', 'true');
        return true;
    } else {
        inputHarga.style.display = "none";
        btnSave.removeAttribute('disabled');
    }
};

function validasi() {
    var statusHarga;
    var statusKategori;
    var harga = document.getElementById("harga").value;
    var sel = document.getElementById("kategori");
    var opt = sel.selectedIndex;
    var inputKategori = document.getElementById("inputKategori");
    if (harga != "") {
        if (isNaN(harga)) {
            inputHarga.style.display = "block";
            statusHarga = false;
        } else {
            inputHarga.style.display = "none";
            statusHarga = true;
        }
    }

    if (opt == 0) {
        inputKategori.style.display = "block";
        statusKategori = false;
    } else {
        inputKategori.style.display = "none";
        statusKategori = true;
    }

    if (statusHarga && statusKategori) {
        btnSave.removeAttribute('disabled');
    } else {
        btnSave.setAttribute('disabled', 'true');
    }
}

function editModal() {

}

function save() {
    var formData = new FormData($('#form')[0]);
    var url = base_url.concat('admin/tambah');
    console.log(url);
    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            console.log(data);
            Swal.fire({
                title: 'Success!',
                text: 'Data berhasil ditambahkan',
                icon: 'success',
                confirmButtonText: 'Cool'
            })
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);

        }
    })


}

// end form tambah