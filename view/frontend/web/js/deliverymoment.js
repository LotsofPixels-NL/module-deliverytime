define(['jquery'], function($){
    'use strict'
    $(document).ready(function(){
        const today = new Date();
        $('#time').html( today.getHours());
        $('#date').html( today.toDateString() );
        const moment = today.toDateString().substring(0, 3);
        const  time =  today.getHours();
        if (moment === "Sat") {$("#weekday").text("dinsdag") }
        if (moment === "Sun") {$("#weekday").text("dinsdag") }
        if (moment === "Mon") {
            if (time < 16 ) {$("#weekday").text("dinsdag")} else {$("#weekday").text("woensdag")}
        }
        if (moment === "Tue") {
            if (time < 16 ) {$("#weekday").text("woensdag")} else {$("#weekday").text("donderdag")}
        }
        if (moment === "Wed") {
            if (time < 16 ) {$("#weekday").text("donderdag")} else {$("#weekday").text("vrijdag")}
        }
        if (moment === "Thu") {
            if (time < 16 ) {$("#weekday").text("vrijdag")} else {$("#weekday").text("zaterdag")}
        }
        if (moment === "Fri") {
            if (time < 16 ) {$("#weekday").text("zaterdag")} else {$("#weekday").text("dinsdag")}
        }

    })
})