/*Kode Awal JS untuk Dropdown*/
function myFunction(){
    document.getElementById("myDropdown").classList.toggle("show");

}

window.onclick = function(event){
    if (!event.target.matches('.dropbtn')){
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')){
                openDropdown.classList.remove('show');
            }
        }
    }
}
/*Kode Akhir JS untuk Dropdown*/

/*Kode Awal JS untuk Slideshow Gallery*/

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n){
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption")
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n<1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
}

/*Kode Akhir JS untuk Slideshow Gallery*/

/*Kode Awal JS untuk Work Experience*/

var experiences = [
    {
    tahun: "2015 - 2016",
    posisi: "Operator",
    perusahaan: "Kantor Lurah Kisaran Barat",
    gaji: "Rp. 1.000.000"
    },
    {
        tahun: "2016 - 2017",
        posisi: "Data Entry",
        perusahaan: "Instagram Business",
        gaji: "Rp. 2.000.000"
        },
    {
    tahun: "2017 - 2018",
    posisi: "Operator",
    perusahaan: "Kantor Lurah Kisaran Barat",
    gaji: "Rp. 3.000.000"
    },
    {
        tahun: "2018 - 2020",
        posisi: "Joki Game online",
        perusahaan: "Jual Koin Game",
        gaji: "Rp. 4.000.000"
        },
    {
    tahun: "2016 - 2020",
    posisi: "Admin olshop",
    perusahaan: "@aganstore2",
    gaji: "Rp. 5.000.000"
    }
]
;
var text = "";
var i;
var hasil = document.getElementById("experiences");

for (i=0; i < experiences.length; i++){
    hasil.innerHTML += "Tahun       : " + experiences[i]["tahun"] + "<br>";
    hasil.innerHTML += "Perusahaan  : " + experiences[i]["perusahaan"] + "<br>";
    hasil.innerHTML += "Gaji        : " + experiences[i]["gaji"] + "<br>";

}

// document.getElementById("demo1").innerHTML = text;
console.log(experiences);

/*Kode Akhir JS untuk Work Experience*/