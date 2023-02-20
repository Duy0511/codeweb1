<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="header">
  <button type="button" class="btn btn-secondary" onclick="window.location.href='index.html'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
  </svg> Quay Lại</button>
</div>
    <form>
      
      <div class="container" style="width:720px">
        <img src="\Login-Signup-form-master\login\Musicpage\img\avatar\avatar-gai-xinh-41.jpg" alt="avatar-gai-xinh-41"  class="avarta">
          <div class="form-row">
            <div class="col-md-4 mb-3">
            <label for="validationServer02">Full Name</label>
            <input type="text" name="fullname" class="form-control is-valid" id="validationServer02" placeholder="Full Name" required>
          </div>
          <div class="col-md-6 mb-3" style="left: 80px;">
            <label for="validationServer03">Email</label>
            <input type="text" name="email" class="form-control is-invalid" id="validationServer03" placeholder="Email" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
              </div>
              <input type="text" name="user" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
            </div>
          </div>
          <div class="col-md-3 mb-3" style="left: 80px;">
            <label for="validationServer04">Password</label>
            <input type="text" name="pass" class="form-control is-invalid" id="validationServer04" placeholder="Password" required>
          </div>
          </div>
          <br>
          <button type="button" name="update" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
          </svg> Cập Nhật</button>
      </div>
          
      </form>
</body>
</html>