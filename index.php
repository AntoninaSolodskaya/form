<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Stage 3</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header class="header">
        <div class="nav-container">
            <div class="header-logo">
                <img class="graficlogo" src="images/Logo.png" alt="Logo">
            </div>
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
                <form>
                    <div class="field-section">
                        <label for="name" class="item">ФИО</label>
                        <input type="text" id="name"  name="username">
                    </div>
                    <div class="field-section">
                        <label for="emailId" class="item">E-mail</label>
                        <input type="text" id="emailId"  name="email">
                    </div>
                    <div class="field-phone-section">
                        <label for="countId" class="item">Телефон</label>
                        <div class="phone-wrap">
                            <div class="phone-field-wrap">
                                <input id="tel" type="tel" />
                            </div>
                            <div class="phone-btn-wrap">
                                <button type="button" id="addButton">+</button>
                            </div>
                        </div>
                        <ul id="telList"></ul>
                    </div>
                    <div class="field-section">
                        <label for="ageId" class="item">Возраст</label>
                        <input type="text" id="ageId"  name="age">
                    </div>
                    <div class="item-photo">Фотография</div>
                    <div class="image-upload">
                        <label for="fileId">
                            <img src="images/image.png" />
                        </label>

                        <input id="fileId" type="file" />
                    </div>
                    <div class="field-section">
                        <label for="summaryId" class="item">Резюме</label>
                        <textarea rows="10" cols="45" d="summaryId" name="summary" wrap="off"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="wrap">
            <div class="footer-container">
                <div class="footer-nav">
                    <ul>
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
                    <div class="footer-section">
                        <div class="footer-item">Courses</div>
                        <p>Project management</p>
                        <p>Android development</p>
                        <p>Online marketing</p>
                        <p>Front-end developer</p>
                    </div>
                    <div class="footer-section-blog">
                        <div class="footer-item">Interesting</div>
                        <p>Blog</p>
                        <p>Youtube</p>
                        <p>Team</p>
                        <p>Community</p>
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
<script>

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
</script>
</body>

</html>