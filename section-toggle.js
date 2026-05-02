const sections = document.querySelectorAll(".section");

sections.forEach((section) => {
  // Use querySelector for direct child if needed, but since we attach listener to each card, it's fine.
  // Actually, querySelector might select the first descendant, which is fine if it's the one we want.
  // We can select .section__title as a direct child using scope or just querySelector.
  // The structure is article.section > div.section__title
  const card = section.querySelector(":scope > .section__title") || section.querySelector(".section__title");
  
  if (card) {
    card.addEventListener("click", (e) => {
      e.stopPropagation(); // prevent triggering parent section clicks
      sections.forEach((item) => {
        // Close item if it's not the clicked section and not an ancestor of the clicked section
        if (item !== section && !item.contains(section)) {
          item.classList.remove("show-text");
        }
      });
      const isNowOpen = section.classList.toggle("show-text");
      // If the section was just opened, smoothly scroll it to the top of the viewport
      if (isNowOpen) {
        // Use scrollIntoView with smooth behavior and align to start (top)
        // Add a tiny timeout to allow any open animation/CSS to begin before scrolling.
        setTimeout(() => {
          try {
            section.scrollIntoView({ behavior: 'smooth', block: 'start' });
          } catch (err) {
            // Fallback for very old browsers: instant scrollTop adjustment
            const rect = section.getBoundingClientRect();
            const absoluteTop = window.pageYOffset + rect.top;
            window.scrollTo({ top: absoluteTop, behavior: 'instant' });
          }
        }, 50);
      }
    });
  }
});

