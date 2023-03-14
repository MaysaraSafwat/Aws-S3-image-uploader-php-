<!DOCTYPE html>
<html>
    <head>
        <style>
          body{
            background-color : whitesmoke;
             display: flex;
            align-items : center;
            justify-content : center;
            margin: auto;
          }

          form {
            width : 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
            margin-top: 5%;
             padding: 5%;
             background-color: white;
             border-radius: 20px;
             box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
             text-align: center;
            }
          form h1{
            color: #4BB543;
          }
          form input:last-of-type {
            margin: 3%;
            padding: 2%;
            background-color: transparent;
            border: 2px solid #4BB543;
            border-radius: 50px;
            width: 50%;
          }
    

        </style>
    </head>
<body>

<form action="index.php" method="post" enctype="multipart/form-data">
  <h1> Select image to upload:</h1>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>