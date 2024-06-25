
document.addEventListener("DOMContentLoaded", function() {
    // Ana sayfa, Əlaqə ve Naxçıvan linklerini içeren bir dizi
    const links = [
        { text: "Ana Sehife", url: "index.html" },
        { text: "Elaqe", url: "elaqeler.html" },
        { text: "Naxcivan" }, // Sadece metin, url yok
    ];

    // Yukarıdaki diziyi kullanarak linkleri oluştur
    const linkElements = links.map((link, index) => {
        if (index === links.length - 1) {
            // Son eleman (Naxçıvan) için sadece metin oluşturma
            return `<span style="color: black;">${link.text}</span>`;
        } else {
            // Diğer linkler için standart link oluşturma
            return `<a href="${link.url}">${link.text}</a>`;
        }
    });

    // Yukarıdaki linkleri içeren bir div oluştur
    const linkContainer = document.createElement("div");
    linkContainer.classList.add("breadcrumb");
    linkContainer.innerHTML = linkElements.join(" > ");

    // Navbarın yanına linkleri ekle
    const tabsContainer = document.querySelector(".tabs-container");
    tabsContainer.appendChild(linkContainer);

    // Ok işaretlerinin rengini değiştir
    const arrowElements = document.querySelectorAll(".breadcrumb > a::after");
    arrowElements.forEach(arrow => {
        arrow.style.color = "red";
    });
   
});

function gonder() {
    // Form verilerini al
    var adSoyad = document.getElementById("yazi").value;
    var email = document.getElementById("yazi2").value;
    var konu = document.getElementById("yazi3").value;
    var mesaj = document.getElementById("yazi4").value;

    // E-posta oluştur
    var mailto_link = 'mailto:elcanaslanov2003@gmail.com?subject=' + konu + '&body=' + mesaj + ' - ' + adSoyad;

    // E-posta linkini aç
    window.location.href = mailto_link;
}


