<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>FORM</title>

    <style>
        form {
            margin-left: auto;
            margin-right: auto;
            border: 5px solid black;
            background-color: rgb(79, 167, 167);
            background-attachment: fixed;
            width: 60%;
        }
        
        h1 {
            font-family: 'Times New Roman', Times, serif;
            font-style: oblique;
            font-weight: bolder;
            padding-bottom: 40px;
            color: rgb(44, 5, 26);
            font-size: xx-large;
            text-align: center;
        }
        
        label {
            font-style: normal;
            font-size: large;
            font-weight: 200px;
            color: black;
        }
    </style>
</head>

<body style="background-color: rgb(220, 231, 202);">

    <h1> Form</h1>


    <form action=" " class="needs-validation">

        <div class="container">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" autofocus required>
                <div class="valid-feedback">go to the next field</div>
                <div class="Invalid-feedback">please fill this field!</div>
            </div>

            <div class="form-group">
                <label for="mname">Middle Name</label>
                <input type="text" id="mname" value="mname" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" value="Lname" class="form-control" disabled>
            </div>

            <div class="form-group">
                <label for="dob">DOB</label>
                <input type="date" id="dob" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="abc@gmail.com" class="form-control">
            </div>

            <div class="form-group">
                <label for="pswd">Password</label>
                <input type="password" id="pwd" name="password" class="form-control">
            </div>

            <label>Gender</label>
            <div class="form-group form-check-inline">
                <label for="gen" class="form-check-label">
            <input type="radio" name="gender" class="form-check-input">Male</label>
            </div>

            <div class="form-group form-check-inline">
                <label for="gen" class="form-check-label">
            <input type="radio" name="gender" class="form-check-input">Female</label>
            </div><br>


            <label>Select Your Qualification</label>
            <div class="form-group form-check">
                <label class="form-check-label"></label>
                <input type="checkbox" class="form-check-input">BE
            </div>
            <div class=" form-group form-check">
                <label class="form-check-label"></label>
                <input type="checkbox" class="form-check-input">BCA
            </div>
            <div class=" form-group form-check">
                <label class="form-check-label"></label>
                <input type="checkbox" class="form-check-input">MCA
            </div>

            <div class="form-group">
                <label>Select Your College</label>
                <select id=" clg " name="college" class="form-control">
                    <option> select option </option>
                    <option> kcsam </option>
                    <option> ck </option>
                    <option> joseph </option>
                </select>
            </div>

            <div class="form-group">
                <label for="Exp">Experience</label>
                <input type="number" id="expr" name="experience" min="1" max="5" class="form-control">
            </div>

            <div class="form-group">
                <label for=" ">Upload Your Resume</label><br>
                <input type="file" id="file" accept="application/pdf">
            </div>

            <div class="form-group">
                <label for=" ">Phone No</label>
                <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control">
            </div>

            <div class="form-group">
                <label for="range">Range</label>
                <input type="range" id="rng">
            </div>

            <div class="form-group">
                <label for="favcolor">Select your favorite color:</label>
                <input type="color" id="favcolor">
            </div>
            <div class="form-group">
                <label for="search">Search</label>
                <input type="search" id="search" name="search">
            </div>

            <div class="form-group">
                <label for="url">Add your url page</label>
                <input type="url" id="url" name="url">
            </div>

            <div class="form-group">
                <label for="hid">hidden</label>
                <input type="hidden" id="hid" name="hidden">
            </div>

            <div class="form-group">
                <label>any feedback</label>
                <textarea cols="12" rows="4"></textarea>
                <input type="image" src="abc.jpg" alt="submit" width="50" height="50">
            </div>

            <div class="form-group">
                <input type="submit" values="submit" class="btn btn-primary">
                <input type="reset" values="reset" class="btn btn-warning">
            </div>
        </div>


    </form>


</body>

</html>