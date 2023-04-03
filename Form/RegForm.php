<html>

<head>
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .al {
            position: relative;
            width: 400px;
            margin: auto;
            margin-top: 10em;
            padding: 35px;
            /* border: 1px solid red; */
            font-family: cursive;

        }
    </style>
</head>

<body>
    <!-- <form class="needs-validation" novalidate>
        <div class="al mb-2">
            <div class="form-floating">
                <input type="email" id="mail" placeholder="Enter Mail" name="mail" class="form-control" required>
                <label class="form-label" for="mail">E-mail</label>

                <div class="valid-feedback">Mail OK</div>
                <div class="invalid-feedback">Enter correct mail</div>
            </div>
            <div class="form-floating mb-2 mt-2">
                <input type="password" id="pass" placeholder="Enter Mail" class="form-control">
                <label class="form-label" for="pass">Password</label>
            </div>
            <div class="mt-2 mb-2">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </div>
    </form> -->

    <form class="row g-3 needs-validated" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

    <!-- <p class="text-bg-success">Lorem ipsum dolor sit ameue.</p>
    <div class="row" style="background-color:red">
        <div class="col-md-8">A</div>
        <div class="col">A</div>
        <div class="col">A</div>
    </div>
    <div>
        <table class="table table-dark">
            <tr>
                <td>acb</td>
                <td>acb</td>
            </tr>
            <tr>

                <td>acb</td>
                <td>acb</td>
            </tr>
            <tr>
                <td>acb</td>
            </tr>
        </table>
        <div class="alert alert-info alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"> </button>
            THiddd
        </div>
    </div>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> This alert box could indicate a successful or positive action.
    </div>
    <div class="d-grid">
        <a href="https://google.com" class="btn btn-outline-warning btn-lg">ABCCC
            <span class="spinner-border"></span>
        </a>
    </div>
    <br><br>
    <div class="progress">
        <div class="progress-bar bg-success progress-bar-striped" style="width:70%">70</div>
    </div>
    <ul class="pagination pagination-lg">
        <li class="page-item"><a href="#" class="page-link">IC</a></li>
        <li class="page-item"><a href="#" class="page-link">IC</a></li>
    </ul>
    <button data-bs-toggle="collapse" data-bs-target="#demo">Collapsible</button>
    <div id="demo" class="collapse">
        THISSS
    </div>

    <nav class="navbar navbar-expand">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">A</li>
                <li class="nav-item">A</li>
            </ul>
        </div>
    </nav>
    <br><br>
    <for>
        <div class="row">
            <div class="col">
                <label class="form-label" for="mail">E-Mail</label>
                <input type="email" class="form-control">
            </div>
            <div class="col">
                <label>TEXTAREA</label>
                <textarea class="form-control form-control-sm"></textarea>
            </div>
        </div> -->



</body>

</html>