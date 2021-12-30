const bankLogosp24 = [...document.getElementsByClassName("bank-logo")];
if (bankLogosp24.length > 0) {
  bankLogosp24.forEach((logo) => {
    if (logo.dataset.bg) {
      logo.style = `background-image: url(${logo.dataset.bg})`;
    }
  });
}