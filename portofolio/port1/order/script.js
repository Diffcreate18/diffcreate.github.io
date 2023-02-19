if ('WebSocket' in window) {
    (function () {
        function refreshCSS() {
            var sheets = [].slice.call(document.getElementsByTagName("link"));
            var head = document.getElementsByTagName("head")[0];
            for (var i = 0; i < sheets.length; ++i) {
                var elem = sheets[i];
                var parent = elem.parentElement || head;
                parent.removeChild(elem);
                var rel = elem.rel;
                if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                    var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                    elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                }
                parent.appendChild(elem);
            }
        }
        var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
        var address = protocol + window.location.host + window.location.pathname + '/ws';
        var socket = new WebSocket(address);
        socket.onmessage = function (msg) {
            if (msg.data == 'reload') window.location.reload();
            else if (msg.data == 'refreshcss') refreshCSS();
        };
        if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
            console.log('Live reload enabled.');
            sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
        }
    })();
}
else {
    console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
}
// ]]>

// Ini fungsi menampilkan data card small
function card1() {
    document.getElementById('gambarplaceholder').src = 'gambar/small.png';
    document.getElementById("gambarplaceholder").style.filter = "grayscale(0%)";
    document.getElementById('judul').innerHTML = 'Small Villa';
    document.getElementById('deskripsi').innerHTML = 'Small vila was designed to be an open plan living space, but with a luxurious feel. The design will';
    document.getElementById('harga').innerHTML = 'Rp 140.000';
    document.getElementById('orang').innerHTML = '2 Orang';
    document.getElementById('bed').innerHTML = 'Big Bed';
    document.getElementById("debooking").className = "btn btn-success";
    document.getElementById("debooking").textContent = "Book Now";
    
}

// Ini fungsi menampilkan data card medium
function card2() {
    document.getElementById('gambarplaceholder').src = 'gambar/medium.png';
    document.getElementById("gambarplaceholder").style.filter = "grayscale(100%)";
    document.getElementById('judul').innerHTML = 'Medium Villa';
    document.getElementById('deskripsi').innerHTML = 'A medium-sized villa is a wonderful place to have a dream home - practical, comfortable and spacious';
    document.getElementById('harga').innerHTML = 'Rp 300.000';
    document.getElementById('orang').innerHTML = '4 Orang';
    document.getElementById('bed').innerHTML = '2 Big Beds';
    document.getElementById("debooking").className = "btn btn-danger disabled";
    document.getElementById("debooking").textContent = "Not Available";
}

// Ini fungsi menampilkan data card huge
function card3() {
    document.getElementById('gambarplaceholder').src = 'gambar/huge.png';
    document.getElementById("gambarplaceholder").style.filter = "grayscale(0%)";
    document.getElementById('judul').innerHTML = 'Huge Villa';
    document.getElementById('deskripsi').innerHTML = 'A huge villa is a villa with a generous garden, pool, and even a guest wing. These luxury villas are';
    document.getElementById('harga').innerHTML = 'Rp 400.000';
    document.getElementById('orang').innerHTML = '6 Orang';
    document.getElementById('bed').innerHTML = ' 3 Big Beds';
    document.getElementById("debooking").className = "btn btn-success";
    document.getElementById("debooking").textContent = "Book Now";
}

// Ini fungsi design pada cards
function card1_1() {
 document.getElementById('card1_1').style.background = '#ededed';   
}
function card1_1_leave() {
    document.getElementById('card1_1').style.background = 'white';   
   }

   function card2_2() {
    document.getElementById('card2_2').style.background = '#ededed';   
   }
   function card2_2_leave() {
    document.getElementById('card2_2').style.background = 'white';   
 }

function card3_3() {
  document.getElementById('card3_3').style.background = '#ededed';   
 }
  function card3_3_leave() {
  document.getElementById('card3_3').style.background = 'white';   
 }


//  Ini fungsi untuk menampilkan cards form dan menghilangkan tombol book now
 function muncul() {
    document.getElementById('forms').style.display="block";
    document.getElementById('totalcards').style.display="none";
	    var parent = document.getElementById("tombol");
	    parent.removeChild(tombols);
 }


//  Ini fungsi untuk gambar yang berganti" selama 1 detik
let  x=0;
 setInterval(Ganti, 1000);
function Ganti() {
    x++;
    if (x == 1) {
        document.getElementById('slides').src = "gambar/gopaylogo.png";
    }else if (x == 5) {
        document.getElementById('slides').src = "gambar/danalogo.png";
    } else if(x == 10){
        document.getElementById('slides').src = "gambar/BNI.png";
    }else if(x == 15){
        x = 0
    }

}


// Ini fungsi untuk menampilkan dan menyembunyikan redeem
function toggleVisibility(cb)
 {
  var x = document.getElementById("redeemdiv");
  if(cb.checked==false)
   x.style.visibility = "hidden"; // or x.style.display = "none";
  else
   x.style.visibility = "visible"; //or x.style.display = "block";
 }
 
 