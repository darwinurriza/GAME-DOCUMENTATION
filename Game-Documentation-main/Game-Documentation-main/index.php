<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Game Documentation</title>

        <!-- CSS STYLE -->
        <link rel="stylesheet" href="style.css">

        <!-- EMOTICONS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- ICON -->
        <link rel="shortcut icon" href="images/icon (2).png" type="image/x-icon">



    </head>

    <body>

        <header>

            <a href="#" class="logo">Epic.</a>

            <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#games">Characters</a></li>
                <li><a href="#dialog">Dialog</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>

            <div class="action">

                <div class="searchBx">

                    <a href="#"><i class='bx bx-search'></i></a>
                    <input type="text" placeholder="Search Games">

                </div>

            </div>

            <div class="toggleMenu" onclick="toggleMenu();"></div>

        </header>

        <!-- HERO SECTION -->

        <section class="banner" id="banner">

            <div class="bg">

                <div class="content">

                    <h2>“Epiko: Dive into a realm where myths come to life. Your legend begins now!”</h2><br>

                    <p>
                        "Welcome to Epiko, a realm where legends are born. In this epic adventure game, you'll explore mystical lands, encounter mythical creatures, and unravel ancient secrets. With a rich narrative, dynamic characters, and immersive settings, Epiko offers a gaming experience like no other. As a hero in this world, every choice you make shapes the story. So, are you ready to start your journey and create your own legend in Epiko?"
                    </p>

                    <a href="#contact" class="btn">Join Now</a>

                </div>

                <img src="images/humadapnon.png" alt="">

            </div>

        </section>

        <section class="about" id="about">

            <div class="contentBx">

                <h2>About Us</h2><br>

                <p>We are a team of two dedicated and passionate college students from Laguna State Polytechnic University in San Pablo City. Our shared love for storytelling, design, and game development brought us together to create Epiko.</p> <br>

                <p>As a storyteller, designer and web developer, I am responsible for crafting the rich narrative and immersive world of Epiko. My passion for storytelling and eye for design have been instrumental in bringing the game's characters and settings to life.</p><br>

                <p>Darwin is the technical genius behind Epiko. He has worked tirelessly to develop the game mechanics and create the sprites that populate our game world. His technical skills and dedication have been crucial in turning our vision for Epiko into reality.</p><br>

                <p>Together, we have combined our skills and passions to create a game that we are proud of. We hope that you enjoy playing Epiko as much as we enjoyed creating it.</p>

                <a href="#">Read More</a>

            </div>

            <img src="images/Game.png" alt="">

        </section>

        <section class="games" id="games">

            <h2>Game Development Documentation</h2>

            <ul>
                <li class="list active" data-filter="all">All</li>
                <li class="list" data-filter="character">Character</li>
                <li class="list" data-filter="settings">Settings</li>
                <li class="list" data-filter="plot">Plot</li>
                <li class="list" data-filter="location">Location</li>
            </ul>

            <div class="cardBx">

                <div class="card" data-item="character">

                    <img src="images/main character.png" alt="">

                    <div class="content">
                        <h4>Humadapnon</h4>

                        <div class="progress-line"><span></span></div>

                        <div class="info">
                            <p>Level<br><span>10</span></p>
                            <a href="#">Play Now</a>
                        </div>
                    </div>

                </div>

                <div class="card" data-item="character">
                    <img src="images/Nagmalitong.png" alt="">
                    <div class="content">
                        <h4>Nagmalitong Yawa</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Level<br><span>10</span></p>
                            <a href="#">Play Now</a>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="character">
                    <img src="images/mother.png" alt="">
                    <div class="content">
                        <h4>Musod Burubalaw</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Level<br><span>10</span></p>
                            <a href="#">Play Now</a>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="character">
                    <img src="images/father.png" alt="">
                    <div class="content">
                        <h4>Anggoy Ginbitinan</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Level<br><span>10</span></p>
                            <a href="#">Play Now</a>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="character">
                    <img src="images/labaw.png" alt="">
                    <div class="content">
                        <h4>Labaw</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Level<br><span>10</span></p>
                            <a href="#">Play Now</a>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="character">
                    <img src="images/Viva.png" alt="">
                    <div class="content">
                        <h4>Viva Matanayon</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Level<br><span>10</span></p>
                            <a href="#">Play Now</a>
                        </div>
                    </div>
                </div>

                <section class="character-management" id="character-management">
    <h2>Character Management</h2>
    <div class="form">
        <form action="save_character.php" method="post" enctype="multipart/form-data">
            <div class="inputBx">
                <p>Enter Name</p>
                <input type="text" name="name" placeholder="Character Name" required>
            </div>
            <div class="inputBx">
                <p>Enter Location</p>
                <input type="text" name="location" placeholder="Location" required>
            </div>
            <div class="inputBx">
                <p>Choose Picture</p>
                <input type="file" name="picture" required>
            </div>
            <div class="inputBx">
                <input type="submit" name="Submit" value="Add Character">
            </div>
        </form>
    </div>

    <div class="character-list">
        <h3>Lists of Characters</h3>
        <!-- This part will be dynamically populated with characters from the database -->
        <?php include 'fetch_characters.php'; ?>
    </div>
</section>




                <div class="card" data-item="settings" style="width: 500px; height: 520px;">
                    <img src="images/set.jpg" alt="" style="object-fit: cover;">
                    <div class="content">
                        <h4 style="text-align: center;">Settings</h4>
                        <div class="info">
                            <p style="text-align: justify;">Humadapnon ventured through the dense forests of Panay. The towering trees whispered ancient secrets. The undergrowth rustled with unseen creatures. The air was filled with the fragrance of wildflowers and damp soil. He often walked by wide, slow-moving rivers. There, he met crocodile guardians and river spirits. The villages he passed were lively. He heard the sounds of chieftains' councils and the rhythmic pounding of rice. Shamans chanted melodically, invoking protection from the diwatas. Each night, the sky glittered with stars. Humadapnon camped under the open heavens, ready for the challenges ahead.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="plot" style="width: 500px; height: 520px;">
                    <img src="images/humadapnon.png" alt="" style="object-fit: contain; margin-top: 40px;">
                    <div class="content">
                        <h4 style="text-align: center;">Call to Adventure</h4>
                        <div class="info">
                            <p style="text-align: justify;">
                                Humadapnon, a mighty warrior and one of the epic heroes, is called to embark on a great adventure. He is driven by a vision or a quest to seek a bride, a common motif in epics that symbolize the hero's journey towards greater destiny and fulfillment.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="plot" style="width: 500px; height: 520px;">
                    <img src="images/magic.jpg" alt="" style="object-fit: cover;">
                    <div class="content">
                        <h4 style="text-align: center;">Journey and Trials</h4>
                        <div class="info">
                            <p style="text-align: justify;">
                                Humadapnon sets off on his journey, traversing dense forests, wide rivers, and encountering various supernatural beings. Along the way, he faces numerous trials and challenges, <br><br>
                                Encounters with Guardians: He meets and often battles with creatures like crocodile guardians and river spirits. <br><br>
                                Magical Realms: Humadapnon travels through enchanted realms and faces magical obstacles that test his strength, wisdom, and courage.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="plot" style="width: 500px; height: 520px;">
                    <img src="images/girls.jpg" alt="" style="object-fit: cover;">
                    <div class="content">
                        <h4 style="text-align: center;">Romantic Conquests</h4>
                        <div class="info">
                            <p style="text-align: justify;">
                                During his journey, Humadapnon encounters beautiful maidens and engages in romantic exploits. One significant encounter is with the goddess Nagmalitong Yawa Sinagmaling Diwata, whom he seeks to marry.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="plot" style="width: 500px; height: 520px;">
                    <img src="images/prison.jpg" alt="" style="object-fit: cover;">
                    <div class="content">
                        <h4 style="text-align: center;">Captivity and Rescue</h4>
                        <div class="info">
                            <p style="text-align: justify;">
                                At one point, Humadapnon is captured and imprisoned by a powerful sorceress or an adversarial force. This captivity represents the nadir of his journey, where he must rely on his inner strength and the aid of allies to overcome.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="plot" style="width: 500px; height: 520px;">
                    <img src="images/run.jpg" alt="" style="object-fit: cover;">
                    <div class="content">
                        <h4 style="text-align: center;">Escape and Return</h4>
                        <div class="info">
                            <p style="text-align: justify;">
                                With the help of his companions or through his own cunning and bravery, Humadapnon escapes his captors. He continues his journey, overcoming further obstacles and adversaries.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="plot" style="width: 500px; height: 520px;">
                    <img src="images/set.jpg" alt="" style="object-fit: cover;">
                    <div class="content">
                        <h4 style="text-align: center;">Final Victory and Fulfillment</h4>
                        <div class="info">
                            <p style="text-align: justify;">
                                Humadapnon ultimately achieves his goal, which includes defeating his enemies and successfully winning the hand of the woman he loves. His return home is triumphant, and he is celebrated as a hero.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="location" style="width: 500px; height: 520px;">
                    <img src="images/panay.jpg" alt="" style="object-fit: cover;">
                    <div class="content">
                        <h4 style="text-align: center;">Geographic Location</h4>
                        <div class="info">
                            <p style="text-align: justify;">
                                Panay Island: The story unfolds across various regions of Panay Island, situated in the Visayan group of islands in the central Philippines. The island is known for its rich cultural heritage and diverse landscapes. <br><br>
                                Central Panay: Specifically, the epic is rooted in the central mountainous and riverine areas inhabited by the Sulodnon people, an indigenous group known for their oral traditions and epics.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="location" style="width: 500px; height: 520px;">
                    <img src="images/dense.jpg" alt="" style="object-fit: cover;">
                    <div class="content">
                        <h4 style="text-align: center;">Natural Landscapes
                        </h4>
                        <div class="info">
                            <p style="text-align: justify;">
                                Dense Forests: Humadapnon's journey takes him through thick, mystical forests with towering trees and sprawling canopies. These forests are teeming with life and supernatural elements. <br><br>

                                Mountains and Valleys: The terrain includes majestic mountains and fertile valleys, providing both obstacles and scenic beauty in the narrative. <br><br>
                                
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="location" style="width: 500px; height: 520px;">
                    <img src="images/sacred.jpg" alt="" style="object-fit: cover;">
                    <div class="content">
                        <h4 style="text-align: center;">Cultural and Social Setting</h4>
                        <div class="info">
                            <p style="text-align: justify;">
                                Sulodnon Villages: The hero travels through various villages inhabited by the Sulodnon people. These settlements are characterized by bamboo houses on stilts, communal areas, and fields for agriculture. <br><br>
                                Sacred Sites: The setting includes sacred places such as forests, mountains, and bodies of water, which hold significant spiritual meaning and are often the abodes of deities and spirits.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="location" style="width: 500px; height: 520px;">
                    <img src="images/magical.jpg" alt="" style="object-fit: cover;">
                    <div class="content">
                        <h4 style="text-align: center;">Atmosphere</h4>
                        <div class="info">
                            <p style="text-align: justify;">
                                Mythical and Magical: The setting is imbued with a sense of the mystical, with frequent interactions with supernatural beings like diwatas (deities or spirits), enchanted realms, and magical creatures. <br><br>
                                Traditional: The story reflects the pre-colonial culture and traditions of the Sulodnon people, showcasing their animist beliefs, rituals, and social structure.
                            </p>
                        </div>
                    </div>
                </div>

                

            </div>

        </section>

        <section class="dialog" id="dialog">
            <h2>Dialog / Script</h2>

            <h3>Scene: Humadapnon Encounters a River Spirit</h3>

            <div class="script">

                <p>
                    <span class="user">Humadapnon:</span>
                (approaching the riverbank, noticing the shimmering water)
                "Who dwells in these sacred waters? Show yourself and speak your name!" <br><br>
                <span class="user">River Spirit:</span>
                (emerging from the water, a gentle glow surrounding her)
                "I am Bulan, guardian of this river. What brings you to these parts, brave Humadapnon?" <br><br>

                <span class="user">Humadapnon:</span>
                "I seek the path to Nagmalitong Yawa Sinagmaling Diwata. Do you know the way, O spirit of the river?" <br><br>

                <span class="user">Bulan:</span>
                    "The path is perilous and filled with trials. Only those pure of heart and strong in spirit can reach her. But I sense a noble purpose in you. Follow the river     upstream until
                you see the twin banyan trees. There, you will find the next guide on your journey." <br><br>
                </p>

            </div>

            <h3>Scene: Humadapnon's Captivity and Escape</h3>

            <div class="script">
                <p>
                    <span class="user">Humadapnon:</span>
                (chained in a dark cave, speaking to himself)
                "I must find a way out of this cursed place. My journey cannot end here." <br><br>

                <span class="user"> Sorceress Piganun:</span>
                (appearing with a sinister smile)
                "Do you despair, mighty Humadapnon? No one escapes my grasp once captured." <br><br>

                    <span class="user"> Sorceress Piganun:</span>
                "Your will shall break, just like all the others. But fight if you must; it will only amuse me." <br><br>

                <span class="user">Humadapnon:</span>
                (noticing a small crack in the cave wall, speaking softly to himself)
                "There, a glimmer of hope. I must bide my time and strike when the moment is right."
                </p>
            </div>

            <h3>Scene: Humadapnon's Victory Celebration</h3>

            <div class="script">
                <p>
                    <span class="user">Villager 1:</span>
                "Humadapnon returns! The hero has come back to us!" <br><br>

                <span class="user">Villager 2:</span>
                    (cheering)
                "Tell us, great warrior, did you succeed in your quest?" <br><br>

                <span class="user">Humadapnon:</span>
                (raising his hand for silence)
                    "The journey was long and fraught with peril. But I stand before you, not just as a survivor, but victorious. Nagmalitong Yawa Sinagmaling Diwata is now with   us, her grace blessing our land." <br><br>

                <span class="user"> Nagmalitong Yawa:</span>
                (stepping forward with a serene smile)
                "Your hero's heart and unwavering spirit have brought us together. Let us celebrate this union and the peace it brings."
                </p>
            </div>
        </section>

        <section class="contact" id="contact">
    <img src="images/contact.jpg" alt="">

    <div class="form">
        <h2>Contact Us</h2>
        
        <form action="save_contact.php" method="post">
            <div class="inputBx">
                <p>Enter Name</p>
                <input type="text" name="name" placeholder="Full Name" required>
            </div>

            <div class="inputBx">
                <p>Enter Email</p>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="inputBx">
                <p>Message</p>
                <textarea name="message" placeholder="Type here..." required></textarea>
            </div>

            <div class="inputBx">
                <input type="submit" name="Submit" value="Submit">
            </div>
        </form>
    </div>
</section>


        <footer>
            <div class="info">

                <a href="#" class="logo">Epic.</a>
                <p><i class='bx bx-copyright'></i>2024 All Rights Reserved</p>

                <ul>
                    <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
                    <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
                    <li><a href="#"><i class='bx bxl-linkedin-square' ></i></a></li>
                </ul>
            </div>
        </footer>
        
    </body>

    <script src="script.js"></script>

</html>