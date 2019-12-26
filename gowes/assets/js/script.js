var status;
// start form tambah

var save_method; //for save method string
var table;
$(document).ready(function () {
    $('#dataTable').DataTable();
});

// tampil modal
$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('title') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text(recipient)
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
    console.log(harga);
    console.log(harga != null);
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

// end form tambah