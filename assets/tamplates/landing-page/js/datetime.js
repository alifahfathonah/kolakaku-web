function startTime() {
    var today                                   = new Date();
    var day                                     = today.getDay();
    var dayy                                    = today.getUTCDate();
    var month                                   = today.getMonth();
    var year                                    = today.getFullYear();
    var h                                       = today.getHours();
    var m                                       = today.getMinutes();
    var s                                       = today.getSeconds();

    m                                           = checkTime(m);
    s                                           = checkTime(s);

    var days                                    = ["Minggu","Senin","Selesa","Rabu","Kamis","Jum'at","Sabtu"];
    var dayName                                 = days[day];

    var months                                  = ["Januari","Februari","Maret","April","Mai","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    var monthName                               = months[month];

    document.getElementById('time').innerHTML   = h + ":" + m + ":" + s;
    document.getElementById('date').innerHTML   = dayName + ", " + dayy + " " + monthName + " " + year;
    var t                                       = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}