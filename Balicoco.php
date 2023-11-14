<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>student profile</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/thumbnail.css" />
    <link rel="stylesheet" href="styles/main2.css" />
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/sale.css" />
    <link rel="stylesheet" href="styles/bot.css" />
    <link rel="stylesheet" href="aboutstyles/abt-us.css" />
  </head>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap");
  .header {
    display: flex;
    justify-content: space-between;
    background-color: pink;
    color: #fff;
    padding: 20px 40px;
    width: 2110px;
    align-items: center;
}

.left-col {
    display: flex;
    align-items: center;
}

.left-col a {
    text-decoration: none;
    margin-right: 20px;
    color: black;
    font-weight: bold;
    font-size: 20px;
}

.left-col img {
    width: 50px;
    height: 50px;
}

.right-col {
    display: flex;
    align-items: flex-end;
}

.right-col input[type="text"] {
    position: static;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-right: 20px;
}

.right-col button {
    background-color: gray;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
}

.right-col a {
    text-decoration: none;
    margin-right: 20px;
    color: black;
    font-size: 18px;
}

.icon-con {
    display: flex;
    align-items: center;
}

.icon-con img {
    width: 50px;
    height: 50px;
    margin-right: 20px;S
}

.count {
    background-color: #f00;
    color: #fff;
    border-radius: 50%;
    padding: 5px 10px;
    margin-left: 5px;
}


    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    :root {
      --primary-color: #aa4452;
      --text-color: #31302f;
    }
    html {
      font-size: 10px;
    }


    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    :root {
      --primary-color: #800080;
      --text-color: #0000FF;
    }
    html {
      font-size: 10px;
    }
    body {
      font-family: Inter, sans-serif;
      background-color: #800080;
      color: #fefefe;
    }

    /* common styles */
    img {
      width: 100%;
    }
    a {
      text-decoration: none;
      color: #;
    }
    .description {
      margin-top: 1rem;
      font-size: 1.5rem;
      font-weight: 400;
      color: var(--text-color);
    }
    .title {
      color: var(--primary-color);
      font-weight: 700;
      font-size: 2rem;
      text-transform: uppercase;
    }
    .item_preTitle {
      font-size: 1.4rem;
      color: var(--text-color);
      font-weight: 300;
    }
    .item_title {
      font-size: 1.6rem;
      color: #31302f;
      font-weight: 500;
      margin: 0.8rem 0;
    }
    .item_subtitle {
      font-size: 1.4rem;
      color: var(--text-color);
      font-weight: 400;
    }

    /* layouts */
    .container {
      max-width: 1000px;
      width: 90%;
      margin: 0 auto;
      display: grid;
      padding: 5rem;
      background: #fefefe;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
    }
    @media only screen and (max-width: 768px) {
      .container {
        width: 100%;
        grid-template-columns: 1fr;
        padding: 3rem;
        gap: 7rem;
      }
    }
    .profile {
      grid-column: 1 / -1;
      margin-bottom: 2rem;
    }
    .group-1,
    .group-2 {
      display: flex;
      flex-direction: column;
      gap: 5rem;
    }
    .group-3 {
      max-width: 700px;
      width: 100%;
      margin: 0 auto;
      grid-column: 1/-1;
      display: flex;
      flex-direction: row;
      gap: 5rem;
    }
    .group-3 > div {
      flex: 1;
    }
    @media only screen and (max-width: 768px) {
      .profile {
        margin-bottom: 0;
      }
      .group-3 {
        flex-direction: column;
      }
    }

    /* profile */
    .profile_container {
      display: flex;
      gap: 2rem;
    }
    .profile_profileImg {
      max-width: 250px;
    }
    .profile_name_firstName {
      color: #31302f;
      font-weight: 200;
      font-size: clamp(2rem, 8vw, 4rem);
      text-transform: uppercase;
      display: block;
      margin-bottom: -0.8rem;
    }
    .profile_name_lastName {
      color: var(--primary-color);
      font-weight: 700;
      font-size: clamp(2.5rem, 15vw, 7rem);
      text-transform: uppercase;
      display: block;
    }
    .profile_title {
      font-size: 1.5rem;
      font-weight: 400;
      text-transform: uppercase;
    }
    .downloadBtn {
      display: block;
      text-decoration: underline;
      font-size: 1.6rem;
      margin-top: 1rem;
    }
    .downloadBtn:hover {
      color: var(--primary-color);
    }
    @media only screen and (max-width: 768px) {
      .profile_container {
        flex-direction: column;
      }
    }

    /* Expertise */
    .skills_list {
      margin-top: 1rem;
      margin-left: 2rem;
      line-height: 2;
    }

    /* Ref  */
    .ref_item {
      margin-top: 2rem;
    }
    .ref_name {
      font-size: 1.6rem;
      font-weight: 700;
    }

    /* eduction */
    .edu_item {
      margin-top: 2rem;
    }

    /* certification */
    .certification_item {
      margin-top: 2rem;
    }
    /* exp */
    .exp_item {
      margin-top: 2rem;
    }

    /* awards */
    .awards_item {
      margin-top: 2rem;
    }
    /* Interests */
    .interest_items {
      margin-top: 2rem;
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 2rem;
    }
    .interest_item {
      font-size: 1.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      color: var(--text-color);
    }
    .interest_item svg {
      width: 2rem;
    }

    /* socials */
    .social_items {
      margin-top: 2rem;
    }
    .social_item {
      margin-top: 1.5rem;
      font-size: 1.5rem;
      display: flex;
      gap: 0.5rem;
      align-items: center;
      justify-content: flex-start;
      color: var(--text-color);
    }
    .social_item:hover {
      color: var(--primary-color);
    }
    .social_item svg {
      width: 2rem;
    }
	
	.bottom-container {
    display: flex;
    justify-content: space-around;
    background-color: pink;
    color: #fff;
    padding: 20px;
}

.bottom-info {
    text-align: left;
}

.bottom-info h3,
.bottom-info a {
    color: black;
    text-decoration: none;
}

.bottom-info p {
    margin: 8px 0;
    color: black;
    font-size: 15px;
}

.bottom-contact {
    text-align: left;
}

.bottom-contact h3 {
    color: black;
    font-size: 18px;
    margin-bottom: 10px;
}

.holder {
    display: flex;
    margin-bottom: 10px;
}

#input-el {
    flex: 1;
    padding: 10px;
    border: none;
    border-radius: 5px;
}

#btn-el {
    background-color: black;
    color: gray;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
}

.icons {
    display: flex;
}

.icons a {
    margin-right: 10px;
}

.icons img {
    width: 30px;
    height: 30px;
}


    hr {
      grid-column: 1/-1;
      width: 80%;
      margin: 0 auto;
      margin-top: 5rem;
      margin-bottom: 1rem;
      border: none;
      border-top: 2px solid rgba(128, 128, 128, 0.229);
    }
    @media only screen and (max-width: 768px) {
      hr {
        margin: 0 auto;
      }
    }
  </style>

  <body>
    <div class="header">
      <div class="left-col">
        <a href="about.html"><img src="logo.jpg" alt="logo" /></a>
        <a href="home.html"><p>Home</p></a>
        <a href="shop.html"><p>Shop</p></a>
        <a href="contact.html"><p>Contact</p></a>
        <a href="about.html"><p>About</p></a>
      </div>

      <div class="right-col">
        <div style="display: flex; align-items: center">
          <input type="text" placeholder="Search put store" />
          <button><img src="icons-search-50.PNG" alt="" /></button>
        </div>
        <a href="our-team.html"
          ><img src="icons8-user-groups-64.png" alt=""
        /></a>
        <div class="icon-con">
          <a href="faqs.html"><img src="check-inbox.png" alt="" /></a>
          <div class="count">3</div>
        </div>
      </div>
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />  
    <div class="container">
      <div class="profile">
        <div class="profile_container">
          <div class="profile_profileImg">
            <img src="pogi.jpg" alt="Namatay" />
          </div>
          <div>
            <h1 class="profile_name">
              <span class="profile_name_firstName">John Carlo</span>
              <span class="profile_name_lastName">Balicoco</span>
            </h1>
            <p class="profile_title">UX designer</p>

          </div>
        </div>
      </div>
      <div class="group-1">
        <div class="skills">
          <h3 class="title">Expertise</h3>
          <ul class="skills_list description">
            <li>HTML</li>
            <li>CSS</li>
            <li>php</li>
          </ul>
        </div>

        <div class="edu">
          <h3 class="title">Education</h3>
          <div class="edu_item">
            <p class="item_preTitle">2010 - 2016</p>
            <h4 class="item_title">Elementary</h4>
            <p class="item_subtitle">kambonggan Elementary School</p>
          </div>
          <div class="edu_item">
            <p class="item_preTitle">2016 - 2020</p>
            <h4 class="item_title">High school</h4>
            <p class="item_subtitle">North Fairview high school</p>
          </div>
          <div class="edu_item">
            <p class="item_preTitle">2020 - 2022</p>
            <h4 class="item_title">Senior High school(STEM)</h4>
            <p class="item_subtitle">Our Lady of Fatima University</p>
          </div>
          <div class="edu_item">
            <p class="item_preTitle">2022 - present</p>
            <h4 class="item_title">
              Bachelor of Science in Information Technology
            </h4>
            <p class="item_subtitle">Our Lady of Fatima University</p>
          </div>
        </div>

        <div class="certification">
          <h3 class="title">Role in the group</h3>
          <div class="certification_item">
            <p class="item_preTitle">2023 - Present</p>
            <h4 class="item_title">UX designer</h4>
          </div>
        </div>
      </div>
      <div class="group-2">
        <div class="exp">
          <h3 class="title">Experience</h3>
          <div class="exp_item">
            <p class="item_preTitle">2022 - Present</p>
            <h4 class="item_title">Our Lady of Fatima University</h4>
            <p class="item_subtitle">UX and UI designer</p>
          </div>
        </div>

        <div class="interest">
          <h3 class="title">Interest</h3>
          <div class="interest_items">
            <div class="interest_item">
              <i data-feather="music"></i>
              <span>Music</span>
            </div>
            <div class="interest_item">
              <i data-feather="book"></i>
              <span>Books</span>
            </div>
            <div class="interest_item">
              <i data-feather="map"></i>
              <span>Travel</span>
            </div>
			 <div class="interest_item">
              <i data-feather="">computer</i>
              <span>Online Games</span>
            </div>
          </div>
        </div>
      </div>
      <hr />
      <div class="group-3">
        <div class="contact">
          <h3 class="title">Contact</h3>
          <div class="contact_info">
            <p class="description">fairview, Quezon City</p>
            <p class="description">+63 992 448 4632</p>
            <p class="description">jbalicoco0936qc@student.fatima.edu.ph</p>
          </div>
        </div>
        <div class="social">
          <h3 class="title">Socials</h3>
          <div class="social_items">
            <a
              href="https://www.facebook.com/bxpogijc?mibextid=ZbWKwL"
              target="_b"
              class="social_item"
            >
              <i data-feather="facebook"></i>
              <span>john carlo</span>
            </a>
            <a
              href="https://l.messenger.com/l.php?u=https%3A%2F%2Finstagram.com%2Fjohncarloooo24%3Figshid%3DNGVhN2U2NjQ0Yg%253D%253D&h=AT2hoLJRNK3yWuFmWXYHnEstatv0uz1YDziaDzpuzDQyumSHser5dPHtoM19NglPqej_D2I-7hwYnzpU4zeP97k6hyu4Y3xtgpvGjXL_gpdYl8NMAE0ZU4L3IKVVqWrTaNSp3g"
              target="_blank"
              class="social_item"
            >
              <i data-feather="instagram"></i>
              <span>johncarloooo24</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script>
      feather.replace();
    </script>
     <div style="border: 1px solid #fff; margin-top: 90px; margin-bottom: 90px; opacity: 0.4;"></div>
 
     <div class="bottom-container">
         <div class="bottom-info">   
     <h3>INFORMATION</h3></a>
             <a href="about.html"><p>About us</p></a>
             <a href="about.html"><p>Terms and Policy</p></a>
             <a href="about.html"><p>Address</p></a>
             <a href="about.html"><p> Delivery Information</p></a>
             <a href="faqs.html"><p>FAQs</p></a>
         </div>
         <div class="bottom-info">   
             <a href="our-team.html"><h3>OUR TEAM</h3></a>
             <p>Namatay, Bryan G.</p>
             <p>Tiolo, Christine S.</p>
             <p>Lucio, Christel A.</p>
             <p>Cagurin, Carl John G.</p>
             <p>Balicoco, John Carlo</p>
         </div>
         <div class="bottom-contact">
             <h3>JOIN OUR EMAIL LIST FOR 10% OFF YOUR FIRST ORDER</h3>              
             <div class="holder">
                 <input id="input-el" type="text" placeholder="Email Address">
                 <button id="btn-el">&#62;</button>
             </div>
             <div class="icons">
                 <a href="https://www.facebook.com/profile.php?id=61550827335011&mibextid=b06tZ0"> <img src="facebook.png" alt="fb logo"></a>
                 <a href="https://instagram.com/sevenevelyn2023?igshid=OGQ5ZDc2ODk2ZA=="><img src="instagram.png" alt="Ig logo"> </a>
                 <a href="https://twitter.com/LaRosasShop?t=FRNHfr8xgCCpCzB79uoxPg&s=07"><img src="twitter.png" alt="twitter logo"> </a>
                 <a href="https://www.youtube.com/@SevenEvelyn-ws2hk"><img src="youtube.png" alt="yt logo"></a>
             </div>
         </div>
     </div>
  </body>
</html>