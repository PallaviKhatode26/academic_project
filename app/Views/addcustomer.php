<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Add User With Validation Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/submitcust-form') ?>">
      <div class="form-group">
        <label> enter customer Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label> Enter address</label>
        <input type="text" name="address" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Phone no</label>
        <input type="text" name="phone_no" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Add Customer</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
            customername: {
            required: true,
          },
          address: {
            required: true,
            maxlength: 60,
           
          },
          email: {
            required: true,
            maxlength: 60,
           
          },
          phoneno:{
            required: true,
          }
        },
        messages: {
            customername: {
            required: "Name is required.",
          },
          address: {
            required: "address is required.",
            
            maxlength: "The email should be or equal to 60 chars.",
          },
          phoneno:{
            required: "mobile number is required.",
          }
        },
      })
    }
  </script>
</body>
</html>
