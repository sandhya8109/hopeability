<?php
include('header1.php')
  ?>

<head>
  <!--important tags : these are important settings for your machine to know more about your code and how to display it-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--title-->
  <title>Contact US </title>

  <!--google fonts(the fonts that we are going to use in this tutorial: raleways and  open sans)-->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700&display=swap"
    rel="stylesheet">
  <!--Link for open sans font type and its values-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

  <!--Linking fontawesome file with html-->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!--Linking bootstrap file to html-->
  <link rel="stylesheet" href="css/bootstrap.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


  <!--Linking the css file to html-->
  <link rel="stylesheet" href="css/referalform.css">



</head>

<body>
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-3 text-white animated slideInDown">Referrals</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a class="text-white" href="./index.php">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white"
                  href="./referelform.php">
                  Referral</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <h1 class="title">Do You Know Someone Who Needs Help To Live Their Best Life?​</h1>
  <p class="sub">We welcome participant referrals. Please fill out the form below. Our Care Advisors will be in touch to
    discuss your needs and arrange an appointment. If you have any immediate queries, please call us on1300 424 442
    soon.</p>
  <br>
  <br>
  <style>
    @media (max-width: 1024px) {
      .title {
        font-size: 22px;
      }
    }

    .sub {
      width: 60%;
      padding: 20px;
      background-color: white;
      margin-left: 20%;
      border-style: solid;
      border-width: 0px 0px 0px 0px;
      font-weight: lighter;
      transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
      padding: 30px 30px 30px 30px;
    }

    .title {
      color: #3A5668;
      font-family: "Vollkorn", Sans-serif;
      font-size: 36px;
      font-weight: 400;
      line-height: 1.6em;
      text-align: center;
    }
  </style>

  <div class="container-1">
    <div class="apply_box">
      <h1>Participant Referral</h1>
      <div class="form_container">
        <div class="textarea_control-1">
          <label for="date"> Date </label>

          <input i+++++++++++++++++++ d="Date" name="date" placeholder="Date" />
        </div>
        <div class="form_control">
          <label for="first_name" class='required'> Referrer First Name </label>
          <input id="first_name" name="first_name" placeholder="Refferer First Name" />
        </div>
        <div class="form_control">
          <label for="last_name"> Referrer Last Name </label>
          <input id="last_name" name="last_name" placeholder="Refferrer Last Name" />
        </div>
        <div class="form_control">
          <label for="organization"> Referer Organization</label>
          <input id="organization" name="organization" placeholder="Referer Organization" />
        </div>
        <div class="form_control">
          <label for="position"> Referer Position</label>
          <input id="phone" name="phone" placeholder="Refferer Position" />
        </div>
        <div class="form_control">
          <label for="email" class='required'> Referrer Email </label>
          <input id="email" name="email" placeholder="Referrer Email" />
        </div>
        <div class="form_control">
          <label for="phone" class='required'> Referrer Phone Number </label>
          <input id="phone" name="phone" placeholder="Referrer Phone Number" />
        </div>
        <div class="form_control">
          <label for="first_name" class='required'> Participant First Name </label>
          <input type="first_name" id="first_name" name="first_name" placeholder="Participant First Name" />
        </div>
        <div class="form_control">
          <label for="last_name" class='required'> Participant Last Name</label>
          <input id="last_name" name="last_name" placeholder="Participant Last Name" />
        </div>
        <div class="form_control">
          <label for="dob"> Participant DOB </label>
          <input id="dob" name="dob" placeholder="Participant DOB" />
        </div>
        <div class="form_control">
          <label for="gender" class='required'> Participant Identified Gender</label>
          <select id="gender" name="gender">
            <option value="">Select Gender</option>
            <option value="">Female</option>
            <option value="">Male</option>
            <option value="">Non-binary</option>
            <option value="">Not prefer to say</option>
          </select>
        </div>
        <div class="form_control">
          <label for="address" class='required'>Participant Address </label>
          <input type="address" id="address" name="address" placeholder="Paticipant Address" />
        </div>
        <div class="form_control">
          <label for="region"> State/Province/Region </label>
          <input id="region" name="region" placeholder="State/Province/Region" />
        </div>
        <div class="form_control">
          <label for="code"> Postal / Zip Code </label>
          <input id="code" name="code" placeholder="Postal / Zip Code" />
        </div>
        <div class="form_control">
          <label for="country"> Country </label>
          <input id="country" name="country" placeholder="Country" />
        </div>
        <div class="form_control">
          <label for="" class='required'> Participant Phone Number </label>
          <input type="" id="" name="" placeholder="" />
        </div>
        <div class="form_control">
          <label for="job_role"> Participant Country of Birth </label>
          <input id="phone" name="phone" placeholder="Country" />
        </div>
        <div class="form_control">
          <label for="status"> Participant Family Status </label>
          <select id="status" name="status">
            <option value="">Select status</option>
            <option value="">Single</option>
            <option value="">Married</option>
            <option value="">Defacto</option>

          </select>
        </div>
        <div class="form_control">
          <label for="Citizenship"> Participant Citizenship Status </label>
          <select id="Citizenship" name="Citizenship">
            <option value="">Select Citizenship</option>
            <option value="">Permanent Residant</option>
            <option value="">Temporary Visitors</option>


          </select>
        </div>
        <div class="textarea_control-1">
          <label for="date"> Participant Religion: </label>

          <input id="Date" name="date" placeholder="Participant Religion" />
        </div>

        <div class="text">
          <p>Aboriginal or Torres Strait Islander?</p>
          <div class="radio">
            <ul>
              <li>
                <input type="radio" id="yes" name="fav_language" value="yes">
                <label for="html">Yes</label><br>
              </li>
              <li>
                <input type="radio" id="no" name="fav_language" value="no">
                <label for="html">No</label><br>
              </li>
            </ul>
          </div>
        </div>
        <div class="text">
          <p>Does the Participant require an interpreter?</p>
          <div class="radio">
            <ul>
              <li>
                <input type="radio" id="yes" name="fav_language" value="yes">
                <label for="html">Yes</label><br>
              </li>
              <li>
                <input type="radio" id="no" name="fav_language" value="no">
                <label for="">No</label><br>
              </li>
            </ul>
          </div>
        </div>
        <div class="textarea_control-1">
          <label for="date"> If yes,state prefered language:</label>

          <input id="" name="" placeholder="" />
        </div>
        <div class="text1">
          <label for="date" class='required'> Participant Disability</label>
          <div class="radio">
            <ul>

              <input type="checkbox" id="yes" name="fav_language" value="yes">
              <label for="">Vision</label><br>

              <input type="checkbox" id="no" name="fav_language" value="no">
              <label for="">Hearing</label><br>


              <input type="checkbox" id="no" name="fav_language" value="no">
              <label for="">Mental Health</label><br>


              <input type="checkbox" id="no" name="fav_language" value="no">
              <label for="">Intellectual</label><br>


              <input type="checkbox" id="no" name="fav_language" value="no">
              <label for="">Acquired Brain Injury</label><br>


              <input type="checkbox" id="no" name="fav_language" value="no">
              <label for="">Autism Spectrum Disorder</label><br>


              <input type="checkbox" id="no" name="fav_language" value="no">
              <label for="">Physical Disability</label><br>


              <input type="checkbox" id="no" name="fav_language" value="no">
              <label for="">Other</label><br>

            </ul>
          </div>
        </div>


        <div class="textarea_control">
          <label for="address" class='required'>Please indicate how we can follow-up on your inquiry (ie. NDIS support
            etc.) </label>
          <textarea id="" name="" row="4" cols="50" placeholder=""></textarea>
        </div>


        <div class="button_container">
          <button type="submit">Apply Now</button>
        </div>
        </form>
      </div>
    </div>
    <br>
    <br>
  </div>
  <?php
  include('footer.php')
    ?>