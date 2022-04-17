<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Program Selection</title>
  <link rel="stylesheet" href="https://cdnjs.cloudfl are.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      overflow: hidden;
      padding: 0 20px;
      background: #00b1ae;
    }

    ::selection {
      background: rgba(23, 162, 184, 0.3);
    }

    .wrapper {
      max-width: 700px;
      max-height: 700px;
      width: 100%;
      margin: 10px auto;
      padding: 0px 30px 30px 30px;
      border-radius: 5px;
      background: #fff;
      box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
    }

    .wrapper header {
      font-size: 30px;
      font-weight: 600;
      padding-bottom: 20px;
      padding-top: 10px;
    }

    .wrapper nav {
      position: relative;
      width: 100%;
      height: 50px;
      display: flex;
      align-items: center;
    }

    .wrapper nav label {
      display: block;
      height: 100%;
      width: 100%;
      text-align: center;
      line-height: 50px;
      cursor: pointer;
      position: relative;
      z-index: 1;
      color: #00b1ae;
      font-size: 17px;
      border-radius: 5px;
      margin: 0 5px;
      transition: all 0.3s ease;
      font-weight: bold;
    }

    #bachelor:checked~nav label.bachelor,
    #master:checked~nav label.master {
      color: #fff;
    }

    #bachelor:not(:checked)~nav label.bachelor,
    #master:not(:checked)~nav label.master {
      background: rgba(23, 162, 184, 0.3);
    }

    nav label i {
      padding-right: 7px;
    }

    nav .slider {
      position: absolute;
      height: 100%;
      width: 50%;
      left: 0;
      bottom: 0;
      z-index: 0;
      border-radius: 5px;
      background: #00b1ae;
      transition: all 0.3s ease;
    }

    input[type="radio"] {
      display: none;
    }

    #master:checked~nav .slider {
      left: 50%;
    }

    section .content {
      display: none;
      background: #fff;
      padding-top: 15px;
    }

    #bachelor:checked~section .content-1,
    #master:checked~section .content-2 {
      display: block;
    }

    section .content p {
      text-align: justify;
    }

    section label {
      font-weight: 600;
    }

    .logo img {
      margin-top: 10px;
      max-width: 100px;
      max-height: 50px;
      float: right;
    }

    .select {
      padding: 8px 12px;
      color: #333333;
      background-color: #eeeeee;
      border: 2px solid #dddddd;
      cursor: pointer;
      border-radius: 5px;
      width: calc(100% - 20px);
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="50"><polygon points="0,0 100,0 50,50" style="fill:%23666666;"/></svg>');
      background-position: right 10px top 50%;
      background-repeat: no-repeat;
      background-size: 10px;
      padding-right: 30px;
      font-family: Poppins;
      font-weight: 600;
    }

    .select option {
      background: #ffffff;
      font-family: Poppins;
      font-weight: bold;
    }

    .select:focus,
    .select:hover {
      outline: none;
      border: 2px solid #00b1ae;
    }

    .title {
      padding-bottom: 10px;
    }

    .submit {
      padding: 5px 15px;
      background: linear-gradient(90deg, #00b1ae, #28d1ce);
      color: #fff;
      border: 0 none;
      cursor: pointer;
      -webkit-border-radius: 5px;
      border-radius: 5px;
    }

    .star {
      color: red;
    }
  </style>

  <div class="wrapper">
    <div class="logo">
      <img src="wbu.png" alt="" />
    </div>
    <header>Program Selection</header>
    <input type="radio" name="slider" checked id="bachelor" />
    <input type="radio" name="slider" id="master" />
    <nav>
      <label for="bachelor" class="bachelor"><i class="bachelor"></i>Bachelor</label>
      <label for="master" class="master"><i class="master"></i>Master</label>
      <div class="slider"></div>
    </nav>
    <section>
      <div class="content content-1">
        <form action="studentForm.php" method="post">
          <label for="programs" class="title">Undergraduate Programs:<span class="star"> *</span></label>
          <div>
            <select name="program" id="program" class="select" required>
              <option value="" disabled selected>
                Choose your primary program
              </option>
              <option value="Bachelor in Nursing">
                Bachelor in Nursing (3 years)
              </option>
              <option value="Bachelor in Imaging and Radiology">
                Bachelor in Imaging and Radiology (3 years)
              </option>
              <option value="Bachelor in Midwifery">
                Bachelor in Midwifery (3 years)
              </option>
              <option value="Bachelor in Physiotherapy">
                Bachelor in Physiotherapy (3 years)
              </option>
              <option value="Bachelor in Medical Laboratory Sciences">
                Bachelor in Medical Laboratory Sciences (3 years)
              </option>
              <option value="Bachelor in Health Care Management">
                Bachelor in Health Care Management (3 years)
              </option>
              <option value="Bachelor in Biotechnology">
                Bachelor in Biotechnology (3 years)
              </option>
              <option value="Bachelor in Medical Sciences and Technology">
                Bachelor in Medical Sciences and Technology (3 years)
              </option>
              <option value="Bachelor in Computer Sciences and Artificial Intelligence">
                Bachelor in Computer Sciences and Artificial Intelligence (3
                years)
              </option>
              <option value="Integrated Second Cycle Study Program, Master of Science in Dentistry">
                Integrated Second Cycle Study Program, Master of Science in
                Dentistry (5 years)
              </option>
            </select>
            <br /><br />
          </div>
          <label for="programs" class="title">Secondary Choice Programs (optional):</label>
          <div>
            <select name="secondary_program" id="program" class="select">
              <option value="" disabled selected>
                Choose your secondary program
              </option>
              <option value="Bachelor in Nursing">
                Bachelor in Nursing (3 years)
              </option>
              <option value="Bachelor in Imaging and Radiology">
                Bachelor in Imaging and Radiology (3 years)
              </option>
              <option value="Bachelor in Midwifery">
                Bachelor in Midwifery (3 years)
              </option>
              <option value="Bachelor in Physiotherapy">
                Bachelor in Physiotherapy (3 years)
              </option>
              <option value="Bachelor in Medical Laboratory Sciences">
                Bachelor in Medical Laboratory Sciences (3 years)
              </option>
              <option value="Bachelor in Health Care Management">
                Bachelor in Health Care Management (3 years)
              </option>
              <option value="Bachelor in Biotechnology">
                Bachelor in Biotechnology (3 years)
              </option>
              <option value="Bachelor in Medical Sciences and Technology">
                Bachelor in Medical Sciences and Technology (3 years)
              </option>
              <option value="Bachelor in Computer Sciences and Artificial Intelligence">
                Bachelor in Computer Sciences and Artificial Intelligence (3
                years)
              </option>
              <option value="Integrated Second Cycle Study Program, Master of Science in Dentistry">
                Integrated Second Cycle Study Program, Master of Science in
                Dentistry (5 years)
              </option>
            </select>
            <br /><br />
          </div>
          <label for="year">Academic Year:</label>
          <div>
            <select name="year" id="year" class="select" required>
              <option value="2021 - 2022">2021 - 2022</option>
              <option value="2022 - 2023" selected>2022 - 2023</option>
              <option value="2023 - 2024">2023 - 2024</option>
            </select>
            <br /><br />
          </div>
          <input class="submit" type="submit" value="Next" name="undergraduate" />
          <button class="submit" name="admin" onclick="window.location.href = 'password.php';">
            Admin
          </button>
        </form>
      </div>
      <div class="content content-2">
        <form action="studentForm.php" method="post">
          <label for="programs" class="title">Master Programs:<span class="star"> *</span></label>
          <div>
            <select name="program" id="program" class="select" required>
              <option value="" disabled selected>
                Choose your primary program
              </option>
              <option value="Master of Science in Nursing">
                Master of Science in Nursing (2 years)
              </option>
              <option value="Master of Science in Hospital Management">
                Master of Science in Hospital Management (2 years)
              </option>
            </select>
            <br /><br />
          </div>
          <label for="programs" class="title">Secondary Choice Programs (optional):</label>
          <div>
            <select name="secondary_program" id="program" class="select">
              <option value="" disabled selected>
                Choose your secondary program
              </option>
              <option value="Master of Science in Nursing">
                Master of Science in Nursing (2 years)
              </option>
              <option value="Master of Science in Hospital Management">
                Master of Science in Hospital Management (2 years)
              </option>
            </select>
            <br /><br />
          </div>
          <label for="year">Academic Year:</label>
          <div>
            <select name="year" id="year" class="select" required>
              <option value="2021 - 2022">2021 - 2022</option>
              <option value="2022 - 2023" selected>2022 - 2023</option>
              <option value="2023 - 2024">2023 - 2024</option>
            </select>
            <br /><br />
          </div>
          <input class="submit" type="submit" value="Next" name="master" />
        </form>
      </div>
    </section>
  </div>
</body>

</html>