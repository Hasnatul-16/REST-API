
// mengubah abjek ke jsno pada javascrip

// let mahasiswa = {
//     nama : "Sandhika Galih",
//     nrp : "030403023",
//     email: "sandhikagalih@unpas.ac.id"
// }

// console.log(JSON.stringify(mahasiswa));

// mengubah dari jsno ke objek 

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200){
//         // let mahasiswa = this.responseText; //ini masih dalam bentuk json untuk mengubahnya maka buat
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();

// menggunakan jquery untuk mengubah json ke objek 

$.getJSON('coba.json' , function (data) {
    console.log(data);
})
