/*  Suyeon: findTutors.html  */

const searchBox1 = document.getElementById('searchBox');
const searchBtn = document.getElementById('searchButton');


searchBox1.addEventListener("keyup", searchName);

function searchName() {
    const tutorContainer = document.getElementsByClassName("flexbox-container-tutor");
    const searchBox = document.getElementById("searchBox").value.toLowerCase();
    const tutorBox = document.querySelectorAll(".tutorBox");
    const tName = document.getElementsByTagName("h3");

    for(var i=0; i<tName.length; i++) {
        let match = tutorBox[i].getElementsByTagName('h3')[0];

        if(match) {
            let textValue = match.textContent || match.innerHTML
            
            if(textValue.toLowerCase().includes(searchBox)) {
                tutorBox[i].style.display="";
            } else {
                tutorBox[i].style.display="none";
            }
        }
    }
}

//SUyeon working with select options

// const searchOption = document.getElementById("findOption");
// const optionList = document.querySelectorAll(".option");
// const searchDiv = document.querySelector(".search");


// let subject = ['Java', 'PHP', 'Database', 'linux', 'javascript', 'Html, CSS']
// // const subject = document.querySelector(".subject");
// // console.log(subject);

// searchOption.addEventListener("change", changeOption => {
//     alert("changed");
//     const searchBox1 = document.getElementById('searchBox');
//     const searchBox = document.getElementById("searchBox").value.toLowerCase();

//     searchBox1.addEventListener("keyup", searchSubject) 
//     const tutorBox = document.querySelectorAll(".tutorBox");
//     const subject = document.querySelectorAll(".subject");
//     console.log(subject);

//     for(var i=0; i<subject.length; i++) {
//         let match = tutorBox[i].querySelector(".subject")[0]; 

//         if(match) {
//             let textValue = match.textContent || match.innerHTML
            
//             if(textValue.toLowerCase().includes(searchBox)) {
//                 tutorBox[i].style.display="";
//             } else {
//                 tutorBox[i].style.display="none";
//             }
//         }
//     }
// });





