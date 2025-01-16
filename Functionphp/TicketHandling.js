function createTicketLink(ticketNumber, nature, date) {
  const link = document.createElement('a');
  link.href = `../Tickets/Ticket_${ticketNumber}.php`; // Replace with your actual ticket URL
  link.className = 'ticket-link';
  link.textContent = `Ticket #${ticketNumber}: ${nature} - ${date}`;
  link.style.display = 'block';
  return link;
}

function fetchAndDisplayTickets() {
  fetch('tickets.json') // Fetch the JSON registry
    .then(response => response.json())
    .then(tickets => {
      const ticketContainer = document.getElementById('Ticket-Container');
      ticketContainer.innerHTML = ''; // Clear existing links

      tickets.forEach(ticket => {
        const link = createTicketLink(ticket.number, ticket.nature, ticket.date);
        ticketContainer.appendChild(link);
      });
    })
    .catch(error => {
      console.error('Error fetching tickets:', error);
    });
}

window.addEventListener('DOMContentLoaded', () => {
  fetchAndDisplayTickets();
});
