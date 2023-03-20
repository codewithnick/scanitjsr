// form validation
const form = document.getElementById("reg-form");
const name = document.getElementById("fname");
const email = document.getElementById("email");
const phNo = document.getElementById("phone");
const yPass = document.getElementById("yPassing");
const course = document.getElementById("course");

form.addEventListener("submit", (e) => {
//   e.preventDefault();

  checkInputs();
});

function checkInputs() {
  // trim to remove the whitespaces
  const nameValue = name.value.trim();
  const emailValue = email.value.trim();
  const phValue = phNo.value.trim();
  const yearValue = yPass.value.trim();
  const courseValue = course.value.trim();

  if (nameValue === "") {
    setErrorFor(name, "Please enter your name");
  } else {
    setSuccessFor(name);
  }

  if (emailValue === "") {
    setErrorFor(email, "Please enter your email");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "Email not valid");
  } else {
    setSuccessFor(email);
  }
  if (phValue === "") {
    setErrorFor(phNo, "Please enter your phone number");
  } else if(!isPhone(phNo)) {
    setErrorFor(phNo, "Phone number not valid");
  } else {
    setSuccessFor(phNo);
  }
  if (yearValue === "") {
    setErrorFor(yPass, "Please enter your passing year");
  } else {
    setSuccessFor(yPass);
  }
  if (courseValue === "") {
    setErrorFor(course, "Please select your course");
  } else {
    setSuccessFor(course);
  }
}
function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  formControl.className = "form-outline error";
  small.innerText = message;
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "form-outline success";
}

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}

function isPhone(phNo) {
  if(phNo.value.length == 10) return 1;
  else return 0;
}


// end validation

function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

var flag = 1;

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
  if (flag) {
    incrementNumber();
    flag = 0;
  }
};

// to get the increment value
const obj = document.getElementById("value");
// when screen in the range the increment animation is showing
function incrementNumber() {
  if (
    document.documentElement.scrollTop >= 800 ||
    document.documentElement.scrollTop <= 900
  ) {
    animateValue(obj, 0, 2500, 4000);
  }
}

//Get the button:
mybutton = document.getElementById("myBtn");

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// coding for responsiveness of navbar toogle
var items = document.getElementsByClassName("nav-link");
var toogleNavBar = function () {
  var btn = document.getElementById("tg-btn");
  var con = document.getElementById("navbarSupportedContent");
  btn.classList.add("collapsed");
  btn.ariaExpanded = "false";
  con.classList.remove("show");
};

Array.from(items).forEach(function (element) {
  element.addEventListener("click", toogleNavBar);
});

let toRegister = ()=>{
  location.href = "#register";
}

let toEvents = ()=>{
  location.href="#event";
}

// Dropdown Menu for All colleges
// $(function () {
//   var data = [
//     {
//       college: "NIT Jamshedpur",
//     },
//     {
//       college: "NIT Allahabad",
//     },
//     {
//       college: "NIT Bhopal",
//     },
//     {
//       college: "NIT Nagpur",
//     },
//     {
//       college: "NIT Durgapur",
//     },
//     {
//       college: "NIT Hamirpur",
//     },
//     {
//       college: "NIT Jaipur",
//     },
//     {
//       college: "NIT Jalandhar",
//     },
//     {
//       college: "NIT Kurukshetra",
//     },
//     {
//       college: "NIT Calicut",
//     },
//     {
//       college: "NIT Rourkela",
//     },
//     {
//       college: "NIT Silchar",
//     },
//     {
//       college: "NIT Warangal",
//     },
//     {
//       college: "NIT Surat",
//     },
//     {
//       college: "NIT Tiruchirappalli",
//     },
//     {
//       college: "NIT Srinagar",
//     },
//     {
//       college: "NIT Patna",
//     },
//     {
//       college: "NIT Raipur",
//     },
//     {
//       college: "NIT Agartala",
//     },
//     {
//       college: "NIT Arunachal Pradesh",
//     },
//     {
//       college: "NIT Delhi",
//     },
//     {
//       college: "NIT Goa",
//     },
//     {
//       college: "NIT Manipur",
//     },
//     {
//       college: "NIT Meghalaya",
//     },
//     {
//       college: "NIT Mizoram	",
//     },
//     {
//       college: "NIT Meghalaya",
//     },
//     {
//       college: "NIT Nagaland",
//     },
//     {
//       college: "NIT Puducherry",
//     },
//     {
//       college: "NIT Sikkim",
//     },
//     {
//       college: "NIT Uttarakhand",
//     },
//     {
//       college: "NIT Andhra Pradesh",
//     },
//     {
//       college: "IIT, Delhi (Delhi)",
//     },
//     {
//       college: "IIT, Bombay (Mumbai)",
//     },
//     {
//       college: "IIT, Kharagpur (Kharagpur)",
//     },
//     {
//       college: "IIT, Kanpur (Kanpur)",
//     },
//     {
//       college: "Birla Institute Of Technology & Science (Pilani)",
//     },
//     {
//       college: "NIT, Karnataka (Mangalore)",
//     },
//     {
//       college: "College Of Engineering, Guindy (Chennai)",
//     },
//     {
//       college: "Netaji Subhas Institute Of Technology* (New Delhi)",
//     },
//     {
//       college: "VIT University (Vellore)",
//     },
//     {
//       college: "College Of Engineering, Pune (Pune)",
//     },
//     {
//       college: "IIIT, Hyderabad (Hyderabad)",
//     },
//     {
//       college: "IIIT, Allahabad (Allahabad)",
//     },
//     {
//       college:
//         "Indian Institute Of Technology (Indian School Of Mines), Dhanbad (Dhanbad)",
//     },
//     {
//       college: "Delhi Technological University (New-Delhi)",
//     },
//     {
//       college: "Manipal Institue Of Technology (Manipal)",
//     },
//     {
//       college:
//         "University Institute Of Engineering, Chandigarh University (Chandigarh)",
//     },
//     {
//       college: "PSG College of Technology (Coimbatore)",
//     },
//     {
//       college: "Visvesvaraya National Institute Of Technology (Nagpur)",
//     },
//     {
//       college: "Thapar University (Patiala)",
//     },
//     {
//       college: "M.S. Ramaiah Institute Of Technology (Bangalore)",
//     },
//     {
//       college: "Birla Institute Of Technology (Ranchi)",
//     },
//     {
//       college: "The National Institute Of Engineering (Mysore)",
//     },
//     {
//       college: "University College Of Engineering (Hyderabad)",
//     },
//     {
//       college: "Sri Sivasubramaniya Nadar College of Engineering (Kalavakkam)",
//     },
//     {
//       college: "B.I.T. Sindri (Dhanbad)",
//     },
//     {
//       college: "Institute Of Technology (Ahmedabad)",
//     },
//     {
//       college: "SRM Engineering College (Chennai)",
//     },
//     {
//       college: "Government College Of Engineering (Amravati)",
//     },
//     {
//       college:
//         "SVKM's NMIMS-Mukesh Patel School Of Technology Management & Engineering (Mumbai)",
//     },
//     {
//       college: "Mepco Schlenk Engineering College (Sivakasi)",
//     },
//     {
//       college: "Thiagarajar College Of Engineering (Madurai)",
//     },
//     {
//       college: "Chaitanya Bharathi Institute Of Technology (Hyderabad)",
//     },
//     {
//       college: "Dwarkadas J. Sanghvi College Of Engineering (Mumbai)",
//     },
//     {
//       college: "Rungta College Of Engineering And Technology (Bhilai)",
//     },
//     {
//       college: "Guru Nanak Dev Engineering College (Ludhiana)",
//     },
//     {
//       college:
//         "Zakir Husain College Of Engineering & Technology, Aligarh (Aligarh)",
//     },
//     {
//       college: "Govt. Model Engineering College (Cochin)",
//     },
//     {
//       college: "MIT College Of Engineering (Pune)",
//     },
//     {
//       college: "PES University (Bangalore)",
//     },
//     {
//       college:
//         "KLE Dr M.S Sheshgiri College Of Engineering And Technology (Belgaum)",
//     },
//     {
//       college: "Bannari Amman Institute Of Technology (Erode)",
//     },
//     {
//       college: "Symbiosis Institute Of Technology (Pune)",
//     },
//     {
//       college: "BMS Institute Of Technology & Management (Bangalore)",
//     },
//     {
//       college: "BMS College Of Engineering (Bangalore)",
//     },
//     {
//       college: "Bharati Vidyapeeth University College Of Engineering (Pune)",
//     },
//     {
//       college: "Jawaharlal Nehru National College Of Engineering (Shimoga)",
//     },
//     {
//       college: "K L University (Guntur)",
//     },
//     {
//       college: "Galgotias College Of Engineering And Technology (Noida)",
//     },
//     {
//       college: "Shri Ramdeobaba College Of Engineering And Management (Nagpur)",
//     },
//     {
//       college: "Sri Sairam Engineering College (Chennai)",
//     },
//     {
//       college: "Cummins College of Engineering for Women (Pune)",
//     },
//     {
//       college: "Faculty Of Engineering, DIT University (Dehradun)",
//     },
//     {
//       college:
//         "Sanjivani Rural Education Society's College Of Engineering (Ahmednagar)",
//     },
//     {
//       college: "SDM College Of Engineering & Technology (Dharwad)",
//     },
//     {
//       college: "Pimpri Chinchwad College Of Engineering (Pune)",
//     },
//     {
//       college: "M V J College Of Engineering (Bangalore)",
//     },
//     {
//       college: "Sir M Visvesvaraya Institute Of Technology (Bangalore)",
//     },
//     {
//       college: "The Northcap University (Gurgaon)",
//     },
//     {
//       college: "Rajagiri School Of Engineering & Technology (Ernakulam)",
//     },
//     {
//       college:
//         "Indraprastha Institute Of Information Technology Delhi (New Delhi)",
//     },
//     {
//       college: "National Institute Of Science & Technology (Berhampur)",
//     },
//     {
//       college:
//         "Muffakham Jah College Of Engineering And Technology (Hyderabad)",
//     },
//     {
//       college: "JSS Academy Of Technical Education (Bangalore)",
//     },
//     {
//       college: "Army Institute Of Technology (Pune)",
//     },
//     {
//       college: "Amity School Of Engineering & Technology (Noida)",
//     },
//     {
//       college: "Lovely Professional University (Phagwara)",
//     },
//     {
//       college: "JIS College Of Engineering (Kalyani, West Bengal)",
//     },
//     {
//       college: "IMS Engineering College (Ghaziabad)",
//     },
//     {
//       college: "P.E.S. College Of Engineering (Mandya)",
//     },
//     {
//       college: "Lakshmi Narain College Of Technology (Bhopal)",
//     },
//     {
//       college: "Sikkim Manipal Institute Of Technology (Sikkim)",
//     },
//     {
//       college: "Ganeshi Lal Bajaj Institute Of Technology & Management (Noida)",
//     },
//     {
//       college: "SCMS School Of Engineering & Technology (Ernakulam)",
//     },
//     {
//       college: "Kongu Engineering College (Erode)",
//     },
//     {
//       college: "K.S.R. College Of Enginnering (Thiruchengode)",
//     },
//     {
//       college: "Maharashtra Institute Of Technology (Aurangabad)",
//     },
//     {
//       college: "Sri Sairam College of Engineering (Bangalore)",
//     },
//     {
//       college: "J.B. Institute Of Technology (Dehradun)",
//     },
//     {
//       college: "Jaipur Engineering College And Research Center (Jaipur)",
//     },
//     {
//       college: "R.M.K. Engineering College (Kavaripettai)",
//     },
//     {
//       college: "S.A. Engineering College (Chennai)",
//     },
//     {
//       college:
//         "University Institute Of Engineering & Technology, Panjab University (Chandigarh)",
//     },
//     {
//       college: "Kuppam Engineering College (Kuppam)",
//     },
//     {
//       college:
//         "Asia Pacific Institute of Information Technology (APIIT SD) (Panipat)",
//     },
//     {
//       college: "Malla Reddy College of Engineering & Technology (Secunderabd)",
//     },
//     {
//       college: "CVR College Of Engineering (Hyderabad)",
//     },
//     {
//       college:
//         "Veltech High Tech Dr .Rangarajan Dr. Sakunthala Engineering College (Chennai)",
//     },
//     {
//       college: "Vishwakarma Institute of Technology (Pune)",
//     },
//     {
//       college: "M.S. Engineering College (Bangalore)",
//     },
//     {
//       college: "R.M.D. Engineering College (Thiruvallur)",
//     },
//     {
//       college: "Rajarambapu Institute Of Technology (Sangli)",
//     },
//     {
//       college: "Shri Vishnu Engineering College For Women (Bhimavaram)",
//     },
//     {
//       college: "Government College Of Engineering (Karad)",
//     },
//     {
//       college:
//         "Institute Of Engineering & Technology, J.K.Lakshmipat University (Jaipur)",
//     },
//     {
//       college: "Shri Shankaracharya Technical Campus Bhilai (Bhilai)",
//     },
//     {
//       college: "IES College Of Technology (Bhopal)",
//     },
//     {
//       college: "Madhav Institute of Technology & Science (Gwalior)",
//     },
//     {
//       college: "KIET Group Of Institutions (Ghaziabad)",
//     },
//     {
//       college: "BRACT'S Vishwakarma Institute of Information Technology (Pune)",
//     },
//     {
//       college: "KLS Gogte Institute Of Technology (Belagavi)",
//     },
//     {
//         college: "Other",
//     }
//   ];
//   $.each(data, function (i, option) {
//     $("#college").append(
//       $("<option/>").attr("value", option.college).text(option.college)
//     );
//   });
// });