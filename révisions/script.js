function toggleDescription(descriptionId) {
  var description = document.getElementById(descriptionId);
  if (description.style.display === "none") {
    description.style.display = "block";
  } else {
    description.style.display = "none";
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const stars = document.querySelectorAll(".stars label");
  const noteInput = document.getElementById("note");

  let selectedRating = 0;

  stars.forEach((star, index) => {
    star.addEventListener("mouseover", function () {
      if (selectedRating === 0) {
        updateStars(index + 1);
      }
    });

    star.addEventListener("mouseout", function () {
      if (selectedRating === 0) {
        updateStars(0);
      } else {
        updateStars(selectedRating);
      }
    });

    star.addEventListener("click", function () {
      if (selectedRating === index + 1) {
        selectedRating = 0; // Désélectionne l'étoile si elle est déjà sélectionnée
      } else {
        selectedRating = index + 1;
      }
      noteInput.value = selectedRating;
      updateStars(selectedRating);
    });
  });

  function updateStars(rating) {
    for (let i = 0; i < stars.length; i++) {
      if (i < rating) {
        stars[i].innerHTML =
          '<img src="/photo/etoile (1).png" alt="Étoile pleine">';
      } else {
        stars[i].innerHTML = '<img src="/photo/etoile.png" alt="Étoile vide">';
      }
    }
  }
});
