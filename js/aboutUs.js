
const button = document.querySelector("#site")
const site = document.querySelector(".flexbox-container-siteMap")
//Eventlistener to hide site map
button.addEventListener('click', () => {
    if (site.style.display === 'none') {
        site.style.display = 'flex';
        button.value = 'Hide Sitemap'
    } else {
        site.style.display = 'none';
        button.value = 'Show Sitemap'
    }
});   