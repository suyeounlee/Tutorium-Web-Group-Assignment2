/*  Su Yeoun: findTutors.js  */

const searchBox1 = document.getElementById('searchBox');
const searchBtn = document.getElementById('searchButton');

// keyup event listner for users to search and write in input box
searchBox1.addEventListener("keyup", searchName);

//function searchName to search tutor's name if matches or not
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

//function when select option changed from name to subject and detects keyup in input, it will search. 
function getSelectValue() {
    let selectedValue = document.getElementById("findOption").value;
    //console.log(selectedValue);
    const subject = document.querySelectorAll(".subject");
    //console.log(subject);

    if (selectedValue === 'subject') {
        console.log('subject clicked');

        searchBox1.addEventListener("keyup", searchSubject);

        function searchSubject() {
            //console.log('function searchSubject working?');

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

    // if the select option changes from subject to name, the window will refresh.
    if (selectedValue === 'name') {
        window.location.reload();
        searchBox1.addEventListener("keyup", searchName);
        searchName();
    }
} //getSelectValue