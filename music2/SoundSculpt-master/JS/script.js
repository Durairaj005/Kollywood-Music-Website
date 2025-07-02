// Navbar and move to top button
const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menu = document.querySelector(".menu-list");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");

menuBtn.onclick = () => {
  menu.classList.add("active");
  menuBtn.classList.add("hide");
  cancelBtn.classList.add("show");
  body.classList.add("disabledScroll");
}

cancelBtn.onclick = () => {
  menu.classList.remove("active");
  menuBtn.classList.remove("hide");
  cancelBtn.classList.remove("show");
  body.classList.remove("disabledScroll");
}

const siteLogo = document.querySelector('.logo a');

// Get all the menu items
const navLinks = document.querySelectorAll('.menu-list li');

const playSongBtn = document.querySelector('.play-song-btn');

// Add click event listener to each menu item
navLinks.forEach(item => {
  item.addEventListener('click', function () {
    // Remove the 'active' class from all menu items
    navLinks.forEach(menuItem => menuItem.classList.remove('active-menu-list'));

    // Add the 'active' class to the clicked menu item
    this.classList.add('active-menu-list');
  });
});

playSongBtn.onclick = () => {
  removeActiveClass();
}

siteLogo.onclick = () => {
  removeActiveClass();
};

function removeActiveClass() {
  navLinks.forEach(menuItem => menuItem.classList.remove('active-menu-list'));
}

window.onscroll = () => {
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");

  // When the user scrolls down 75px from the top of the document, show the button
  if (document.body.scrollTop > 75 || document.documentElement.scrollTop > 75) {
    moveTopBtn.style.display = "block";
  } else {
    moveTopBtn.style.display = "none";
  }
}

// PLAY MUSIC 
const playSong = document.getElementById("song");
var icon = document.getElementById("icon");

icon.addEventListener("click", playMusic);

function playMusic() {
  if (playSong.paused) {
    playSong.play();
    icon.src = "./assets/Image/pause.png";
  } else {
    playSong.pause();
    icon.src = "./assets/Image/play.png";
  }
}

// Move to Top button
var moveTopBtn = document.getElementById("moveTopBtn");

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  removeActiveClass();
}

// PreLoader
var loader = document.getElementById("loading");
function preLoader() {
  loader.style.display = "none";
}

// CHOOSE A SONG
const buttons = document.querySelectorAll(".btn");

const photo = document.getElementById("banner");
const song = document.getElementById("song");
const songName = document.getElementById("songName");
const songBy = document.getElementById("songBy");
const aboutSong = document.getElementById("aboutSong");
const title = document.getElementById("title");
const download = document.getElementById("download");

buttons[0].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/rowdy baby.jpg";
  song.src = "./assets/Songs/Rowdy-Baby.mp3";
  songName.innerText = "Rowdy Baby";/*SoundSculpt-master\assets\Songs\Yammadi Aathadi - 8D(MP3_320K).mp3*/
  songBy.innerText = "Maari 2 (2018)";
  title.innerText = "Hero: Dhanush, Heroine: Sai Pallavi";
  download.href = "./assets/Songs/Rowdy-Baby.mp3";
  aboutSong.innerText = "Rowdy Baby is a popular Tamil song from the movie Maari 2, released in 2018. The song features Dhanush and Sai Pallavi, and it was composed by Yuvan Shankar Raja. The song's catchy tune, energetic choreography, and vibrant visuals contributed to its massive popularity, making it one of the most viewed South Indian songs on YouTube. The song's lyrics celebrate love and the carefree spirit of youth, and it has become a favorite among fans of Tamil cinema.";
});
buttons[1].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/2.jpg";
  song.src = "./assets/Songs/2.mp3";
  songName.innerText = "Arabic Kuthu (Halamithi Habibo)";
  songBy.innerText = "Beast (2022)";
  title.innerText = " Hero: Vijay , Heroine: Pooja Hegde";
  download.href = "./assets/Songs/2.mp3";
  aboutSong.innerText = " This energetic Arabic-Tamil fusion track, sung by Anirudh Ravichander and Jonita Gandhi, with music by Anirudh himself, quickly turned into a viral sensation. Vijays playful dance moves and comic charm, coupled with its infectious rhythm, made it an internet favorite, sparking countless memes and dance challenges on TikTok and Instagram. It broke YouTube 24-hour South Indian view record and enjoyed immense popularity globally.";
});

buttons[2].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/3.jpg";
  song.src = "./assets/Songs/mazaak.mp3";
  songName.innerText = "Vaathi Coming ";
  songBy.innerText = "Master (2021)";
  title.innerText = "Hero: Vijay , Heroine: Malavika Mohanan";
  download.href = "./assets/Songs/3.mp3";
  aboutSong.innerText = "iWith electrifying kuthu beats and Vijay’s signature dance steps, Vaathi Coming became a cultural phenomenon. Sung by Anirudh and Gana Balachandar, and composed by Anirudh Ravichander, this track transcended its movie origins to become a celebratory anthem. It was widely played at weddings, public events, political rallies, and even on international social media platforms.";
});

buttons[3].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/4.jpg";
  song.src = "./assets/Songs/4.mp3";
  songName.innerText = " Why This Kolaveri Di";
  songBy.innerText = "3 (2011)";
  title.innerText = " Hero: Dhanush ,Heroine: Shruti Haasan";
  download.href = "./assets/Songs/4.mp3";
  aboutSong.innerText = "A groundbreaking moment in Indian music, Why This Kolaveri Di was sung by Dhanush and composed by Anirudh Ravichander. With humorous Tanglish lyrics and a minimalistic beat, it captured the imagination of youth across the globe. It was the first Indian song to go truly viral, garnering international media coverage including features by BBC and TIME, and helped pave the way for digital music virality from India.";
});

buttons[4].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/5.jpg";
  song.src = "./assets/Songs/5.mp3";
  songName.innerText = "Enjoy Enjaami";
  songBy.innerText = " Independent (2021)";
  title.innerText = "Dhee & Arivu (No film cast)";
  download.href = "./assets/Songs/5.mp3";
  aboutSong.innerText = `An independent track that became a socio-cultural wave, Enjoy Enjaami was performed by Dhee and Arivu, composed by Santhosh Narayanan. It delves into themes of ancestry, land, and identity, blending Tamil folk with contemporary music. With over 200 million views, it marked a historic moment for Tamil indie music, even earning international recognition through performances at Expo Dubai and global campaigns like Spotify ads.
`;
});

buttons[5].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/6.jpg";
  song.src = "./assets/Songs/6.mp3";
  songName.innerText = "Aalaporaan Thamizhan";
  songBy.innerText = "Mersal (2017)";
  title.innerText = "Hero: Vijay and Heroine: Samantha, Kajal Aggarwal, Nithya Menen";
  download.href = "./assets/Songs/6.mp3";
  aboutSong.innerText = `This powerful anthem of Tamil pride was composed by A.R. Rahman and sung by Kailash Kher, Sathya Prakash, and Pooja AV. Rich in orchestration and lyrical depth, Aalaporaan Thamizhan resonated with Tamilians worldwide. The song is a staple at cultural events hosted by Tamil associations globally, symbolizing heritage and unity.

  `;
});

buttons[6].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/7.jpg";
  song.src = "./assets/Songs/Selfie-Pulla.mp3";
  songName.innerText = "Selfie Pulla ";
  songBy.innerText = "Kaththi (2014)";
  title.innerText = "Hero: Vijay ,Heroine: Samantha";
  download.href = "./assets/Songs/Selfie-Pulla.mp3";
  aboutSong.innerText = "Sung by Vijay and Sunidhi Chauhan with music by Anirudh Ravichander, Selfie Pulla captured the hearts of the youth with its quirky lyrics and peppy rhythm. The song became a club favorite and was especially popular among Tamil youth in Sri Lanka and Malaysia, cementing Vijay’s mass appeal internationally.";
});

buttons[7].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/8.jpg";
  song.src = "./assets/Songs/8.mp3";
  songName.innerText = "Marana Mass";
  songBy.innerText = " Petta (2019)";
  title.innerText = "Hero: Rajinikanth ,Heroine: Simran";
  download.href = "./assets/Songs/8.mp3";
  aboutSong.innerText = "  Rajinikanth’s charismatic presence, combined with the legendary voice of SP Balasubrahmanyam and music by Anirudh, made Marana Mass a theatrical celebration. It marked Rajini’s grand return to his iconic “mass hero” style. Fans celebrated it with cutouts and dance performances from Tamil Nadu to Singapore, reaffirming the superstar's global fan base.";
});

buttons[8].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/9.jpg";
  song.src = "./assets/Songs/9.mp3";
  songName.innerText = "Tum Tum";
  songBy.innerText = "Enemy (2021)";
  title.innerText = "Hero: Vishal ,Heroine: Mirnalini Ravi";
  download.href = "./assets/Songs/9.mp3";
  aboutSong.innerText = " A romantic melody sung by Sri Vardhini, Satya Yamini, and Roshini with music by Thaman S, Tum Tum took over social media as a popular audio track for short videos. With over 200 million views, its catchy rhythm made it a favorite for wedding, engagement, and couple-themed content across Asia and the Middle East."; 
});

buttons[9].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/10.webp";
  song.src = "./assets/Songs/10.mp3";
  songName.innerText = " Vaayadi Petha Pulla";
  songBy.innerText = "Kanaa (2018)";
  title.innerText = " Hero: Aishwarya Rajesh (lead), Sivakarthikeyan (supporting role)";
  download.href = "./assets/Songs/10.mp3";
  aboutSong.innerText = "A heartwarming father-daughter duet featuring Sivakarthikeyan, his real-life daughter Aaradhana, and Vaikom Vijayalakshmi, this song composed by Dhibu Ninan Thomas struck an emotional chord with families. Its adorable vocals and touching theme made it go viral, especially among parenting communities both in India and abroad."; 


});

buttons[10].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/11.jpg";
  song.src = "./assets/Songs/11.mp3";
  songName.innerText = "Guleba ";
  songBy.innerText = "Gulaebaghavali (2018)";
  title.innerText = "Hero: Prabhu Deva , Heroine: Hansika Motwani";
  download.href = "./assets/Songs/11.mp3";
  aboutSong.innerText = "This high-energy dance number, sung by Anirudh and Mervin Solomon and composed by the duo Vivek–Mervin, showcased Prabhu Deva’s unmatched dancing prowess. The song’s quirky beats and playful visuals made it an instant hit at parties and a frequent pick for TikTok dance routines. It became a staple at Tamil weddings and celebrations, with fans recreating its iconic dance moves.";
});

buttons[11].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/12.jpg";
  song.src = "./assets/Songs/12.mp3";
  songName.innerText = "Gaanda Kannazhagi";
  songBy.innerText = "Namma Veettu Pillai (2019)";
  title.innerText = " Hero: Sivakarthikeyan | Heroine: Aishwarya Rajesh";
  download.href = "./assets/Songs/12.mp3";
  aboutSong.innerText = " A rural romantic hit with folk roots, this duet by Anirudh and Neeti Mohan, composed by D. Imman, became extremely popular in Tamil villages and among youth. Its rustic charm and vibrant visuals helped it become a staple at weddings and local functions, capturing the beauty of traditional Tamil romance.";
});


/*function preLoader() {
  setTimeout(function() {
    document.getElementById("loading").style.display = "none";
  }, 3000); // 3000 milliseconds = 3 seconds
}
*/


