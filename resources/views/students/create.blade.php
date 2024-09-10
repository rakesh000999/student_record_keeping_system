<!doctype html>
<html lang="en">

<head>
    <title>Add Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container my-3 py-3">
        <h1 class="text-center"><u class="text-success">Student Registration Form</u></h1>
        <form action="" method="post">
            @csrf
            <div class="form-group my-3">
                <h3 class="bg-info p-2 ">Student Information</h3>
                <div class="form-group">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                </div>
                <div class="form-group my-2">
                    <label for="gender" class="form-label">Gender</label>

                    <div class="custom-control custom-radio ">
                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="">
                        <label class="" for="customRadioInline1">Male</label>
                    </div>
                    <div class="custom-control custom-radio ">
                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="">
                        <label class="" for="customRadioInline2">Female</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadioInline3" name="customRadioInline1" class="">
                        <label class="" for="customRadioInline3">Other</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone </label>
                    <input type="number" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group mt-3">
                    <label for="" class="form-label">Faculty</label>
                    <select name="" id="" class="custom-select">
                        <option value="">Select a faculty</option>
                        <option value="BCA">BCA</option>
                        <option value="CSIT">CSIT</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <h3 class="bg-info p-2">Parent / Guardian Information</h1>
                    <div class="form-group">
                        <label for="nameParent" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nameParent" name="nameParent">
                    </div>
                    <div class="form-group">
                        <label for="relationship" class="form-label">Relationship to Student</label>
                        <input type="text" class="form-control" id="relationship" name="relationship">
                    </div>
                    <div class="form-group">
                        <label for="phoneParent" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phoneParent" name="phoneParent">
                    </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
