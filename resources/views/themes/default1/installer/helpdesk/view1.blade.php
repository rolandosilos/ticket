@extends('themes.default1.installer.layout.installer')
@section('environment')
done
@stop
@section('license')
active
@stop
@section('content')
    <div id="form-content">
        <center><h1>License Agreement</h1></center>

        <p>Please read this software license agreement carefully before downloading or using the software. By clicking on the "accept" button, opening the package, or downloading the product, you are consenting to be bound by this agreement. If you do not agree to all of the terms of this agreement, stop the installation process and exit.</p>
        <form action="{{URL::route('postlicence')}}" method="post">
            {{ csrf_field() }}
            <div>
                
                <div id="openModal" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div div class="modal-body">
                            <h1>END USER LICENSE AGREEMENT</h1><p>THIS "END USER LICENSE AGREEMENT" (THE "EULA") IS A LEGAL AGREEMENT BETWEEN THE INDIVIDUAL OR LEGAL ENTITY OR ASSOCIATION INTENDING TO USE THE SOFTWARE ("YOU" OR "CUSTOMER") AND FAVEO. BY REGISTERING FOR THE SOFTWARE OR BY USING THE SOFTWARE, YOU REPRESENT, WARRANT, AND AGREE THAT YOU HAVE READ, UNDERSTOOD, AND AGREE TO BE BOUND TO THE TERMS OF THE EULA. IF YOU DO NOT AGREE TO BE BOUND BY THE EULA, OR YOU DO NOT HAVE AUTHORITY TO BIND CUSTOMER TO THE EULA, YOU MAY NOT USE THE SOFTWARE.</p><h2>Definitions</h2><p><strong>"Active Staff User Account"</strong> means a staff user account that is active in the context of Faveo’s software, meaning that the Staff User Account is fully functional and can be used to authenticate to the Software.</p><p><strong>"Data"</strong> means the data stored in Your helpdesk using the Software.</p><p><strong>"Domain Name"</strong> means an Internet domain name (e.g., sub.domain.com and domain.com).</p><p><strong>"License Key"</strong> means the key that is used to activate the Software for use by Customer.</p><p><strong>"Faveo"</strong>, <strong>"Us"</strong>, <strong>"Ladybird"</strong> and <strong>"We"</strong> means Ladybird Web Solution Pvt Ltd., its employees, representatives and contractors.</p><p><strong>"Site"</strong> means www.faveohelpdesk.com.</p><p><strong>"Software"</strong> means the software that accompanies this EULA.</p><p><strong>"Solution"</strong> means the solution (Faveo Helpdesk, Faveo Service Desk) You choose to have delivered to You as part of the Software.</p><p><strong>"Staff User Account"</strong> means a staff/agent user account in the context of Faveo’s software.</p><p><strong>"Support and Maintenance"</strong> means the optional fee-based subscription that enables a Customer to receive access to support and new releases of and updates to the Software.</p><p><strong>"Third Party Software"</strong> includes any third-party software that may be included with the Software.<h2>1. Grant of License</h2><h3>1.1 License</h3><p> Subject to the EULA and provided that you have a valid License Key, Faveo grants You the revocable, non-exclusive, non-transferable, and non-sublicensable license to use the Software through Your Active Staff User Accounts.<h3>1.2 Staff User Accounts</h3><p> You shall ensure that the number of Your Active Staff User Accounts is equal to or less than the number of Staff User Accounts for which You have subscribed. You are responsible for ensuring that access to a Staff User Account is not shared. Only one individual may authenticate to one Staff User Account. If You are a legal entity or association, all persons using Your Staff User Accounts must be either Your employees or Your contractors who have agreed to be bound by the EULA. Hardware or software you use to pool connections, reroute information, or reduce the number of users that directly access or use the Software (sometimes referred to as “multiplexing” or “pooling”), does not reduce the number of licenses or Active Staff User Accounts you need.<h3>1.3 Third Party Software</h3><p> The Software may contain or be accompanied by Third Party Software that requires notices and/or additional terms and conditions. Such required Third Party Software notices and/or additional terms and conditions may be requested from Faveo and are made a part of and incorporated by reference into the EULA. By accepting the EULA, You are also accepting the additional terms and conditions, if any, set forth therein.<h3>1.4 New Releases, Updates, and Increases to Number of Staff User Accounts</h3><p> You are entitled to use new releases of and updates to the Software, and/or to increase the number of Your Staff User Accounts, only <p>(i) if you elect to purchase a Support and Maintenance subscription and </p><p>(ii) while your Support and Maintenance subscription remains active and in good standing. A Support and Maintenance subscription is optional and, subject to the terms of the EULA, You may use the Software without such a subscription and/or continue to use the Software after such subscription has expired. Any new releases of and updates to the Software you receive and are entitled to use pursuant to this <strong>Section 1.4</strong> shall be included in the definition of “Software” hereunder and shall be governed by the terms of this EULA unless such new release or update is accompanied by a separate license, in which case the terms of that license will govern the Software and/or such new release or update. You may obtain new releases of and/or updates to the Software only from Faveo or other sources authorized by Faveo.</p><h2>2. Conditions and Limitations</h2><h3>2.1 Number of Installations</h3><p> </p>You are permitted only <p>(i) one live, accessible installation of the Software and</p><p>(ii) one private installation that is available for use only by Customer for internal testing purposes. Each live installation of the Software can be accessed through one Domain Name only. If access to the installation is required through multiple Domain Names, additional license(s) are required.</p><h3>2.2 No Reselling, Time-Sharing, or Sub-Licensing</h3><p>You shall not license, sublicense, sell, resell, rent, lease, transfer, assign, distribute, time share or otherwise commercially exploit or make the Software available to any third party, other than as expressly permitted by the EULA.<h3>2.3 No Unlawful Use or Objectionable Content</h3><p> You shall not use the Software in any unlawful manner or in any manner that interferes with or disrupts the integrity or performance of the Software and its components or infringes on the rights of another party. You shall not modify, adapt or hack any protected (encrypted or compiled) parts of the Software, or otherwise attempt to gain unauthorized access to those parts or its related systems or networks. You undertake not to promote any material that is unlawful, threatening, abusive, malicious, defamatory, false, materially inaccurate, or otherwise objectionable. You will not reproduce, publish, or distribute content in connection with the Software that infringes any third party’s trademark, copyright, patent, trade secret, publicity, privacy, or other personal or proprietary right. Faveo offers no assurance that Your use of the Software under the terms of the EULA will not violate any law or regulation applicable to You.<h3>2.4 Responsibility for Use</h3><p> You must only install the Software and make the Software available for use on systems owned, leased, or controlled by You in such a way that You can guarantee compliance with the terms of the EULA. You assume all responsibility for any and all use of the Software, including but not limited to content and media that is created, uploaded to, downloaded from, transmitted and edited using the Software. You are responsible for any accesses made to the Software.<h3>2.5 Attribution</h3><p> With respect to any use of the Software, You shall keep the attribution and hyperlink to Faveo and its website intact unless a license (at a cost) is obtained from Faveo to do so.<h3>2.6 Software Backup</h3><p> You may make one copy the Software for backup and archival purposes, provided that the original and the copy are kept in Your possession and that Your installation and use of the Software does not exceed that allowed in the EULA.<h3>2.7 Data Backups</h3><p> You assume all responsibility for all of Your Data and any backups thereof.<h3>2.8 Unsolicited Email</h3><p> You may not use the Software to send unsolicited email ("spam") to anyone, including mailing lists which You have purchased.<h3>2.9 Securing Your Authentication Details</h3><p> You will ensure that all passwords and login credentials remain secure at all times for You and each of Your Staff User Accounts. If in the case that You suspect a security violation You also undertake to notify Faveo immediately.<h3>2.10 Handling Software</h3><p> You shall not <p>(a) reverse engineer, decompile, disassemble, or decrypt any portion of compiled and/or source code, in whole or in part, or otherwise attempt to discover the source code to the software used in the Software, </p><p>(b) use any Third Party Software independently of the Software, or </p><p>(c) make any attempt to circumvent parts of the Software designed to enforce the maximum number of Staff User Accounts for which You have paid. You obtain no rights to the Software except for the limited rights to use the Software expressly granted by the EULA.</p><h3>2.11 Limited License</h3><p> You acknowledge and agree that <p>(i) the Software is the property of Faveo and is licensed and not sold to You under the EULA and </p><p>(ii) the Software uses, embodies, and contains confidential and proprietary information and technology of Faveo and/or its licensors and embodies trade secrets and intellectual property of Faveo and/or its licensors protected under United Kingdom copyright and other laws, and by international treaty provisions (collectively referred to as “Ladybird's Intellectual Property Rights”). Your rights in the Software are strictly limited to those license rights expressly granted under <strong>Section 1.1</strong> above, and Faveo retains all rights not expressly granted herein. </p><p>Without limiting the foregoing, Faveo and/or its licensors retain all right, title, and interest in and to Faveo’s Intellectual Property Rights, including but not limited to: <p>(i) all software code (source and object), functionality, technology, system or network architecture and user interfaces and all modifications there to and </p><p>(ii) all trade secrets, patents, copyrights and other intellectual property rights with respect to the Software. You further acknowledge that there are no implied licenses granted under the EULA.</p><h3>2.12 Obtaining the Software</h3><p>You shall not obtain copies of the Software through any means other than directly through the Site using your Faveo customer account credentials. Faveo does not guarantee that the Software will be available for download from the Site for a period longer than 90 days following Your purchase.<h3>2.13 Disrepute</h3><p> You shall not commit any act likely to result in the disrepute or harming of interests of Faveo’s name or the name of its third party suppliers, whether through explicit act or omission.<h2>3. Liabilities, warranties and indemnification</h2><h3>3.1 Disclaimer of Warranties</h3><p> <strong>No Warranties.</strong> <p>THE SOFTWARE AND THE SITE ARE PROVIDED “AS IS” AND “AS AVAILABLE” WITHOUT ANY WARRANTY OF ANY KIND, EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NONINFRINGEMENT. Faveo MAKES NO WARRANTY THAT</p><p>(i) THE SOFTWARE WILL MEET YOUR REQUIREMENTS, </p><p>(ii) THE SOFTWARE WILL BE UNINTERRUPTED, TIMELY, SECURE, ERROR-FREE, OR VIRUS-FREE, </p><p>(iii) THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SOFTWARE WILL BE ACCURATE OR RELIABLE, </p><p>(iv) THE QUALITY OF ANY PRODUCTS, SERVICES, INFORMATION, OR OTHER MATERIAL PURCHASED OR OBTAINED BY YOU THROUGH THE SOFTWARE WILL MEET YOUR EXPECTATIONS, AND </p><p>(v) ANY ERRORS IN THE SOFTWARE WILL BE CORRECTED. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM Faveo OR THROUGH OR FROM THE SOFTWARE SHALL CREATE ANY WARRANTY NOT EXPRESSLY STATED HEREIN.</p><h3>3.2 Carrier Lines</h3><p> YOU ACKNOWLEDGE THAT ACCESS TO THE SOFTWARE WILL BE PROVIDED OVER VARIOUS FACILITIES AND COMMUNICATIONS LINES, AND INFORMATION WILL BE TRANSMITTED OVER LOCAL EXCHANGE AND INTERNET BACKBONE CARRIER LINES AND THROUGH ROUTERS, SWITCHES, AND OTHER DEVICES (COLLECTIVELY, “CARRIER LINES”) OWNED, MAINTAINED, AND SERVICED BY THIRD-PARTY CARRIERS, UTILITIES, INTERNET SERVICE PROVIDERS, ALL OF WHICH ARE BEYOND Faveo’s CONTROL. Faveo ASSUMES NO LIABILITY FOR OR RELATING TO THE INTEGRITY, PRIVACY, SECURITY, CONFIDENTIALITY, OR USE OF ANY INFORMATION WHILE IT IS TRANSMITTED ON THE CARRIER LINES, OR ANY DELAY, FAILURE, INTERRUPTION, INTERCEPTION, LOSS, TRANSMISSION, OR CORRUPTION OF ANY DATA OR OTHER INFORMATION ATTRIBUTABLE TO TRANSMISSION ON THE CARRIER LINES. USE OF THE CARRIER LINES IS SOLELY AT YOUR RISK AND IS SUBJECT TO ALL APPLICABLE LOCAL, STATE, NATIONAL, AND INTERNATIONAL LAWS.<h3>3.3 Unauthorized Access: Lost or Corrupt Data</h3><p> Faveo IS NOT RESPONSIBLE FOR UNAUTHORIZED ACCESS TO ANY DATA, FACILITIES, OR EQUIPMENT BY ANYONE USING THE SOFTWARE OR FOR UNAUTHORIZED ACCESS TO OR ALTERATION, THEFT, CORRUPTION, LOSS, OR DESTRUCTION OF ANY DATA FILES, PROGRAMS, PROCEDURES, OR INFORMATION THROUGH THE SOFTWARE, WHETHER BY ACCIDENT, FRAUDULENT MEANS OR DEVICES, OR ANY OTHER MEANS. YOU ARE SOLELY RESPONSIBLE FOR VALIDATING THE ACCURACY OF ALL OUTPUT AND REPORTS. YOU HEREBY WAIVE ANY DAMAGES OCCASIONED BY LOST OR CORRUPT DATA, INCORRECT REPORTS, OR INCORRECT DATA FILES RESULTING FROM PROGRAMMING ERROR, OPERATOR ERROR, EQUIPMENT OR SOFTWARE MALFUNCTION, SECURITY VIOLATIONS, OR THE USE OF THIRD-PARTY SOFTWARE. Faveo IS NOT RESPONSIBLE FOR THE CONTENT OF ANY INFORMATION TRANSMITTED OR RECEIVED THROUGH Faveo’S PROVISION OF THE SOFTWARE. ANY MATERIAL DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE SOFTWARE IS DONE AT YOUR OWN DISCRETION AND RISK AND THAT YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SERVICE OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF ANY SUCH MATERIAL. Faveo SHALL NOT BE HELD RESPONSIBLE FOR DATA HOSTED ON ITS SERVERS AND YOU ARE SOLELY RESPONSIBILITY FOR MAINTAINING LOCAL COPIES OF YOUR DATA AND MAINTAINING PROPER AND SUFFICIENT INSURANCE IF COVERAGE IS REQUIRED WITH RESPECT TO DATA LOSS.<h3>3.4 Third-Party Sites and Service Providers</h3><p> THE SOFTWARE MAY CONTAIN HYPERLINKS (INCLUDING HYPERLINKED ADVERTISEMENTS) TO INTERNET WEB SITES OPERATED BY THIRD PARTIES, OR TO MATERIALS OR INFORMATION MADE AVAILABLE BY THIRD PARTIES. SUCH THIRD PARTIES MAY OFFER GOODS OR SERVICES FOR SALE TO YOU. SUCH LINKS DO NOT CONSTITUTE OR IMPLY Faveo’S ENDORSEMENT OF SUCH THIRD PARTIES, OR OF THE CONTENT OF THEIR SITES, THE QUALITY OR EFFICACY OF THEIR GOODS OR SERVICES, OR THEIR INFORMATION PRIVACY OR SECURITY PRACTICES, AND Faveo HAS NO RESPONSIBILITY FOR INFORMATION, GOODS, OR SERVICES OFFERED OR PROVIDED BY SUCH THIRD PARTIES, OR FOR THE MANNER IN WHICH THEY CONDUCT THEIR OPERATIONS. YOUR USE OF THIRD-PARTY SITES AND THE MATERIALS, GOODS, AND SERVICES OFFERED BY THEM IS ENTIRELY AT YOUR OWN RISK, AND IS SUBJECT TO THE TERMS OF USE OF THE THIRD PARTIES OPERATING OR PROVIDING THEM. YOU SHOULD ASSUME THAT ANY INTERNET PAGE OR OTHER MATERIAL THAT DOES NOT BEAR THE Faveo LOGO IS PROVIDED BY A THIRD PARTY.<h3>3.5 Warranties Required By Applicable Law</h3><p> IF APPLICABLE LAW REQUIRES ANY WARRANTIES WITH RESPECT TO THE SOFTWARE, ALL SUCH WARRANTIES ARE LIMITED IN DURATION TO NINETY (90) DAYS FROM THE DATE YOU REGISTERED FOR THE SOFTWARE.<h3>3.6 Limitation of Liability</h3><p> IN NO EVENT SHALL Faveo BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY INDIRECT, SPECIAL, INCIDENTAL, EXEMPLARY, PUNITIVE, COVER, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, DAMAGES FOR THE INABILITY TO USE EQUIPMENT OR ACCESS DATA, LOSS OF BUSINESS, LOSS OF PROFITS, BUSINESS INTERRUPTION OR THE LIKE), ARISING OUT OF THE USE OF, OR INABILITY TO USE, THE SOFTWARE AND BASED ON ANY THEORY OF LIABILITY INCLUDING WITHOUT LIMITATION BREACH OF CONTRACT, BREACH OF WARRANTY, TORT (INCLUDING WITHOUT LIMITATION NEGLIGENCE), PRODUCT LIABILITY OR OTHERWISE, EVEN IF Faveo OR ITS REPRESENTATIVES HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES AND EVEN IF A REMEDY SET FORTH HEREIN IS FOUND TO HAVE FAILED OF ITS ESSENTIAL PURPOSE. Faveo’S TOTAL LIABILITY TO YOU AND THIRD PARTIES FOR ACTUAL DAMAGES FOR ANY CAUSE WHATSOEVER WILL BE LIMITED TO THE AMOUNT PAID BY YOU FOR THE SOFTWARE. THE PROVISIONS OF THIS SECTION ALLOCATE THE RISKS UNDER THE EULA BETWEEN THE PARTIES, AND THE PARTIES HAVE RELIED ON THESE LIMITATIONS IN DETERMINING WHETHER TO ENTER INTO THE EULA AND HOW TO PRICE THE SOFTWARE. SOME JURISDICTIONS MAY NOT ALLOW THE LIMITATION OR EXCLUSION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE ABOVE LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU AND YOU MAY ALSO HAVE OTHER LEGAL RIGHTS THAT VARY FROM JURISDICTION TO JURISDICTION. THE FOREGOING LIMITATIONS ON LIABILITY ARE INTENDED TO APPLY TO THE WARRANTIES AND DISCLAIMERS ABOVE AND ALL OTHER ASPECTS OF THE SOFTWARE AND THE EULA.<h3>3.7 Indemnification</h3><p> You agree to indemnify, defend, and hold harmless Faveo and other users of Faveo services, and Faveo’s and their affiliates, officers, directors, and agents, from and against any claim, cost or liability, including reasonable attorneys’ fees, arising out of or relating to: <p>(a) Your use of the Software; </p><p>(b) any content You create, transmit, or display while using the Software; </p><p>(c) any breach by You of any representations, warranties, or agreements contained in the EULA; </p><p>(d) any unlicensed use of the Software using Your Staff User Accounts; and </p><p>(e) Your negligent or wilful misconduct.</p><h3>3.8 Notification of Claim</h3><p> In no event will a claim by brought by You unless the licensee has notified Faveo of the claim within one year of it arising.<h3>3.9 Infringement</h3><p> Subject to the remainder of this Section 3.9 and to the limitations set forth in Section 3.6, Faveo will indemnify and hold You harmless against a claim to the extent based on an allegation that Your use of the Software (in the form provided by Faveo) in compliance with this Agreement infringes a United States or European Union patent or registered copyright (“Claim”), and will pay those damages and costs finally awarded against You by a court of competent jurisdiction, or agreed to in writing by Faveo as settlement, as a result of such Claim, provided that the licensee has notified Faveo of the Claim within sixty (60) days of it arising. Faveo will have no liability for any damages or costs to the extent that a Claim is based upon: <p>(i) use of Software in combination with any non-Faveo product, software or equipment; </p><p>(ii) use of Software in a manner or for an application other than for which it was designed or intended to be used, regardless of whether Faveo was aware of or had been advised of such use; </p><p>(iii) modifications to Software by any person or entity other than Faveo; </p><p>(iv) any breach by You of any representations, warranties, or agreements contained in the EULA; (v) any unlicensed use of the Software using Your Staff User Accounts; or </p><p>(v) Your negligent or wilful misconduct.</p><p> If the Software becomes, or in the opinion of Faveo may become, the subject of a Claim, Faveo may, at its option and in its discretion: </p><p>(i) procure for You the right to use the Software free of any liability; </p><p>(ii) replace or modify the Software to make it non-infringing; or </p><p>(iii) terminate Your right to continue using such Software and refund, on a prorated basis, any license fees related to the Software paid by You.</p><h2>4. Trademarks and publicity</h2><h3>4.1 Use of Names and Trademarks</h3><p> While You remain licensed to use the Software, You may use Faveo’s name or logos in order to identify Yourself as a customer. You shall not otherwise use Faveo’s name or trademarks, unless written permission is obtained from Faveo or otherwise set out in the EULA.<h3>4.2 Disrepute</h3><p> You shall not commit any act where the result of which is the likely disrepute or harming of interests of Faveo’s name or the name of its third party vendors, whether through explicit act or omission.<h3>4.3 Promotional Materials and Publicity</h3><p> You authorize Faveo to use Your name and trademarks in Faveo’s promotional materials and for publicity purposes. You can opt-out at any time by writing to: <a href="mailto:support@ladybirdweb.com">support@ladybirdweb.com</a>.<h2>5. Confidentiality</h2><h3>5.1 Access to and Disclosure of Your Data</h3><p> You acknowledge and agree that Faveo may access, use, and store Your Data for the purpose of responding to Your requests for technical support and/or providing other services that we have agreed, or may in the future agree, to provide. You also agree that Faveo may collect anonymized usage data from and/or relating to Your Data and Your use of the Software (“Anonymized Usage Data”). Anonymized Usage Data will not include identifying information about Your customers, such as Your customer contact information, or copies of communications between You and Your customers. Faveo shall maintain reasonable administrative, physical, and technical safeguards for protection of the security, confidentiality, and integrity of any of Your Data in Faveo’s possession. Faveo will not disclose any of Your Data in Faveo’s possession to a third party unless compelled by law or court order or if You consent in writing to the disclosure.<h3>5.2 Anonymized Usage Data</h3><p> In consideration of Faveo’s provision of a license to access and use the Software, You hereby transfer and assign to Faveo all right, title, and interest in and to all Anonymized Usage Data that Faveo makes from Your data pursuant to Section 5.1. You agree that Faveo may use, disclose, market, license, and sell such Anonymized Usage Data for any purpose without restriction, and that you have no interest in such information, or in the proceeds of any sale, license, or other commercialization thereof.<h3>5.3. Privacy Policy</h3><p> The privacy policy is available at http://www.faveohelpdesk.com/privacy-policy/. By agreeing to the EULA, You accept the terms of Faveo’s privacy policy.<h2>6. Payments, Sales, and Refunds</h2><h3>6.1 Payment of Fees</h3><p> You must pay all fees by the due dates.<h3>6.2 Upgrading, Downgrading, or Switching Solution</h3><p> The amount You pay for the Software is dependent on the Solution selected and the number of Staff User Accounts selected. If You elect to switch to a Solution which costs more or increase the number of Staff User Accounts, Faveo will invoice You for the marginally increased amount owed. If You switch to a Solution which costs less or decrease the number of Staff User Accounts, Faveo will not be required to refund any prepaid amount. Because the price of the Support and Maintenance subscription is a function of the cost of the Solution and number of Staff User Accounts you have selected, You will also be required to pay any difference in the price of the Support and Maintenance subscription. To change your Solution or the number of Staff User Accounts, you must, at Faveo’s sole discretion, enter into a new license agreement for the Software on the then-current terms.<h3>6.3 Price Changes</h3><p> Faveo reserves the right to change prices at any time.<h3>6.4 Credit Card Billing</h3><p> If You choose to pay by credit or debit card You authorize Ladybird to debit Your account renewal fees, if any, from Your card. Ladybird uses a third-party intermediary to manage credit card processing and this intermediary is not permitted to store, retain, or use Your billing information except to process Your credit card information for Faveo. Faveo may use Your information in order to perform fraud screening.<h3>6.5 Refunds</h3><p> Ladybird has no obligation to issue refunds. Faveo offer Community edition for evaluation that should be used to evaluate and test the Software before purchasing. Any refunds will be made entirely at Ladybird’s discretion.<h3>6.6 Taxes</h3><p> Unless otherwise stated, Faveo’s charges do not include any taxes, levies, duties or similar governmental assessments, including value-added, sales, use or withholding taxes assessable by any local, state, provincial or foreign jurisdiction (collectively "Taxes"). You are responsible for paying Taxes except those assessable against Ladybird based on its income. Ladybird will invoice You for such Taxes if Ladybird believes there is a legal obligation to do so and You agree to pay such Taxes if so invoiced.<h3>7. Termination and Modification</h3><p><h3>7.1 Termination</h3><p> This EULA is effective until terminated. This EULA and your license and other rights under this EULA will terminate automatically without notice from Faveo if You fail to comply with any term(s) of this EULA.<h3>7.2 No Refund</h3><p> Faveo will not refund any amounts to You if this EULA and your rights to use the Software are terminated due to Your failure to comply with any term(s) of this EULA.<h3>7.3 Effect of Termination</h3><p> Upon the termination of this EULA, you must cease all use of the Software and destroy all copies, full or partial, of the Software.<h3>7.4 Recovery of fees and costs</h3><p> Should You continue to use the Software after termination of this EULA, You will be liable to pay all costs, including reasonable attorneys fees, of Faveo to enforce this EULA, as well as any damages suffered by Faveo.<h3>7.5 Survival</h3><p> Articles <strong>3, 4, 5, 6, 7, and 8</strong> of the EULA will survive termination of the EULA.<h2>8. Interpretation</h2><h3>8.1 Assignment</h3><p> You may not assign Your account with Faveo or Your rights under the EULA without Ladybird’s prior written consent, except in the case of a sale of all or substantially all of Your assets. Faveo may assign, in whole or in part, its rights, interests, and obligations hereunder without limitation.<h3>8.2 Headings</h3><p> Descriptive headings are for convenience only and shall not control or affect the meaning or construction of any provision of this Agreement.<h3>8.3 Enforcement</h3><p> The failure of Ladybird to exercise or enforce any right or provision of the EULA shall not be a waiver of that right. No provision in the EULA shall be deemed waived and no breach excused, unless such waiver or consent shall be in writing and signed by the party claimed to have waived or consented. Any consent by any party to, or waiver of a breach by the other, whether expressed or implied, shall not constitute a consent to, waiver of, or excuse for any other different or subsequent breach.<h3>8.4 Export Controls</h3><p> You agree to comply with all applicable export and reexport control laws and regulations, including without limitation the Export Administration Regulations maintained by the U.S. Department of Commerce and trade and economic sanctions maintained by the Treasury Department’s Office of Foreign Assets Control. If You are in a country outside of the India, You agree to additionally comply with any local rules regarding online conduct and acceptable content, including without limitation laws regulating the export and reexport of data to and from the India or such other country.<h3>8.5 Choice of Law</h3><p> The interpretation of the EULA and the resolution of any disputes arising under or in connection with the EULA shall be governed by the laws of the India. The United Nations Convention on Contracts for the Sale of Goods does not apply.<h3>8.6 Dispute Resolution</h3><p> In the event of a claim or dispute between You and Ladybird arising under or in connection with the EULA or the Software, the parties shall first attempt to settle the claim or dispute by direct discussions. If discussions are not successful, the parties shall arbitrate pursuant to the Karnataka High Court, with a final judgment to be entered upon the arbitration award. The venue for discussions and arbitration shall be Bangalore, Karnataka, India.<h3>8.7 Severability</h3><p> Any provision of the EULA that shall prove to be invalid, void, or illegal, shall in no way affect, impair, or invalidate any other provision of the EULA, and such other provisions shall remain in full force and effect.<h3>8.8 Notices</h3><p> You agree that Ladybird may provide You with notices, including without limitation those regarding changes to the EULA, by email, regular mail, or messages or postings through the Software.<h3>8.9 Complete Understanding</h3><p> The EULA constitutes the entire agreement between You and Ladybird and govern Your use of the Software, superseding any prior agreements between You and Ladybird for the use of the Software. You also may be subject to additional terms and conditions that may apply when You use or purchase certain other Ladybird services, affiliate services, third-party content, or third-party software.<h3>8.10. No Third-Party Beneficiaries</h3><p> Nothing express or implied in the EULA is intended to confer, nor shall confer, upon any person or entity other than the parties and their respective successors or assigns any rights, remedies, obligations, or liabilities whatsoever.</p>


                            <br>
                        </div>
                            <a style="float: right;" href="#" title="Close" class="button-primary button button-large button-next">Close</a>
                        </p>

                    </div>
                </div>
                <input id="Acceptme" class="input-checkbox" name="acceptme" type="checkbox">
            <label for="Acceptme">I accept the <a href="#openModal">License Agreement</a></label>
            </div>
            <br>
            <p class="setup-actions step">
                <input type="submit" id="submitme" class="button-primary button button-large button-next" value="Continue" name="accept1">
                <a href="{!! route('prerequisites') !!}" class="button button-large button-next" style="float: left">Previous</a>
            </p>
            <br>
        </form>
        </div>
    <script>
        window.onload = function() {
            if(!window.location.hash) {
                window.location = window.location + '#loaded';
                window.location.reload();
            }
        }
        var second = document.getElementById('Acceptme').checked = false;
        var first = document.getElementById('submitme').disabled = true;
        var checkme = document.getElementById('Acceptme');
        var submiter = document.getElementById('submitme');

        checkme.onchange = function() {
            submiter.disabled = !this.checked;
            if (submiter.disabled) {
                //    alert("Click to enable the button");
            };
        };
    </script>
    

@stop