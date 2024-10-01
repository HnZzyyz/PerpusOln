document.getElementById('nisn').onkeydown = function (evt) {
    if (evt.key == 'Tab') {
        let kode = document.getElementById('nisn').value
        axios.get(`/Transaksi/peminjaman/api/${kode}`)
            .then(hasil => {
                if (hasil.status === 200) {
                    let dataHasil = hasil.data
                    document.getElementById('nama').value = dataHasil.nama
                    document.getElementById('kode_kelas').value = dataHasil.kode_kelas
                    document.getElementById('error-kode').innerText = ""
                    const kodeBukuElem = document.getElementById('kode_buku');
                    if (kodeBukuElem) kodeBukuElem.focus(); // Cek null sebelum fokus
                } else {
                    throw new Error("Kesalahan dalam respons");
                }
            })
            .catch(err => {
                console.error(err);
                document.getElementById('nama').value = ""
                document.getElementById('kode_kelas').value = ""
                document.getElementById('error-kode').innerText = "Kode Tidak Ada !!"
            });
    }
}

document.getElementById('kode_buku').addEventListener('keydown', evt => {
    if (evt.key == 'Tab') {
        let kode_buku = document.getElementById('kode_buku').value
        axios.get(`/Transaksi/peminjaman/apis/${kode_buku}`)
            .then(hasil => {
                let dataHasil = hasil.data
                document.getElementById('judul_buku').value = dataHasil.judul
                document.getElementById('penulis').value = dataHasil.penulis
                document.getElementById('penerbit').value = dataHasil.penerbit
                document.getElementById('tahun_terbit').value = dataHasil.tahun_terbit
                document.getElementById('jumlah_buku').focus(); // Fokus ke input jumlah setelah input kode buku
            })
            .catch(err => {
                let pesan = "Kode Buku Tidak Ditemukan!!"
                alert(pesan)
                document.getElementById('judul_buku').value = ""
                document.getElementById('penulis').value = ""
                document.getElementById('penerbit').value = ""
                document.getElementById('tahun_terbit').value = ""
                document.getElementById('kode_buku').value = ""
                document.getElementById('kode_buku').focus()

            });
    }
})

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('jumlah').addEventListener('keydown', evt => {
        if (evt.key == 'Tab') {
            list_form.push({}); // Tambahkan elemen baru ke list_form
            tambahForm(); // Panggil function tambahForm saat di tab setelah input jumlah
        }
    });

    document.getElementById('tambahFormButton').addEventListener('click', function() {
        tambahForm(); // Panggil fungsi untuk menambah form
    });
});

let list_form = []
let formCount = 0; // Deklarasi di luar fungsi

function tambahForm() {
    console.log("Fungsi tambahForm dipanggil"); // Debugging
    formCount++; // Increment jumlah form
    const formHTML = `
        <div class="row mb-2" id="formRow${formCount}">
            <div class="col">
                <label for="kode_buku${formCount}" class="form-label text-start">Kode Buku</label>
                <input type="text" class="form-control w-100" id="kode_buku${formCount}" name="kode_buku[]" placeholder="Masukkan Kode Buku" required>
            </div>
            <div class="col">
                <label for="judul_buku${formCount}" class="form-label text-start">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku${formCount}" name="judul_buku[]" required disabled>
            </div>
            <div class="col">
                <label for="penulis${formCount}" class="form-label text-start">Penulis</label>
                <input type="text" class="form-control" id="penulis${formCount}" name="penulis[]" required disabled>
            </div>
            <div class="col">
                <label for="penerbit${formCount}" class="form-label text-start">Penerbit</label>
                <input type="text" class="form-control" id="penerbit${formCount}" name="penerbit[]" required disabled>
            </div>
            <div class="col">
                <label for="tahun_terbit${formCount}" class="form-label text-start">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit${formCount}" name="tahun_terbit[]" required disabled>
            </div>
            <div class="col">
                <label for="jumlah_buku${formCount}" class="form-label text-start">Jumlah</label>
                <input type="number" class="form-control" id="jumlah_buku${formCount}" name="jumlah_buku[]" required>
            </div>
            <div class="col-auto mt-4">
                <div class="btn btn-danger" onclick="hapusForm(${formCount})">X</div>
            </div>
        </div>
    `;
    document.getElementById('dynamicFormBody').insertAdjacentHTML('beforeend', formHTML); // Tambahkan ke dynamicFormBody

    // Tambahkan event listener untuk kode_buku baru
    document.getElementById(`kode_buku${formCount}`).addEventListener('keydown', evt => {
        if (evt.key == 'Tab') {
            let kode_buku = document.getElementById(`kode_buku${formCount}`).value
            axios.get(`/Transaksi/peminjaman/apis/${kode_buku}`)
                .then(hasil => {
                    let dataHasil = hasil.data
                    document.getElementById(`judul_buku${formCount}`).value = dataHasil.judul
                    document.getElementById(`penulis${formCount}`).value = dataHasil.penulis
                    document.getElementById(`penerbit${formCount}`).value = dataHasil.penerbit
                    document.getElementById(`tahun_terbit${formCount}`).value = dataHasil.tahun_terbit
                    document.getElementById(`jumlah_buku${formCount}`).focus(); // Fokus ke input jumlah setelah input kode buku
                })
                .catch(err => {
                    let pesan = "Kode Buku Tidak Ditemukan!!"
                    alert(pesan)
                    document.getElementById(`judul_buku${formCount}`).value = ""
                    document.getElementById(`penulis${formCount}`).value = ""
                    document.getElementById(`penerbit${formCount}`).value = ""
                    document.getElementById(`tahun_terbit${formCount}`).value = ""
                    document.getElementById(`kode_buku${formCount}`).value = ""
                    document.getElementById(`kode_buku${formCount}`).focus()
                });
        }
    });
}

function hapusForm(index) {
    const formRow = document.getElementById(`formRow${index}`);
    if (formRow) {
        formRow.remove(); // Hapus elemen form dari DOM
    }
    list_form.splice(index - 1, 1); // Hapus dari list_form
}
