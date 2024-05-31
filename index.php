<!DOCTYPE html>
<html lang="en-IN" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PyD Online Python Interpreter</title>
    <meta name="author" content="VaradD">
    <meta name="description" content="Online Python Interpreter: you can write your code and run cheers!">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js" integrity="sha512-GZ1RIgZaSc8rnco/8CXfRdCpDxRCphenIiZ2ztLy3XQfCbQUSCuk8IudvNHxkRA3oUg6q0qejgN/qqyG1duv5Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ext-themelist.min.js" integrity="sha512-5CwAfXQtNsk5OzybMAJ3U14TStTq6jUHJoWxu58KOyioLXO3fX6FPUKaYp/2iF6yZMkv38fvh3nH+Vq94R2BUg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ext-language_tools.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script type="text/javascript" src="compiler.js"></script>
    <link rel="stylesheet" href="css/compiler.css">
  </head>
  <body onload="ready()">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    </div>
	  </div>
	</nav>
    <div class="container">
      <h1 style="font-family:serif">PyD Online Python Interpreter</h1> <!--  -->
      <button title="Upload File" onclick="upload()" class="download-btn"><i class="fas fa-file-upload"></i></button>
      <button title="Download Code" onclick="download()" class="download-btn"><i class="fa fa-download"></i></button>
      <div class="semicontainer">
        <div class="labeltheme">
          <!-- <label for="modes">Language :</label> -->
          <select id="modes" size="1" onchange="changeMode()" style="background:#e8e8e8 url('chevron-down-solid.svg') no-repeat 90% 50%;-webkit-appearance: none;">
	    <option value="ace/mode/python" selected>python3</option>
           </select>
        </div>
        <div class="labeltheme">
          <!-- <label for="theme">Theme :</label> -->
          <select id="theme" size="1" onchange="changeTheme()" style="background:#e8e8e8 url('adjust-solid.svg') no-repeat 90% 50%;-webkit-appearance: none;">
            <option value="ace/theme/cobalt" selected>Cobalt</option>
          </select>
        </div>
          <div id="editor"></div>
      </div>
        <button id="submit" class="button button1" type="button" name="Run" onclick="HTML()">Run Code</button>
        <input id="check" onchange="check(this)" type="checkbox" value="check">
        <label for="check" style="font-size:16px">Test input</label>
        <br/>
        <textarea id="input" name="input" rows="6" cols="20"></textarea>
        <br/>
        <pre id="process"></pre>
        <pre id="output"></pre>
    </div>
  </body>
</html>
