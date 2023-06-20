<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
    <style>
      .sidebar {
    margin: 20;
    margin-top: -6px;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
  }
  
  /* Sidebar links */
  .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
  }
  
  /* Active/current link */
  .sidebar a.active {
    background-color: #04AA6D;
    color: white;
  }
  
  /* Links on mouse-over */
  .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
  }
  
  /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
  div.content {
    margin-top: 63px;
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }
  
  /* On screens that are less than 700px wide, make the sidebar into a topbar */
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }
  
  /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }
  .navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}
    </style>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
  </div>
</nav>
<div class="sidebar">
  <a class="active" href="index.php">Jobs</a>
  <a href="jobs.php">Candidates Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>


<div class="content">

<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Comapany Name</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Software Developer</td>
      <td>10LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Google</td>
      <td>Cloud Computing</td>
      <td>20LPA</td>
    </tr>
    
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
