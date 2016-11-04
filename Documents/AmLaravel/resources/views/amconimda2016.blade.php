<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"><!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <meta property="og:site_name" content="Help me get a free trip to Cancun! Vote for me here." />
    @if(Session::has('adress'))
    <meta property="og:url" content="{{Session::get('adress')}}" />
    @else
    <meta property="og:url" content="http://www.vuela.aeromexico.com/mayanchallenge" />
    @endif
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Mayan Challenge" />
    <meta property="og:description" content="Help me get a free trip to Cancun! Vote for me here." />
    @if (Session::has('picture'))
    <meta property="og:image" content="http://www.vuela.aeromexico.com/universidades/assets/share/{{Session::get('picture')}}" /> 
    @else
    <meta property="og:image" content="http://www.vuela.aeromexico.com/mayanchallenge/assets/images/mayan_logoshare.png" />
    @endif    
    <meta property="fb:app_id" content="1172085942851660" />         
    <link rel="shortcut icon" type="image/x-icon" href="http://vuela.aeromexico.com/amexplora/assets/images/favicon.ico">
    <title>The Mayan Challenge</title>
    
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/animate.min.css') !!}
    {!! Html::style('assets/css/styles.css') !!}
</head>
<body>
  <div class="leaf leaf-left animated fadeInLeft">
    <img src="assets/images/hojas-left.png" alt="hojas">
  </div>
  <div class="leaf leaf-right animated fadeInRight">
    <img src="assets/images/mayan_planta02.png" alt="hojas">
  </div>
  <div id="the-wrapper">
    <header id="mainHeader">
      <!-- menu desktop -->
      <nav id="nav-main" class="menu">
        <ul>
          <li style="width:280px;"><a href="amconimda2016">Home</a></li>
          <li class="logo"><a href="/mayanchallenge/amconimda2016"><img src="assets/images/mayan_logo.png" alt="mayan challenge"></a></li>
          <li style="width:280px;"><a href="logout">Logout</a></li>
        </ul>
      </nav>
      <!-- /menu desktop -->
      <!-- menu mobile -->
      <div id="nav-trigger">
          <span>Menu</span>
      </div>
      <nav id="nav-mobile">
        <ul>
          <li><a href="amconimda2016">Home</a></li>
          <li><a href="logout">Logout</a></li>
        </ul>
      </nav>
      <!-- / menu mobile -->
      <div class="user">
      @if (Session::has('id'))
        <a href="/mayanchallenge/amconimda2016">
          <p><span class="avatar"><img src=""></span> <span class="">{{$name}}</span></p>
        </a>
      </div>
      @endif 
    </header>
    <!-- dynamic -->
    <div class="container-center">
    @if(Session::has('success'))
      <div class="alert alert-success">
        {{Session::get('success')}}
      </div>
    @endif
    @if (Session::has('error'))
      <div class="alert alert-danger">
        {{Session::get('error')}}
      </div>
    @endif

  @yield('content')
  </div>
    <!-- footer -->
    <footer id="mainFooter">
      <div class="row">
        <div class="col-md-12">
           <img class="logo-deltaAm" src="images/delta-am-01.png" alt="logo delta aeromexico">
          <div class="footer-info">
            <br>
            <p>&copy; 2016 Aeroméxico. All rights reserved. Read our <a href="#" data-toggle="modal" data-target="#terms">terms and conditions</a>. Check our <a href="https://aeromexico.com/en/travel-with-aeromexico/preparing-your-trip/regulations-and-policies/privacy-policy/?site=us" target="_blank">privacy police.</a></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div><!-- #the-wrapper -->

 <!-- modal T&C -->
  <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="ourSponsors">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Terms and conditions</h4>
        </div>
        <div class="modal-body">
          <div><p style="text-align: justify;"><span style="font-size: small;">Thank you for visiting the Aeromexico Internet site “aeromexico.com” (the “Site”). By accessing and using the Site, you agree to be bound by the following Agreement without limitation or qualification. Therefore, we request that you carefully review this Agreement before continuing. If you do not agree to be legally bound by these terms and conditions, you may not access the Site. Aeromexico reserves the right to amend this Agreement and make changes to any of its products or programs described in the Site at any time without prior notice and free of liability. All such reviews are obligatory for you, and therefore, when you use the Site, you must visit this page periodically in order to review the Agreement in force. Aeromexico also reserves the right, entirely at its discretion, to deny access to the Site at any time. On occasion, Aeromexico executes agreements with third parties to provide its customers with the opportunity to acquire services, products and special prices offered by said parties. You shall not be considered to be in breach of this Agreement when you abide by the terms and conditions of such program. Equally, the terms and conditions herein shall be considered as extended to the extent necessary to permit such third parties that have executed formal contracts with us to operate under the terms hereof. The sub-headings hereof are provided for ease of reference and shall not be used for the interpretation hereof.</span></p>
          <p style="text-align: justify;"><span style="font-size: small;"><strong>Intellectual Property Notice</strong></span></p>
          <div style="text-align: justify;"><span style="font-size: small;">Unless otherwise stated, all information, Club Premier account information, articles, data, images, passwords, Personal Identification Numbers (“PINs”), screens, text, user names, Internet pages and other material (referred to as a whole as the “Contents”) that appear on the Site shall remain the exclusive property of Aerovias de Mexico, S.A. de C.V., Aeromexico, or its subsidiaries and affiliates.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">All information, products, services and software contained on the Site or used on the Site (herein referred to as the “Contents”) are registered under copyright by Aerovias de Mexico, S.A. de C.V. All rights reserved. It shall be considered that all material viewed or read on the Site is registered under copyright in the name of Aeromexico or used with the permission of same, unless otherwise stated.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">Registered trademarks, logos and service brands (referred to as a whole as the “Trademarks”) that appear on the Site are registered and non-registered trademarks of Aerovias de Mexico, S.A. de C.V. or other parties.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">Images of persons, objects, and places that appear on the Site shall remain the property of Aerovias de Mexico, S.A. de C.V., or are used with said party’s permission.</span></div>
          <div style="text-align: justify;"><span style="font-size: small;">Aeromexico is the owner or licensed user of all software contained on the Site, including, but not limited to, all the controls of the HTML and the Active X codes. This software is protected by copyright and other laws as well as by the stipulations of international treaties. The law expressly prohibits the modification, redistribution or reproduction of software, and said offenses may lead to the imposition of severe civil and criminal penalties. Aeromexico shall bring legal action and support any legal action against any party that breaches said legislation to the fullest extent of the law.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">All copying, displaying, distributing, downloading, granting under license, modified publishing, re-sending, reproducing, re-using, selling, transmitting, using to create related work or using in any other manner the Contents of the Site for public or commercial purposes is strictly prohibited. No part of the Contents of the Site shall be interpreted as conferring any concession or license to use any intellectual property whether by impediment, implication or any other manner.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Limitations of Use</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> Aeromexico offers the Site solely in order for users to check the availability of goods and services offered on the Site, and to make legitimate Reservations or conduct any other business with Aeromexico, and for no other purpose whatsoever. The Site is for personal use and not commercial use. You hereby agree to use the Site’s services solely to make Reservations or legitimate purchases for yourself or on behalf of another person for whom you are authorized to act legally in accordance with the terms herein.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">You hereby agree with no limitations whatsoever to refrain from making false Reservations or any Reservations in advance of demand. Should Aeromexico determine that a user has confirmed various Reservations to one or more destinations on or close to the same date, Aeromexico, without prior notice, shall reserve the right to cancel all the space confirmed, related to multiple Reservations. You hereby agree to be bound by the terms and conditions of purchase imposed by Aeromexico, including, but not limited to, the payment of all amounts when they fall due and the compliance of all rules regarding the availability of tickets, products and services. You shall remain fully liable for all evaluations, charges, rights, quotas and taxes arising from the use of the Site.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">User account information shall remain the exclusive property of Aeromexico. While you may access your account information through the Site, you may not permit access to any third party that is not a family member or under your direct supervision as part of their employment. You may not permit access to your account by a third-party Internet service, including, but not limited to, any mileage administration service, mileage registration service or mileage accrual service.</span></div>
          <div style="text-align: justify;"><span style="font-size: small;">You must access your account information directly through the Site and not through a different site, including, but not limited to, any mileage administration service, mileage registration service or mileage accrual service. You shall also be in breach hereof if you permit any Club Premier member to access his/her account information without visiting the Site.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">You hereby agree not to misuse the Site. The term “Misuse” includes, but is not limited to, the use of the Site to perform any of the following actions:</span><br> &nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Misuse</strong></span></div>
          <ol>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Distribute, disclose, announce or publish any information or material that degrades, embarrasses, harasses, humiliates, intimidates or threatens any individual or group of individuals based on age, descent, color, ethnic origin, marital status, medical condition, physical or mental incapacity, national origin, race, gender, sexual orientation, union or non-union affiliation or any basis protected by federal, state or local law.</span></div>
          </li>
          </ol><ol start="2">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Abuse, defame, harass, threaten or infringe upon the legal rights of others in any manner whatsoever, including, but not limited to, the privacy and publicity laws.</span></div>
          </li>
          </ol><ol start="3">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Download or upload files that may harm the operation of another party’s computer, such as viruses, corrupted files or similar software.</span></div>
          </li>
          </ol><ol start="4">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Download or upload files that contain, including, but not limited to, software that breaches copyright, privacy and publicity rights of other parties, unless you hold, control or have been authorized to exercise said rights.</span></div>
          </li>
          </ol><ol start="5">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Declare incorrectly or omit to quote the origin or source of any downloaded or uploaded file.</span></div>
          </li>
          </ol><ol start="6">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Download or upload files that do not contain the exclusively announced language, the author’s references and/or the copyright, patent or trademark note.</span></div>
          </li>
          </ol><ol start="7">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Participate in any commercial purpose, including, but not limited to:</span></div>
          <ol>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Announcing or offering any goods or services</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Conducting contests or surveys</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Distributing chain letters or announcing any Ponzi or pyramid scheme</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Announcing or offering to sell any business opportunities, direct sales opportunities, employment, independent contractors’ posts, multi-level sales opportunities or assets</span></div>
          </li>
          </ol></li>
          </ol><ol start="8">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Announce, send or by any other means, disclose any confidential information, commercial secrets or other exclusive confidential and/or protected data belonging to any individual or company, including, but not limited to, Aerovias de Mexico, S.A. de C.V. or any of its affiliates.</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Download or upload files that as far is reasonably known, cannot be legally distributed through the Site.</span></div>
          </li>
          </ol><ol start="10">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Copy or create work arising from displaying, distributing, granting under license, producing, recreating, reproducing, selling, transferring or transmitting any information, products, services or software obtained from or through the Site.</span></div>
          </li>
          </ol><ol start="11">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Supervise or copy any Contents by means of any manual process, robot, spider or other automatic device without the prior written consent of Aeromexico.</span></div>
          </li>
          </ol><ol start="12">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Act as an agent or attorney for any party that is not:</span></div>
          </li>
          </ol><ol start="12"><ol>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Immediate family; or</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">A direct superior at work</span></div>
          </li>
          </ol></ol><ol start="13">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Undertake any action that imposes or may impose an unreasonable or too large a burden on the infrastructure of the Site.</span></div>
          </li>
          </ol><ol start="14">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Act as a mileage administration service, mileage registration service or mileage accrual service on behalf of any Club Premier member.</span></div>
          </li>
          </ol><ol start="15">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Access the information of any Club Premier member, protected by the Site connection, and announce it on any other Web site, with or without the prior consent of said Club Premier member.</span></div>
          </li>
          </ol><ol start="16">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Use another Club Premier member’s password or PIN during the connection, unless the user is:</span></div>
          </li>
          </ol><ol start="16"><ol>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">The Club Premier member to whom said password or PIN has been assigned (the “Authorized Club Premier Member”)</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">A family member of the Authorized Club Premier Member acting with the permission of the Authorized Club Premier Member; or</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">An employee of the Authorized Club Premier Member acting with permission of the Authorized Club Premier Member</span></div>
          </li>
          </ol></ol><ol start="17">
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Participate in any conduct that is, or that Aeromexico considers to be in conflict with this Agreement. Aeromexico prohibits Misuse and access to the Site for the purposes of Misuse or other similar purposes which shall be considered as unauthorized use of the Site.</span></div>
          </li>
          </ol>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>With No Guarantee from Aeromexico</strong></span></div>
          <div style="text-align: justify;">&nbsp; <span style="font-size: small;"><br> The Contents may contain inaccuracies and/or typographical errors. Aeromexico may alter, change or improve the Contents at any time without prior notice. Aeromexico makes no statement or guarantee as to the completeness or the accuracy of the Contents and does not commit itself to updating it. Aeromexico makes no statement about the appropriateness of the Contents for any purpose whatsoever. USERS USE THE SITE ENTIRELY AT THEIR OWN RISK. THE CONTENTS ARE PROVIDED “AS IS” WITHOUT ANY GUARANTEE OF ANY KIND, WHETHER EXPRESS OR IMPLICIT, INCLUDING, BUT NOT LIMITED TO, ANY IMPLICIT GUARANTEE OR EXPECTED PRIVACY, OWNERSHIP FOR A SPECIFIC PURPOSE, BREACH OF THE LAW OR PROPERTY. UNDER NO CIRCUMSTANCES SHALL AEROMEXICO OR ITS AFFILIATES BE LIABLE FOR ANY DAMAGE (EVEN AS CONSEQUENCE, DIRECT, INCIDENTAL, INDIRECT, PUNITIVE, SPECIAL OR ANY OTHER DAMAGE) THAT MAY ARISE FROM OR IS RELATED TO THE USE OR THE INABILITY TO USE THE SITE FOR ANY PART OF THE CONTENTS OBTAINED THROUGH THE SITE OR ANY OTHER MEANS RELATED THERETO, REGARDLESS OF WHETHER SUCH DAMAGE IS BASED ON CONTRACTS, NET LIABILITY, LOSS OR OTHER THEORIES OF LIABILITY, AND ALSO REGARDLESS OF WHETHER AEROMEXICO RECEIVED A REAL OR IMPLICIT NOTIFICATION THAT IT WAS LIKELY THAT SAID PARTY WOULD CAUSE SUCH DAMAGE.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">Aeromexico does not guarantee or state that the use of the information and material contained on the Site shall not breach the copyright of third parties. Aeromexico shall not be liable for any virus or other damage caused to users’ computer equipment or other property as a result of accessing, navigating or using the Site, or as a result of downloading any audio, image, material photograph, text or video file from the Site. Since Aeromexico offers products and services all over the world, the Site may make reference to certain goods, products and/or services that are not available in the user’s area. A reference to goods, products and/or services without limiting their geographical scope shall not imply that Aeromexico offers or intends to offer such goods, products and/or services in all parts of the world.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Product Descriptions</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> aeromexico.com and its affiliates try to be as accurate as possible. However, aeromexico.com does not guarantee that descriptions of the products or other contents of the site are accurate, complete, reliable and up to date and free of errors. If a product offered by aeromexico.com is not as described, the user’s sole remedy shall be to contact Customer Care.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Use of Information Provided by Users</strong></span></div>
          <div style="text-align: justify;">&nbsp; <span style="font-size: small;"><br> In accordance with Aeromexico’s Privacy Policy, we request that users provide certain information when purchasing travel or when using certain personalized services. You agree to provide accurate information when so requested. Under no circumstances shall false or inaccurate information be provided. In order to review our Privacy Policy, click on the “Privacy Policy” link in the footer of any page.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">Users may not use false e-mail addresses, supplant any individual or company or in any other manner conceal the origin of a card or other content. aeromexico.com reserves the right (but not the obligation) to eliminate or edit such content.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">We may provide users with pass codes for the use of certain services. This pass code shall remain the exclusive property of Aeromexico, however, precautions must be taken to protect the security of the pass codes. Aeromexico shall not assume any liability whatsoever and shall not be liable for damage incurred as a result of the disclosure of a pass code to or the use of a pass code by a third party.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">Although Aeromexico adopts all reasonable measures to store and avoid unauthorized access to your personal information, we cannot be held liable for the actions of parties that achieve unauthorized access and therefore we do not extend any express or implicit or any other guarantee against unauthorized access to your personal information. UNDER NO CIRCUMSTANCES SHALL AEROMEXICO OR ITS AFFILIATES BE LIABLE FOR ANY DAMAGE (EVEN AS CONSEQUENCE, DIRECT, INCIDENTAL, INDIRECT, PUNITIVE, SPECIAL OR ANY OTHER DAMAGE) THAT MAY ARISE FROM OR IS RELATED TO UNAUTHORIZED ACCESS BY A THIRD PARTY TO A USER’S INFORMATION, REGARDLESS OF WHETHER SUCH DAMAGE IS BASED ON CONTRACTS, NET LIABILITY, LOSS OR OTHER THEORIES OF LIABILITY, AND ALSO REGARDLESS OF WHETHER AEROMEXICO RECEIVED A REAL OR IMPLICIT NOTIFICATION THAT IT WAS LIKELY SAID PARTY WOULD CAUSE SUCH DAMAGE.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Links to Other Sites and to “The Site”</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> Aeromexico specifically denies permission to/from hyperlinks or other references to the Site, unless permitted in accordance with a separate written agreement with Aeromexico. Aeromexico also denies permission to use any material protected under trademark and copyright law to offer said hyperlinks and references, unless permitted in accordance with a separate written agreement with Aeromexico. Aeromexico shall not be liable for sites that offer hyperlinks and references to the Site unless such sites are operated by Aeromexico.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Users’ Communication with Us</strong></span></div>
          <div style="text-align: justify;">&nbsp; <span style="font-size: small;"><br> Aeromexico shall not treat any communication sent to it via e-mail or any other means as confidential and shall not be obliged to refrain from publishing, reproducing or using users’ communications in any manner whatsoever for any purpose.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">Aeromexico shall not accept unrequested proposals related to its business, including, but not limited to, proposals for advertising, logo, names, processes, products, promotions, services, advertising and technical slogans. Therefore, Aeromexico requests users not submit said proposals. Refrain from also sending artistic creations, plans, demonstrations, designs, diagrams, photographs or original samples. Aeromexico has adopted this policy to avoid claims that we have copied such unrequited ideas without authorization when, in fact, we develop the idea independently even before receiving the unrequested proposal. Should users send us unrequested proposals, it shall be understood that Aeromexico may use any idea, concept, invention, method or technique submitted in said communication for any purpose, including the development, production and/or marketing of goods, products or services. Aeromexico may use such concepts without any obligation whatsoever to offer any compensation for same.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Electronic Communications</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> Users visiting aeromexico.com or sending us e-mails are communicating with us electronically. Therefore, users accept to receive electronic communications from us. We shall communicate with users via e-mail by placing notices on the Site or in our e-Newsletters. Users hereby accept that all agreements, notices, disclosures and other communications sent by us electronically satisfy all legal requirements that such communications are in writing.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Notice of Incorporated Terms</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> Air transportation is subject to the terms of individual contracts (that include rules, regulations, fares and conditions) of the air transportation companies, which are included for reference on each ticket issued and form part of the air transportation contract. Such terms may include, but may not be limited to the following:</span></div>
          <ol>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Limitation of liability for personal injury or loss</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Limitation of liability for baggage, including fragile or perishable goods and the availability of excessive valuation coverage</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Claim restrictions that include periods in which passengers must file claims or bring legal action against the air transportation contractor</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Rights of the air transportation contractor to amend the terms of the contract</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Rules of the confirmation of Reservations, passenger check-in times and declining to offer transportation services</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Rights of the air transportation contractor and limitations of liability for delay and the impossibility to render the service, including schedule changes, the substitution of air transportation contractors, alternative equipment and changes to routes</span></div>
          </li>
          </ol>
          <div style="text-align: justify;"><span style="font-size: small;">Users can obtain additional information about points 1 through 6 anywhere that Aeromexico tickets can be purchased. Users reserve the right to review the entire text of the rules of the air transportation contractor that renders the service at the user’s airport and at the corresponding ticket offices. Users are also entitled, when applicable, to receive the entire text of the applicable terms, free of charge, included for reference of each air transportation contractor that renders the service. Information on how to request the complete text of the terms of each air transportation contractor is available in the United States where air tickets are sold.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Currency</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> All monetary amounts quoted on aeromexico.com are expressed in U.S. Dollars (USD), except where otherwise stated.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>DOCUMENTATION REQUIREMENTS FOR DEPARTURE BY AIR FROM THE UNITED STATES</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> The Western Hemisphere Travel Initiative (WHTI) requires all air travelers (including U.S. citizens) to and from North and South America, the Caribbean, Bermuda and the adjacent islands to have a passport or other accepted document that establishes the bearer’s identity and nationality to enter or re-enter the United States.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>REQUIREMENTS FOR TRAVELERS FROM/TO THE U.S.</strong></span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">a) U.S. CITIZENS &ndash; must provide one of the following:</span></div>
          <ul>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Valid U.S. passport</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">NEXUS Card (to be used only at designated NEXUS locations)</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">U.S. Government-issued Transportation Letter</span></div>
          </li>
          </ul>
          <div style="text-align: justify;"><span style="font-size: small;">Exceptions:</span></div>
          <ol>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">U.S. citizen military personnel on active duty may be boarded without a U.S. passport if in possession of official travel orders and valid military ID.</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">U.S. citizen merchant mariners may be boarded without a U.S. passport if in possession of a U.S. Merchant Mariner Card indicating U.S. citizenship.</span></div>
          </li>
          </ol>
          <div style="text-align: justify;"><span style="font-size: small;">b) U.S. RESIDENTS &ndash; must provide one of the following: </span></div>
          <ul>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Valid passport</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Permanent Resident Card, Form I-551</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Temporary Resident Stamp (“ADIT”) contained in a passport or on an I-94</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Reentry Permit, Form I-327</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Refugee Travel Document, Form I-571</span></div>
          </li>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Alien member of the U.S. Armed Forces in possession of official orders and military identification card</span></div>
          </li>
          </ul>
          <div style="text-align: justify;"><span style="font-size: small;">c) VISITORS - must provide the following</span></div>
          <ul>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Valid Passport</span></div>
          </li>
          </ul>
          <div style="text-align: justify;"><span style="font-size: small;">Exceptions:</span></div>
          <ol>
          <li>
          <div style="text-align: justify;"><span style="font-size: small;">Emergency Travel Document: An Emergency Travel Document is issued by a foreign embassy or consulate specifically for the purpose of travel to the bearer’s home country. It typically has a short validity date (one year or less) and may limit the number of entries. An Emergency Travel Document may be in the form of a traditional passport booklet or may be a single sheet of paper on foreign consulate letterhead.</span></div>
          </li>
          </ol>
          <div style="text-align: justify;"><span style="font-size: small;">NOTE: Destination countries may require additional documentation. </span><br> &nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">National identity cards, certificates of citizenship, certificates of naturalization and other civil identity or vital statistics documents are NOT considered travel documents and are NOT valid for departure from the U.S. by air.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Overselling of Flights</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> Airline flights may be oversold and it is possible that a seat on a flight is unavailable when a customer has a confirmed reservation. If a flight is oversold, no passenger shall be denied a seat unless Aeromexico personnel first ask for volunteers to assign their reservation in exchange for a compensation payment at the discretion of Aeromexico. If there are insufficient volunteers, Aeromexico may deny boarding to other passengers in accordance with the boarding priority. With a few exceptions, passengers denied boarding involuntarily shall be entitled to compensation. The complete rules for the payment of compensation and boarding priorities are available at all airport ticket counters and boarding gates. Certain airlines do not apply these measures of protection for the consumer to travel from certain countries other than the United States, although there may be other measures of consumer protection. Check with each airline.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Limitations of Liability for Baggage</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> </span><span style="font-size: small;"><strong>International Flights</strong></span><span style="font-size: small;"> [BOLD] &ndash; For most international flights (including segments within Mexico), liability for loss, delay or damage to baggage shall be limited to approximately $9.07 USD per pound ($20.00 USD per Kg) for checked baggage and $400 USD per passenger for unchecked baggage.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Flights within Mexico</strong></span><span style="font-size: small;"> [BOLD] &ndash; Liability shall be limited to 75 days of the current Mexico City minimum wage per passenger with ticket (for checked baggage).</span><br> &nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">No liability shall be assumed for electronic or photographic equipment, jewelry, cash, computer equipment or other articles of similar value.</span><br> &nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">Aeromexico does not assume any liability for fragile or perishable articles. Please consult the airline for further information.</span><br> &nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">All baggage damaged in transit must be reported within 7 days of receipt.</span><br> &nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">Note: The rules governing the limitations to Aeromexico’s liability for lost, damaged or delayed baggage and the passenger’s responsibility for prompt notification of such loss, damage or delay shall vary in accordance with the nature of the journey. Contact any Aeromexico agent for specific information</span><span style="font-size: small;"><strong>.</strong></span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Smoking</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> Aeromexico prohibits smoking on all its flights. The use of tobacco products is prohibited on the entire Aeromexico flight system.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Other Terms</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> This Agreement constitutes all issues that govern access to and the processes and use of the Site. Separate agreements may be executed for any goods, products or services that users obtain, purchase or use on the Site.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;">If, at any time, Aeromexico omits to exercise its right pursuant to this Agreement, such omission shall not constitute a waiver of such right to exercise this and other rights at any other time or against any third party. Should any of the stipulations herein become invalid or unenforceable, such stipulation shall be eliminated without affecting the validity or enforceability of the remaining stipulations.</span></div>
          <div style="text-align: justify;">&nbsp;</div>
          <div style="text-align: justify;"><span style="font-size: small;"><strong>Disputes</strong></span></div>
          <div style="text-align: justify;"><span style="font-size: small;"><br> Any dispute whatsoever related to visits by users to or with the products acquired from aeromexico.com shall be submitted to confidential arbitration in Mexico City, Mexico, and the user accepts the exclusive jurisdiction of the court in force at the time of such proceedings. The arbitration judgment shall be obligatory for all parties and may be brought before any court with competent jurisdiction for the issue of a final judgment. To the greatest extent permitted by the corresponding legislation, no arbitration proceeding undertaken in accordance with this Agreement shall be connected to an arbitration proceeding related to another person subject hereto, whether through joint or separate arbitration proceedings.</span></div></div>
         
        </div>
      </div>
    </div>
  </div>
   <!-- / modal T&C -->

  <!-- scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/parsley.min.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>