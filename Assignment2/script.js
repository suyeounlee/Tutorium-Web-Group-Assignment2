// const button = document.querySelector("#site");
// const site = document.querySelector(".flexbox-container-siteMap");

// button.addEventListener('click', ()=> {
//     if(site.style.display === 'none') {
//         site.style.display = 'flex';
//         button.value = 'Hide Sitemap';
//     } else{
//         site.style.display = 'none';
//         button.value = 'Show Sitemap'
//     }
// });

/*  Suyeon: findTutors.html  */
 
const searchBox1 = document.getElementById('searchBox');
const searchBtn = document.getElementById('searchButton');
  

searchBox1.addEventListener("keyup", searchName);

function searchName() {
    const tutorContainer = document.getElementsByClassName("flexbox-container-tutor");
    const searchBox = document.getElementById("searchBox").value.toLowerCase();
    const tutorBox = document.querySelectorAll(".tutorBox");
    const tName = document.getElementsByTagName("h3");

    for (var i = 0; i < tName.length; i++) {
        let match = tutorBox[i].getElementsByTagName('h3')[0];

        if (match) {
            let textValue = match.textContent || match.innerHTML

            if (textValue.toLowerCase().includes(searchBox)) {
                tutorBox[i].style.display = "";
            } else {
                tutorBox[i].style.display = "none";
            }
        }
    } //for   
}; //searchName



const selectId = document.getElementById("findOption").value;
const optionList = document.querySelectorAll(".option");

function getSelectValue() {

    let selectedValue = document.getElementById("findOption").value;
    //console.log(selectedValue);
    const subject = document.querySelectorAll(".subject");
    //console.log(subject);

    if (selectedValue === 'subject') {
        console.log('subject clicked');

        searchBox1.addEventListener("keyup", searchSubject);

        function searchSubject() {
            console.log('function searchSubject working?');

            const tutorBox = document.querySelectorAll(".tutorBox");
            const searchBox = document.getElementById("searchBox").value.toLowerCase();

            for (var i = 0; i < subject.length; i++) {
                let match = tutorBox[i].querySelector('.subject');
                if (match) {
                    let textValue = match.textContent || match.innerHTML

                    if (textValue.toLowerCase().includes(searchBox)) {
                        tutorBox[i].style.display = "";
                    } else {
                        tutorBox[i].style.display = "none";
                    }
                }
            } //for
        }
    }

    // if the select option changes from subject to name
    if (selectedValue === 'name') {
        window.location.reload();
        searchBox1.addEventListener("keyup", searchName);
        searchName();
    }
} //getSelectValue