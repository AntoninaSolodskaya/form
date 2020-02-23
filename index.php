<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Stage 3</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header class="nav-container header">
        <input type="checkbox" id="nav-check">
        <div class="header-logo">
            <img class="graficlogo" src="images/Logo.png" alt="Logo">
        </div>
        <div class="nav-btn">
            <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
            </label>
        </div>
        <div class="nav-links">
            <nav>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="select-wrap">
                        <button type="button" class="btn-selected">Courses</button>
                        <div class="select-options-wrap hide">
                            <button type="button" class="option"><a href="#" class="btn-text">Project management</a></button>
                            <button type="button" class="option"><a href="#" class="btn-text">Android development</a></button>
                            <button type="button" class="option"><a href="#" class="btn-text">Online marketing</a></button>
                            <button type="button" class="option"><a href="#" class="btn-text">Front-end developer</a></button>
                        </div>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Video</a>
                    </li>
                    <li class="select-wrap">
                        <button type="button" class="btn-selected">Interesting</button>
                        <div class="select-options-wrap hide">
                            <button type="button" class="option"><a href="#">Blog</a></button>
                            <button type="button" class="option"><a href="#">Youtube</a></button>
                            <button type="button" class="option"><a href="#">Team</a></button>
                            <button type="button" class="option"><a href="#">Community</a></button>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="header-login">
                <button class="login-btn">Authorisation</button>
            </div>
        </div>
    </header>
    <main>
        <div class="wrapper">
            <div class="form-container">
                <form action="register.php" name="register" id="auth" method="post" onsubmit="return validateForm()">
                    <div class="field-section">
                        <label for="name" class="item">ФИО</label>
                        <input 
                            type="text" 
                            name="username" 
                            class="form-control" 
                            id="name" 
                            onchange="myFunction('name')"
                            onkeyup="myFunction('name')" 
                        >
                        <div class="error" id="nameErr"></div>

                    </div>
                    <div class="field-section">
                        <label for="email" class="item">E-mail</label>
                        <input 
                            type="email" 
                            name="email" 
                            class="form-control" 
                            id="email" 
                            onchange="myFunction('email')"
                            onkeyup="myFunction('email')" 
                        >
                        <div class="error" id="emailErr"></div>
                    </div>
                    <div class="field-phone-section">
                        <label for="countId" class="item">Телефон</label>
                        <div class="phone-wrap">
                            <div class="phone-field-wrap">
                                <input id="tel" type="tel" />
                            </div>
                            <div class="phone-btn-wrap">
                                <button 
                                type="button" 
                                class='btn btn-secondary' 
                                id="addButton">+</button>
                            </div>
                            <div class='error' id='phoneErr'></div>
                        </div>
                        <ul id="telList"></ul>
                    </div>
                    <div class="field-section">
                        <label for="age" class="item">Возраст</label>
                        <input
                            type="number"
                            name="age"
                            class="form-control"
                            id="age"
                            onchange="myFunction('age')" 
                            onkeyup="myFunction('age')" 
                        
                        />
                        <div class="error" id="ageErr"></div>
                    </div>
                    <div class="item-photo">Фотография</div>
                    <div class="image-upload">
                        <label for="file">
                            <img src="images/image.png" />
                        </label>

                        <input id="file" type="file" name="photo"/>
                        <div class="error" id="fileErr"></div>
                    </div>
                    <div class="field-section">
                        <label for="summaryId" class="item">Резюме</label>
                        <textarea rows="10" cols="45" id="summary"  onchange="myFunction('summary')" 
                            onkeyup="myFunction('summary')"  name="summary" wrap="off"></textarea>
                        <div class="error" id="summaryErr"></div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="wrap">
            <div class="footer-container">
                <div class="footer-nav">
                    <ul class="footer-ul">
                        <li class="footer-link">
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-link">
                            <a href="#">Courses</a>
                        </li>
                        <li class="footer-link">
                            <a href="#">About</a>
                        </li>
                        <li class="footer-link">
                            <a href="#">Video</a>
                        </li>
                        <li class="footer-link">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="main-footer-section">
                    <div class="footer-block">
                        <div class="footer-section">
                            <div class="footer-item">Courses</div>
                            <p>Project management</p>
                            <p>Android development</p>
                            <p>Online marketing</p>
                            <p>Front-end developer</p>
                        </div>
                        <div class="footer-section">
                            <div class="footer-item">Interesting</div>
                            <p>Blog</p>
                            <p>Youtube</p>
                            <p>Team</p>
                            <p>Community</p>
                        </div>
                    </div>
                    <div class="links-section">
                        <div class="footer-item">Social networks</div>
                        <div class="social-icon">
                            <a href="#"><img src="images/twitter.png" ></a>
                            <a href="#"><img src="images/linkedin.png" ></i></a>
                            <a href="#"><img src="images/facebook.png" ></a>
                            <a href="#"><img src="images/instagram.png"></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <a href="#" class="footer-bottom-icon">Terms of service</a>
                    <a href="#" class="footer-bottom-icon">Privacy policy</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
    $(document).ready(function () {
    bsCustomFileInput.init()
  });

let btnsSelect = document.querySelectorAll('.btn-selected');
let allOptions = document.querySelectorAll('.option'); 
Array.from(btnsSelect).forEach(function(btn){
    btn.addEventListener('click', function(event){
        event.target.classList.toggle('arrow-up'); 
        event.target.nextElementSibling.classList.toggle('hide'); 
    })
});

const removeTel = (e) => {
  const list = document.getElementById('telList');
  list.removeChild(e.target.parentNode);
}

const onKeyPress = (e) => {
  if(e.keyCode === 13) {
    onAdd();
  }
}

const onAdd = () => {
  const tel = document.querySelector('#tel').value.trim();
  
  if (tel) {
    const list = document.getElementById('telList');
    let wrap = document.createElement('li');
    let input = document.createElement('input');
    let btn = document.createElement('button');
    input.value = tel;
    
    btn.type = 'button';
    btn.className = 'deleteBtn';
    btn.innerHTML = 'Удалить';
    btn.onclick = removeTel;
    input.className= 'telephone'
    wrap.appendChild(input);
    wrap.appendChild(btn);
    wrap.className= 'delete-btn-section';
    list.appendChild(wrap);
    document.querySelector('#tel').value = '';
  }
}

document.querySelector('#addButton').addEventListener('click', onAdd);
document.querySelector('#tel').addEventListener('keypress', onKeyPress);


function printError(elemId, hintMsg) {
    let error = document.getElementById(elemId);
    error.innerHTML = hintMsg;
}


function myFunction($name) {
    const fileInput = document.getElementById('file');
    const file = fileInput.value.split("\\");
    const fileName = file[file.length - 1];

    document.getElementById($name + 'Err').innerHTML = '';
}


$("#file").on("change", function(e){
    e.preventDefault();
    const fileInput = document.getElementById('file');
    const filePath = fileInput.value;
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!allowedExtensions.exec(filePath)) {
      printError("fileErr", "File cannot be empty");
      fileInput.value = '';
    } else {
      fileErr = false;
    } 
    myFunction('file'); 
});


function validateForm() {
    const email = document.register.email.value;
    const name = document.register.username.value;
    const age = document.getElementById('age').value;
    const phones =  Object.values(document.getElementsByClassName('phone')).map(function (element) {return element.value})
    const file = document.getElementById('file');
    const summary = document.getElementById('summary');
    let nameErr = emailErr = ageErr = summaryErr = phoneErr = fileErr = true;
    let regex;

    if (name === "") {
        printError("nameErr", "Username cannot be empty");
    } else if (name.length < 3) {
        printError("nameErr", "Invalid name length must be less then 3 letters");
    } else {
        regex = /^[a-zA-Z]+$/;
        if (regex.test(name) === false) {
            printError("nameErr", "Name must have only letters");
        } else {
            nameErr = false;
        }
    }

    if (age === "") {
        printError("ageErr", "Please write your age");
    } else {
        ageErr = false;
    }

    if (email === "") {
        printError("emailErr", "Email cannot be empty");
    } else {
        regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            printError("emailErr", "Invalid email format");
        } else {
            emailErr = false;
        }
    }

    if (file.value === "") {
        printError("fileErr", "Please upload image");
    } else {
        fileErr = false;
    }

    
    regex = /^[+]?(1\-|1\s|1|\d{3}\-|\d{3}\s|)?((\(\d{3}\))|\d{3})(\-|\s)?(\d{3})(\-|\s)?(\d{4})$/g;
    
    if (regex.test(phones.value) === false) {
        printError("phoneErr", "Invalid phone format");
    } else {
        phoneErr = false;
    }
    

    if (summary.value.trim() === '') {
        printError("summaryErr", "Summary cannot be empty");
    } else {
        summaryErr = false;
    }

    if ((nameErr || emailErr || ageErr || summaryErr || phoneErr || fileErr) === true) {
        return false;
    }
}
</script>
</body>

</html>