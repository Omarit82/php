"use strict";
document.addEventListener('DOMContentLoaded',()=>{
    let calendarEl = document.getElementById('calendar');


    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        headerToolbar: {
          left: 'prev,next',
          center: 'title',
          right: 'timeGridWeek,timeGridDay' // user can switch between the two
        }
    });
    calendar.render();
})