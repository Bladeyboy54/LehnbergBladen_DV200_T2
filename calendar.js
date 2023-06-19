// calendar.js
document.addEventListener('DOMContentLoaded', function() {
    const calendarContainer = document.getElementById('calendar');
  
    // Get the current date
    const currentDate = new Date();
  
    // Get the first day of the current month
    const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
  
    // Get the last day of the current month
    const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
  
    // Generate calendar cells for each day of the month
    for (let day = firstDay.getDate(); day <= lastDay.getDate(); day++) {
      const cell = document.createElement('div');
      cell.classList.add('calendar-cell');
      cell.textContent = day;

      if (day === currentDate.getDate()) {
        cell.classList.add('current-day');
      }
      calendarContainer.appendChild(cell);
    }
  });