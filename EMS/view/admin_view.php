<link rel="stylesheet" href="<?=getUrl()?>/public/css/admin.css">
<title>EMS</title>
</head>
<body>
    <div id="header">
    <center>
     <img src="view\img\admin.png" alt="adminLogo" id="adminLogo"><br>
     <h4>Welcome to Admin Panel</h4>
    </center>
    </div>
    <div id="sidebar">
      <ul>
          <li><a href="<?=getUrl().'/Addemployee'?>">Add Employee</a></li>
          <li><a href="<?=getUrl()?>">Delete Employee</a></li>
          <li><a href="<?=getUrl()?>">Update Employee</a></li>
          <li><a href="<?=getUrl().'/Send_link'?>">Send Link</a></li>
          <li><a href="<?=getUrl()?>">Log Out</a></li>
      </ul>
    </div>
    <div id="data">
   </div>
</body>
</html>