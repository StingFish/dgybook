<html>
<head>
    <meta charset="UTF-8">
    <title>Javascript Password Generator</title>
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <style>
        /*general css*/
* {
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
}

body {
    height: 100vh;
    background-color: #ebf0f2;
    position: relative;
}
.royal-blue
{
    color: royalblue;

}
/*main heading*/
    .main-heading{
        position: absolute;
        top: 20px;
        left: 40%;
        padding: 10px 30px;
        border-radius: 50px;
background: linear-gradient(225deg, #dcddde, #ffffff);
box-shadow:  -20px 20px 60px #cfd1d2, 
             20px -20px 60px #ffffff;
    }

/*centring main body*/
.settings {
    height: 50vh;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
}

/*main button styling*/
.btn-main {
    position: absolute;
    padding: 25px 35px;
    border: 0;
    font-family: 'Montserrat';
    /* font-weight: 400;*/
    font-size: 1.1em;
    border-radius: 20px;
    background: #ebf0f2;
    box-shadow: 20px 20px 60px #c8ccce,
        -20px -20px 60px #ffffff;
    left: 45%;
    top: 85%;
}

/*setting styling*/
.container {
    height: 400px;
    width: 500px;
    position: absolute;
    left: 35%;
    top: 18%;
    border-radius: 50px;
    background: #ebf0f2;
    box-shadow: inset 20px 20px 60px #c8ccce,
        inset -20px -20px 60px #ffffff;

}

/*input checkbox spacing*/
input[type=checkbox] {
    position: absolute;
    left: 80%;
}

/*result container styling*/
.result-container {
    background-color: rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    font-size: 18px;
    border-radius: 10px;
    letter-spacing: 1px;
    padding: 15px 10px;
    height: 40px;
    margin-top: 5%;
    left: 7%;
    width: 80%;
}

/*final result text break*/
.result-container #result {
    word-wrap: break-word;
    max-width: calc(100% - 40px);
}

/*clipboard butto styling*/
#clipboard {
    border-radius: 50px;
    background: #f4f6f7;
    box-shadow: -20px -20px 60px #cfd1d2,
        20px 20px 60px #ffffff;
    height: 40px;
    width: 50px;
    border: 0;
}
    </style>
</head>

<body>
    <!-- Html Starting... -->
    <!-- heading html start -->
    <div class="main-heading">
        <h2> <span class="royal-blue"> Js </span>Password Generator</h2>
    </div>
    <!-- heading html end -->
    <!--body html start  -->
    <div class="container">
        <div class="result-container">
            <span id="result" type="password"></span>
        </div>
        <div class="settings">
            <div class="setting .neu">
                <label>Password length</label>
                <input type="number" id="length" min='4' max='20' value='20' />
            </div>
            <div class="setting">
                <label>Include uppercase letters</label>
                <input type="checkbox" id="uppercase" checked />
            </div>
            <div class="setting">
                <label>Include lowercase letters</label>
                <input type="checkbox" id="lowercase" checked />
            </div>
            <div class="setting">
                <label>Include numbers</label>
                <input type="checkbox" id="numbers" checked />
            </div>
            <div class="setting">
                <label>Include symbols</label>
                <input type="checkbox" id="symbols" checked />
            </div>
        </div>
    </div>
    <button class=" btn-main" id="generate">
        Generate Password
    </button>
    <!-- linking script.js -->
    <script>
        // declare varaibles from dom after load to make sure they are current 
const results = document.querySelector("#result");
const UNInum = [48, 57];
const UNIupper = [65, 90];
const UNIlower = [97, 122];
const UNIsym = [33, 47];



document.querySelector("#generate").addEventListener('click', () => {
    const length = document.querySelector("#length").value;
    const upper = document.querySelector("#uppercase").checked;
    const lower = document.querySelector("#lowercase").checked;
    const numbers = document.querySelector("#numbers").checked;
    const symbols = document.querySelector("#symbols").checked;

    const randSelector = [];
    const password = [];
    //String.fromCharCode();
    if (upper === true) {
        for (let i = UNIupper[0]; i <= UNIupper[1]; i++) {
            randSelector.push(i);
        }
          // console.log(randSelector[6]);
    }
    if (numbers === true) {
        for (let i = UNInum[0]; i <= UNInum[1]; i++) {
            randSelector.push(i);
        }
          // console.log(randSelector);

    }
    if (symbols === true) {
        for (let i = UNIsym[0]; i <= UNIsym[1]; i++) {
            randSelector.push(i);
        }
    }
    if (lower === true) {
        for (let i = UNIlower[0]; i <= UNIlower[1]; i++) {
            randSelector.push(i);
        }
    }

    for (let i = 0; i < length; i++) {
        password.push(String.fromCharCode(randSelector[Math.floor(Math.random() * randSelector.length)]))
    }
    results.textContent = password.join("");
})
    </script>
</body>
<!-- Html Ending.... -->

</html>
