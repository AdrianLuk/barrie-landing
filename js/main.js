$(document).ready(function() {
    var today = moment().toObject();
    // console.log(today);
    var targetDate = moment([2018, 7, 31, 9, 59, 00]); // August 31, 2018
    var difference = targetDate.diff(today, "seconds");
    // console.log(difference);
    var clock = $(".countdown-clock").FlipClock(difference, {
        clockFace: "DailyCounter",
        countdown: true
    });

    var cleave = new Cleave("#phone", {
        phone: true,
        phoneRegionCode: "CA",
        delimiter: "-",
        blocks: [3, 3, 4]
    });
});
