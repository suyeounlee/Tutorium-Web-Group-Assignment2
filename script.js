//script js for index.html by Juho

//variables
const button = document.querySelector("#site");
const site = document.querySelector(".flexbox-container-siteMap");

// button to show and hide the site map in the maain page(index.html)
button.addEventListener('click', () => {
    if (site.style.display === 'none') {
        site.style.display = 'flex';
        button.value = 'Hide Sitemap';
    } else {
        site.style.display = 'none';
        button.value = 'Show Sitemap'
    }
});

