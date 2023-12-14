
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Verifiable Dummy Ticket at Reasonable Price within 60 Minutes.</title>
    <meta name="description" content="Buy a verifiable dummy ticket from us & apply your visa freely. Get Dummy Ticket as a onward ticket.">
    <!-- <link rel="icon" type="image/png" href="https://dummy-tickets.com/images/DTFicon.png"/>
    <link href="https://dummy-tickets.com/images/DTFicon.png" rel="apple-touch-icon"/> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="buy.css">
    <link rel="stylesheet" href="styleres.css">
    <script src="jquery.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header_logo">
                <!-- <a href="https://dummy-tickets.com/"> -->
                <img src="Image/Logo.svg" alt="Logo">
                </a>
            </div>
        </div>
        <div class="box padding_zero margin_center deatails_box">
            <div class="details">

                <div class="scroll_y">
                    <div class="step type_box activePage">
                        <div class="full_width text_left margin_center">
                            <h1>Type</h1>
                        </div>
                        <div class="scrollable noScrollBar">
                            <div class="mainTypeBox">
                                <div class="flight" data-valid="false">
                                    <div class="img_icon icon_thirteen"></div>
                                    <span>Flight Reservation</span>
                                </div>
                                <div class="hotel" data-valid="false">
                                    <div class="img_icon icon_fourteen"></div>
                                    <span>Hotel Reservation</span>
                                </div>
                                <div class="f_h_both" data-valid="false">
                                    <div class="img_icon icon_fifteen"></div>
                                    <span>Flight & Hotel (Both) Reservation</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step route_box">
                        <div class="full_width text_left margin_center">
                            <h1 class="routeBoxHead">Route</h1>
                        </div>
                        <div class="scrollable noScrollBar">
                            <div class="flight_box">
                                <div class="route_style">
                                    <span class="route_style_active one_way">One Way</span>
                                    <span class="return_trip">Round Trip</span>
                                    <span class="multi_trip">Multi Trip</span>
                                </div>
                                <div class="rout_style_box">
                                    <div class="route">
                                        <div class="input_box">
                                            <h3 class="routeHead">Route 1</h3>
                                            <div class="input">
                                                <input type="text" class="autofill" placeholder=" " id="origin1"
                                                    autocomplete="off" data-type="code" data-searchFor="code city"
                                                    data-searchData="airports" data-moreHtml="name">
                                                <label class="placeholder" for="origin1">Origin</label>
                                                <div class="auto_complete_box">
                                                </div>
                                            </div>
                                            <div class="input">
                                                <input type="text" class="autofill block-tab" placeholder=" " id="destination1"
                                                    autocomplete="off" data-type="code" data-searchFor="code city"
                                                    data-searchData="airports" data-moreHtml="name">
                                                <label class="placeholder" for="destination1">Destination</label>
                                                <div class="auto_complete_box">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input_box">
                                            <div class="input">
                                                <div class="datepicker">
                                                    <input type="text" class="selected-date" data-type="date" value="Select A Date" data-required="true" data-valid="false" readonly>
                                                    <label class="placeholder">Departure</label>
                                                    <div class="calendar">
                                                        <div class="calendar-header">
                                                            <div class="prev img_icon icon_seventeen"></div>
                                                            <div class="mandy" id="date1"></div>
                                                            <div class="next img_icon icon_eightteen"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hotelBox">
                                <div class="hotelUnit">
                                    <div class="input_box">
                                        <h3 class="hotelHead" style="opacity: 1;"><span class="hotelNumber">Hotel
                                                1</span>
                                        </h3>
                                        <div class="input">
                                            <div class="datepicker">
                                                <input type="text" class="selected-date" data-type="date" value="Select A Date" data-valid="false" readonly>
                                                <label class="placeholder">Check In</label>
                                                <div class="calendar">
                                                    <div class="calendar-header">
                                                        <div class="prev img_icon icon_seventeen"></div>
                                                        <div class="mandy" id="checkIn1" data-dur='365,8' data-durto="365,0,checkIn1"></div>
                                                        <div class="next img_icon icon_eightteen"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input">
                                            <div class="datepicker">
                                                <input type="text" class="selected-date" data-type="date" value="Select A Date" data-required="true" data-valid="false" readonly>
                                                <label class="placeholder">Check Out</label>
                                                <div class="calendar">
                                                    <div class="calendar-header">
                                                        <div class="prev img_icon icon_seventeen"></div>
                                                        <div class="mandy" id="checkOut1" data-for="checkIn1" data-durto="365,0,checkOut1"></div>
                                                        <div class="next img_icon icon_eightteen"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input_box">
                                        <div class="input">
                                            <input type="text" class="autofill block-tab" placeholder=" " id="hotelCity1"
                                                autocomplete="off" data-type="name" data-searchFor="city code"
                                                data-searchData="airports" data-moreHtml=''>
                                            <label class="placeholder" for="hotelCity1">City</label>
                                            <div class="auto_complete_box"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input_box add_button_box">
                                    <div class="input button add_more_hotel" style="margin-top: 0px;">
                                        Add More Hotel
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step passenger_box">
                        <div class="full_width text_left margin_center">
                            <h1 class="passengerBoxHead">Passenger</h1>
                        </div>
                        <div class="scrollable noScrollBar">
                        <div class="allPassenger">
                            <div class="passenger">
                                <h3 class="passengerNumber"><span class="PassNumber">Passenger 1</span></h3>
                                <div class="input">
                                    <div class="selectBox">
                                        <div class="select_box_head">
                                            <input type="text" class="selectBoxDisplay" id="title1" value="Select"
                                                data-type="select" data-required="true" data-valid="false" readonly>
                                            <label class="selectorPlaceholder">Title</label>
                                        </div>
                                        <div class="optionBox" style="display: none;">
                                            <span class="option">Mr</span>
                                            <span class="option">Mrs</span>
                                            <span class="option">Ms</span>
                                            <span class="option">Miss</span>
                                            <span class="option">Mstr</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input">
                                    <input type="text" placeholder=" " id="fName1" autocomplete="off" data-type="name"
                                        data-required="true" data-valid="false">
                                    <label class="placeholder" for="fName1">First Name</label>
                                </div>
                                <div class="input">
                                    <input type="text" placeholder=" " id="lName1" autocomplete="off" data-type="name">
                                    <label class="placeholder" for="lName1">Last Name</label>
                                </div>
                                <div class="input">
                                    <div class="datepicker">
                                        <input type="text" class="selected-date" data-type="date" value="Select A Date" data-required="true" data-valid="false" readonly>
                                        <label class="placeholder">D.O.B.</label>
                                        <div class="calendar">
                                            <div class="calendar-header">
                                                <div class="prev img_icon icon_seventeen"></div>
                                                <div class="mandy" id="DOB1" data-lap='-1'></div>
                                                <div class="next img_icon icon_eightteen"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input">
                                    <input type="text" class="autofill block-tab" placeholder=" " id="nation1"
                                        autocomplete="off" data-required="true" data-valid="false" data-type="name"
                                        data-searchFor="name code" data-searchData="country_data" data-moreHtml=''>
                                    <label class="placeholder" for="nation1">Nationality</label>
                                    <div class="auto_complete_box"></div>
                                </div>
                            </div>
                            <div class="input_box add_button_box">
                                <div class="input button add_more_passanger">
                                    Add More Passenger
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="step contact_box">
                        <div class="full_width text_left margin_center">
                            <h1 class="contactBoxHead">Contact</h1>
                        </div>
                        <div class="scrollable noScrollBar">
                        <div class="input">
                            <input type="text" class="autofill" id="country" placeholder=" " autocomplete="off"
                                data-type="code" data-required="true" data-valid="false" data-searchFor="code name"
                                data-searchData="country_data" data-moreHtml=''>
                            <label class="placeholder" for="country">Country Code</label>
                            <div class="auto_complete_box"></div>
                        </div>
                        <div class="input">
                            <input type="text" id="number" placeholder=" " autocomplete="off" data-type="contactNumber"
                                data-required="true" data-valid="false">
                            <label class="placeholder" for="number">Contact Number</label>
                        </div>
                        <div class="input">
                            <input type="text" id="mail" class="block-tab" placeholder=" " autocomplete="off" data-type="email"
                                data-required="true" data-valid="false">
                            <label class="placeholder" for="mail">Email Address</label>
                        </div>
                    </div>
                    </div>
                    <div class="step receive_box">
                        <div class="full_width text_left margin_center">
                            <h1 class="receiveBoxHead">Receive</h1>
                        </div>
                        <div class="scrollable noScrollBar">
                        <div class="receiveDetails">
                            <fieldset class="receiveDate" data-valid="false">
                                <legend>Select One</legend>
                                <input type="radio" name="receiveDate" id="ReceiveNow">
                                <label for="ReceiveNow">Receive Now</label>
                                <input type="radio" name="receiveDate" id="ReceiveLater">
                                <label for="ReceiveLater">Receive Later</label>
                            </fieldset>

                            <div class="input" style="display: none; min-height: unset;">
                                <div class="datepicker">
                                    <input type="text" class="selected-date" data-type="date" value="Select A Date" readonly>
                                    <label class="placeholder">Receiving Date</label>
                                    <div class="calendar">
                                        <div class="calendar-header">
                                            <div class="prev img_icon icon_seventeen"></div>
                                            <div class="mandy" id="receivingDate" data-lap="1"></div>
                                            <div class="next img_icon icon_eightteen"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dateAlert" style="display: none;">
                                <div class="img_icon icon_twentyone"></div>
                                <p>Important Suggestion: To get good validity of your flight reservation, either schedule the delivery for a day before using it or book it just a day in advance.</p>
                            </div>
                            <div class="receivingSource input">
                                <span class="receivingSourceActive whatsApp">WhatsApp</span>
                                <span class="email">E-mail</span>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="step other_box">
                        <div class="full_width text_left margin_center">
                            <h1 class="otherBoxHead">Other</h1>
                        </div>
                        <div class="otherDetails">
                            <div class="input">
                                <div class="selectBox">
                                    <div class="select_box_head">
                                        <input type="text" id="purpose" class="selectBoxDisplay" value="Select"
                                            data-type="select" data-required="true" data-valid="false" readonly>
                                        <label class="selectorPlaceholder">Purpose to buy dummy ticket</label>
                                    </div>
                                    <div class="optionBox" style="display: none;">
                                        <span class="option">Visa Submission/Application</span>
                                        <span class="option">Proof of Return</span>
                                        <span class="option">Passport Renewal</span>
                                        <span class="option">Visa Extension</span>
                                        <span class="option">Other</span>
                                    </div>
                                </div>
                            </div>
                            <div class="input_box" id="airlineDeatils">
                                <small style="margin-bottom: 10px;">Are you going by which airline?</small>
                                <div class="input airline_input">
                                    <input type="text" id="flightNumber" placeholder=" " autocomplete="off"
                                        data-type="numbAlpha">
                                    <label class="placeholder" for="flightNumber">Airline</label>
                                </div>
                            </div>
                            <div class="input massageBox">
                                <textarea placeholder=" " id="massage"></textarea>
                                <label class="placeholder" for="massage">Any Message(Optional)</label>
                                <div class="auto_complete_box">
                                </div>
                            </div>
                            <div class="T-C" data-valid="false">
                                <label for="term1" class="term">
                                    <input type="checkbox" id="term1">
                                    <div class="img_icon icon_twentytwo"></div>
                                    <small>I agree to the <a href="#">terms and conditions and privacy
                                            policy.</a></small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stepButtons">
                    <div class="stepPrev not_active img_icon icon_nineteen"></div>
                    <div class="stepNext not_active img_icon icon_twenty"></div>
                    <div class="button proceed">Proceed</div>
                </div>
                <div class="all_steps">
                    <div class="progress_bar">
                        <div class="progress_done"></div>
                    </div>
                </div>
                <form action="../payments/" id="mainForm" method="post">
                    <textarea id="details" name="details" style="display:none;"></textarea>
                </form>
            </div>
            <div class="proceedingAnim">
                <div class="circle">
                </div>

            </div>

            <div class="receipt">
                <div class="receipt_box ">
                    <div class="receipt_head">
                        <div class="route_name">
                            <span class="firstOrigin"></span>
                            <span class="img_icon icon_sixteen"></span>
                            <span class="secondOrigin"></span>

                            <span class="firsthotel" style="font-size: 15px;"></span>
                            <span></span>
                            <span class="firsthotelDate" style="font-size: 15px;"></span>
                        </div>
                    </div>
                    <div class="receipt_foot">
                    <div class="currency" title="Switch Currency" data-currentCurrency="inr" data-currencyType="1">₹ &#8644;&nbsp; $</div>

                        <div class="sub_total">
                            <div class="receipt_item receipt_passenger"
                                style="height: 0px; overflow-y: hidden;padding-top: 0px;">
                                <span class="relative">
                                    <span>HOTELS: </span>
                                    <div class="label_round" id="hotelCount">0</div>
                                </span>
                                <span id="hotelAmountUSD" data-currency="usd" style="display: none;">$ 0.00</span>
                                <span id="hotelAmountINR" data-currency="inr">₹ 0.00</span>
                            </div>
                            <div class="receipt_item receipt_passenger"
                                style="height: 0px; overflow-y: hidden;padding-top: 0px;">
                                <span class="relative">
                                    <span>ROUTES: </span>
                                    <div class="label_round" id="routeCount">0</div>
                                </span>
                                <span id="routeAmountUSD" data-currency="usd" style="display: none;">$ 0.00</span>
                                <span id="routeAmountINR" data-currency="inr">₹ 0.00</span>
                            </div>
                            <div class="receipt_item receipt_passenger">
                                <span class="relative">
                                    <span>PASSENGERS: </span>
                                    <div class="label_round" id="passengerCount">0</div>
                                </span>
                                <span id="passengerAmountUSD" data-currency="usd" style="display: none;">$0.00</span>
                                <span id="passengerAmountINR" data-currency="inr">₹ 0.00</span>
                            </div>
                            <div class="receipt_item receipt_passenger">
                                <span class="relative">
                                    <span>GST: </span>
                                    <div class="label_round" id="gstCount" style="font-size: 9px; padding-top:2px">18%
                                    </div>
                                </span>
                                <span id="gstAmountUSD" data-currency="usd" style="display: none;">$ 0.00</span>
                                <span id="gstAmountINR" data-currency="inr">₹ 0.00</span>
                            </div>
                        </div>
                        <div class="total">
                            <h2>TOTAL:</h2>
                            <h2 id="TotalAmountUSD" data-currency="usd" style="display: none;"> $ 0.00</h2>
                            <h2 id="TotalAmountINR" data-currency="inr">₹ 0.00</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script src="index.js"></script>
</body>

</html>