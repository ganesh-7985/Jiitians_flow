<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resources Page</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
  /* Global Styles */

  :root {
  --white: #fff;
  --black: #0c0d0e;
  --orange: #f48024;
  --yellow: #fbf2d4;
  --green: #5eba7d;
  --blue: #0077cc;
  --powder: #e1ecf4;
  --red: #d1383d;
  --black-025: #fafafb;
  --black-050: #eff0f1;
  --black-075: #e4e6e8;
  --black-100: #d6d9dc;
  --black-150: #c8ccd0;
  --black-200: #bbc0c4;
  --black-300: #9fa6ad;
  --black-350: #9199a1;
  --black-400: #848d95;
  --black-500: #6a737c;
  --black-600: #535a60;
  --black-700: #3c4146;
  --black-750: #2f3337;
  --black-800: #242729;
  --black-900: #0c0d0e;
  --orange-050: #fff7f2;
  --orange-100: #fee3cf;
  --orange-200: #fcd0ad;
  --orange-300: #f7aa6d;
  --orange-400: #f48024;
  --orange-500: #f2720c;
  --orange-600: #da670b;
  --orange-700: #bd5c00;
  --orange-800: #a35200;
  --orange-900: #874600;
  --blue-050: #f2f9ff;
  --blue-100: #cfeafe;
  --blue-200: #addafc;
  --blue-300: #6cbbf7;
  --blue-400: #379fef;
  --blue-500: #0095ff;
  --blue-600: #0077cc;
  --blue-700: #0064bd;
  --blue-800: #0054a3;
  --blue-900: #004487;
  --powder-050: #f4f8fb;
  --powder-100: #e1ecf4;
  --powder-200: #d1e5f1;
  --powder-300: #b3d3ea;
  --powder-400: #a0c7e4;
  --powder-500: #7aa7c7;
  --powder-600: #5b8db1;
  --powder-700: #39739d;
  --powder-800: #2c5777;
  --powder-900: #1e3c52;
  --green-025: #eef8f1;
  --green-050: #dcf0e2;
  --green-100: #cae8d4;
  --green-200: #a6d9b7;
  --green-300: #82ca9a;
  --green-400: #5eba7d;
  --green-500: #48a868;
  --green-600: #3d8f58;
  --green-700: #2f6f44;
  --green-800: #29603b;
  --green-900: #1e472c;
  --yellow-050: #fdf7e3;
  --yellow-100: #fbf2d4;
  --yellow-200: #f1e5bc;
  --yellow-300: #e6d178;
  --yellow-400: #e9c63f;
  --yellow-500: #ddb624;
  --yellow-600: #cea51b;
  --yellow-700: #b89516;
  --yellow-800: #9f8010;
  --yellow-900: #826a0b;
  --red-050: #fdf3f4;
  --red-100: #f9d3d7;
  --red-200: #f4b4bb;
  --red-300: #e87c87;
  --red-400: #de535e;
  --red-500: #d1383d;
  --red-600: #c02d2e;
  --red-700: #ac2726;
  --red-800: #942121;
  --red-900: #7a1819;
  --gold: #ffcc01;
  --gold-lighter: #fff4d1;
  --gold-darker: #f1b600;
  --silver: #b4b8bc;
  --silver-lighter: #e8e8e8;
  --silver-darker: #9a9c9f;
  --bronze: #caa789;
  --bronze-lighter: #f2e9e1;
  --bronze-darker: #ab825f;
  --fc-dark: #0c0d0e;
  --fc-medium: #3c4146;
  --fc-light: #6a737c;
  --focus-ring: rgba(0,149,255,0.15);
  --focus-ring-success: rgba(166,217,183,0.4);
  --focus-ring-warning: rgba(233,198,63,0.4);
  --focus-ring-error: rgba(192,45,46,0.15);
  --focus-ring-muted: rgba(36,39,41,0.1);
  --bs-sm: 0 1px 2px rgba(0,0,0,0.05),0 1px 4px rgba(0,0,0,0.05),0 2px 8px rgba(0,0,0,0.05);
  --bs-md: 0 1px 3px rgba(0,0,0,0.06),0 2px 6px rgba(0,0,0,0.06),0 3px 8px rgba(0,0,0,0.09);
  --bs-lg: 0 1px 4px rgba(0,0,0,0.09),0 3px 8px rgba(0,0,0,0.09),0 4px 13px rgba(0,0,0,0.13);
  --scrollbar: rgba(0,0,0,0.2);
  --highlight-bg: #f6f6f6;
  --highlight-color: #2f3337;
  --highlight-comment: #656e77;
  --highlight-punctuation: var(--black-600);
  --highlight-namespace: #b75501;
  --highlight-attribute: #015692;
  --highlight-literal: #b75501;
  --highlight-symbol: #803378;
  --highlight-keyword: #015692;
  --highlight-variable: #54790d;
  --highlight-addition: #2f6f44;
  --highlight-deletion: #c02d2e;
  --dark-blue:#2b2d6e;
  --magnolia:#f7f6f9;
}

@font-face {
  font-family: "Source Sans Pro";
  font-style: normal;
  font-weight: 400;
  src: local("Source Sans Pro Regular"), local("SourceSans Pro-Regular"), local("Source Sans Pro 400"), local("SourceSans Pro-400"), local("Source Sans Pro"), url("https://cdn.sstatic.net/Fonts/source-sans-pro/source-sans-pro-regular-webfont.woff?v=993db0ec4347") format("woff");
}
@font-face {
  font-family: "Source Sans Pro Bold";
  font-style: normal;
  font-weight: 700;
  src: local("Source Sans Pro Bold Bold"), local("SourceSans Pro Bold-Bold"), local("Source Sans Pro Bold 700"), local("SourceSans Pro Bold-700"), url("https://cdn.sstatic.net/Fonts/source-sans-pro/source-sans-pro-bold-webfont.woff?v=f52ccc0bbce9") format("woff");
}
@font-face {
  font-family: "Roboto Slab";
  font-style: normal;
  font-weight: 400;
  src: local("Roboto Slab Regular"), local("RobotoSlab-Regular"), local("Roboto Slab 400"), local("RobotoSlab-400"), local("Roboto Slab"), url("https://cdn.sstatic.net/Fonts/roboto-slab/roboto-slab-regular-webfont.woff?v=a75088a46d79") format("woff");
}
@font-face {
  font-family: "Roboto Slab Bold";
  font-style: normal;
  font-weight: 700;
  src: local("Roboto Slab Bold Bold"), local("RobotoSlab Bold-Bold"), local("Roboto Slab Bold 700"), local("RobotoSlab Bold-700"), url("https://cdn.sstatic.net/Fonts/roboto-slab/roboto-slab-bold-webfont.woff?v=719d1c709127") format("woff");
}
*, *::before, *::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-size: 10px;
  color: var(--black-800);
}

.container {
  width: 100%;
  max-width: 126.4rem;
  margin: 0 auto;
  padding: 0 1.5rem;
}

section {
  padding: 5rem 0;
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
  color: var(--blue-600);
  cursor: pointer;
}

img {
  width: 100%;
  max-width: 100%;
  height: auto;
}

.btn {
  text-align: center;
  font-size: 1.3rem;
  border-radius: 3px;
  transition: all 0.5s;
  padding: 1.3rem 2.5rem;
}

.btn-orange {
  background-color: var(--orange);
  color: var(--white);
}

.btn-dark-blue {
  background-color: var(--dark-blue);
  color: var(--white);
}

body, h1, h2, h3, p {
  margin: 0;
  padding: 0;
}

/* Apply a box-sizing border-box */
* {
  box-sizing: border-box;
}

/* Wrapper styles using flexbox */
.wrapper {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}
/* Header */
header {
  width: 100%;
  height: 50px;
  background-color: var(--black-025);
  border-top: 3px solid var(--orange);
  position: fixed;
  left: 0;
  top: 0;
  z-index: 99;
  box-shadow: var(--bs-sm);
}

.nav-container {
  width: 100%;
  height: 100%;
  max-width: 126.4rem;
  margin: 0 auto;
}

nav {
  display: flex;
  width: inherit;
  height: inherit;
}

.nav-brand {
  flex: 1 0 auto;
  display: flex;
  align-items: center;
}

.nav-icon {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 1.5rem 0;
}
.nav-icon:hover {
  background-color: var(--silver-lighter);
}
.nav-icon i {
  font-size: 3rem;
}

.fa-stack-overflow {
  color: var(--orange);
}

.nav-icon-text {
  font-size: 1.8rem;
  margin-left: 0.5rem;
  color: var(--black);
}
.nav-icon-text span {
  font-weight: bold;
}
.content-section {
  background: #ffffff;
  /* border-radius: 20px; */
  padding: 10px 20px;
  /* border: 1px solid #dddddd; */
  border-radius: 10px;
  margin-bottom: 20px;
}
.nav-link {
  color: var(--black-600);
  font-weight: 400;
}

.current-link {
  background-color: var(--black-050);
  color: var(--black-900);
  font-weight: bold;
}

.nav-ul i {
  margin-left: -1.5rem;
  color: var(--black-400);
}

.nav-item {
  width: 100%;
  padding: 1rem 2rem;
}

.nav-base-links {
  flex: 1 0 auto;
  display: flex;
  align-items: center;
  font-size: 1.3rem;
}
.nav-base-links ul {
  display: flex;
  align-items: center;
  justify-content: center;
}
.nav-base-links ul li {
  padding: 0.8rem 1.2rem;
  border-radius: 3rem;
  margin: 0 0.3rem;
}
.nav-base-links ul li:hover {
  background-color: var(--silver-lighter);
}
.nav-base-links a {
  color: var(--black-600);
}

.nav-search {
  flex: 30 0 auto;
  display: flex;
  align-items: center;
  margin-right: 1rem;
  position: relative;
}

.search-container {
  width: 100%;
  border: 1px solid var(--black-200);
  border-radius: 3px;
  padding: 0.8rem;
  background-color: var(--white);
  display: flex;
  align-items: center;
}
.search-container i {
  color: var(--black-200);
  font-size: 1.5rem;
  font-weight: 600;
}
.search-container input[type=text] {
  flex: 1 1 auto;
  margin-left: 0.5rem;
  border: none;
  outline: none;
  color: var(--black-700);
}
.search-container input[type=text]::placeholder {
  color: var(--black-200);
}
.search-container:focus-within {
  border-color: var(--blue-300);
  box-shadow: 0 0 0 0.4rem var(--focus-ring);
}

.search-btn {
  height: 100%;
  align-items: center;
  justify-content: center;
  padding: 0 1rem;
  cursor: pointer;
  display: none;
  margin-right: 1rem;
}
.search-btn i {
  font-size: 1.7rem;
  color: var(--black-700);
}
.search-btn:hover {
  background-color: var(--silver-lighter);
}

.search-hints {
  display: none;
  position: absolute;
  top: 5rem;
  left: 0;
  width: 100%;
  background-color: var(--white);
  border-radius: 0.3rem;
  box-shadow: var(--bs-lg);
}
.search-hints.open {
  display: block;
}

.search-arrow-up {
  position: absolute;
  content: "";
  top: -1.2rem;
  height: 1.2rem;
  width: 100%;
  overflow: hidden;
}
.search-arrow-up:before {
  position: absolute;
  content: "";
  top: 1.2rem;
  left: 2rem;
  width: 1.2rem;
  height: 1.2rem;
  background-color: var(--white);
  border: 1px solid var(--black-150);
  box-shadow: 2px 0 8px rgba(59, 64, 69, 0.1);
  transform: translate(-50%, -50%) rotate(45deg);
  transition: all 0.2s;
}

.search-hint-body {
  border-bottom: 1px solid var(--black-075);
  padding: 1.2rem 1.2rem 0;
  display: flex;
}

.hints-grid-column {
  flex-basis: 50%;
}

.hint-text {
  margin-bottom: 1.2rem;
  font-size: 1.3rem;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: 400;
  color: var(--black-300);
}
.hint-text span {
  font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, sans-serif !important;
  color: var(--fc-medium);
}

.search-hint-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1.2rem;
}
.search-hint-footer .btn {
  background-color: var(--powder-100);
  color: var(--powder-800);
  padding: 0.6rem;
  border-radius: 0.3rem;
  border: 1px solid var(--powder-600);
  font-size: 1.1rem;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}
.search-hint-footer .btn:hover {
  background-color: var(--powder-300);
}

.search-help {
  font-size: 1.1rem;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: 400;
}

.nav-right-buttons {
  flex: 1 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
}

.btn-login {
  background-color: var(--powder);
  color: var(--blue-700);
  border: 1px solid var(--blue-300);
  padding: 0.8rem 1rem;
}
.btn-login:hover {
  background-color: var(--blue-200);
}

.btn-register {
  background-color: var(--blue-500);
  color: var(--white);
  margin-left: 0.5rem;
  padding: 0.8rem 1rem;
}
.btn-register:hover {
  background-color: var(--blue-600);
}

/* sidebar */
.sidebar-container {
  position: fixed;
  width: 220px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #1a1a1a;
  color: #fff;
}

.content-container {
  padding-top: 20px;
}

.sidebar-logo {
  padding: 10px 15px 10px 30px;
  font-size: 20px;
  background-color: #2574A9;
}

.sidebar-navigation {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 20px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: #fff;
  text-decoration: none;
  font-size: small;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #2574A9;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 13px;
  text-transform: uppercase;
  background-color: #151515;
  padding: 10px 15px 10px 30px;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}

.content-container {
  padding-left: 220px;
}


.r-container {
  width: 100%;
  max-width: 110.4rem;
  margin-right:5%;
  padding-top: 100px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  float: right;
}

.r-container {
  max-width: 110.4rem;
  margin-right:5%;
  margin-top: 5%;
  padding-top: 100px;
  text-align: center;
  background-color: #fff;
  padding: 100px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  align-items: center;

} 

.semesters {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 20px;
}

.semester-btn {
  padding: 12px 24px;
  margin: 8px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.semester-btn:hover {
  background-color: #45a049;
}

.subjects {
  display: none;
  margin-top: 20px;
  text-align: left;
  width: 100%;
}

.subject-link {
  display: block;
  margin: 8px 0;
  text-decoration: none;
  color: #333;
  padding: 10px;
  border-radius: 5px;
  background-color: #e0e0e0;
  transition: background-color 0.3s ease;
}

.subject-link:hover {
  background-color: #d0d0d0;
}

h1{
  color: red;
}
</style>
  <script src="https://kit.fontawesome.com/b8f66c2488.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- navbar -->
  <header>
    <div class="nav-container">
      <nav>
        <div class="nav-brand">
          <div class="hamburger-menu-container">


          </div>

          <a href="" class="nav-icon">
            <i class="fa-brands fa-buffer"></i>
            <a href="{% url 'stackbase:home' %}" style="text-decoration: none; color: black;">
              <div class="nav-icon-text">JIITian's<span class="nav-bold-text"> flow</span>
            </a>
          </a>
        </div>
        <div class="nav-base-links">
          <ul>
            <li><a href="../resources/index.php">Resources</a></li>
            <li><a href="../tags/index.html">Tags</a></li>
            
          </ul>
        </div>
        <div class="nav-search">
          <div class="search-container">
            <i class="fa-brands fa-sistrix"></i>
            <form action="" method="GET">
              <input type="text" id="" name="search-area" placeholder="Search...">

            </form>
          </div>
          <button class="btn-register" style="margin-left: 20px;"> Login</button>

        </div>
      </nav>
    </div>
  </header>
  
  <!-- sidebar -->
  <div>
    <div class="sidebar-container">
      <div class="sidebar-logo">
        JIITian flow
      </div>
      <ul class="sidebar-navigation">
        <li class="header">Navigation</li>
        <li>
          <a href="../Main_page/index.html">
            <i class="fa fa-home" aria-hidden="true" aria-setsize="10px"></i> Homepage
          </a>
        </li>
        <li>
          <a href="../top_questions/index.html">
            <i class="fa fa-question" aria-hidden="true"></i> Questions
          </a>
        </li>
        <li class="header">Public</li>
        <li>
          <a href="../resources/index.php">
            <i class="fa fa-book" aria-hidden="true"></i> Resources
          </a>
        </li>
        <li>
          <a href="../tags/index.html">
            <i class="fa fa-tags" aria-hidden="true"></i> Tags
          </a>
        </li>
        <li>
          <a href="../users/index.html">
            <i class="fa fa-users" aria-hidden="true"></i> Users
          </a>
        </li>
      </ul>
    </div>
  </div>

<!-- resources -->
  <div class="r-container">
    <h1>Select a Semester:</h1>
    <div class="semesters">
      <?php
      // Simulating PHP backend, replace this with actual dynamic data fetching
      for ($i = 1; $i <= 6; $i++) {
        echo "<button class='semester-btn' onclick='showSubjects($i)'>Semester $i</button>";
      }
      ?>
    </div>
    <div class="subjects" id="subjectsList">
      <!-- Subjects for selected semester will appear here -->
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>
