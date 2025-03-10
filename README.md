<!-- FONT TESTI -->
.spectral-extralight {
  font-family: "Spectral", serif;
  font-weight: 200;
  font-style: normal;
}



<!-- COSE DA SISTEMARE -->

-header?
-modificare colore categorie sulle card
-sistemare view del rivisore
-sistemare bottoni (colore)


failed_at	2025-03-04 14:01:23


function truncateText(text, maxLength) {
  if (text.length > maxLength) {
    return text.substring(0, maxLength) + "...";
  }
  return text;
}

const description = "Questa è una descrizione molto lunga che non entra bene nella card.";
const truncatedDescription = truncateText(description, 50); // Trunca a 50 caratteri
document.querySelector(".card-description").textContent = truncatedDescription;
